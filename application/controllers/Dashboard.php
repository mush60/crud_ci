<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('user_status') != 'online'){
			$this->session->sess_destroy();
			redirect('login','refresh');
		}

		//Do your magic here
	}

	public function index()
	{
		$this->load->view('dashboard');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */