<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	//admin
	public function index()
	{

		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['query'] = $this->db->get('Ruangan');

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
		$data['query'] = $this->db->get('Ruangan');

		$this->load->view('template/header', $data);
		$this->load->view('user/template/sidebarUser');
		$this->load->view('user/template/topbar');
		$this->load->view('user/daftarRuang');
		$this->load->view('user/template/footer');
	}

	public function daftarRuang()
	{

		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['query'] = $this->db->get('Ruangan');

		$this->load->view('template/header', $data);
		$this->load->view('user/template/sidebar');
		$this->load->view('user/template/topbar');
		$this->load->view('user/daftarRuang');
		$this->load->view('user/template/footer');
	}
	//mahasiswa
	public function pinjam_ruangan(){
		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['query'] = $this->db->get('Ruangan');
		
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
		


		$data['query']=$this->db->query( 'SELECT user.nama as nama, ruangan.nama_ruangan as ruangan, pinjam.id_pinjam as id ,
		 pinjam.tanggal as tanggal , 
		 pinjam.status as status FROM (user,ruangan,pinjam) WHERE pinjam.user_id = user.id and pinjam.ruangan_id = ruangan.id');
		



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
		$nama_ruangan = $this->input->post('nama_ruangan');
		$kode_ruangan = $this->input->post('kode_ruangan');

		$data = array(
			'nama_ruangan' => $nama_ruangan,
			'kode_ruangan' => $kode_ruangan,
		);

		$this->db->insert('Ruangan',$data);
		redirect('user');
	}

	public function hapus_ruangan($data){
		$this->db->where('id', $data);
		$this->db->delete('Ruangan');
		redirect('user');
	}

	public function form_minjam($query){

		$data['title'] = "Sistem Peminjaman Ruangan";
 		$data['query'] = $this->db->get_where('Ruangan', array('id' => $query));
		$data['user']  = $this->db->get_where('user',['nama'=>$this->session->userdata('nama')])->row_array();
		
		 $this->load->view('template/header', $data);
		$this->load->view('user/template/sidebarUser');
		$this->load->view('user/template/topbar');
		$this->load->view('user/pinjam_ruangan');
		$this->load->view('user/template/footer');
	}
	
	public function pinjam(){
		$user_id	= $this->input->post('user_id');
		$ruangan_id = $this->input->post('ruangan_id');
		$tanggal	= $this->input->post('tanggal');
		$alasan 	= $this->input->post('alasan');
		
		$user = $this->db->get_where('pinjam', ['ruangan_id' => $ruangan_id, 'tanggal' => $tanggal])->row_array();
		
		$data['query'] = $user;
		
		$this->db->where('ruangan_id',$ruangan_id);
		$this->db->where('tanggal',$tanggal);
		$ada = $this->db->get('pinjam')->num_rows();
		if($user && $ada > 0){
			echo '<script>alert("ruangan sudah dipinjam");</script>';
			echo '<script>window.location = document.referrer;</script>';
		}else{

			$data = array(
				'user_id'		=> $user_id,
				'ruangan_id' 	=> $ruangan_id,
				'tanggal'		=> $tanggal,
				'alasan'		=> $alasan,
				'status'		=> "Pending"
			);

			$this->db->insert('pinjam', $data);
			redirect('user/histori_user');
		}
		
	}

	

	public function accpinjam($query){
		$this->db->select('r.nama_ruangan, r.kode_ruangan, u.nama, u.NIM, u.Jurusan, p.tanggal, p.alasan, p.id_pinjam');
		$this->db->from('user as u, ruangan as r, pinjam as p');
		$this->db->where('p.user_id = u.id');
		$this->db->where('p.ruangan_id = r.id');
		$this->db->where('p.id_pinjam',$query);
		$data['title'] = "Sistem Peminjaman Ruangan";
		$data['query'] = $this->db->get()->row();


		$this->load->view('template/header', $data);
		$this->load->view('user/template/sidebar');
		$this->load->view('user/template/topbar');
		$this->load->view('user/accPinjam');
		$this->load->view('user/template/footer');
		
	}

	public function tolak($query){

		$this->db->where('id_pinjam', $query);
		$this->db->set('status', 'Ditolak');
		$this->db->update('pinjam');
		redirect('user/histori');
	}
	

	public function terima($query){


		$this->db->where('id_pinjam', $query);
		$this->db->set('status','Diterima');
		$this->db->update('pinjam');
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
