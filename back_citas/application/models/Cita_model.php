<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cita_model extends CI_Model {

	public function get_citas_dia($fecha_solicitada)
	{
		$this->db->select('*');
		$this->db->from('citas');
		$this->db->where('fecha_cita', $fecha_solicitada);
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_cita($cita_data)
	{	
		$this->db->insert('citas', $cita_data);
	}
}
