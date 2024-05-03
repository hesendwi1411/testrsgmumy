<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {

	private $CI;

	public function __construct()
	{
        $this->CI = &get_instance();
    }

	public function check()
	{
		if ($this->CI->session->userdata('status') != "Y") {
			$this->CI->session->set_flashdata('message', array('alert' => 'alert-success', 'pesan' => 'Silahkan login dahulu!', 'icon' => 'fa fa-check-circle'));
			redirect('login');
		}
	}

}