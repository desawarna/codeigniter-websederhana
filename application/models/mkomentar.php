<?php
	class Mkomentar extends CI_Model {
	
	function Mkomentar()
	{
		//parent::CI_Model();
		parent::__construct();
	}
	
	function addkoment($id_berita,$nama,$email,$website,$koment)
	{
		$data=array(
			'id_berita'=>$id_berita,
			'nama'=>$nama,
			'email'=>$email,
			'website'=>$website,
			'isi_komentar'=>$koment,
			'tanggal'=>date('Y-m-d')
		);
		
		$this->db->insert('komentar',$data);
		// sama dengan query berikut ini
		//INSERT INTO komentar(field_field_dalam_tabel_komentar) VALUES ($data);
	}

	function liskoment($id){
		$this->db->where('id_berita',$id);
		$this->db->order_by('id','desc');
		$q=$this->db->get('komentar');
		// sama dengan query berikut ini
		// SELECT * FROM komentar where id_berita='$id' ORDER BY id DESC;
		return $q;
	}
}
?>