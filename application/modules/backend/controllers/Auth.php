<?php
class Auth extends MX_Controller {
	public function __construct() {
		parent::__construct ();
	}
	
	function test(){
		echo json_encode(['test','tehh','ddd']);	
	}
}