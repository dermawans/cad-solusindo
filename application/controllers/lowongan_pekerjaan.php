<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lowongan_pekerjaan extends CI_Controller {
	
function __construct(){
        parent::__construct(); 
        $this->load->helper(array('url')); //load helper url
        $this->load->model('model_admin');  
    } 
	
	public function index()
	{
		$data=array( 
            'data_kategori'=>$this->model_admin->getAllData('tbl_master_kategori_lowongan'),
            'data_lowongan'=>$this->model_admin->getAllDataLowonganAktif(),       
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
	
	
	public function lamar_pekerjaan()
	{	 	
			
		if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','Silahkan login dahulu !');
            redirect('login');
        }
		else
		{	
			//fungsi simpan lamaran
			
			$data_informasi_personal['no_aplikasi'] = $this->input->post('no_aplikasi');
			$data_informasi_personal['nama'] = $this->input->post('nama');
			$data_informasi_personal['no_ktp'] = $this->input->post('no_ktp');
			$data_informasi_personal['tempat_lahir'] = $this->input->post('tempat_lahir');
			$data_informasi_personal['tanggal_lahir'] = $this->input->post('tanggal_lahir');
			$data_informasi_personal['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$data_informasi_personal['agama'] = $this->input->post('agama');
			$data_informasi_personal['alamat_domisili'] = $this->input->post('alamat_domisili');
			$data_informasi_personal['rt_domisili'] = $this->input->post('rt_domisili');
			$data_informasi_personal['rw_domisili'] = $this->input->post('rw_domisili');
			$data_informasi_personal['kota_domisili'] = $this->input->post('kota_domisili');
			$data_informasi_personal['kodepos_domisili'] = $this->input->post('kodepos_domisili');
			$data_informasi_personal['email'] = $this->input->post('email');
			$data_informasi_personal['no_telepon'] = $this->input->post('no_telepon');
			$data_informasi_personal['no_handphone'] = $this->input->post('no_handphone');
			$data_informasi_personal['kerabat_yang_dapat_dihubungi'] = $this->input->post('kerabat_yang_dapat_dihubungi');
			$data_informasi_personal['hubungan_kerabat_yang_dapat_dihubungi'] = $this->input->post('hubungan_kerabat_yang_dapat_dihubungi');
			$data_informasi_personal['no_telepon_kerabat_yang_dapat_dihubungi'] = $this->input->post('no_telepon_kerabat_yang_dapat_dihubungi');
			$data_informasi_personal['status_perkawinan'] = $this->input->post('status_perkawinan');
			$data_informasi_personal['pendidikan_terakhir'] = $this->input->post('pendidikan_terakhir');
			 
			$data_informasi_pendidikan_terakhir_1['tingkat'] = $this->input->post('tingkat_1');
			$data_informasi_pendidikan_terakhir_1['nama_institusi'] = $this->input->post('nama_institusi_1');
			$data_informasi_pendidikan_terakhir_1['jurusan'] = $this->input->post('jurusan_1');
			$data_informasi_pendidikan_terakhir_1['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_1');
			$data_informasi_pendidikan_terakhir_1['nilai_akhir'] = $this->input->post('nilai_akhir_1');
			$data_informasi_pendidikan_terakhir_1['no_aplikasi'] = $this->input->post('no_aplikasi');
			
			$data_informasi_pendidikan_terakhir_2['tingkat'] = $this->input->post('tingkat_2');
			$data_informasi_pendidikan_terakhir_2['nama_institusi'] = $this->input->post('nama_institusi_2');
			$data_informasi_pendidikan_terakhir_2['jurusan'] = $this->input->post('jurusan_2');
			$data_informasi_pendidikan_terakhir_2['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_2');
			$data_informasi_pendidikan_terakhir_2['nilai_akhir'] = $this->input->post('nilai_akhir_2');
			$data_informasi_pendidikan_terakhir_2['no_aplikasi'] = $this->input->post('no_aplikasi');
			
			$data_informasi_pendidikan_terakhir_3['tingkat'] = $this->input->post('tingkat_3');
			$data_informasi_pendidikan_terakhir_3['nama_institusi'] = $this->input->post('nama_institusi_3');
			$data_informasi_pendidikan_terakhir_3['jurusan'] = $this->input->post('jurusan_3');
			$data_informasi_pendidikan_terakhir_3['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_3');
			$data_informasi_pendidikan_terakhir_3['nilai_akhir'] = $this->input->post('nilai_akhir_3');
			$data_informasi_pendidikan_terakhir_3['no_aplikasi'] = $this->input->post('no_aplikasi');
			
			$data_informasi_pendidikan_terakhir_4['tingkat'] = $this->input->post('tingkat_4');
			$data_informasi_pendidikan_terakhir_4['nama_institusi'] = $this->input->post('nama_institusi_4');
			$data_informasi_pendidikan_terakhir_4['jurusan'] = $this->input->post('jurusan_4');
			$data_informasi_pendidikan_terakhir_4['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_4');
			$data_informasi_pendidikan_terakhir_4['nilai_akhir'] = $this->input->post('nilai_akhir_4');
			$data_informasi_pendidikan_terakhir_4['no_aplikasi'] = $this->input->post('no_aplikasi');
			
			$data_informasi_pendidikan_terakhir_5['tingkat'] = $this->input->post('tingkat_5');
			$data_informasi_pendidikan_terakhir_5['nama_institusi'] = $this->input->post('nama_institusi_5');
			$data_informasi_pendidikan_terakhir_5['jurusan'] = $this->input->post('jurusan_5');
			$data_informasi_pendidikan_terakhir_5['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_5');
			$data_informasi_pendidikan_terakhir_5['nilai_akhir'] = $this->input->post('nilai_akhir_5');
			$data_informasi_pendidikan_terakhir_5['no_aplikasi'] = $this->input->post('no_aplikasi');
			
			$data_informasi_organisasi_1['organisasi'] = $this->input->post('organisasi_1');
			$data_informasi_organisasi_1['jabatan'] = $this->input->post('jabatan_1');
			$data_informasi_organisasi_1['dari'] = $this->input->post('dari_1');
			$data_informasi_organisasi_1['sampai'] = $this->input->post('sampai_1');
			$data_informasi_organisasi_1['no_aplikasi'] = $this->input->post('no_aplikasi');
						
			$data_informasi_organisasi_2['organisasi'] = $this->input->post('organisasi_2');
			$data_informasi_organisasi_2['jabatan'] = $this->input->post('jabatan_2');
			$data_informasi_organisasi_2['dari'] = $this->input->post('dari_2');
			$data_informasi_organisasi_2['sampai'] = $this->input->post('sampai_2');
			$data_informasi_organisasi_2['no_aplikasi'] = $this->input->post('no_aplikasi');	
					
			$data_informasi_organisasi_3['organisasi'] = $this->input->post('organisasi_3');
			$data_informasi_organisasi_3['jabatan'] = $this->input->post('jabatan_3');
			$data_informasi_organisasi_3['dari'] = $this->input->post('dari_3');
			$data_informasi_organisasi_3['sampai'] = $this->input->post('sampai_3');
			$data_informasi_organisasi_3['no_aplikasi'] = $this->input->post('no_aplikasi');
			
			$data_informasi_pengalaman_kerja_1['perusahaan'] = $this->input->post('perusahaan_1');
			$data_informasi_pengalaman_kerja_1['jabatan'] = $this->input->post('jabatan_1');
			$data_informasi_pengalaman_kerja_1['dari'] = $this->input->post('dari_1');
			$data_informasi_pengalaman_kerja_1['sampai'] = $this->input->post('sampai_1');
			$data_informasi_pengalaman_kerja_1['no_aplikasi'] = $this->input->post('no_aplikasi');
			
			$data_informasi_pengalaman_kerja_2['perusahaan'] = $this->input->post('perusahaan_2');
			$data_informasi_pengalaman_kerja_2['jabatan'] = $this->input->post('jabatan_2');
			$data_informasi_pengalaman_kerja_2['dari'] = $this->input->post('dari_2');
			$data_informasi_pengalaman_kerja_2['sampai'] = $this->input->post('sampai_2');
			$data_informasi_pengalaman_kerja_2['no_aplikasi'] = $this->input->post('no_aplikasi');
			
			$data_informasi_pengalaman_kerja_3['perusahaan'] = $this->input->post('perusahaan_3');
			$data_informasi_pengalaman_kerja_3['jabatan'] = $this->input->post('jabatan_3');
			$data_informasi_pengalaman_kerja_3['dari'] = $this->input->post('dari_3');
			$data_informasi_pengalaman_kerja_3['sampai'] = $this->input->post('sampai_3');
			$data_informasi_pengalaman_kerja_3['no_aplikasi'] = $this->input->post('no_aplikasi');
			
			$data_data_pelamar['tanggal_melamar'] = $this->input->post('tanggal_melamar'); 
			$data_data_pelamar['id_lowongan'] = $this->input->post('id_lowongan'); 
			$data_data_pelamar['no_aplikasi'] = $this->input->post('no_aplikasi'); 
			$data_data_pelamar['status_aplikasi'] = "Belum Diproses"; 
			
			
			$this->db->insert('tbl_informasi_personal', $data_informasi_personal); 
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_1);
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_2);
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_3);
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_4);
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_5);
			$this->db->insert('tbl_informasi_organisasi', $data_informasi_organisasi_1);  
			$this->db->insert('tbl_informasi_organisasi', $data_informasi_organisasi_2);  
			$this->db->insert('tbl_informasi_organisasi', $data_informasi_organisasi_3);  
			$this->db->insert('tbl_informasi_pengalaman_kerja', $data_informasi_pengalaman_kerja_1);
			$this->db->insert('tbl_informasi_pengalaman_kerja', $data_informasi_pengalaman_kerja_2);
			$this->db->insert('tbl_informasi_pengalaman_kerja', $data_informasi_pengalaman_kerja_3);
			$this->db->insert('tbl_data_pelamar', $data_data_pelamar); 
			
			$id_lowongan['id_lowongan'] = $this->input->post('id_lowongan'); 
			$pelamar['pelamar']= $this->input->post('pelamar')+1;  
	
			$this->db->update('tbl_master_lowongan', $pelamar, $id_lowongan);
			
			//fungsi upload cv
			$this->load->library('upload');
			$name=$this->input->post('nama');
			$t=$this->input->post('tanggal_melamar');
			$nmfile = $name."-".$t; //nama file saya beri nama langsung dan diikuti fungsi tanggal melamar
			$config['upload_path'] = 'assets/cv/'; //path folder
			$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
	 
			$this->upload->initialize($config);
			 
			$no_aplikasi['no_aplikasi']=$this->input->post('no_aplikasi');
			
			if($_FILES['fileuploadcv']['name'])
			{
				if ($this->upload->do_upload('fileuploadcv'))
				{ 
					$cvr = $this->upload->data();
					$datacv = array(
					  'cv' =>$cvr['file_name']
					   
					);
	 
					$this->db->update('tbl_informasi_personal', $datacv,$no_aplikasi); 
				}
       		}
			
			//fungsi upload foto
			$this->load->library('upload');
			$name=$this->input->post('nama');
			$t=$this->input->post('tanggal_melamar');
			$nmfile = $name."-".$t; //nama file saya beri nama langsung dan diikuti fungsi tanggal melamar
			$config['upload_path'] = 'assets/foto/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
	 
			$this->upload->initialize($config);
			
			$no_aplikasi['no_aplikasi']=$this->input->post('no_aplikasi');
					
			if($_FILES['filefoto']['name'])
			{
				if ($this->upload->do_upload('filefoto'))
				{
					
					$gbr = $this->upload->data();
					$datafoto = array(
					  'foto' =>$gbr['file_name']
					   
					);
	 		
			$this->db->update('tbl_informasi_personal', $datafoto,$no_aplikasi); 
				}
       		} 
			
			
			header('location:'.base_url().'lowongan_pekerjaan/sukses');
			
		}
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
