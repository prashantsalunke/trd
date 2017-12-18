<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {
	public function __construct() {
		parent::__construct ();
	}
	
	public function login(){
		$post = json_decode($this->security->xss_clean($this->input->raw_input_stream));
		$this->load->model('backend/Admin_User_Model');
		$user['email'] = $post->email;
		$user['password'] = $post->password;
		$user['security_code'] = $post->security_code;
		
		$authenticateUser = $this->Admin_User_Model->authenticate($user);

		if(isset($authenticateUser)){
			$this->session->set_userdata('admin_user',json_encode($authenticateUser));
			echo json_encode($authenticateUser);
		}else{
$error['message'] = 'user not found';
$error['status_code'] = 400;
			echo json_encode($error);
		}
	}

	function getLoggetInUser(){
		$user =  $this->session->userdata('admin_user');

		if(isset($user)){
			echo json_encode($user);
		}else {
			
$error['message'] = 'user not found';
$error['status_code'] = 400;
			echo json_encode($error); 
		}
	}

	function logout(){
		$this->session->sess_destroy();
		
		echo $this->session->unset_userdata('admin_user');
	}
}