<?php

class Storage_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function updateStorageByBusiId($data)
    {
    	$this->db->select('id');
    	$this->db->from(TABLES::$MYSTORAGE);
    	$this->db->where('busi_id', $data['busi_id']);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	if(count($row) <= 0) {
    		$params = array();
    		$params['busi_id'] = $data['busi_id'];
    		$params['desksite'] = 0;
    		$params['files'] = 0;
    		$params['udtalk'] = 0;
    		$params['products'] = 0;
    		$params['community'] = 0;
    		$params['offers'] = 0;
    		$params['inquiries'] = 0;
    		$params['videos'] = 0;
    		$params['bstation'] = 0;
    		$params['stockmarket'] = 0;
    		$params['freespace'] = 0;
    		$params['usedspace'] = 0;
    		$this->db->insert(TABLES::$MYSTORAGE, $data);
    	} else {
    		$sql = "UPDATE ".TABLES::$MYSTORAGE." SET ".$data['field']." = ".$data['field']." + ".$data['datasize'].", freespace = freespace - ".$data['datasize'].", usedspace = usedspace + ".$data['datasize']." WHERE busi_id = ".$data['busi_id'];
    		$this->db->query($sql);
    	}
    }
    public function getMyBusinessStorage($busi_id)
    {
    	$this->db->select('*');
    	$this->db->from(TABLES::$MYSTORAGE);
    	$this->db->where('busi_id', $busi_id);
    	$query = $this->db->get();
    	$row = $query->result_array();
    	return $row;
    }
}