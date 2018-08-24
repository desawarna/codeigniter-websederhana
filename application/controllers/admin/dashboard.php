<?php
class Dashboard extends CI_Controller{

	function Dashboard()
	{	
		parent::__construct();
		if(!$this->session->userdata('logged_in')&& !$this->session->userdata('username'))
		redirect(base_url(),'refresh');
	}
	
	function index()
	{
		$data['content']='admin/depan';
		$this->load->view('admin/dashboard',$data);
	}
}
?>