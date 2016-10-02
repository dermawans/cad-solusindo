<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
function __construct(){
        parent::__construct(); 
        $this->load->helper(array('url')); //load helper url 
        if($this->session->userdata('login_status') != TRUE and $this->session->userdata('level') != "Pelamar" ){
            $this->session->set_flashdata('notif','Silahkan Login Dahulu!');
            redirect('login');
        };
        $this->load->model('model_user');  
    } 
	
	public function index()
	{	
		$id_users = $this->session->userdata('ID');
        //query the database
		$cekdata = $this->model_user->cekData($id_users);
		if($cekdata)
		{
			$data=array(
            'data_infromasi_personal_pelamar'=>$this->model_user->cekInformasiPersonal($id_users),  
            'data_pendidikan_terakhir_pelamar'=>$this->model_user->cekPendidikanPelamar($id_users), 
            'data_organisasi_pelamar'=>$this->model_user->cekOrganisasiPelamar($id_users), 
            'data_pengalaman_kerja_pelamar'=>$this->model_user->cekPengalamanKerja($id_users), 
            'data_lamaran_pelamar'=>$this->model_user->getDataPelamar()
			 );
			 
		$this->load->view('frontend/profile',$data);
		}
		else
		{
		$this->load->view('frontend/profile-kosong');
		}
	}
	
	
	public function isi()
	{	 	
			//fungsi simpan lamaran
			
			$data_informasi_personal['id_users'] = $this->session->userdata('ID');
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
			
			
			$this->db->insert('tbl_informasi_personal', $data_informasi_personal); 
			 
			if($this->input->post('nama_institusi_1')=="")
			{
			}
			else
			{
			$data_informasi_pendidikan_terakhir_1['tingkat'] = $this->input->post('tingkat_1');
			$data_informasi_pendidikan_terakhir_1['nama_institusi'] = $this->input->post('nama_institusi_1');
			$data_informasi_pendidikan_terakhir_1['jurusan'] = $this->input->post('jurusan_1');
			$data_informasi_pendidikan_terakhir_1['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_1');
			$data_informasi_pendidikan_terakhir_1['nilai_akhir'] = $this->input->post('nilai_akhir_1');
			$data_informasi_pendidikan_terakhir_1['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_1);
			}
 
			if($this->input->post('nama_institusi_2')=="")
			{
			}
			else
			{
			$data_informasi_pendidikan_terakhir_2['tingkat'] = $this->input->post('tingkat_2');
			$data_informasi_pendidikan_terakhir_2['nama_institusi'] = $this->input->post('nama_institusi_2');
			$data_informasi_pendidikan_terakhir_2['jurusan'] = $this->input->post('jurusan_2');
			$data_informasi_pendidikan_terakhir_2['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_2');
			$data_informasi_pendidikan_terakhir_2['nilai_akhir'] = $this->input->post('nilai_akhir_2');
			$data_informasi_pendidikan_terakhir_2['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_2);
			}
			
			if($this->input->post('nama_institusi_3')=="")
			{
			}
			else
			{
			$data_informasi_pendidikan_terakhir_3['tingkat'] = $this->input->post('tingkat_3');
			$data_informasi_pendidikan_terakhir_3['nama_institusi'] = $this->input->post('nama_institusi_3');
			$data_informasi_pendidikan_terakhir_3['jurusan'] = $this->input->post('jurusan_3');
			$data_informasi_pendidikan_terakhir_3['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_3');
			$data_informasi_pendidikan_terakhir_3['nilai_akhir'] = $this->input->post('nilai_akhir_3');
			$data_informasi_pendidikan_terakhir_3['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_3);
			}
			
			if($this->input->post('nama_institusi_4')=="")
			{
			}
			else
			{
			$data_informasi_pendidikan_terakhir_4['tingkat'] = $this->input->post('tingkat_4');
			$data_informasi_pendidikan_terakhir_4['nama_institusi'] = $this->input->post('nama_institusi_4');
			$data_informasi_pendidikan_terakhir_4['jurusan'] = $this->input->post('jurusan_4');
			$data_informasi_pendidikan_terakhir_4['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_4');
			$data_informasi_pendidikan_terakhir_4['nilai_akhir'] = $this->input->post('nilai_akhir_4');
			$data_informasi_pendidikan_terakhir_4['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_4);
			}
			
			if($this->input->post('nama_institusi_5')=="")
			{
			}
			else
			{
			$data_informasi_pendidikan_terakhir_5['tingkat'] = $this->input->post('tingkat_5');
			$data_informasi_pendidikan_terakhir_5['nama_institusi'] = $this->input->post('nama_institusi_5');
			$data_informasi_pendidikan_terakhir_5['jurusan'] = $this->input->post('jurusan_5');
			$data_informasi_pendidikan_terakhir_5['tahun_kelulusan'] = $this->input->post('tahun_kelulusan_5');
			$data_informasi_pendidikan_terakhir_5['nilai_akhir'] = $this->input->post('nilai_akhir_5');
			$data_informasi_pendidikan_terakhir_5['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir_5);
			}
			
			if($this->input->post('organisasi_1')=="")
			{
			}
			else
			{
			$data_informasi_organisasi_1['organisasi'] = $this->input->post('organisasi_1');
			$data_informasi_organisasi_1['jabatan'] = $this->input->post('jabatan_organisasi_1');
			$data_informasi_organisasi_1['dari'] = $this->input->post('dari_organisasi_1');
			$data_informasi_organisasi_1['sampai'] = $this->input->post('sampai_organisasi_1');
			$data_informasi_organisasi_1['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_organisasi', $data_informasi_organisasi_1);  
			}
			
			if($this->input->post('organisasi_2')=="")
			{
			}
			else
			{
			$data_informasi_organisasi_2['organisasi'] = $this->input->post('organisasi_2');
			$data_informasi_organisasi_2['jabatan'] = $this->input->post('jabatan_organisasi_2');
			$data_informasi_organisasi_2['dari'] = $this->input->post('dari_organisasi_2');
			$data_informasi_organisasi_2['sampai'] = $this->input->post('sampai_organisasi_2');
			$data_informasi_organisasi_2['id_users'] = $this->session->userdata('ID');	
			
			$this->db->insert('tbl_informasi_organisasi', $data_informasi_organisasi_2);  
			}
			
			if($this->input->post('organisasi_3')=="")
			{
			}
			else
			{
			$data_informasi_organisasi_3['organisasi'] = $this->input->post('organisasi_3');
			$data_informasi_organisasi_3['jabatan'] = $this->input->post('jabatan_organisasi_3');
			$data_informasi_organisasi_3['dari'] = $this->input->post('dari_organisasi_3');
			$data_informasi_organisasi_3['sampai'] = $this->input->post('sampai_organisasi_3');
			$data_informasi_organisasi_3['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_organisasi', $data_informasi_organisasi_3);  
			}
			
			if($this->input->post('jabatan_1')=="")
			{
			}
			else
			{
			$data_informasi_pengalaman_kerja_1['perusahaan'] = $this->input->post('perusahaan_1');
			$data_informasi_pengalaman_kerja_1['jabatan'] = $this->input->post('jabatan_1');
			$data_informasi_pengalaman_kerja_1['dari'] = $this->input->post('dari_1');
			$data_informasi_pengalaman_kerja_1['sampai'] = $this->input->post('sampai_1');
			$data_informasi_pengalaman_kerja_1['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_pengalaman_kerja', $data_informasi_pengalaman_kerja_1);
			}
			
			if($this->input->post('jabatan_2')=="")
			{
			}
			else
			{
			$data_informasi_pengalaman_kerja_2['perusahaan'] = $this->input->post('perusahaan_2');
			$data_informasi_pengalaman_kerja_2['jabatan'] = $this->input->post('jabatan_2');
			$data_informasi_pengalaman_kerja_2['dari'] = $this->input->post('dari_2');
			$data_informasi_pengalaman_kerja_2['sampai'] = $this->input->post('sampai_2');
			$data_informasi_pengalaman_kerja_2['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_pengalaman_kerja', $data_informasi_pengalaman_kerja_2);
			}
			
			if($this->input->post('jabatan_3')=="")
			{
			}
			else
			{
			$data_informasi_pengalaman_kerja_3['perusahaan'] = $this->input->post('perusahaan_3');
			$data_informasi_pengalaman_kerja_3['jabatan'] = $this->input->post('jabatan_3');
			$data_informasi_pengalaman_kerja_3['dari'] = $this->input->post('dari_3');
			$data_informasi_pengalaman_kerja_3['sampai'] = $this->input->post('sampai_3');
			$data_informasi_pengalaman_kerja_3['id_users'] = $this->session->userdata('ID');
			
			$this->db->insert('tbl_informasi_pengalaman_kerja', $data_informasi_pengalaman_kerja_3);
			}		 
			  
			 	
			//fungsi upload cv
			$this->load->library('upload');
			$name=$this->input->post('nama'); 
			$nmfile = $name; //nama file saya beri nama langsung dan diikuti fungsi tanggal melamar
			$config['upload_path'] = 'assets/cv/'; //path folder
			$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
	 
			$this->upload->initialize($config);
			 
			$id_users['id_users']=$this->session->userdata('ID');
			
			if($_FILES['fileuploadcv']['name'])
			{
				if ($this->upload->do_upload('fileuploadcv'))
				{ 
					$cvr = $this->upload->data();
					$datacv = array(
					  'cv' =>$cvr['file_name']
					   
					);
	 
					$this->db->update('tbl_informasi_personal', $datacv,$id_users); 
				}
       		}
			
			//fungsi upload foto
			$this->load->library('upload');
			$name=$this->input->post('nama'); 
			$nmfile = $name; //nama file saya beri nama langsung dan diikuti fungsi tanggal melamar
			$config['upload_path'] = 'assets/foto/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
	 
			$this->upload->initialize($config);
			
			$id_users['id_users']=$this->session->userdata('ID');
					
			if($_FILES['filefoto']['name'])
			{
				if ($this->upload->do_upload('filefoto'))
				{
					
					$gbr = $this->upload->data();
					$datafoto = array(
					  'foto' =>$gbr['file_name']
					   
					);
	 		
			$this->db->update('tbl_informasi_personal', $datafoto,$id_users); 
				}
       		} 
			
			
			//fungsi upload ijazah
			$this->load->library('upload');
			$name=$this->input->post('nama'); 
			$nmfile = $name; //nama file saya beri nama langsung dan diikuti fungsi tanggal melamar
			$config['upload_path'] = 'assets/ijazah/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
	 
			$this->upload->initialize($config);
			
			$id_users['id_users']=$this->session->userdata('ID');
					
			if($_FILES['fileuploadijazah']['name'])
			{
				if ($this->upload->do_upload('fileuploadijazah'))
				{
					
					$ijzh = $this->upload->data();
					$dataijazah = array(
					  'ijazah' =>$ijzh['file_name']
					   
					);
	 		
			$this->db->update('tbl_informasi_personal', $dataijazah,$id_users); 
				}
       		} 
			
			
			header('location:'.base_url().'profile');
			
	}
	
	
	public function simpan()
	{	 	
			//fungsi simpan lamaran
			
			$id_users['id_users'] = $this->session->userdata('ID');
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
			 
			$this->db->update('tbl_informasi_personal', $data_informasi_personal, $id_users); 
			 
			 	
			//fungsi upload cv
			$this->load->library('upload');
			$name=$this->input->post('nama'); 
			$nmfile = $name; //nama file saya beri nama langsung dan diikuti fungsi tanggal melamar
			$config['upload_path'] = 'assets/cv/'; //path folder
			$config['allowed_types'] = 'pdf|doc|docx|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
	 
			$this->upload->initialize($config);
			 
			$id_users['id_users']=$this->session->userdata('ID');
			
			if($_FILES['fileuploadcv']['name'])
			{
				if ($this->upload->do_upload('fileuploadcv'))
				{ 
					$cvr = $this->upload->data();
					$datacv = array(
					  'cv' =>$cvr['file_name']
					   
					);
	 
					$this->db->update('tbl_informasi_personal', $datacv,$id_users); 
				}
       		}
			
			//fungsi upload foto
			$this->load->library('upload');
			$name=$this->input->post('nama'); 
			$nmfile = $name; //nama file saya beri nama langsung dan diikuti fungsi tanggal melamar
			$config['upload_path'] = 'assets/foto/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
	 
			$this->upload->initialize($config);
			
			$id_users['id_users']=$this->session->userdata('ID');
					
			if($_FILES['filefoto']['name'])
			{
				if ($this->upload->do_upload('filefoto'))
				{
					
					$gbr = $this->upload->data();
					$datafoto = array(
					  'foto' =>$gbr['file_name']
					   
					);
	 		
			$this->db->update('tbl_informasi_personal', $datafoto,$id_users); 
				}
       		} 
			
			
			//fungsi upload ijazah
			$this->load->library('upload');
			$name=$this->input->post('nama'); 
			$nmfile = $name; //nama file saya beri nama langsung dan diikuti fungsi tanggal melamar
			$config['upload_path'] = 'assets/ijazah/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
	 
			$this->upload->initialize($config);
			
			$id_users['id_users']=$this->session->userdata('ID');
					
			if($_FILES['fileuploadijazah']['name'])
			{
				if ($this->upload->do_upload('fileuploadijazah'))
				{
					
					$ijzh = $this->upload->data();
					$dataijazah = array(
					  'ijazah' =>$ijzh['file_name']
					   
					);
	 		
			$this->db->update('tbl_informasi_personal', $dataijazah,$id_users); 
				}
       		} 
			
			
			header('location:'.base_url().'profile');
			
	}
	
	function simpan_tambah_pendidikan_terakhir()
	{
			$data_informasi_pendidikan_terakhir['tingkat'] = $this->input->post('tingkat');
			$data_informasi_pendidikan_terakhir['nama_institusi'] = $this->input->post('nama_institusi');
			$data_informasi_pendidikan_terakhir['jurusan'] = $this->input->post('jurusan');
			$data_informasi_pendidikan_terakhir['tahun_kelulusan'] = $this->input->post('tahun_kelulusan');
			$data_informasi_pendidikan_terakhir['nilai_akhir'] = $this->input->post('nilai_akhir');
			$data_informasi_pendidikan_terakhir['id_users']=$this->session->userdata('ID'); 
			
			$this->db->insert('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir); 
			
			header('location:'.base_url().'profile');		
	}
	
	function simpan_edit_pendidikan_terakhir()
	{
			$data_informasi_pendidikan_terakhir['tingkat'] = $this->input->post('tingkat');
			$data_informasi_pendidikan_terakhir['nama_institusi'] = $this->input->post('nama_institusi');
			$data_informasi_pendidikan_terakhir['jurusan'] = $this->input->post('jurusan');
			$data_informasi_pendidikan_terakhir['tahun_kelulusan'] = $this->input->post('tahun_kelulusan');
			$data_informasi_pendidikan_terakhir['nilai_akhir'] = $this->input->post('nilai_akhir');
			$id_pendidikan_terakhir['id_pendidikan_terakhir'] = $this->input->post('id_pendidikan_terakhir');
			
			$this->db->update('tbl_informasi_pendidikan_terakhir', $data_informasi_pendidikan_terakhir,$id_pendidikan_terakhir); 
			
			header('location:'.base_url().'profile');		
	}
	
	function hapus_pendidikan_terakhir()
	{
			
			$id_pendidikan_terakhir['id_pendidikan_terakhir'] = $this->uri->segment(3); 
			
			$this->db->delete('tbl_informasi_pendidikan_terakhir', $id_pendidikan_terakhir); 
			
			header('location:'.base_url().'profile');		
	}
	
	
	function simpan_tambah_organisasi()
	{
			$data_organisasi['organisasi'] = $this->input->post('organisasi');
			$data_organisasi['jabatan'] = $this->input->post('jabatan');
			$data_organisasi['dari'] = $this->input->post('dari');
			$data_organisasi['sampai'] = $this->input->post('sampai'); 
			$data_organisasi['id_users']=$this->session->userdata('ID'); 
			
			$this->db->insert('tbl_informasi_organisasi', $data_organisasi); 
			
			header('location:'.base_url().'profile');		
	}
	
	function simpan_edit_organisasi()
	{
			$data_organisasi['organisasi'] = $this->input->post('organisasi');
			$data_organisasi['jabatan'] = $this->input->post('jabatan');
			$data_organisasi['dari'] = $this->input->post('dari');
			$data_organisasi['sampai'] = $this->input->post('sampai'); 
			$id_organisasi['id_organisasi'] = $this->input->post('id_organisasi');
			
			$this->db->update('tbl_informasi_organisasi', $data_organisasi,$id_organisasi); 
			
			header('location:'.base_url().'profile');		
	}
	
	function hapus_organisasi()
	{
			
			$id_organisasi['id_organisasi'] = $this->uri->segment(3); 
			
			$this->db->delete('tbl_informasi_organisasi', $id_organisasi); 
			
			header('location:'.base_url().'profile');		
	}
	
	
	function simpan_tambah_pengalaman_kerja()
	{
			$data_pengalaman_kerja['perusahaan'] = $this->input->post('perusahaan');
			$data_pengalaman_kerja['jabatan'] = $this->input->post('jabatan');
			$data_pengalaman_kerja['dari'] = $this->input->post('dari');
			$data_pengalaman_kerja['sampai'] = $this->input->post('sampai'); 
			$data_pengalaman_kerja['id_users']=$this->session->userdata('ID'); 
			
			$this->db->insert('tbl_informasi_pengalaman_kerja', $data_pengalaman_kerja); 
			
			header('location:'.base_url().'profile');		
	}
	
	function simpan_edit_pengalaman_kerja()
	{
			$data_pengalaman_kerja['perusahaan'] = $this->input->post('perusahaan');
			$data_pengalaman_kerja['jabatan'] = $this->input->post('jabatan');
			$data_pengalaman_kerja['dari'] = $this->input->post('dari');
			$data_pengalaman_kerja['sampai'] = $this->input->post('sampai'); 
			$id_pengalaman_kerja['id_pengalaman_kerja'] = $this->input->post('id_pengalaman_kerja');
			
			$this->db->update('tbl_informasi_pengalaman_kerja', $data_pengalaman_kerja,$id_pengalaman_kerja); 
			
			header('location:'.base_url().'profile');		
	}
	
	function hapus_pengalaman_kerja()
	{
			
			$id_pengalaman_kerja['id_pengalaman_kerja'] = $this->uri->segment(3); 
			
			$this->db->delete('tbl_informasi_pengalaman_kerja', $id_pengalaman_kerja); 
			
			header('location:'.base_url().'profile');		
	}
}
