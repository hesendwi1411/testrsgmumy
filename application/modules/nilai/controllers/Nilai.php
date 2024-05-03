<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('auth');
		$this->auth->check();
		$this->load->module('layout');
		$this->load->model(array('m_nilai','ref/m_ref'));
	}

	public function index()
	{
		$header = array('company' => 'Company', 'title' => 'Data Penilaian Mahasiswa');
		$data 	= array(
			'data' => $this->m_nilai->get_data()
		);

		$this->layout->header($header);
		$this->layout->menu_login();
		$this->load->view('v_index', $data);
		$this->layout->footer();
	}

	public function add()
	{
		$header = array('company' => 'Company', 'title' => 'Tambah Penilaian');
		$data 	= array(
			'title_breadcrumb' 	=> 'Tambah',
			'title_header' 		=> 'Tambah Penilaian',
			'url_refresh'		=> base_url('nilai/add'),
			'url_action'		=> base_url('nilai/do_add'),
			'url_back'			=> base_url('nilai'),
			'mahasiswa'			=> $this->m_nilai->get_list_mst_mahasiswa()
		);

		$this->layout->header($header);
		$this->layout->menu_login();
		$this->load->view('v_input', $data);
		$this->layout->footer();
	}

	public function do_add()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('password', 'Password', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('group', 'Group', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('status', 'Status', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));

		if ($this->form_validation->run() == TRUE) {

            $this->db->trans_begin();

            $params = array(
                'user_username'   	=> $this->input->post('username'),
                'user_group_id'   	=> $this->input->post('group'),
                'user_nik'   		=> $this->input->post('nik'),
                'user_fullname'   	=> $this->input->post('fullname'),
                'user_password'   	=> md5($this->input->post('password').'P@ijo444'),
                'user_token'   		=> bin2hex(openssl_random_pseudo_bytes(30)),
                'user_keys'   		=> 'K3Y$-'.bin2hex(openssl_random_pseudo_bytes(3)),
                'user_email'   		=> $this->input->post('email'),
                'user_phone'   		=> $this->input->post('phone'),
                'user_address'   	=> $this->input->post('address'),
                'user_gender'   	=> $this->input->post('gender'),
                'user_status'   	=> $this->input->post('status'),
                'created_user_id'   => $this->session->userdata('user_id'),
                'created_date'      => date('Y-m-d H:i:s')
            );
            $result = $this->m_ref->insert('mst_user', $params);

            if ($this->db->trans_status()) {
                $this->db->trans_commit();
                $this->session->set_flashdata('message', array('alert' => 'alert-success', 'pesan' => 'Data berhasil disimpan!', 'icon' => 'fa fa-check-circle'));
                redirect('mst_user');
            } else {
                $this->db->trans_rollback();
                $this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Data gagal disimpan!', 'icon' => 'fa fa-times-circle'));
                redirect('mst_user/add');
            }

        } else {
        	$error = $this->form_validation->error_array();
           	$error = array_values($error)[0];
           	$this->session->set_flashdata('message', array('alert' => 'alert-warning', 'pesan' => $error, 'icon' => 'fa fa-exclamation-triangle'));
           	
           	$this->session->set_flashdata('data', array(
       			'username' 	=> $this->input->post('username'),
       			'password' 	=> $this->input->post('password'),
       			'group' 	=> $this->input->post('group'),
       			'nik' 		=> $this->input->post('nik'),
       			'fullname' 	=> $this->input->post('fullname'),
       			'gender' 	=> $this->input->post('gender'),
       			'phone' 	=> $this->input->post('phone'),
       			'email' 	=> $this->input->post('email'),
       			'status' 	=> $this->input->post('status'),
       			'address' 	=> $this->input->post('address'),
           	));
           	redirect('mst_user/add');
        }

	}

	public function edit()
	{
		$id 	= $this->uri->segment(3);
		$header = array('company' => 'Company', 'title' => 'Edit Pengguna');
		$data 	= array(
			'title_breadcrumb' 	=> 'Edit',
			'title_header' 		=> 'Edit Pengguna',
			'url_refresh'		=> base_url('mst_user/edit/').$id,
			'url_action'		=> base_url('mst_user/do_edit'),
			'url_back'			=> base_url('mst_user'),
			'group'				=> $this->m_mst_user->get_list_group(),
			'gender'			=> $this->m_mst_user->get_list_gender(),
			'detail'			=> $this->m_mst_user->get_detail_data($id)
		);

		$this->layout->header($header);
		$this->layout->menu_login();
		$this->load->view('v_input', $data);
		$this->layout->footer();
	}

	public function do_edit()
	{
		$this->form_validation->set_rules('id', '', 'required', array('required' => 'Form Isian Wajib Diisi!'));
		$this->form_validation->set_rules('group', 'Group', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('status', 'Status', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));

		if ($this->form_validation->run() == TRUE) {

			$this->db->trans_begin();

			$params = array(
                'user_group_id'   	=> $this->input->post('group'),
                'user_nik'   		=> $this->input->post('nik'),
                'user_fullname'   	=> $this->input->post('fullname'),
                'user_email'   		=> $this->input->post('email'),
                'user_phone'   		=> $this->input->post('phone'),
                'user_address'   	=> $this->input->post('address'),
                'user_gender'   	=> $this->input->post('gender'),
                'user_status'   	=> $this->input->post('status'),
                'modified_user_id'  => $this->session->userdata('user_id'),
                'modified_date'     => date('Y-m-d H:i:s')
            );
            $where 	= array('user_id' => $this->input->post('id'));
            $result = $this->m_ref->update($where, 'mst_user', $params);

			if ($this->db->trans_status()) {
                $this->db->trans_commit();
                $this->session->set_flashdata('message', array('alert' => 'alert-success', 'pesan' => 'Data berhasil disimpan!', 'icon' => 'fa fa-check-circle'));
                redirect('mst_user');
            } else {
                $this->db->trans_rollback();
                $this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Data gagal disimpan!', 'icon' => 'fa fa-times-circle'));
                redirect('mst_user/edit/'.$this->input->post('id'));
            }

		} else {
			$error = $this->form_validation->error_array();
           	$error = array_values($error)[0];
           	$this->session->set_flashdata('message', array('alert' => 'alert-warning', 'pesan' => $error, 'icon' => 'fa fa-exclamation-triangle'));
           	
           	$this->session->set_flashdata('data', array(
       			'username' 	=> $this->input->post('username'),
       			'group' 	=> $this->input->post('group'),
       			'nik' 		=> $this->input->post('nik'),
       			'fullname' 	=> $this->input->post('fullname'),
       			'gender' 	=> $this->input->post('gender'),
       			'phone' 	=> $this->input->post('phone'),
       			'email' 	=> $this->input->post('email'),
       			'status' 	=> $this->input->post('status'),
       			'address' 	=> $this->input->post('address'),
           	));
           	redirect('mst_user/edit/'.$this->input->post('id'));
		}
	}

	public function detail()
	{
		$id 	= $this->uri->segment(3);
		$header = array('company' => 'Company', 'title' => 'Detail Pengguna');
		$data 	= array(
			'title_breadcrumb' 	=> 'Detail',
			'title_header' 		=> 'Detail Pengguna',
			'url_refresh'		=> base_url('mst_user/detail/').$id,
			'url_back'			=> base_url('mst_user'),
			'detail'			=> $this->m_mst_user->get_detail_data($id)
		);

		if ($data['detail']['status'] == 'Y') {
			$data['detail']['status'] = 'Aktif';
		} else {
			$data['detail']['status'] = 'Tidak Aktif';
		}

		$this->layout->header($header);
		$this->layout->menu_login();
		$this->load->view('v_detail', $data);
		$this->layout->footer();
	}

	public function delete()
	{
		$id = $this->uri->segment(3);

		if (!empty($this->uri->segment(3))) {

			$this->db->trans_begin();

			$where  = array('user_id' => $id);
			$result = $this->m_ref->delete($where, 'mst_user');

			if (!$this->db->error()['code']) {
	            $this->db->trans_commit();
	            $this->session->set_flashdata('message', array('alert' => 'alert-success', 'pesan' => 'Data berhasil dihapus!', 'icon' => 'fa fa-check-circle'));
	        } else {
	            $this->db->trans_rollback();
	            $this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Data gagal dihapus!', 'icon' => 'fa fa-times-circle'));
	        }

	        redirect('mst_user');

		} else {
			$this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Data gagal dihapus!', 'icon' => 'fa fa-times-circle'));
			redirect('mst_user');
		}
	}

}