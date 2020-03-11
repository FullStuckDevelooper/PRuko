<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	//admin
	public function index()
	{

		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['query'] = $this->db->get('ruko');
		$data['namauser'] = $this->session->userdata('nama');
		$this->load->view('template/header',$data);
		$this->load->view('user/template/sidebar');
		$this->load->view('user/template/topbar');
		$this->load->view('user/index');
		$this->load->view('user/template/footer');
	}
	//mahasiswa
	public function daftarRuangUser()
	{

		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['namauser'] = $this->session->userdata('nama');
		$data['query'] = $this->db->get('ruko');

		
		

		
		$this->db->select('u.id as uid ,r.id as rid ,s.id as sid , r.tipe as tipe , r.harga as harga , s.status as status ');
		$this->db->from('user as u, ruko as r, sewa as s');
		$this->db->where('u.id', $this->session->userdata('id'));
		$this->db->where('s.user_id=u.id');
		$this->db->where('s.ruko_id = r.id');

		$data['bebas'] = $this->db->get();
		
		$this->load->view('user/peminjaman',$data);
	
	}

	public function daftarRuang()
	{

		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['query'] = $this->db->get('Ruangan');
		$data['namauser'] = $this->session->userdata('nama');
		$this->load->view('template/header', $data);
		$this->load->view('user/template/sidebar');
		$this->load->view('user/template/topbar');
		$this->load->view('user/daftarRuangAdmin');
		$this->load->view('user/template/footer');
	}
	//mahasiswa
	public function pinjam_ruangan(){
		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['query'] = $this->db->get('Ruangan');
		$data['namauser'] = $this->session->userdata('nama');
		$this->load->view('template/header',$data);
		$this->load->view('user/template/sidebarUser');
		$this->load->view('user/template/topbar');
		$this->load->view('user/pinjam_ruangan');
		$this->load->view('user/template/footer');
	}
	//admin
	public function histori()
	{
		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['namauser'] = $this->session->userdata('nama');


		$data['query']=$this->db->query( 'SELECT user.nama as nama, ruko.tipe as tipe, sewa.status as status , sewa.id as id
		  FROM (user,ruko,sewa) WHERE sewa.user_id = user.id and sewa.ruko_id = ruko.id');
		



		$this->load->view('template/header', $data);
		$this->load->view('user/template/sidebar');
		$this->load->view('user/template/topbar');
		$this->load->view('user/histori');
		$this->load->view('user/template/footer');
		
	}
	//mahasiswa
	public function histori_user()
	{
		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['namauser'] = $this->session->userdata('nama');
		$this->db->select('r.nama_ruangan as nama, r.kode_ruangan as kode, p.tanggal as tanggal, p.alasan,p.status as status');
		$this->db->from('user as u, ruangan as r, pinjam as p');
		$this->db->where('p.user_id', $this->session->userdata('id'));
		$this->db->where('p.user_id=u.id' );
		$this->db->where('p.ruangan_id = r.id');

		$data['query']= $this->db->get();
		



		$this->load->view('template/header', $data);
		$this->load->view('user/template/sidebarUser');
		$this->load->view('user/template/topbar');
		$this->load->view('user/histori_user');
		$this->load->view('user/template/footer');
	}

	public function tambah_ruangan(){
		$tipe = $this->input->post('tipe');
		$luas = $this->input->post('luas');
		$kamar= $this->input->post('kamar');
		$harga = $this->input->post('harga');
		$photo = $this->input->post('photo');

		$data = array(
			'tipe' => $tipe,
			'luas' => $luas,
			'kamar'=> $kamar,
			'harga'=>$harga,
			'photo'=>$photo,
	
		);

		$this->db->insert('ruko',$data);
		redirect('user');
	}

	public function hapus_ruangan($data){
		$this->db->where('id', $data);
		$this->db->delete('ruko');
		redirect('user');
	}

	public function form_minjam($query){

		
 		$data['query'] = $this->db->get_where('ruko', array('id' => $query));
		$data['user']  = $this->db->get_where('user',['nama'=>$this->session->userdata('nama')])->row_array();
		$data['namauser'] = $this->session->userdata('nama');
		$this->load->view('user/detail',$data);
		
	}
	
	public function pinjam(){
		$user_id	= $this->input->post('user_id');
		$ruko_id = $this->input->post('ruko_id');
		$pembayaran = $this->input->post('pembayaran');
		
		
		
		
		
		

			$data = array(
				'user_id'		=> $user_id,
				'ruko_id' 		=> $ruko_id,
				'pembayaran'	=>$pembayaran,
				'status'		=> "Pending"
			);

			$this->db->insert('sewa', $data);
			redirect('user/daftarRuangUser');
		
		
	}

	

	

	public function tolak($query){

		$this->db->where('id_pinjam', $query);
		$this->db->set('status', 'Ditolak');
		$this->db->update('pinjam');
		redirect('user/histori');
	}
	

	public function terima($query){


		$this->db->where('id', $query);
		$this->db->set('status','Lunas');
		$this->db->update('sewa');
		redirect('user/histori');
	}
	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('role_id');
		$this->session->unset_userdata('NIM');
		$this->session->unset_userdata('Jurusan');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda Telah Logut !</div>');
		redirect('auth');
	}
}
