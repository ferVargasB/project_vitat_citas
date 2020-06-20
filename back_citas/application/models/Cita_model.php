<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cita_model extends CI_Model {

	public function get_citas_dia($fecha_solicitada)
	{
		$this->db->select('*');
		$this->db->from('citas');
		$query = $this->db->where('fecha_cita', $fecha_solicitada);
		//$query = $this->db->get('citas')->where('fecha_cita', $fecha_solicitada);  // Produces: SELECT * FROM mytable
		return json_encode($query->result());
	}

}
