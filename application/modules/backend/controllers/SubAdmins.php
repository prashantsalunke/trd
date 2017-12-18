<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH.'/libraries/REST_Controller.php');


class SubAdmins extends REST_Controller {
	public function __construct() {
		parent::__construct ();
		$this->load->model('backend/Admin_User_Model');
    }    

	public function add_post(){
		$post = json_decode($this->security->xss_clean($this->input->raw_input_stream));
	$this->response($post);
	
	}
}