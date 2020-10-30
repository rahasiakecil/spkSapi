<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Mdl_spk extends CI_Model{


		function get_user(){
			
			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->order_by('username','asc');
			$query = $this->db->get();
			return $query->result();
			
		}

	
		function get_klasifikasi_all(){
			
			$this->db->select('*');
			$this->db->from('tb_k1');
			$this->db->where('is_trash','1');
			$this->db->order_by('id','asc');
			$query = $this->db->get();
			return $query;
			
		}

		function get_klasifikasi($klasifikasi){
			
			$this->db->select('*');
			$this->db->from('tb_k1');
			$this->db->where('klasifikasi', $klasifikasi);
			$this->db->where('is_trash','1');
			$this->db->order_by('id','asc');
			$query = $this->db->get();
			return $query;
			
		}

		function insert_data_uji(){	

			$config = array(
							'nama_pemilik' => 'Jeri',
							
							'tinggi_badan' 				=> $this->input->post('tinggi_badan'),
							'lebar_dada' 				=> $this->input->post('lebar_dada'),
							'kedalam_tubuh' 			=> $this->input->post('kedalam_tubuh'),
							'angularity' 				=> $this->input->post('angularity'),
							'sudut_pinggul' 			=> $this->input->post('sudut_pinggul'),
							'lebar_pinggul' 			=> $this->input->post('lebar_pinggul'),
							'kaki_belakang' 			=> $this->input->post('kaki_belakang'),
							'bentuk_kaki' 				=> $this->input->post('bentuk_kaki'),
							'sudut_kuku' 				=> $this->input->post('sudut_kuku'),
							'pertautan_ambing' 			=> $this->input->post('pertautan_ambing'),
							'letak_puting_depan' 		=> $this->input->post('letak_puting_depan'),
							'panjang_puting' 			=> $this->input->post('panjang_puting'),
							'kedalaman_ambing' 			=> $this->input->post('kedalaman_ambing'),
							'tinggi_ambing_belakang' 	=> $this->input->post('tinggi_ambing_belakang'),
							'ligamentum_tengah' 		=> $this->input->post('ligamentum_tengah'),
							'posisi_puting_belakang' 	=> $this->input->post('posisi_puting_belakang'),
							'klasifikasi' 				=> $this->input->post('klasifikasi'),
							'is_trash'					=> '1'


							);
			return $this->db->insert('tb_k1',$config);
		}

		function update_data_uji(){	

			$config = array(
							'nama_pemilik' => 'Jeri',
							
							'tinggi_badan' 				=> $this->input->post('tinggi_badan'),
							'lebar_dada' 				=> $this->input->post('lebar_dada'),
							'kedalam_tubuh' 			=> $this->input->post('kedalam_tubuh'),
							'angularity' 				=> $this->input->post('angularity'),
							'sudut_pinggul' 			=> $this->input->post('sudut_pinggul'),
							'lebar_pinggul' 			=> $this->input->post('lebar_pinggul'),
							'kaki_belakang' 			=> $this->input->post('kaki_belakang'),
							'bentuk_kaki' 				=> $this->input->post('bentuk_kaki'),
							'sudut_kuku' 				=> $this->input->post('sudut_kuku'),
							'pertautan_ambing' 			=> $this->input->post('pertautan_ambing'),
							'letak_puting_depan' 		=> $this->input->post('letak_puting_depan'),
							'panjang_puting' 			=> $this->input->post('panjang_puting'),
							'kedalaman_ambing' 			=> $this->input->post('kedalaman_ambing'),
							'tinggi_ambing_belakang' 	=> $this->input->post('tinggi_ambing_belakang'),
							'ligamentum_tengah' 		=> $this->input->post('ligamentum_tengah'),
							'posisi_puting_belakang' 	=> $this->input->post('posisi_puting_belakang'),
							'klasifikasi' 				=> $this->input->post('klasifikasi'),


							);
			return $this->db->update('tb_k1',$config,array('id' => $this->input->post('id')));
		}

		function delete_data_uji($id){	

			$config = array(
							'is_trash'					=> '0'
							);
			return $this->db->update('tb_k1',$config,array('id' => $id));
		}

		function insert_user(){	

			$config = array(
							
							'username' 				=> trim($this->input->post('username')),
							'password' 				=> md5($this->input->post('password')),
							
							);
			return $this->db->insert('tb_user',$config);
		}

		function update_user(){	

			$config = array(
							
							'username' 				=> trim($this->input->post('username')),
							'password' 				=> md5($this->input->post('password')),
							'nama' 					=> ucwords($this->input->post('nama')),
							'alamat' 				=> ucwords($this->input->post('alamat')),
							
							);
			return $this->db->update('tb_user',$config, array('id_user'=>$this->input->post('id')));
		}


		function insert_nama(){	

			$config = array(
							
							'nama' 				=>$this->input->post('nama'), //nama field & nama di form
							
							);
			return $this->db->insert('tb_percobaan',$config); //nama tabel
		}
		

			
	}
?>