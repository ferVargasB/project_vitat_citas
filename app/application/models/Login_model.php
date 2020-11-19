<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function seek_user($mail)
	{
		$this->db->select('id_user,mail,password');
		$this->db->from('users');
		$this->db->where('mail', $mail);
		$query = $this->db->get();
		return $query->result();
	}
}
