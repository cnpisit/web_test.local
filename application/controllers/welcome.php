<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();


	}

	public function index() {
		$data['template'] = __CLASS__ . '/' . __FUNCTION__;
		$this->load->view('layout',$data);
	}

	public function hello() {
		$data['template'] = __CLASS__ . '/' . __FUNCTION__;
		$this->load->view('layout',$data);
	}
	
	public function message() {
		$data['template'] = __CLASS__ . '/' . __FUNCTION__;
		$this->load->view('layout',$data);
	}
}
