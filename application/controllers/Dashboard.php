<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __Construct()	{	

		parent::__construct();

	}

	public function index(){
		if($this->session->userdata('login')){

				$header_data['a_dashboard'] = 'class="active"';

				$this->load->view('admin/header', $header_data);
				$this->load->view('admin/dashboard');
				$this->load->view('admin/footer');
		}else{
			redirect('signin');		
		}
	}
}
