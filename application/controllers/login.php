<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct(){
        parent::__construct();
        $this->load->model('model_user');
    }

	public function index()
	{
		$this->load->view('frontend/login');
	}
	
	function cek_login() {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        //query the database
		$cekemail = $this->model_user->cekEmail($email);
		if($cekemail)
		{	
        	$result = $this->model_user->login($email, $password);
        	if($result)
			{	
				$sess_array = array();
				foreach($result as $row) {
					//create the session
					$sess_array = array(
						'ID' => $row->id_users,
						'USERNAME' => $row->username,
						'EMAIL' => $row->email,
						'PASS'=>$row->password, 
						'LEVEL' => $row->level_user,
						'login_status'=>true
					);
					
					$email1['email']= $this->input->post('email');
					$last_login['last_login'] = $this->input->post('last_login');
			
					$this->db->update('tbl_users', $last_login, $email1);
					
					//set session with value from database
					$this->session->set_userdata($sess_array);
					redirect('profile','refresh');
				}
				return TRUE;
			} else {
            //if form validate false
			$this->session->set_flashdata('notif','Password salah');
            redirect('login','refresh');
            return FALSE;
        	}
        } else {
            //if form validate false
			$this->session->set_flashdata('notif','Email tidak terdaftar');
            redirect('login','refresh');
            return FALSE;
        }
    }
	
    function logout() {
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('EMAIL');
        $this->session->unset_userdata('PASS');  
        $this->session->unset_userdata('LEVEL');
        $this->session->unset_userdata('login_status');
        $this->session->set_flashdata('notif','THANK YOU');
        redirect('login');
    }
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */