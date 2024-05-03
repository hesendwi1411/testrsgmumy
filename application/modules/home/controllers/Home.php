<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->module('layout');
	}

	public function index()
	{
		$header = array('company' => 'Company', 'title' => 'Home');

		$this->layout->header($header);
		if (empty($this->session->userdata('user_id'))) {
			$this->layout->menu();
		} else {
			$this->layout->menu_login();
		}
		$this->load->view('v_index');
		$this->layout->footer();
	}

}