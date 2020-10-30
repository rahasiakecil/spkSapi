<?php
defined('BASEPATH') or exit('No direct script allowed');

	class Mdl_userlogin extends CI_Model	{

		public function check_login($username,$password){

			$password_md5=md5($password);
			$query = "SELECT * FROM tb_user WHERE username ='$username' AND password='$password_md5'";
			$result = $this->db->query($query);
			
			if($result->num_rows() == 1)	{

				return $result->row(0)->id_user;
				
			}else{
				
				return FALSE;
			}
		}

	
		public function user_info($id_users)	{

			$this->db->select('*');
			$this->db->from('tb_user');
			$this->db->where('tb_user.id_user', $id_users);

			$result = $this->db->get();
			$user = $result->row_array();

			return $user_data = array(
								'id_user'	=> $user['id_user'],
								'username' 	=> $user['username'],
								);
		}
		
	}