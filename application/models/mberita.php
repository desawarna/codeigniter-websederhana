<?php
class Mberita extends CI_Model
{
	function Mberita()
	{
		//parent::CI_Model();
		parent::__construct();
	}
	
	function getberita(){
		$this->db->order_by('id','asc');
		$this->db->where('status',1);
		$q=$this->db->get('berita');
		//select * FROM berita where status=1 ORDER BY id DESC;
		return $q;
	}

	function selengkapnya($id){
		$this->db->where('id',$id);
		$this->db->where('status',1);
		$q=$this->db->get('berita');
		//select * FROM berita where id='$id' AND status=1;
		return $q;
	}
	
	function getallberita(){
		$this->db->order_by('id','desc');
		$q=$this->db->get('berita');
		return $q;
	}
	
	function tambahberita($judul,$isi,$status,$kategori){
		$data=array('judul'=>$judul,
		'isi'=>$isi,
		'tanggal'=>date('Y-m-d'),
		'penulis'=>$this->session->userdata('id_user'),
		'status'=>$status,
		'id_kategori'=>$kategori
		);
		$this->db->insert('berita',$data);
	}

	function ambilberita($id){
		$this->db->where('id',$id);
		$q=$this->db->get('berita');
		return $q;
	}
	
	function updateberita($id,$judul,$isi,$status,$kategori){
		$data=array('judul'=>$judul,
		'isi'=>$isi,
		'tanggal'=>date('Y-m-d'),
		'penulis'=>$this->session->userdata('id_user'),
		'status'=>$status,
		'id_kategori'=>$kategori
		);
		$this->db->where('id',$id);
		$this->db->update('berita',$data);
	}

	function deleteberita($id){
		$this->db->delete('berita',array('id'=>$id));
	}
}
?>