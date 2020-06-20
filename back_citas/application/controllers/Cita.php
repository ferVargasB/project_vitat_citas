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

	public function get_citas_dia($fecha_solicitada)
	{
		$citas = $this->Cita_model->get_citas_dia($fecha_solicitada);
		echo json_encode($citas);
	}
}