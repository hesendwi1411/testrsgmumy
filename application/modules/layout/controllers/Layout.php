<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function header($header = NULL)
	{
		$this->load->view('v_header', $header);
	}

	public function menu()
	{
		$this->load->view('v_menu');
	}

	public function menu_login()
	{
		$this->load->view('v_menu_login');
	}

	public function footer()
	{
		$this->load->view('v_footer');
	}

}