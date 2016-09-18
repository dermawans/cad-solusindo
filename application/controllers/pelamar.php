<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class pelamar extends CI_Controller {
function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('admin');
        };
        $this->load->model('model_admin');
		$this->load->library('cart');
        //$this->load->helper('currency_format_helper');
    }
	
	
	
	public function index()
	{
				
		if ($this->session->userdata('LEVEL') == 'Administrator') { 
        $data=array(
            'title'=>'List Pelamar',
            'active_pelamar'=>'active',
            'data_all_pelamar'=>$this->model_admin->getAllDataPelamar(),  
			 );
		
        $this->load->view('dashboard/element/v_header',$data);
        $this->load->view('dashboard/pelamar/home');
        $this->load->view('dashboard/element/v_footer');

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
		}
	}
	
	
	public function view()
	{
				
		if ($this->session->userdata('LEVEL') == 'Administrator') { 
        $data=array(
            'title'=>'View Pelamar',
            'active_pelamar'=>'active',
            'data_infromasi_personal_pelamar'=>$this->model_admin->getDataInformasiPersonalPelamar(),  
            'data_pendidikan_terakhir_per_pelamar'=>$this->model_admin->getDataPendidikanTerakhirPelamar(), 
            'data_organisasi_per_pelamar'=>$this->model_admin->getDataOrganisasiPelamar(), 
            'data_pengalaman_kerja_per_pelamar'=>$this->model_admin->getDataPengalamanKerjaPelamar()
			 );
		
        $this->load->view('dashboard/element/v_header',$data);
        $this->load->view('dashboard/pelamar/view');
        $this->load->view('dashboard/element/v_footer');

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
		}
	}
	
	public function proses_pelamar_belum_diproses()
	{
				
		if ($this->session->userdata('LEVEL') == 'Administrator') { 
        $data=array(
            'title'=>'Proses Pelamar',
            'active_pelamar'=>'active',
            'data_infromasi_personal_pelamar'=>$this->model_admin->getDataInformasiPersonalPelamar(),  
            'data_pendidikan_terakhir_per_pelamar'=>$this->model_admin->getDataPendidikanTerakhirPelamar(), 
            'data_organisasi_per_pelamar'=>$this->model_admin->getDataOrganisasiPelamar(), 
            'data_pengalaman_kerja_per_pelamar'=>$this->model_admin->getDataPengalamanKerjaPelamar(),  
			 );
		
        $this->load->view('dashboard/element/v_header',$data);
        $this->load->view('dashboard/pelamar/proses_pelamar_belum_diproses');
        $this->load->view('dashboard/element/v_footer');

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
		}
	}
	
	//save proses pelamar belum diproses
    function save_proses_pelamar_belum_diproses(){
		if ($this->session->userdata('LEVEL') == 'Administrator') {
		
			$no_aplikasi['no_aplikasi'] = $this->input->post('no_aplikasi');
			$status_aplikasi['status_aplikasi'] = $this->input->post('status_aplikasi');
			
			$this->db->update('tbl_data_pelamar', $status_aplikasi, $no_aplikasi);
			
			header('location:'.base_url().'pelamar');
		}
	}
	
	//save_proses_pelamar_dalam_proses
    function save_proses_pelamar_dalam_proses(){
		if ($this->session->userdata('LEVEL') == 'Administrator') {
		 
			$interview['jadwal_pelamar_interview'] = $this->input->post('jadwal_pelamar_interview');
			$interview['hadir'] = $this->input->post('hadir'); 
			$interview['hasil_interview'] = $this->input->post('hasil_interview');
			$interview['interviewer'] = $this->input->post('interviewer');
			$interview['no_aplikasi'] = $this->input->post('no_aplikasi');
	
			$this->db->insert('tbl_data_interview_pelamar', $interview);
			
			
			$tes['logika'] = $this->input->post('logika');
			$tes['bahasa_inggris'] = $this->input->post('bahasa_inggris'); 
			$tes['tester'] = $this->input->post('tester'); 
			$tes['no_aplikasi'] = $this->input->post('no_aplikasi');
	
			$this->db->insert('tbl_hasil_tes_pelamar', $tes);
			
			
			$no_aplikasi['no_aplikasi'] = $this->input->post('no_aplikasi');
			$status_aplikasi['status_aplikasi'] = $this->input->post('status_aplikasi');
			
			$this->db->update('tbl_data_pelamar', $status_aplikasi, $no_aplikasi);
			
			
			header('location:'.base_url().'pelamar');
		}
	}
	
	
	//Pelamar sudah diproses
	public function pelamar_sudah_diproses()
	{
				
		if ($this->session->userdata('LEVEL') == 'Administrator') { 
        $data=array(
            'title'=>'Pelamar Sudah Diproses',
            'active_pelamar'=>'active',
            'data_infromasi_personal_pelamar'=>$this->model_admin->getDataInformasiPersonalPelamar(),  
            'data_pendidikan_terakhir_per_pelamar'=>$this->model_admin->getDataPendidikanTerakhirPelamar(), 
            'data_organisasi_per_pelamar'=>$this->model_admin->getDataOrganisasiPelamar(), 
            'data_pengalaman_kerja_per_pelamar'=>$this->model_admin->getDataPengalamanKerjaPelamar(), 
            'data_interview_pelamar'=>$this->model_admin->getDataInterviewPelamar(),  
            'data_tes_pelamar'=>$this->model_admin->getDataTesPelamar(),   
			 );
		
        $this->load->view('dashboard/element/v_header',$data);
        $this->load->view('dashboard/pelamar/pelamar_sudah_diproses');
        $this->load->view('dashboard/element/v_footer');

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
		}
	}
	
	
	
}
