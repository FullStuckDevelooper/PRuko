<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{



	public function  __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	
	}


	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');


		if ($this->form_validation->run() == null) {
			$data['title'] = "Seko - Sewa Ruko";
			$this->load->view('template/header', $data);
			$this->load->view('auth/login');
			$this->load->view('template/footer');
		} else {
			$this->_login();
			
			
		}
	}

	private function _login()
	{

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user', ['username' => $username,'password'=>$password])->row_array();
			
		if($user){
			

			$data =[
				'id'=>$user['id'],
				'nama'=> $user['nama'],
				'role_id'=>$user['role_id'],
			];
			
			$this->session->set_userdata($data);
			
			
			
			if($user['role_id']=='1'){

				redirect('user');
			}elseif( $user['role_id'] == '2'){
				redirect( 'user/daftarRuangUser');
			}else{
				redirect('auth');
			}

			
			

		}else{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password salah !</div>');
			redirect('auth');
			
		}
	
	
	}

	
	



}