<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class laporan extends CI_Controller {
function __construct(){
        parent::__construct();
        if($this->session->userdata('login_status') != TRUE ){
            $this->session->set_flashdata('notif','LOGIN GAGAL USERNAME ATAU PASSWORD ANDA SALAH !');
            redirect('admin');
        };
        $this->load->model('model_admin');
        $this->load->library('Excel_generator');
		$this->load->library('cart');
        //$this->load->helper('currency_format_helper');
    }
	
	
	
	public function index()
	{
				
		if ($this->session->userdata('LEVEL') == 'Administrator') { 
        $data=array(
            'title'=>'Laporan',
            'data_lowongan'=>$this->model_admin->getAllDataLowonganAktif(),
            'data_kategori'=>$this->model_admin->getAllData('tbl_master_kategori_lowongan'),    
            'active_laporan'=>'active',      
			 );
		
        $this->load->view('dashboard/element/v_header',$data);
        $this->load->view('dashboard/laporan/home');
        $this->load->view('dashboard/element/v_footer');

        $this->session->unset_userdata('limit_add_cart');
        $this->cart->destroy();
		}

	}


	//   Laporan Pelamar
	public function laporan_pelamar() {
		if($this->input->post('id_lowongan')<>'all' and $this->input->post('status_aplikasi')<>'all' and ($this->input->post('tanggal_awal')=='' or $this->input->post('tanggal_akhir')=='' ))
		{
        $query = $this->model_admin->getDataPelamarLowonganTertentuStatusTertentuTanpaTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('No Aplikasi','Nama','Pendidikan Terakhir','Tanggal Melamar','Status Aplikasi','Lowongan','Jadwal Interview Pelamar','Kehadiran Interview','Hasil Interview','Yang Interview','Hasil Tes Logika','Hasil Tes Bahasa Inggris','Yang Mengetes'));
        $this->excel_generator->set_column(array('no_aplikasi','nama','pendidikan_terakhir','tanggal_melamar','status_aplikasi',		'judul_lowongan','jadwal_pelamar_interview','hadir','hasil_interview','interviewer','logika','bahasa_inggris','tester')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan getDataPelamarLowonganTertentuStatusTertentuTanpaTanggal');
		}
		
		else if($this->input->post('id_lowongan')<>'all' and $this->input->post('status_aplikasi')<>'all' and ($this->input->post('tanggal_awal')<>'' or $this->input->post('tanggal_akhir')<>'' ))
		{
        $query = $this->model_admin->getDataPelamarLowonganTertentuStatusTertentuDenganTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('No Aplikasi','Nama','Pendidikan Terakhir','Tanggal Melamar','Status Aplikasi','Lowongan','Jadwal Interview Pelamar','Kehadiran Interview','Hasil Interview','Yang Interview','Hasil Tes Logika','Hasil Tes Bahasa Inggris','Yang Mengetes'));
        $this->excel_generator->set_column(array('no_aplikasi','nama','pendidikan_terakhir','tanggal_melamar','status_aplikasi',		'judul_lowongan','jadwal_pelamar_interview','hadir','hasil_interview','interviewer','logika','bahasa_inggris','tester')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan getDataPelamarLowonganTertentuStatusTertentuDenganTanggal');
		}
		
		else if($this->input->post('id_lowongan')=='all' and $this->input->post('status_aplikasi')<>'all' and ($this->input->post('tanggal_awal')=='' or $this->input->post('tanggal_akhir')=='') )
		{
        $query = $this->model_admin->getDataPelamarSemuaLowonganStatusTertentuTanpaTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('No Aplikasi','Nama','Pendidikan Terakhir','Tanggal Melamar','Status Aplikasi','Lowongan','Jadwal Interview Pelamar','Kehadiran Interview','Hasil Interview','Yang Interview','Hasil Tes Logika','Hasil Tes Bahasa Inggris','Yang Mengetes'));
        $this->excel_generator->set_column(array('no_aplikasi','nama','pendidikan_terakhir','tanggal_melamar','status_aplikasi',		'judul_lowongan','jadwal_pelamar_interview','hadir','hasil_interview','interviewer','logika','bahasa_inggris','tester')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan getDataPelamarSemuaLowonganStatusTertentuTanpaTanggal');
		}
		
		else if($this->input->post('id_lowongan')=='all' and $this->input->post('status_aplikasi')<>'all' and ($this->input->post('tanggal_awal')<>'' or $this->input->post('tanggal_akhir')<>'' ))
		{
        $query = $this->model_admin->getDataPelamarSemuaLowonganStatusTertentuDenganTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('No Aplikasi','Nama','Pendidikan Terakhir','Tanggal Melamar','Status Aplikasi','Lowongan','Jadwal Interview Pelamar','Kehadiran Interview','Hasil Interview','Yang Interview','Hasil Tes Logika','Hasil Tes Bahasa Inggris','Yang Mengetes'));
        $this->excel_generator->set_column(array('no_aplikasi','nama','pendidikan_terakhir','tanggal_melamar','status_aplikasi',		'judul_lowongan','jadwal_pelamar_interview','hadir','hasil_interview','interviewer','logika','bahasa_inggris','tester')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan getDataPelamarSemuaLowonganStatusTertentuDenganTanggal');
		}
		
		else if($this->input->post('id_lowongan')<>'all' and $this->input->post('status_aplikasi')=='all' and ($this->input->post('tanggal_awal')=='' or $this->input->post('tanggal_akhir')=='' ))
		{
        $query = $this->model_admin->getDataPelamarLowonganTertentuSemuaStatusTanpaTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('No Aplikasi','Nama','Pendidikan Terakhir','Tanggal Melamar','Status Aplikasi','Lowongan','Jadwal Interview Pelamar','Kehadiran Interview','Hasil Interview','Yang Interview','Hasil Tes Logika','Hasil Tes Bahasa Inggris','Yang Mengetes'));
        $this->excel_generator->set_column(array('no_aplikasi','nama','pendidikan_terakhir','tanggal_melamar','status_aplikasi',		'judul_lowongan','jadwal_pelamar_interview','hadir','hasil_interview','interviewer','logika','bahasa_inggris','tester')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan getDataPelamarLowonganTertentuSemuaStatusTanpaTanggal');
		}
		
		else if($this->input->post('id_lowongan')<>'all' and $this->input->post('status_aplikasi')=='all' and ($this->input->post('tanggal_awal')<>'' or $this->input->post('tanggal_akhir')<>'' ))
		{
        $query = $this->model_admin->getDataPelamarLowonganTertentuSemuaStatusDenganTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('No Aplikasi','Nama','Pendidikan Terakhir','Tanggal Melamar','Status Aplikasi','Lowongan','Jadwal Interview Pelamar','Kehadiran Interview','Hasil Interview','Yang Interview','Hasil Tes Logika','Hasil Tes Bahasa Inggris','Yang Mengetes'));
        $this->excel_generator->set_column(array('no_aplikasi','nama','pendidikan_terakhir','tanggal_melamar','status_aplikasi',		'judul_lowongan','jadwal_pelamar_interview','hadir','hasil_interview','interviewer','logika','bahasa_inggris','tester')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan getDataPelamarLowonganTertentuSemuaStatusDenganTanggal');
		}
		
		else if($this->input->post('id_lowongan')=='all' and $this->input->post('status_aplikasi')=='all' and ($this->input->post('tanggal_awal')=='' or $this->input->post('tanggal_akhir')==''))
		{
        $query = $this->model_admin->getDataPelamarSemuaLowonganSemuaStatusTanpaTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('No Aplikasi','Nama','Pendidikan Terakhir','Tanggal Melamar','Status Aplikasi','Lowongan','Jadwal Interview Pelamar','Kehadiran Interview','Hasil Interview','Yang Interview','Hasil Tes Logika','Hasil Tes Bahasa Inggris','Yang Mengetes'));
        $this->excel_generator->set_column(array('no_aplikasi','nama','pendidikan_terakhir','tanggal_melamar','status_aplikasi',		'judul_lowongan','jadwal_pelamar_interview','hadir','hasil_interview','interviewer','logika','bahasa_inggris','tester')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan getDataPelamarSemuaLowonganSemuaStatusTanpaTanggal');
		}
		
		else if($this->input->post('id_lowongan')=='all' and $this->input->post('status_aplikasi')=='all' and ($this->input->post('tanggal_awal')<>'' or $this->input->post('tanggal_akhir')<>'' ))
		{
        $query = $this->model_admin->getDataPelamarSemuaLowonganSemuaStatusDenganTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('No Aplikasi','Nama','Pendidikan Terakhir','Tanggal Melamar','Status Aplikasi','Lowongan','Jadwal Interview Pelamar','Kehadiran Interview','Hasil Interview','Yang Interview','Hasil Tes Logika','Hasil Tes Bahasa Inggris','Yang Mengetes'));
        $this->excel_generator->set_column(array('no_aplikasi','nama','pendidikan_terakhir','tanggal_melamar','status_aplikasi',		'judul_lowongan','jadwal_pelamar_interview','hadir','hasil_interview','interviewer','logika','bahasa_inggris','tester')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan getDataPelamarSemuaLowonganSemuaStatusDenganTanggal');
		}
		
	}	

	
	//   Laporan lowongan
	public function laporan_lowongan() {
		
		if($this->input->post('id_kategori')<>'all' and ($this->input->post('tanggal_awal')=='' or $this->input->post('tanggal_akhir')=='' ))
		{
        $query = $this->model_admin->getLaporanLowonganTanpaTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('Kategori Lowongan','Posisi Lowongan','Tanggal Posting','Jumlah Pelamar'));
        $this->excel_generator->set_column(array('nama_kategori','judul_lowongan','tanggal_posting','pelamar')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan');
		}
		
		else if($this->input->post('id_kategori')<>'all' and ($this->input->post('tanggal_awal')<>'' or $this->input->post('tanggal_akhir')<>'' ))
		{
        $query = $this->model_admin->getLaporanLowonganDenganTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('Kategori Lowongan','Posisi Lowongan','Tanggal Posting','Jumlah Pelamar'));
        $this->excel_generator->set_column(array('nama_kategori','judul_lowongan','tanggal_posting','pelamar')); 
        $this->excel_generator->exportTo2007('Laporan Lowongan');
		}
		
		else if($this->input->post('id_kategori')=='all' and ($this->input->post('tanggal_awal')=='' or $this->input->post('tanggal_akhir')=='') )
		{
        $query = $this->model_admin->getAllLaporanLowonganTanpaTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('Kategori Lowongan','Posisi Lowongan','Tanggal Posting','Jumlah Pelamar'));
        $this->excel_generator->set_column(array('nama_kategori','judul_lowongan','tanggal_posting','pelamar')); 
        $this->excel_generator->exportTo2007('Laporan Semua Lowongan');
		}
		
		else if($this->input->post('id_kategori')=='all' and ($this->input->post('tanggal_awal')<>'' or $this->input->post('tanggal_akhir')<>'' ))
		{
        $query = $this->model_admin->getAllLaporanLowonganDenganTanggal();
        $this->excel_generator->set_query($query);
        $this->excel_generator->set_header(array('Kategori Lowongan','Posisi Lowongan','Tanggal Posting','Jumlah Pelamar'));
        $this->excel_generator->set_column(array('nama_kategori','judul_lowongan','tanggal_posting','pelamar')); 
        $this->excel_generator->exportTo2007('Laporan Semua Lowongan');
		}
	}
    
	
}
