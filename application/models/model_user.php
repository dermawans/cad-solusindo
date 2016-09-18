<?php 

class Model_user extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	//Register
	
	 public function cekEmail($email){
        $this->db->where('email',$email);
        $query = $this->db->get('tbl_users');
        return $query->result();
    }
	 public function cekUsername($username){
        $this->db->where('username',$username);
        $query = $this->db->get('tbl_users');
        return $query->result();
    }
	
	 public function registerUser($data){
        $query = $this->db->insert('tbl_users',$data);
        return $query;
    }
}
	
	 
	
	

