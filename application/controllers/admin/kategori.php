<?php
class Kategori extends CI_Controller{
	function Kategori(){		
		parent::__construct();
		if(!$this->session->userdata('logged_in')&& !$this->session->userdata('username')) // tambahkan
		redirect(base_url(),'refresh');
	}
	
	function index(){
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$data['content']='admin/list_kategori';
		$data['kategori']=$this->mkategori->getkategori();
		$this->load->view('admin/dashboard',$data);
	}
	
	function tambah(){
		$data['content']='admin/form_kategori';
		$this->load->view('admin/dashboard',$data);
	}
	
	function submit(){
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$kategori=$this->input->post('kategori',TRUE);
		$this->mkategori->tambahkategori($kategori);
		redirect('admin/kategori');
	}

	function edit(){
		$id=$this->uri->segment(4);
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$data['kategori']=$this->mkategori->ambilkategori($id);
		$data['content']='admin/form_edit_kategori';
		$this->load->view('admin/dashboard',$data);
	}
	
	function edit_submit(){
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$id=$this->input->post('id',TRUE);
		$kategori=$this->input->post('kategori',TRUE);
		$this->mkategori->updatekategori($id,$kategori);
		redirect('admin/kategori');
	}

	function delete(){
		$id=$this->uri->segment(4);
		$this->load->model(array('mberita','mkomentar','mkategori'));
		$this->mkategori->deletekategori($id);
		redirect('admin/kategori');
	}
	
	
	function tambahkategori($kategori){
		$this->db->insert('kategori',array('nama_kategori'=>$kategori));
	}
	
	function ambilkategori($id){
		$this->db->where('id',$id);
		return $this->db->get('kategori');
	}
	
	function updatekategori($id,$kategori){
		$this->db->where('id',$id);
		$this->db->update('kategori',array('nama_kategori'=>$kategori));
	}
	
	function deletekategori($id){
		$this->db->delete('kategori',array('id'=>$id));
	}	
}
?>