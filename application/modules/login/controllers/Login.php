<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('m_login','ref/m_ref'));
		$this->load->module('layout');
	}

	public function index()
	{
		$header = array('company' => 'Company', 'title' => 'Login');

		$this->layout->header($header);
		$this->layout->menu();
		$this->load->view('v_index');
		$this->layout->footer();
	}

	public function do_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));

		if ($this->form_validation->run() == TRUE) {

			$user   = $this->input->post('username', TRUE);
			$pass   = md5($this->input->post('password', TRUE).'P@ijo444');
			$data   = $this->m_login->get_detail_data($user, $pass);
			$token  = bin2hex(openssl_random_pseudo_bytes(30));
			$keys   = 'K3Y$-'.bin2hex(openssl_random_pseudo_bytes(3));
			$secret = bin2hex(openssl_random_pseudo_bytes(12));

			if (!empty($data)) {

				$nama = $data['name'];
	        	$data_sesi = array(
					'user_id' 		=> $data['id'],
					'username' 		=> $data['username'],
					'group_id' 		=> $data['group_id'],
					'group_name' 	=> $data['group_name'],
					'nik' 	 		=> $data['nik'],
					'name' 	 		=> $data['name'],
					'email' 		=> $data['email'],
					'phone' 		=> $data['phone'],
					'whatsapp' 		=> $data['whatsapp'],
					'address' 		=> $data['address'],
					'key' 			=> $keys,
					'token' 		=> $token,
					'secret' 		=> $secret,
					'status'		=> $data['status']
				);
	        	
				$where  = array('user_id' => $data['id']);
	            $params = array(
	            			'user_token'		=> $token,
	            			'user_keys'			=> $keys,
	            			'user_last_login' 	=> date('Y-m-d H:i:s')
	            		  );
	            $result = $this->m_ref->update($where, 'mst_user', $params);

	            if ($result) {
					$this->session->set_userdata($data_sesi);
					$this->session->set_flashdata('message', array('alert' => 'alert-success', 'pesan' => 'Selamat Datang <b>'.$nama.'</b>, Anda berhasil masuk di layanan kami!', 'icon' => 'fa fa-check-circle'));
	            	redirect('dashboard');
	            } else {
	            	$this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Gagal masuk ke system', 'icon' => 'fa fa-times-circle'));
	            	redirect('login');
	            }

	        } else {
	        	$this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Username / Password anda salah!', 'icon' => 'fa fa-times-circle'));
	            redirect('login');
	        }

		} else {
			$error = $this->form_validation->error_array();
            $error = array_values($error)[0];
            $this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => ''.$error.'', 'icon' => 'fa fa-times-circle'));
            redirect('login');
        }
	}

	public function logout()
	{
		if (!empty($this->session->userdata('user_id'))) {
			foreach ($this->session->userdata() as $key => $value) {
                if ($key !='__ci_last_regenerate') {
                    $this->session->unset_userdata($key);
                }
            }
            $this->session->set_flashdata('message', array('alert' => 'alert-success', 'pesan' => 'Terima Kasih, anda berhasil keluar dari system kami!', 'icon' => 'fa fa-check-circle'));
		}
		redirect('home');
	}

}