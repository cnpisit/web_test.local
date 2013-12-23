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

	public function fuck() {
		$data['template'] = __CLASS__ . '/' . __FUNCTION__;
		$this->load->view('layout',$data);
	}
}

?>
