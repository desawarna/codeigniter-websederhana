<?php
class Muser extends CI_Model {
	function Muser() {
		parent::__construct();
	}
	
	function cek_user($username, $password) {
		$this->db->where('username',$username);
		$this->db->where('password',md5($password));
		$query = $this->db->get('user');
		if($query->num_rows() > 0) {
		return TRUE;
		}
		else {
		return FALSE;
		}
	}
}
?>