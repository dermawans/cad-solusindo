<?php 

class Model_admin extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	// Bagian Login	=================	
	function login($username, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);
		
        //get query and processing
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->result(); //if data is true
        } else {
            return false; //if data is wrong
        }
    }
	// Bagian Login	=================
	
	// Untuk Dipakai Semua Bagian =================
	public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
	
	public function getSelectedData($table,$data)
    {
        return $this->db->get_where($table, $data);
    }
	
	function insertData($table,$data)
    {
        $this->db->insert($table,$data);
	} 
	 
    function updateData($table,$data,$field_key)
    {
        $this->db->update($table,$data,$field_key);
    }
	// Untuk Dipakai Semua Bagian =================
	
	
	// Lowongan Pekerjaan Aktif =================
	function getAllDataLowonganAktif(){
        return $this->db->query("select distinct
		a.id_kategori,a.nama_kategori,b.id_lowongan,b.judul_lowongan,b.isi_lowongan,b.tanggal_posting,b.status_terbit,b.pelamar,b.dibuat_oleh
			from tbl_master_kategori_lowongan a left join tbl_master_lowongan b on a.id_kategori=b.id_kategori where b.status_terbit=1
		")->result();
    }
	// Lowongan Pekerjaan Aktif =================
	
	// Hitung jumlah pelamar
	function getJumlahAllDataPelamar(){
		return $this->db->query("select * from tbl_data_pelamar");	
    }
	// Hitung jumlah pelamar
	
	// Hitung jumlah lowongan aktif
	function getJumlahAllDataLowonganAktif(){
		return $this->db->query("select * from tbl_master_lowongan where status_terbit=1
		");	
    }
	// Hitung jumlah lowongan aktif
	
	// Lowongan Pekerjaan =================
	function getAllDataLowongan(){
        return $this->db->query("select distinct
		a.id_kategori,a.nama_kategori,b.id_lowongan,b.judul_lowongan,b.isi_lowongan,b.tanggal_posting,b.status_terbit,b.pelamar,b.dibuat_oleh
			from tbl_master_kategori_lowongan a left join tbl_master_lowongan b on a.id_kategori=b.id_kategori where b.id_lowongan <>'NULL'
		")->result();
    }
	// Lowongan Pekerjaan =================
	
	// Ambil data semua pelamar
	function getAllDataPelamar(){
		return $this->db->query("select distinct
		a.id_users,a.nama,a.pendidikan_terakhir,b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,c.judul_lowongan
			from tbl_informasi_personal a left join tbl_data_pelamar b on a.id_users=b.id_users 
			left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
			order by a.id_users desc
		")->result();
    }
	// Ambil data semua pelamar
	
	// ambil data informasi personal pelamar
	function getDataInformasiPersonalPelamar(){
		$no_aplikasi = array();
		$no_aplikasi = $this->uri->segment(3);
		return $this->db->query("
		select distinct
a.no_aplikasi,a.nama,a.no_ktp,a.tempat_lahir,a.tanggal_lahir,a.jenis_kelamin,a.agama,a.alamat_domisili,a.rt_domisili,a.rw_domisili,a.kota_domisili,a.kodepos_domisili,a.email,a.no_telepon,a.no_handphone,a.kerabat_yang_dapat_dihubungi,a.hubungan_kerabat_yang_dapat_dihubungi,a.no_telepon_kerabat_yang_dapat_dihubungi,a.status_perkawinan,a.pendidikan_terakhir,a.cv,a.foto,
		b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,
		c.judul_lowongan
		from tbl_informasi_personal a left join tbl_data_pelamar b on a.no_aplikasi=b.no_aplikasi
		left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
		where a.no_aplikasi='".$no_aplikasi."'
		order by a.no_aplikasi asc
		")->result();
	}
	// ambil  data informasi personal pelamar
	
	// ambil data pendidikan terakhir pelamar
	function getDataPendidikanTerakhirPelamar(){
		$no_aplikasi = array();
		$no_aplikasi = $this->uri->segment(3);
        return $this->db->query("select * from tbl_informasi_pendidikan_terakhir where no_aplikasi='".$no_aplikasi."' order by id_pendidikan_terakhir asc
		")->result();
    }
	// ambil data  pendidikan terakhir pelamar
	
	
	// ambil data organisasi pelamar
	function getDataOrganisasiPelamar(){
		$no_aplikasi = array();
		$no_aplikasi = $this->uri->segment(3);
        return $this->db->query("select * from tbl_informasi_organisasi where no_aplikasi='".$no_aplikasi."' order by id_organisasi asc
		")->result();
    }
	// ambil data organisasi pelamar
	
	// ambil data pengalaman kerja pelamar
	function getDataPengalamanKerjaPelamar(){
		$no_aplikasi = array();
		$no_aplikasi = $this->uri->segment(3);
        return $this->db->query("select * from tbl_informasi_pengalaman_kerja where no_aplikasi='".$no_aplikasi."' order by id_pengalaman_kerja asc
		")->result();
    }
	// ambil data pengalaman kerja pelamar
	
	
	// ambil data interview pelamar
	function getDataInterviewPelamar(){
		$no_aplikasi = array();
		$no_aplikasi = $this->uri->segment(3);
        return $this->db->query("select * from tbl_data_interview_pelamar where no_aplikasi='".$no_aplikasi."' order by id_interview asc
		")->result();
    }
	// ambil data interview pelamar
	
	
	// ambil data tes pelamar
	function getDataTesPelamar(){
		$no_aplikasi = array();
		$no_aplikasi = $this->uri->segment(3);
        return $this->db->query("select * from tbl_hasil_tes_pelamar where no_aplikasi='".$no_aplikasi."' order by id_hasil_tes asc
		")->result();
    }
	// ambil data tes pelamar
	
	
	
	
//    DELETE DATA KATEGORI LOWONGAN
    function deleteKategori($id_kategori){
        $this->db->where('id_kategori',$id_kategori);
        $delete = $this->db->delete('tbl_master_kategori_lowongan');
        return $delete;
    }	
	
	
//    DELETE DATA LOWONGAN
    function deleteLowongan($id_lowongan){
        $this->db->where('id_lowongan',$id_lowongan);
        $delete = $this->db->delete('tbl_master_lowongan');
        return $delete;
    }		
	
	
	
	// laporan data pelamar 
	
	function getDataPelamarLowonganTertentuStatusTertentuTanpaTanggal(){
		$id_lowongan = array();
		$status_aplikasi = array(); 
		$id_lowongan = $this->input->post('id_lowongan');
		$status_aplikasi = $this->input->post('status_aplikasi'); 
		return $this->db->query("
		select distinct
		a.no_aplikasi,a.nama,a.pendidikan_terakhir,
		b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,
		c.judul_lowongan,
		d.jadwal_pelamar_interview,d.hadir,d.hasil_interview,d.interviewer,
		e.logika,e.bahasa_inggris,e.tester
			from tbl_informasi_personal a left join tbl_data_pelamar b on a.no_aplikasi=b.no_aplikasi 
			left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
			left join tbl_data_interview_pelamar d on a.no_aplikasi=d.no_aplikasi
			left join tbl_hasil_tes_pelamar e on a.no_aplikasi=e.no_aplikasi
		where c.id_lowongan = '".$id_lowongan."' and b.status_aplikasi = '".$status_aplikasi."'
		order by a.no_aplikasi asc
		");
	}	 
	
	function getDataPelamarLowonganTertentuStatusTertentuDenganTanggal(){
		$id_lowongan = array();
		$status_aplikasi = array();
		$tanggal_awal = array();
		$tanggal_akhir = array();
		$id_lowongan = $this->input->post('id_lowongan');
		$status_aplikasi = $this->input->post('status_aplikasi');
		$tanggal_awal = $this->input->post('tanggal_awal');
		$tanggal_akhir = $this->input->post('tanggal_akhir');
		return $this->db->query("
		select distinct
		a.no_aplikasi,a.nama,a.pendidikan_terakhir,
		b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,
		c.judul_lowongan,
		d.jadwal_pelamar_interview,d.hadir,d.hasil_interview,d.interviewer,
		e.logika,e.bahasa_inggris,e.tester
			from tbl_informasi_personal a left join tbl_data_pelamar b on a.no_aplikasi=b.no_aplikasi 
			left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
			left join tbl_data_interview_pelamar d on a.no_aplikasi=d.no_aplikasi
			left join tbl_hasil_tes_pelamar e on a.no_aplikasi=e.no_aplikasi
		where c.id_lowongan = '".$id_lowongan."' and b.status_aplikasi = '".$status_aplikasi."' and b.tanggal_melamar between '".$tanggal_awal."' and '".$tanggal_akhir."'
		order by a.no_aplikasi asc
		");
	}	 
	
	function getDataPelamarSemuaLowonganStatusTertentuTanpaTanggal(){ 
		$status_aplikasi = array();  
		$status_aplikasi = $this->input->post('status_aplikasi'); 
		return $this->db->query("
		select distinct
		a.no_aplikasi,a.nama,a.pendidikan_terakhir,
		b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,
		c.judul_lowongan,
		d.jadwal_pelamar_interview,d.hadir,d.hasil_interview,d.interviewer,
		e.logika,e.bahasa_inggris,e.tester
			from tbl_informasi_personal a left join tbl_data_pelamar b on a.no_aplikasi=b.no_aplikasi 
			left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
			left join tbl_data_interview_pelamar d on a.no_aplikasi=d.no_aplikasi
			left join tbl_hasil_tes_pelamar e on a.no_aplikasi=e.no_aplikasi
		where b.status_aplikasi = '".$status_aplikasi."'  
		order by a.no_aplikasi asc
		");
	}	 
	
	function getDataPelamarSemuaLowonganStatusTertentuDenganTanggal(){ 
		$status_aplikasi = array();
		$tanggal_awal = array();
		$tanggal_akhir = array(); 
		$status_aplikasi = $this->input->post('status_aplikasi');
		$tanggal_awal = $this->input->post('tanggal_awal');
		$tanggal_akhir = $this->input->post('tanggal_akhir');
		return $this->db->query("
		select distinct
		a.no_aplikasi,a.nama,a.pendidikan_terakhir,
		b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,
		c.judul_lowongan,
		d.jadwal_pelamar_interview,d.hadir,d.hasil_interview,d.interviewer,
		e.logika,e.bahasa_inggris,e.tester
			from tbl_informasi_personal a left join tbl_data_pelamar b on a.no_aplikasi=b.no_aplikasi 
			left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
			left join tbl_data_interview_pelamar d on a.no_aplikasi=d.no_aplikasi
			left join tbl_hasil_tes_pelamar e on a.no_aplikasi=e.no_aplikasi
		where  b.status_aplikasi = '".$status_aplikasi."' and b.tanggal_melamar between '".$tanggal_awal."' and '".$tanggal_akhir."'
		order by a.no_aplikasi asc
		");
	}	 
	
	function getDataPelamarLowonganTertentuSemuaStatusTanpaTanggal(){
		$id_lowongan = array(); 
		$id_lowongan = $this->input->post('id_lowongan'); 		
		return $this->db->query("
		select distinct
		a.no_aplikasi,a.nama,a.pendidikan_terakhir,
		b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,
		c.judul_lowongan,
		d.jadwal_pelamar_interview,d.hadir,d.hasil_interview,d.interviewer,
		e.logika,e.bahasa_inggris,e.tester
			from tbl_informasi_personal a left join tbl_data_pelamar b on a.no_aplikasi=b.no_aplikasi 
			left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
			left join tbl_data_interview_pelamar d on a.no_aplikasi=d.no_aplikasi
			left join tbl_hasil_tes_pelamar e on a.no_aplikasi=e.no_aplikasi
		where c.id_lowongan = '".$id_lowongan."' 
		order by a.no_aplikasi asc
		");
	}	 
	
	function getDataPelamarLowonganTertentuSemuaStatusDenganTanggal(){
		$id_lowongan = array(); 
		$tanggal_awal = array();
		$tanggal_akhir = array();
		$id_lowongan = $this->input->post('id_lowongan'); 
		$tanggal_awal = $this->input->post('tanggal_awal');
		$tanggal_akhir = $this->input->post('tanggal_akhir');
		return $this->db->query("
		select distinct
		a.no_aplikasi,a.nama,a.pendidikan_terakhir,
		b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,
		c.judul_lowongan,
		d.jadwal_pelamar_interview,d.hadir,d.hasil_interview,d.interviewer,
		e.logika,e.bahasa_inggris,e.tester
			from tbl_informasi_personal a left join tbl_data_pelamar b on a.no_aplikasi=b.no_aplikasi 
			left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
			left join tbl_data_interview_pelamar d on a.no_aplikasi=d.no_aplikasi
			left join tbl_hasil_tes_pelamar e on a.no_aplikasi=e.no_aplikasi
		where c.id_lowongan = '".$id_lowongan."' and b.tanggal_melamar between '".$tanggal_awal."' and '".$tanggal_akhir."'
		order by a.no_aplikasi asc
		");
	}	 
	
	function getDataPelamarSemuaLowonganSemuaStatusTanpaTanggal(){ 
		return $this->db->query("
		select distinct
		a.no_aplikasi,a.nama,a.pendidikan_terakhir,
		b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,
		c.judul_lowongan,
		d.jadwal_pelamar_interview,d.hadir,d.hasil_interview,d.interviewer,
		e.logika,e.bahasa_inggris,e.tester
			from tbl_informasi_personal a left join tbl_data_pelamar b on a.no_aplikasi=b.no_aplikasi 
			left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
			left join tbl_data_interview_pelamar d on a.no_aplikasi=d.no_aplikasi
			left join tbl_hasil_tes_pelamar e on a.no_aplikasi=e.no_aplikasi
		order by a.no_aplikasi asc
		");
	}	 
	
	function getDataPelamarSemuaLowonganSemuaStatusDenganTanggal(){ 
		$tanggal_awal = array();
		$tanggal_akhir = array(); 
		$tanggal_awal = $this->input->post('tanggal_awal');
		$tanggal_akhir = $this->input->post('tanggal_akhir');
		return $this->db->query("
		select distinct
		a.no_aplikasi,a.nama,a.pendidikan_terakhir,
		b.tanggal_melamar,b.id_lowongan,b.status_aplikasi,
		c.judul_lowongan,
		d.jadwal_pelamar_interview,d.hadir,d.hasil_interview,d.interviewer,
		e.logika,e.bahasa_inggris,e.tester
			from tbl_informasi_personal a left join tbl_data_pelamar b on a.no_aplikasi=b.no_aplikasi 
			left join tbl_master_lowongan c on b.id_lowongan=c.id_lowongan
			left join tbl_data_interview_pelamar d on a.no_aplikasi=d.no_aplikasi
			left join tbl_hasil_tes_pelamar e on a.no_aplikasi=e.no_aplikasi
		where b.tanggal_melamar between '".$tanggal_awal."' and '".$tanggal_akhir."'
		order by a.no_aplikasi asc
		");
	}	 
	
	// ambil data lowongan
	function getAllLaporanLowonganTanpaTanggal(){
        return $this->db->query("select distinct
		a.id_kategori,a.nama_kategori,b.id_lowongan,b.judul_lowongan,b.isi_lowongan,b.tanggal_posting,b.status_terbit,b.pelamar,b.dibuat_oleh
			from tbl_master_kategori_lowongan a left join tbl_master_lowongan b on a.id_kategori=b.id_kategori
		order by b.id_lowongan desc
		");
    }
	
	function getAllLaporanLowonganDenganTanggal(){
        $tanggal_awal = array();
		$tanggal_akhir = array();
		$tanggal_awal = $this->input->post('tanggal_awal');
		$tanggal_akhir = $this->input->post('tanggal_akhir');
		return $this->db->query("select distinct
		a.id_kategori,a.nama_kategori,b.id_lowongan,b.judul_lowongan,b.isi_lowongan,b.tanggal_posting,b.status_terbit,b.pelamar,b.dibuat_oleh
			from tbl_master_kategori_lowongan a left join tbl_master_lowongan b on a.id_kategori=b.id_kategori
		where b.tanggal_posting between '".$tanggal_awal."' and '".$tanggal_akhir."'
		order by b.id_lowongan desc
		");
    }
	 
	function getLaporanLowonganDenganTanggal(){
        $id_kategori = array();
        $tanggal_awal = array();
		$tanggal_akhir = array();
		$tanggal_awal = $this->input->post('tanggal_awal');
		$tanggal_akhir = $this->input->post('tanggal_akhir');
		$id_kategori = $this->input->post('id_kategori');
		return $this->db->query("select distinct
		a.id_kategori,a.nama_kategori,b.id_lowongan,b.judul_lowongan,b.isi_lowongan,b.tanggal_posting,b.status_terbit,b.pelamar,b.dibuat_oleh
			from tbl_master_kategori_lowongan a left join tbl_master_lowongan b on a.id_kategori=b.id_kategori
		where a.id_kategori = '".$id_kategori."' and b.tanggal_posting between '".$tanggal_awal."' and '".$tanggal_akhir."'
		order by b.id_lowongan desc
		");
    }
	
	function getLaporanLowonganTanpaTanggal(){
        $id_kategori = array(); 
		$id_kategori = $this->input->post('id_kategori');
		return $this->db->query("select distinct
		a.id_kategori,a.nama_kategori,b.id_lowongan,b.judul_lowongan,b.isi_lowongan,b.tanggal_posting,b.status_terbit,b.pelamar,b.dibuat_oleh
			from tbl_master_kategori_lowongan a left join tbl_master_lowongan b on a.id_kategori=b.id_kategori
		where a.id_kategori = '".$id_kategori."'
		order by b.id_lowongan desc
		");
    }
	
	
}
	
	 
	
	

