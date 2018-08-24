<?php
class Administrator extends CI_Controller {

	function Administrator()
	{
		parent::__construct();
		$this->load->model('muser');
	}

	function index(){
		if($this->session->userdata('logged_in'))
		redirect('admin/dashboard','refresh');
		$this->load->view('login');
	}

	function login(){
		$username =$this->input->post('username',TRUE);
		$password =$this->input->post('password',TRUE);
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query =$this->db->get('user');

		if ($query->num_rows() == 1) {
			foreach($query->result() as $row) {
			$nama = $row->nama_lengkap;
			$id_user=$row->id;
			}
		}

		$user= $this->muser->cek_user($username,$password);

		if($user == TRUE){
			$data = array( 'nama_lengkap' => $nama,
			'username'=> $username,
			'id_user'=>$id_user,
			'logged_in' => TRUE );
			$this->session->set_userdata($data);
			redirect('admin/dashboard','refresh');
		}else{
			$this->session->set_flashdata('nama',$username);
			$this->session->set_flashdata('login_message', '<divclass="error">Username atau Password Anda Tidak
			Sesuai</div>');
			redirect('administrator');
		}
	}

	function logout(){
		$this->session->unset_userdata('nama_lengkap');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('logged_in');
		redirect(site_url()); // sesudah logout di redirect ke halaman utama
	}
}


?>