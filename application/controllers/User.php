<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __Construct()	{	

		parent::__construct();
			$this->load->model('Mdl_spk', 'm_spk');

	}

	public function index(){
		
		$header_data['a_home'] = "class='active'";
		$this->load->view('user/header', $header_data);
		$this->load->view('user/dashboard');
		$this->load->view('user/footer');

	}

	public function proses(){
		
		$header_data['a_proses'] = "class='active'";

		if($this->uri->segment(3) != null){
			$body_data['nama'] 						= $this->input->get('nama');
			$body_data['tinggi_badan'] 				= $this->input->get('tinggi_badan');
			$body_data['lebar_dada'] 				= $this->input->get('lebar_dada');
			$body_data['kedalam_tubuh'] 			= $this->input->get('kedalam_tubuh');
			$body_data['angularity'] 				= $this->input->get('angularity');
			$body_data['sudut_pinggul']				= $this->input->get('sudut_pinggul');
			$body_data['lebar_pinggul'] 			= $this->input->get('lebar_pinggul');
			$body_data['kaki_belakang'] 			= $this->input->get('kaki_belakang');
			$body_data['bentuk_kaki'] 				= $this->input->get('bentuk_kaki');
			$body_data['sudut_kuku'] 				= $this->input->get('sudut_kuku');
			$body_data['pertautan_ambing'] 			= $this->input->get('pertautan_ambing');
			$body_data['letak_puting_depan'] 		= $this->input->get('letak_puting_depan');
			$body_data['panjang_puting'] 			= $this->input->get('panjang_puting');
			$body_data['kedalaman_ambing'] 			= $this->input->get('kedalaman_ambing');
			$body_data['tinggi_ambing_belakang'] 	= $this->input->get('tinggi_ambing_belakang');
			$body_data['ligamentum_tengah'] 		= $this->input->get('ligamentum_tengah');
			$body_data['posisi_puting_belakang'] 	= $this->input->get('posisi_puting_belakang');

			$body_data['data'] = array(
				'tinggi_badan' 							=> $this->input->get('tinggi_badan'),
				'lebar_dada' 							=> $this->input->get('lebar_dada'),
				'kedalam_tubuh' 						=> $this->input->get('kedalam_tubuh'),
				'angularity'							=> $this->input->get('angularity'),
				'sudut_pinggul'							=> $this->input->get('sudut_pinggul'),
				'lebar_pinggul' 						=> $this->input->get('lebar_pinggul'),
				'kaki_belakang' 						=> $this->input->get('kaki_belakang'),
				'bentuk_kaki' 							=> $this->input->get('bentuk_kaki'),
				'sudut_kuku' 							=> $this->input->get('sudut_kuku'),
				'pertautan_ambing' 						=> $this->input->get('pertautan_ambing'),
				'letak_puting_depan' 					=> $this->input->get('letak_puting_depan'),
				'panjang_puting' 						=> $this->input->get('panjang_puting'),
				'kedalaman_ambing' 						=> $this->input->get('kedalaman_ambing'),
				'tinggi_ambing_belakang' 				=> $this->input->get('tinggi_ambing_belakang'),
				'ligamentum_tengah' 					=> $this->input->get('ligamentum_tengah'),
				'posisi_puting_belakang' 				=> $this->input->get('posisi_puting_belakang'),
			);

			$body_data['list_klasifikasi'] 			= $this->m_spk->get_klasifikasi_all();
		}

		$body_data['validasi'] = 0;

		$this->load->view('user/header', $header_data);
		$this->load->view('user/proses', $body_data);
		$this->load->view('user/footer');

	}

	public function proses_4(){
		
		$header_data['a_proses_4'] = "class='active'";

		if($this->uri->segment(3) != null){
			$body_data['nama'] 						= $this->input->get('nama');
			$body_data['tinggi_badan'] 				= $this->input->get('tinggi_badan');
			$body_data['lebar_dada'] 				= $this->input->get('lebar_dada');
			$body_data['kedalam_tubuh'] 			= $this->input->get('kedalam_tubuh');
			$body_data['angularity'] 				= $this->input->get('angularity');
			$body_data['sudut_pinggul']				= $this->input->get('sudut_pinggul');
			$body_data['lebar_pinggul'] 			= $this->input->get('lebar_pinggul');
			$body_data['kaki_belakang'] 			= $this->input->get('kaki_belakang');
			$body_data['bentuk_kaki'] 				= $this->input->get('bentuk_kaki');
			$body_data['sudut_kuku'] 				= $this->input->get('sudut_kuku');
			$body_data['pertautan_ambing'] 			= $this->input->get('pertautan_ambing');
			$body_data['letak_puting_depan'] 		= $this->input->get('letak_puting_depan');
			$body_data['panjang_puting'] 			= $this->input->get('panjang_puting');
			$body_data['kedalaman_ambing'] 			= $this->input->get('kedalaman_ambing');
			$body_data['tinggi_ambing_belakang'] 	= $this->input->get('tinggi_ambing_belakang');
			$body_data['ligamentum_tengah'] 		= $this->input->get('ligamentum_tengah');
			$body_data['posisi_puting_belakang'] 	= $this->input->get('posisi_puting_belakang');

			$body_data['data'] = array(
				'tinggi_badan' 							=> $this->input->get('tinggi_badan'),
				'lebar_dada' 							=> $this->input->get('lebar_dada'),
				'kedalam_tubuh' 						=> $this->input->get('kedalam_tubuh'),
				'angularity'							=> $this->input->get('angularity'),
				'sudut_pinggul'							=> $this->input->get('sudut_pinggul'),
				'lebar_pinggul' 						=> $this->input->get('lebar_pinggul'),
				'kaki_belakang' 						=> $this->input->get('kaki_belakang'),
				'bentuk_kaki' 							=> $this->input->get('bentuk_kaki'),
				'sudut_kuku' 							=> $this->input->get('sudut_kuku'),
				'pertautan_ambing' 						=> $this->input->get('pertautan_ambing'),
				'letak_puting_depan' 					=> $this->input->get('letak_puting_depan'),
				'panjang_puting' 						=> $this->input->get('panjang_puting'),
				'kedalaman_ambing' 						=> $this->input->get('kedalaman_ambing'),
				'tinggi_ambing_belakang' 				=> $this->input->get('tinggi_ambing_belakang'),
				'ligamentum_tengah' 					=> $this->input->get('ligamentum_tengah'),
				'posisi_puting_belakang' 				=> $this->input->get('posisi_puting_belakang'),
			);

			$body_data['list_klasifikasi'] 			= $this->m_spk->get_klasifikasi_all();
		}

		$body_data['validasi'] = 0;

		$this->load->view('user/header', $header_data);
		$this->load->view('user/proses_4', $body_data);
		$this->load->view('user/footer');

	}
	public function tambah_nama_function(){
			
			$execute = $this->m_spk->insert_nama();
			if($execute){
				$this->session->set_flashdata('success','Data user berhasil di update');
				redirect('user/proses');
			}else{
				echo 'error';
			}
			
			
	}

}
