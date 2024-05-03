<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('auth');
		$this->auth->check();
		$this->load->module('layout');
		$this->load->model(array('m_dashboard','ref/m_ref'));
	}

	public function index()
	{
		$header = array('company' => 'Company', 'title' => 'Dashboard');

		$this->layout->header($header);
		$this->layout->menu_login();
		$this->load->view('v_index');
		$this->layout->footer();
	}

}