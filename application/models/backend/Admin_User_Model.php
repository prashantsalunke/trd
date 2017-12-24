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

    private $table_name = 'tbl_admin_users';
    // public $created_at;
    // public $modified_at;

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

        public function getAll(){
            $result =  $this->db->get($table_name);
            return $result->result_array();
        }

        public function add_sub_admin($subadmin){
            $this->db->trans_start();
            $this->username = $subadmin['username'];
            $this->password = $subadmin['password'];
            $this->email = $subadmin['email'];
            $this->security_code = $subadmin['security_code'];
            $this->profile_image = $subadmin['profile_image'];
            $this->online_status = $subadmin['online_status'];
            $this->is_suspended = false;
            $this->is_deleted = false;
            $this->created_by = $subadmin['created_by'];
            $this->modified_by = $subadmin['modified_by'];
            // $this->modified_at = $this->created_at = date();
           
             $this->db->insert('tbl_admin_users', $this); 
            $insert_id = $this->db->insert_id();
            $this->load->model('backend/Permissions_Model');
if($insert_id){
    $permission_created = $this->Permissions_Model->add_permissions($insert_id, $subadmin['permissions']);
    if($permission_created){
        $this->db->trans_complete();                    
return $this->get_user_by_id($insert_id);
    }
}            
            $this->db->trans_complete();            
            return null;
            
        }

        public function get_user_by_id($user_id){
            $this->db->from('tbl_admin_users as user');
        $this->db->where('user.id', $user_id);
        $this->db->where('is_suspended',false);
        $this->db->where('is_deleted',false);
        $query = $this->db->get();
        
        return $query->row();  

        }
}