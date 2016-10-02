<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class pengaturan extends CI_Controller {
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
            'title'=>'Pengaturan',
            'active_pengaturan'=>'active',
            'data_kategori_lowongan'=>$this->model_admin->getAllData('tbl_master_kategori_lowongan'),
            'data_user'=>$this->model_admin->getAllData('tbl_users'),       
			 );
		
        $this->load->view('dashboard/element/v_header',$data);
        $this->load->view('dashboard/pengaturan/home');
        $this->load->view('dashboard/element/v_footer');

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
		}

	}


	//    INSERT DATA TAMBAH KATEGORI LOWONGAN
    function tambah_kategori_lowongan(){
		if ($this->session->userdata('LEVEL') == 'Administrator') { 
		
			$kategorilowongan['nama_kategori'] = $this->input->post('nama_kategori'); 
	
			$this->db->insert('tbl_master_kategori_lowongan', $kategorilowongan);
			
			header('location:'.base_url().'pengaturan');
		}
	}
	
	//    UPDATE DATA KATEGORI LOWONGAN
    function simpan_kategori_lowongan(){
		if ($this->session->userdata('LEVEL') == 'Administrator') { 
			
			$id_kategori['id_kategori']= $this->input->post('id_kategori');
			$kategori['nama_kategori'] = $this->input->post('nama_kategori'); 
	
			$this->db->update('tbl_master_kategori_lowongan', $kategori, $id_kategori);
			
			header('location:'.base_url().'pengaturan');
		}
	}
	
	
	//    HAPUS DATA TAMBAH KATEGORI LOWONGAN
    function hapus_kategori_lowongan(){ 
        $id_kategori = $this->uri->segment(3);
        $this->model_admin->deleteKategori($id_kategori);
        redirect("pengaturan");
    }
	
	
	//    UPDATE DATA USER
    function save_user(){
		if ($this->session->userdata('LEVEL') == 'Administrator' ) { 
			
			$id_users['id_users']= $this->input->post('id_users'); 
			$user['username'] = $this->input->post('username');  
	
			$this->db->update('tbl_users', $user, $id_users);
			
			header('location:'.base_url().'pengaturan');
		}
	}
	
	//    UPDATE DATA PASSWORD USER
    function change_password(){
		if ($this->session->userdata('LEVEL') == 'Administrator' ) { 
			
			$id_users['id_users']= $this->input->post('id_users');
			$password['password'] = md5($this->input->post('password')); 
	
			$this->db->update('tbl_users', $password, $id_users);
			
			header('location:'.base_url().'pengaturan');
		}
	}
	
	
	
}
