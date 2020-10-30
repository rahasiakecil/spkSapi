<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class spk extends CI_Controller {

	public function __Construct()	{	

		parent::__construct();
			$this->load->model('Mdl_spk', 'm_spk');
		

	}

	public function index(){
		if($this->session->userdata('login')){
				redirect('dashboard');		
				
		}else{
			redirect('signin');		
		}
	}

	public function akurasi_data(){
		if($this->session->userdata('login')){

				$body_data['list_klasifikasi'] 			= $this->m_spk->get_klasifikasi_all();

				$header_data['a_akurasi'] = 'class="active"';

				$this->load->view('admin/header', $header_data);
				$this->load->view('admin/akurasi/data', $body_data);
				$this->load->view('admin/footer');
		}else{
			redirect('signin');		
		}
	}

	public function akurasi_data_4(){
		if($this->session->userdata('login')){

				$body_data['list_klasifikasi'] 			= $this->m_spk->get_klasifikasi_all();

				$header_data['a_akurasi_4'] = 'class="active"';

				$this->load->view('admin/header', $header_data);
				$this->load->view('admin/akurasi/data_4a', $body_data);
				$this->load->view('admin/footer');
		}else{
			redirect('signin');		
		}
	}

	public function add_akurasi_data(){
		if($this->session->userdata('login')){

			$header_data['a_akurasi'] = 'class="active"';

			$body_data['link'] = $this->uri->segment(3);

			$body_data['mode'] = ADD;
			$body_data['buttonName'] = "Simpan";
			$body_data['title'] = "Tambah Data Uji";

			$this->load->view('admin/header', $header_data);
			$this->load->view('admin/akurasi/form', $body_data);
			$this->load->view('admin/footer');

		}else{
			redirect('signin');		
		}
	}

	public function add_akurasi_data_function(){
		if($this->session->userdata('login')){
			
			$execute = $this->m_spk->insert_data_uji();
			if($execute){
				$this->session->set_flashdata('success','Data Uji berhasil di tambahkan');
				redirect('spk/'.$this->input->post('link'));
			}else{
				echo 'error';
			}
			
		}else{
			redirect('signin');	
		}	
	}

	public function edit_akurasi_data(){
		if($this->session->userdata('login')){

			$header_data['a_akurasi'] = 'class="active"';

			$id = $this->uri->segment(3);


			$this->db->select('*');
			$this->db->from('tb_k1');
			$this->db->where('id', $id);
			$this->db->limit(1);
			$query = $this->db->get();
			$row = $query->row_array();

			$body_data['id'] 	= $row['id'];
			$body_data['tinggi_badan'] 				= $row['tinggi_badan'];
			$body_data['lebar_dada'] 				= $row['lebar_dada'];
			$body_data['kedalam_tubuh'] 			= $row['kedalam_tubuh'];
			$body_data['angularity'] 				= $row['angularity'];
			$body_data['sudut_pinggul']				= $row['sudut_pinggul'];
			$body_data['lebar_pinggul'] 			= $row['lebar_pinggul'];
			$body_data['kaki_belakang'] 			= $row['kaki_belakang'];
			$body_data['bentuk_kaki'] 				= $row['bentuk_kaki'];
			$body_data['sudut_kuku'] 				= $row['sudut_kuku'];
			$body_data['pertautan_ambing'] 			= $row['pertautan_ambing'];
			$body_data['letak_puting_depan'] 		= $row['letak_puting_depan'];
			$body_data['panjang_puting'] 			= $row['panjang_puting'];
			$body_data['kedalaman_ambing'] 			= $row['kedalaman_ambing'];
			$body_data['tinggi_ambing_belakang'] 	= $row['tinggi_ambing_belakang'];
			$body_data['ligamentum_tengah'] 		= $row['ligamentum_tengah'];
			$body_data['posisi_puting_belakang'] 	= $row['posisi_puting_belakang'];
			$body_data['klasifikasi'] 				= $row['klasifikasi'];
			$body_data['link'] 						= $this->uri->segment(4);


			$body_data['mode'] = EDIT;
			$body_data['buttonName'] = "Update";
			$body_data['title'] = "Update Data Uji";

			$this->load->view('admin/header', $header_data);
			$this->load->view('admin/akurasi/form', $body_data);
			$this->load->view('admin/footer');

		}else{
			redirect('signin');		
		}
	}

	public function edit_akurasi_data_function(){
		if($this->session->userdata('login')){
			
			$execute = $this->m_spk->update_data_uji();
			if($execute){
				$this->session->set_flashdata('success','Data Uji berhasil di update');
				redirect('spk/'.$this->input->post('link'));
			}else{
				echo 'error';
			}
			
		}else{
			redirect('signin');	
		}	
	}

	public function delete_akurasi_data(){
		if($this->session->userdata('login')){
			
			$execute = $this->m_spk->delete_data_uji($this->uri->segment(3));
			if($execute){
				$this->session->set_flashdata('success','Data Uji berhasil di hapus');
				redirect('spk/'.$this->uri->segment(4));
			}else{
				echo 'error';
			}
			
		}else{
			redirect('signin');	
		}	
	}

	public function data_uji(){
		if($this->session->userdata('login')){

				$body_data['list_klasifikasi'] 			= $this->m_spk->get_klasifikasi_all();

				$header_data['a_uji'] = 'class="active"';

				$this->load->view('admin/header', $header_data);
				$this->load->view('admin/data_uji/data', $body_data);
				$this->load->view('admin/footer');
		}else{
			redirect('signin');		
		}
	}

	public function data_user(){
		if($this->session->userdata('login')){

				$body_data['list_user'] 			= $this->m_spk->get_user();

				$header_data['a_user'] = 'class="active"';

				$this->load->view('admin/header', $header_data);
				$this->load->view('admin/user/data', $body_data);
				$this->load->view('admin/footer');
		}else{
			redirect('signin');		
		}
	}

	public function add_user(){
		if($this->session->userdata('login')){

			$body_data['mode'] = ADD;
			$body_data['buttonName'] = "Simpan";
			$body_data['title'] = "Tambah User";

			$this->load->view('admin/user/form', $body_data);


		}else{
			redirect('signin');		
		}
	}

	public function add_user_function(){
		if($this->session->userdata('login')){
			
			$execute = $this->m_spk->insert_user();
			if($execute){
				$this->session->set_flashdata('success','Data user berhasil di tambahkan');
				redirect('spk/data_user');
			}else{
				echo 'error';
			}
			
		}else{
			redirect('signin');	
		}	
	}

	public function edit_user(){
		if($this->session->userdata('login')){

			$id = $this->uri->segment(3);


			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('id_user', $id);
			$this->db->limit(1);
			$query = $this->db->get();
			$row = $query->row_array();

			$body_data['id'] 					= $row['id_user'];
			$body_data['username'] 				= $row['username'];
			$body_data['nama'] 					= $row['nama'];
			$body_data['alamat'] 				= $row['alamat'];
			


			$body_data['mode'] = EDIT;
			$body_data['buttonName'] = "Update";
			$body_data['title'] = "Update Data User";

			$this->load->view('admin/user/form', $body_data);

		}else{
			redirect('signin');		
		}
	}

	public function edit_user_function(){
		if($this->session->userdata('login')){
			
			$execute = $this->m_spk->update_user();
			if($execute){
				$this->session->set_flashdata('success','Data user berhasil di update');
				redirect('spk/data_user');
			}else{
				echo 'error';
			}
			
		}else{
			redirect('signin');	
		}	
	}

	



	

}
