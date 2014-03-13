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
class ProfileWebservice extends CI_Controller {

	public function index() {
		$data['template'] = __CLASS__ . '/' . __FUNCTION__;
		
		$query = $this->db->query('SELECT * FROM user');		
		$result = $query->result();
		$data['data'] = $result[0];
		$this->load->view('layout',$data);
	}
}

?>
