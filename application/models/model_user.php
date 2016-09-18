<?php 

class Model_user extends CI_Model{
    function __construct(){
        parent::__construct();
    }

	//  Login	=================	
	function login($email, $password) {
        //create query to connect user login database
        $this->db->select('*');
        $this->db->from('tbl_users');
        $this->db->where('email', $email);
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

	//Register
	 public function cekEmail($email){
        $this->db->where('email',$email);
        $query = $this->db->get('tbl_users');
        return $query->result();
    }
	 public function cekUsername($username){
        $this->db->where('username',$username);
        $query = $this->db->get('tbl_users');
        return $query->result();
    }
	
	 public function registerUser($data){
        $query = $this->db->insert('tbl_users',$data);
        return $query;
    }
	
	// Ambil data =================
	public function getAllData($table)
    {
        return $this->db->get($table)->result();
    }
	
	// Lowongan Pekerjaan Aktif =================
	function getAllDataLowonganAktif(){
        return $this->db->query("select distinct
		a.id_kategori,a.nama_kategori,b.id_lowongan,b.judul_lowongan,b.isi_lowongan,b.tanggal_posting,b.status_terbit,b.pelamar,b.dibuat_oleh
			from tbl_master_kategori_lowongan a left join tbl_master_lowongan b on a.id_kategori=b.id_kategori where b.status_terbit=1
		")->result();
    }
	
	//cek data pelamar
	 public function cekData($id_users){
        $this->db->where('id_users',$id_users);
        $query = $this->db->get('tbl_informasi_personal');
        return $query->result();
    }
	public function cekInformasiPersonal($id_users){
        $this->db->where('id_users',$id_users);
        $query = $this->db->get('tbl_informasi_personal');
        return $query->result();
    }
	public function cekPendidikanPelamar($id_users){
        $this->db->where('id_users',$id_users);
        $query = $this->db->get('tbl_informasi_pendidikan_terakhir');
        return $query->result();
    }
	public function cekOrganisasiPelamar($id_users){
        $this->db->where('id_users',$id_users);
        $query = $this->db->get('tbl_informasi_organisasi');
        return $query->result();
    }
	public function cekPengalamanKerja($id_users){
        $this->db->where('id_users',$id_users);
        $query = $this->db->get('tbl_informasi_pengalaman_kerja');
        return $query->result();
    }
	
}
	
	 
	
	

