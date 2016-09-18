<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('admin');
        };
        $this->load->model('model_admin');
		$data=array(); 
    }
	
	public function index()
	{
		if ($this->session->userdata('LEVEL') == 'Administrator') { 
        $data=array(
            'title'=>'Dashboard',
            'active_dashboard'=>'active', 
        );
		$data['jumlah_pelamar'] = $this->model_admin->getJumlahAllDataPelamar()->num_rows(); 
		$data['jumlah_lowongan_aktif'] = $this->model_admin->getJumlahAllDataLowonganAktif()->num_rows(); 
        
		$this->load->view('dashboard/element/v_header',$data);
		$this->load->view('dashboard/home/home');
        $this->load->view('dashboard/element/v_footer');
		}
	}
}
