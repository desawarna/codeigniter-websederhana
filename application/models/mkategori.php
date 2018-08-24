<?php
class Mkategori extends CI_Model{

	function Mkategori()
	{
		parent::__construct();
	}

	function getkategori(){
		return $this->db->get('kategori');
	}
	
	function getberitakategori($id){
		$this->db->where('id_kategori',$id);
		$this->db->order_by('id','desc');
		$q=$this->db->get('berita');
		//SELECT * FROM berita WHERE id_kategori = '$id' ORDER BY id DESC;
		return $q;
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


