<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_login extends CI_Model {

	public function __construct ()
    {
    	parent::__construct();
    }

    public function get_detail_data($username, $password)
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
            WHERE 
                user_username = '".$username."'
                AND user_password = '".$password."'
                AND user_status = 'Y'
        ");
        return $query->row_array();
    }

}