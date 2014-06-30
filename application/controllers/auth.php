<?php


class auth extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function login(){
		$data['template'] = __CLASS__ . '/' . __FUNCTION__;
		if ($this->input->post('username')!=null && $this->input->post('password')!=null) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$ok = $this->users_model->login($username, $password);
			if ($ok) {
				var_dump($ok);
			}else {
				$this->load->view('auth/auth_layout',$data);
			}
		}else {
			$this->load->view('auth/auth_layout',$data);
		}
	}
	
}