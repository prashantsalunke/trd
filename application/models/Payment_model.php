<?php

class Payment_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

 	public function addPaymentInfo($data) {
    	$this->db->insert(TABLES::$PAYMENT_TABLE,$data);
    	return $this->db->insert_id();
    }
}