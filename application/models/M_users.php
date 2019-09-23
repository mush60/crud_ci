<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {

	private $table = "tbl_users";

	public function checkNuser($data) 
	{
		return $this->db->get_where($this->table, $data)->num_rows();
	}

	public function getUsername($data)
	{
		$res = $this->db->get_where($this->table, $data)->first_row();

		return $res->username;
	}

	public function getUserRole($data)
	{
		$res = $this->db->get_where($this->table, $data)->first_row();

		return $res->role;
	}

}

/* End of file M_users.php */
/* Location: ./application/models/M_users.php */