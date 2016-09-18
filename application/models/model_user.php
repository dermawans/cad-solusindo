<?php 

class Model_user extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	// Bagian Login	=================	
	function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tbl_pelamar');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
		
        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
	// Bagian Login	=================
	
	
}
	
	 
	
	

