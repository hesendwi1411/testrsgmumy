<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_mst_user extends CI_Model {

	public function __construct ()
    {
    	parent::__construct();
    }

    public function get_data()
    {
        $query = $this->db->query("
            SELECT
                a.`user_id` AS `id`,
                a.`user_nik`AS `nik`,
                a.`user_fullname` AS `name`,
                a.`user_gender` AS `gender`,
                a.`user_email` AS `email`,
                a.`user_group_id` AS `group_id`,
                b.`group_name`,
                a.`user_address` AS `address`,
                a.`user_phone` AS `phone`,
                a.`user_whatsapp` AS `whatsapp`,
                a.`user_status` AS `status`
            FROM mst_user a
            LEFT JOIN mst_group b ON a.`user_group_id` = b.`group_id`
            WHERE 1 = 1
        ");
        return $query->result_array();
    }

    public function get_detail_data($id)
    {
        $query = $this->db->query("
            SELECT
                a.`user_id` AS `id`,
                a.`user_nik`AS `nik`,
                a.`user_username` AS `username`,
                a.`user_fullname` AS `name`,
                a.`user_gender` AS `gender`,
                a.`user_email` AS `email`,
                a.`user_group_id` AS `group_id`,
                b.`group_name`,
                a.`user_address` AS `address`,
                a.`user_phone` AS `phone`,
                a.`user_whatsapp` AS `whatsapp`,
                a.`user_status` AS `status`
            FROM mst_user a
            LEFT JOIN mst_group b ON a.`user_group_id` = b.`group_id`
            WHERE user_id = '".$id."'
        ");
        return $query->row_array();
    }

    public function get_list_group()
    {
        $query = $this->db->query("
            SELECT
                `group_id` AS `id`,
                `group_name` AS `text`
            FROM mst_group
            WHERE 1 = 1
        ");
        return $query->result_array();
    }

    public function get_list_gender()
    {
        $query = $this->db->query("
            SELECT
                `gender_id` AS `id`,
                `gender_name` AS `text`
            FROM ref_gender
            WHERE 1 = 1
        ");
        return $query->result_array();
    }

}