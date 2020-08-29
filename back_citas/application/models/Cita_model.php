<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cita_model extends CI_Model {

	public function get_citas_dia($fecha_solicitada, $id_tramite)
	{
		$this->db->select('*');
		$this->db->from('citas');
		$this->db->where('fecha_cita', $fecha_solicitada);
		$this->db->where('id_tramite_solicitado', intval($id_tramite));
		$query = $this->db->get();
		return $query->result();
	}

	public function insert_cita($cita_data)
	{	
		$this->db->insert('citas', $cita_data);
	}
	public function get_citas_by_administrador()
	{
		$this->db->select('*');
		$this->db->from('citas'); 
		$this->db-> order_by ( 'id_cita' ,  'DESC' );
		$this->db->limit(100); 
		$query = $this->db->get();
	    return $query->result();

	}

	public function get_cita_by_id($id)
	{
		$this->db->select('id_cita');
		$this->db->from('citas');
		$this->db-> order_by ( 'id_cita' ,  'DESC' );
		$query = $this->db->get();
	    return $query->result();
	}
}
