<?php
class Home extends CI_Controller{
	function Home(){
		#parent::Controller();
		parent::__construct();		
		#$this->load->model('mberita');
		$this->load->model(array('mberita','mkomentar','mkategori'));
		//$this->load->scaffolding('berita');
	}

	function index(){
		$data['title']='Contoh Halaman Home dengan CodeIgniter'; //$title di view
		$data['content']='content'; //akan kita buat file content.php di view
		#$data['berita']='Berita Pertama'; //$berita di view
		$data['berita']=$this->mberita->getberita();		
		$data['footer']='copyright @eko, 2011'; //$footer di view
		$this->load->view('template',$data); //load ke view template.php dengan beban $data
	}
	
	function selengkapnya(){
		$id=$this->uri->segment(3);
		$data['title']='contoh codeiniter';
		$data['content']='selengkapnya';
		$data['berita']=$this->mberita->selengkapnya($id);
			$data['komentar']=$this->mkomentar->liskoment($id);		
		$data['footer']='copyright @eko, 2011';
		$this->load->view('template',$data);
	}
	
	function addkoment(){
		$id_berita=$this->input->post('id',TRUE);
		$nama=$this->input->post('nama',TRUE);
		$email=$this->input->post('email',TRUE);
		$website=$this->input->post('website',TRUE);
		$koment=$this->input->post('komentar',TRUE);
		$this->mkomentar->addkoment($id_berita,$nama,$email,$website,$koment);
		redirect('home/selengkapnya/'.$id_berita,'refresh');
	}
	
	
}
?>