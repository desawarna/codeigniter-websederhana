<?php
class Berita extends CI_Controller{

	function Berita(){		
		parent::__construct();
		if(!$this->session->userdata('logged_in')&& !$this->session->userdata('username')) // tambahkan
		redirect(base_url(),'refresh');
	}
	
	function index(){
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$data['berita']=$this->mberita->getallberita();		
		$data['content']='admin/list_berita';
		$this->load->view('admin/dashboard',$data);
	}
	
	function tambah(){
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$data['content']='admin/form_berita';
		$this->load->view('admin/dashboard',$data);
	}
	
	function submit(){
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$judul=$this->input->post('judul',TRUE);
		$isi=$this->input->post('isi',TRUE);
		$status=$this->input->post('status',TRUE);
		$kategori=$this->input->post('kategori',TRUE);
		$this->mberita->tambahberita($judul,$isi,$status,$kategori);
		redirect('admin/berita');
	}
	
	function edit(){
		$id=$this->uri->segment(4);
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$data['berita']=$this->mberita->ambilberita($id);
		$data['content']='admin/form_edit_berita';
		$this->load->view('admin/dashboard',$data);
	}
	
	function edit_submit(){
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$id=$this->input->post('id',TRUE);
		$judul=$this->input->post('judul',TRUE);
		$isi=$this->input->post('isi',TRUE);
		$status=$this->input->post('status',TRUE);
		$kategori=$this->input->post('kategori',TRUE);
		$this->mberita->updateberita($id,$judul,$isi,$status,$kategori);
		redirect('admin/berita');
	}
	
	function delete(){
		$id=$this->uri->segment(4);
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$this->mberita->deleteberita($id);
		redirect('admin/berita');
	}
}
?>