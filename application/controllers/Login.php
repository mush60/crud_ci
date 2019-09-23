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
			$role = $this->M_users->getUserrole($data);

			$data_session = array(
				'email' => $data['email'],
				'role' => $role,
				'username' => $username,
				'user_status' => 'online'
			);
			
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('login', 'Success');

			$this->directPath($role);

		} else {
			$this->session->set_flashdata('login', 'fail');
			redirect(Login);
		}

	}

	public function directPath($userRole) 
	{
		if($userRole == 0) {
			redirect('dashboard','refresh');
		}
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */