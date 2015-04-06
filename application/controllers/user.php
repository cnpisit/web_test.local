 <?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfileWebservice
 *
 * @author CnPisit
 */
class User extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['template'] = __CLASS__ . '/' . __FUNCTION__;
//		$resutl = $this->users->getUsers();
		$this->load->model('users_model');
		$result = $this->users_model->getUsers();
		$data['data'] = $result;
		$this->load->view('layout',$data);
		
	}

}

?>