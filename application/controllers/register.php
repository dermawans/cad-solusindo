<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	 function __construct(){
        parent::__construct();
        $this->load->model('model_user');
    }

	public function index()
	{
		$this->load->view('frontend/register');
	}
	
	function register() {
        $email=$this->input->post('email');
        $username=$this->input->post('username');
        $password=md5($this->input->post('password'));
		
        $cekemail = $this->model_user->cekEmail($email);
		if(!$cekemail)
		{
			$cekusername = $this->model_user->cekUsername($username);
			if(!$cekusername)
			{
				$data=array(
					'email'=>$email,
					'username'=>$username,
					'password'=>$password,
					'level_user'=>"Pelamar"
				);
				$this->model_user->registerUser($data);
				$this->session->set_flashdata('berhasil','Pendaftaran berhasil silahkan login.');
    			redirect("login");
    
			}
			else
			{
				$this->session->set_flashdata('notif','Username sudah ada');
				redirect('register');
			}
		}
		else
		{
            $this->session->set_flashdata('notif','Email sudah terdaftar! Silahkan login');
            redirect('register');
        }
		
    }
	
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */