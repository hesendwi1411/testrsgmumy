<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_home extends CI_Model {

    var $column_order   = array(null, 'profile_name');
    var $column_search  = array('profile_name', 'profile_district_name', 'profile_village_name');
    var $order          = array('profile_name' => 'DESC');

	public function __construct ()
    {
    	parent::__construct();
    }

    private function _get_datatables_query($name = "", $kec = "", $kel = "")
    {
        $this->db->select('
                        profile_id AS `id`,
                        profile_code AS `code`,
                        profile_name AS `name`,
                        profile_district_name AS `district`,
                        profile_village_name AS `village`,
                        profile_latitude AS `latitude`,
                        profile_longitude AS `longitude`
                   ');
        $this->db->from('mst_profile');

        if (!empty($name)) {
            $this->db->like('profile_name', $name);
        }
        if (!empty($kec)) {
            $this->db->where('profile_district_id', $kec);
        }
        if (!empty($kel)) {
            $this->db->where('profile_village_id', $kel);
        }

        $i = 0;
        foreach ($this->column_search as $item) {
            if ($_POST['search']['value']) {
                if ($i===0) {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
                if(count($this->column_search) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
         
        if (isset($_POST['order'])) {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    public function get_datatables($name = "", $kec = "", $kel = "")
    {
        $this->_get_datatables_query($name, $kec, $kel);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        return $this->db->get()->result_array();
    }

    public function count_filtered($name = "", $kec = "", $kel = "")
    {
        $this->_get_datatables_query($name, $kec, $kel);
        return $this->db->get()->num_rows();
    }

    public function count_all($name = "", $kec = "", $kel = "")
    {
        if (!empty($name)) {
            $this->db->like('profile_name', $name);
        }
        if (!empty($kec)) {
            $this->db->where('profile_district_id', $kec);
        }
        if (!empty($kel)) {
            $this->db->where('profile_village_id', $kel);
        }
        $this->db->from('mst_profile');
        return $this->db->count_all_results();
    }

    public function get_detail_data($code)
    {
        $this->db->select('
                        profile_id AS `id`,
                        profile_code AS `code`,
                        profile_name AS `name`,
                        profile_district_name AS `district`,
                        profile_village_name AS `village`,
                        profile_latitude AS `latitude`,
                        profile_longitude AS `longitude`
                   ');
        $this->db->from('mst_profile');
        $this->db->where('profile_code', $code);
        
        return $this->db->get()->row_array();
    }

}