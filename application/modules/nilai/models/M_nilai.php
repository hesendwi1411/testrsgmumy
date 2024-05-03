<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_nilai extends CI_Model {

	public function __construct ()
    {
    	parent::__construct();
    }

    public function get_data()
    {
        $this->db->select('
                            nilai_id as id,
                            mst_mahasiswa.mahasiswa_nim,
                            mst_mahasiswa.mahasiswa_nama,
                            nilai_ujian_a,
                            nilai_ujian_b,
                            nilai_grade,
                            nilai_rata_rata
                        ');
        $this->db->from('trx_nilai');
        $this->db->join('mst_mahasiswa','mst_mahasiswa.mahasiswa_id=trx_nilai.nilai_mahasiswa_id','left');

        return $this->db->get()->result_array();
    }

    public function get_list_mst_mahasiswa()
    {
        $this->db->select('
                        mahasiswa_id,
                        mahasiswa_nim,
                        mahasiswa_nama,
                   ');
        $this->db->from('mst_mahasiswa');
        $this->db->order_by("mahasiswa_id", "asc");
        $query = $this->db->get();

        return $query->result();
    }
    

    public function get_detail_data($id)
    {
        $this->db->select('
                            nilai_id as id,
                            nilai_ujian_a,
                            nilai_ujian_b,
                            nilai_grade,
                            nilai_rata_rata,
                            nilai_total
                        ');
        $this->db->from('trx_nilai');
        $this->db->where('nilai_id', $id);

        return $this->db->get()->result_array();
    }

    

}