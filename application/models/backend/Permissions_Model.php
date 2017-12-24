<?php

class Permissions_Model extends CI_Model{

    public $admin_user_id;
    public $as_admin;
    public $manage_sub_admin;
    public  $manage_member;
    public  $manage_carousel;
    public  $audit;
    public  $chat;
    public  $view_errors;
    public  $statistic;
    public  $account_alarm;

    public function add_permissions($user_id, $permisson){

        $this->admin_user_id = $user_id;
        $this->as_admin = $permisson->as_admin;
        $this->manage_sub_admin = $permisson->manage_sub_admin;
        $this->manage_member = $permisson->manage_member;
        $this->manage_carousel = $permisson->manage_carousel;
        $this->audit = $permisson->audit;
        $this->chat = $permisson->chat;
        $this->view_errors = $permisson->view_errors;
        $this->statistic = $permisson->statistic;
        $this->account_alarm = $permisson->account_alarm;

        return $this->db->insert('admin_permissions', $this); 
        
    }
}