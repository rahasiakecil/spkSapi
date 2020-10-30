<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller {

	public function __Construct()	{	

		parent::__construct();
			$this->load->model('Mdl_userlogin');

	}

	public function index()
	{
		//redirect('dashboard');
		if($this->session->userdata('login')){
			
				redirect('dashboard');
		}else{
			$this->load->view('login');
		}
	}

	public function login()	{
		$this->login_prosses();

	}

	public function login_prosses(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->Mdl_userlogin->check_login($username,$password);
			
			if($user == FALSE){
				$this->session->set_flashdata('login_failed','Username Or Password wrong');
				redirect('signin');
			}else{
				$config = $this->Mdl_userlogin->user_info($user);
				$data_user = array(
									'login' 	=> TRUE, 
									'id_user' 	=> $user,
									'username'	=> $config['username'],
								   );
				$this->session->set_userdata($data_user);
				
				redirect('dashboard');
				
			}	
	}

	public function logout()	{
			
		$this->session->sess_destroy($this->session->userdata('id_user'));	
		redirect('user');
			
	}
}