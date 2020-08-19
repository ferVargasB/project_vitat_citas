<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cita extends CI_Controller {
	private $citas_habiles = array(
		'900' => '9:00',
		'930' => '9:30',
		'1000' => '10:00',
		'1030' => '10:30',
		'1100' => '11:00',
		'1130' => '11:30',
		'1200' => '12:00',
		'1230' => '12:30',
		'1300' => '13:00',
		'1330' => '13:30',
		'1400' => '14:00',
		'1430' => '14:30',
		'1500' => '15:00'
	);
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function get_citas_dia($fecha_solicitada, $id_tramite)
	{
		$respuesta = array(
			'estatus' => 'error',
			'data' => '0'
		);

		$citas_reservadas = $this->Cita_model->get_citas_dia($fecha_solicitada, $id_tramite);

		//Si no hay ninguna cita reservada en el dia
		if ( count($citas_reservadas) == 0 ){
			
			$respuesta['estatus'] = '0';
			$respuesta['data'] = $this->citas_habiles;
			echo json_encode( $respuesta );
		
		//Si todo el día está ocupado
		} elseif ( count($citas_reservadas) == 13 ){
			
			$respuesta['estatus'] = '1';
			echo json_encode( $respuesta );

		} else {
			
			$respuesta['estatus'] = '2';
			$respuesta['data'] = $this->get_citas_disponibles( $citas_reservadas );
			echo json_encode( $respuesta );
		}

		die();
	}

	public function realizar_registro()
	{

		try {
			$cita_data = array(
				'nombre_solicitante' => $this->input->post('Nombre'),
				'apellidos_solicitante' => $this->input->post('apellidos'),
				'fecha_creacion' => date('Y-m-d H-i-s'),
				'fecha_cita' => $this->input->post('fecha_solicitada'),
				'hora_cita' => $this->input->post('hora_solicitada'),
				'clave_hora' => str_replace(':','',$this->input->post('hora_solicitada')),
				'id_tramite_solicitado' => intval($this->input->post('tipo_tramite')),
				'estatus' => 0
			);

			$this->Cita_model->insert_cita($cita_data);
			$response = array(
				'codigo' => '0',
				'mensaje' => 'Su cita ha sido creada con éxito'
				
			);

			echo json_encode($response);
		} catch (Error $e) {
			
		}
	}

	private function get_citas_disponibles($citas_reservadas)
	{
		$citas_ocupadas = null;
		foreach ($citas_reservadas as $cita){
			$citas_ocupadas[ $cita->clave_hora ] = $cita->hora_cita; 
		}

		return array_diff_key($this->citas_habiles, $citas_ocupadas);
	}


}