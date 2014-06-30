<?php
class Users_model extends CI_Model{
	 
	private $id = '';
	private $username = '';
	private $password = '';
	
	function __construct(){
		parent::__construct();
	}
	public function getUsers() {
		
		$query = $this->db->query('SELECT * FROM users');
		$result = $query->result();
		return $result;		
	}
	
	function login($username, $password){
		$q = $this->db->where(array('username'=>$username, 'password'=>$password))->get('users');
		if ($q->result()) {
			return true;
		}else {
			return false;
		}
	}
}