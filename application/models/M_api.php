<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_api extends CI_Model {

	function __construct ()
    {
    	parent::__construct();
    }

    public function get_data_user($token)
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
            WHERE user_token = '".$token."' AND user_status = 'Y'
        ");
        return $query->row_array();
    }

}