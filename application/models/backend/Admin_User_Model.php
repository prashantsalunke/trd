<?php

class Admin_User_Model extends CI_Model{
    public $username;
    public $email;
    public $security_code;
    public $password;
    public $profile_image;
    public $online_status;
    public $is_suspended;
    public $is_deleted;
    public $created_by;
    public $modified_by;
    public $created_at;
    public $modified_at;

    public function authenticate($user){
        if(!empty($user)){
            $this->db->select(['user.id as user_id','user.username','user.email','user.profile_image','permission.*']);
            $this->db->from('tbl_admin_users as user');
            $this->db->join('admin_permissions AS permission','user.id=permission.admin_user_id');            
        $this->db->where('email', $user['email']);
        $this->db->where('password', $user['password']);
        $this->db->where('security_code', $user['security_code']);
        $this->db->where('is_suspended',false);
        $this->db->where('is_deleted',false);
        $query = $this->db->get();
        
        return $query->row();     
        }
        return null;   
        }
}