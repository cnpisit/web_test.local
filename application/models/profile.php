<?php
class Profile extends CI_Model{
	 
	private $id = '';
	private $username = '';
	private $password = '';
	
	function __construct(){
		parent::__construct();
	}
	public function getProfile() {
		
		$query = $this->db->query('SELECT * FROM user where username = "pisit"');
		$result = $query->result();
		return $result;		
	}
}