<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_users');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function auth()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'email' => $email,
			'password' => sha1($password)
		);

		$res = $this->M_users->checkNuser($data);

		if($res>0) {

			$username = $this->M_users->getUsername($data);

			$data_session = array(
				'email' => $data['email'],
				'username' => $username
			);
			
			$this->session->set_userdata($data_session);

		} else {
			$this->session->set_flashdata('login', 'fail');
			redirect(Login);
		}

	}

	public function resSes()
	{
		$this->session->sess_destroy();
		$this->load->view('login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */