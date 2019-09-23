<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function auth()
	{
		print_r($_POST);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */