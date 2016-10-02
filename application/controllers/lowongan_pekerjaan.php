<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lowongan_pekerjaan extends CI_Controller {
	
function __construct(){
        parent::__construct(); 
        $this->load->helper(array('url')); //load helper url
        $this->load->model('model_user');  
    } 
	
	public function index()
	{
		$data=array( 
            'data_kategori'=>$this->model_user->getAllData('tbl_master_kategori_lowongan'),
            'data_lowongan'=>$this->model_user->getAllDataLowonganAktif(),          
			 );
	
		$this->load->view('frontend/lowongan_pekerjaan',$data);
	}
	
	public function lamar()
	{	
		if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Silahkan login dahulu !');
            redirect('login');
        }
		else 
		{	
			$query = $this->model_user->cekDataPelamar();	
			if($query)
			{	
				$this->session->set_flashdata('notif','Anda sudah pernah melamar untuk posisi ini !');
				redirect('lowongan_pekerjaan');
			}
			else
			{	
				$id_lowongan['id_lowongan'] = $this->uri->segment(3);
				$q = $this->db->get_where("tbl_master_lowongan",$id_lowongan);
					$d = array();
				foreach($q->result() as $idl)
				{
					$d['id_lowongan'] = $idl->id_lowongan;
					$d['judul_lowongan'] = $idl->judul_lowongan;
					$d['pelamar']= $idl->pelamar;
				}
				
				$this->load->model('no_aplikasi_model');
					
				$d['no_aplikasi']=$this->no_aplikasi_model->getnnoaplikasi();
				
				$this->load->view('frontend/lamar',$d);
			}
		}
	}
	
	
	
	public function lamar_pekerjaan()
	{  
		$data_pelamar['id_users'] = $this->session->userdata('ID');
		$data_pelamar['tanggal_melamar'] = $this->input->post('tanggal_melamar');
		$data_pelamar['id_lowongan'] = $this->input->post('id_lowongan');
		$data_pelamar['no_aplikasi'] = $this->input->post('no_aplikasi');
		$data_pelamar['status_aplikasi'] = "Belum Diproses";
		
		$this->db->insert('tbl_data_pelamar', $data_pelamar);
		
		
		$id_lowongan['id_lowongan'] = $this->input->post('id_lowongan');
		$data_lowongan['pelamar'] =  $this->input->post('pelamar')+1;
		
		$this->db->update('tbl_master_lowongan', $data_lowongan, $id_lowongan);
		
		$this->load->view('frontend/sukses');
	}
	
	
	public function sukses()
	{  
		if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Silahkan login dahulu !');
            redirect('login');
        }
		else
		{	
		$this->load->view('frontend/sukses');
		}
	}
}
