<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	private $table = "user";

	/* metode untuk cari username dan passwordnya */
	public function findUserPass($user=NULL,$pass=NULL) {
		$array = array('username' => $user, 'password' => $pass);
		$this->db->where($array);
		return $query = $this->db->get($this->table);
	}
}