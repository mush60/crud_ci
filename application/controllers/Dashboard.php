<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//Do your magic here
	}

	public function index()
	{
		$this->load->model('M_snavigation');
		$smenu = $this->M_snavigation->getAll();

		$sdata = array(
			'smenu' => $smenu
		);
		$this->load->view('dashboard',$sdata);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */