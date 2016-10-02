<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class no_aplikasi_model extends CI_Model{
   
    public function getnnoaplikasi(){
        $q = $this->db->query("select MAX(RIGHT(no_aplikasi,5)) as code_no_aplikasi from tbl_data_pelamar");
        $code = "";
        if($q->num_rows()>0){
            foreach($q->result() as $cd){
                $tmp = ((int)$cd->code_no_aplikasi)+1;
                $code = sprintf("%04s", $tmp);
            }
        }else{
            $code = "0001";
        }
        return $code;
    }

}