<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class lowongan extends CI_Controller {
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
            'title'=>'List Lowongan',
            'active_lowongan'=>'active',
            'data_lowongan'=>$this->model_admin->getAllDataLowongan(),
            'data_kategori_lowongan'=>$this->model_admin->getAllData('tbl_master_kategori_lowongan'),       
			 );
		
        $this->load->view('dashboard/element/v_header',$data);
        $this->load->view('dashboard/lowongan/home');
        $this->load->view('dashboard/element/v_footer');

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
		}
		
	}
	
	
	//INSERT DATA LOWONGAN
    function tambah_lowongan(){
		if ($this->session->userdata('LEVEL') == 'Administrator') {
		 
			$lowongan['id_kategori'] = $this->input->post('id_kategori');
			$lowongan['judul_lowongan'] = $this->input->post('judul_lowongan');
			$lowongan['isi_lowongan'] = $this->input->post('isi_lowongan');
			$lowongan['tanggal_posting'] = $this->input->post('tanggal_posting');
			$lowongan['status_terbit'] = "1";
			$lowongan['pelamar'] = "0";
			$lowongan['dibuat_oleh'] = $this->input->post('dibuat_oleh');
	
			$this->db->insert('tbl_master_lowongan', $lowongan);
			
			header('location:'.base_url().'lowongan');
		}
	}
	
	
	//UPDATE DATA LOWONGAN
    function save_lowongan(){
		if ($this->session->userdata('LEVEL') == 'Administrator') {
		
			$id_lowongan['id_lowongan'] = $this->input->post('id_lowongan');
			$lowongan['judul_lowongan'] = $this->input->post('judul_lowongan');
			$lowongan['isi_lowongan'] = $this->input->post('isi_lowongan');
			$lowongan['status_terbit'] = $this->input->post('status_terbit');
			
			$this->db->update('tbl_master_lowongan', $lowongan, $id_lowongan);
			
			header('location:'.base_url().'lowongan');
		}
	}
	
	//GANTI KATEGORI LOWONGAN
    function ganti_kategori_lowongan(){
		if ($this->session->userdata('LEVEL') == 'Administrator') { 
		
			$id_lowongan['id_lowongan'] = $this->input->post('id_lowongan');
			$lowongan['id_kategori'] = $this->input->post('id_kategori');
			
			$this->db->update('tbl_master_lowongan', $lowongan, $id_lowongan);
			
			header('location:'.base_url().'lowongan');
		}
	}
	//    HAPUS DATA LOWONGAN
    function hapus_lowongan(){ 
        $id_lowongan = $this->uri->segment(3);
        $this->model_admin->deleteLowongan($id_lowongan);
        redirect("lowongan");
    }
	
}
