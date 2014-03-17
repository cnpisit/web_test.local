<?php
class Users extends CI_Model{
	 
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
}