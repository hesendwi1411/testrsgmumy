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
		$this->form_validation->set_rules('nim', 'Nomor Induk Mahasiswa', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('nilai_ujian_a', 'Nilai Ujian A', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('nilai_ujian_b', 'Nilai Ujian B', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		
		if ($this->form_validation->run() == TRUE) {

            $this->db->trans_begin();

            $params = array(
                'nilai_mahasiswa_id'   	=> $this->input->post('nim'),
				'nilai_ujian_a'   		=> $this->input->post('nilai_ujian_a'),
				'nilai_ujian_b'   		=> $this->input->post('nilai_ujian_b'),
				'nilai_total'   		=> $this->input->post('nilai_total'),
				'nilai_rata_rata'   	=> $this->input->post('nilai_rata_rata'),
				'nilai_grade'   		=> $this->input->post('nilai_grade'),
                'created_user_id'   	=> $this->session->userdata('user_id'),
                'created_date'      	=> date('Y-m-d H:i:s')
            );
			
            $result = $this->m_ref->insert('trx_nilai', $params);

            if ($this->db->trans_status()) {
                $this->db->trans_commit();
                $this->session->set_flashdata('message', array('alert' => 'alert-success', 'pesan' => 'Data berhasil disimpan!', 'icon' => 'fa fa-check-circle'));
                redirect('nilai');
            } else {
                $this->db->trans_rollback();
                $this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Data gagal disimpan!', 'icon' => 'fa fa-times-circle'));
                redirect('nilai/add');
            }

        } else {
        	$error = $this->form_validation->error_array();
           	$error = array_values($error)[0];
           	$this->session->set_flashdata('message', array('alert' => 'alert-warning', 'pesan' => $error, 'icon' => 'fa fa-exclamation-triangle'));
           	
           	$this->session->set_flashdata('data', array(
				'nilai_mahasiswa_id'   	=> $this->input->post('mahasiswa_id'),
				'nilai_ujain_a'   		=> $this->input->post('nilai_ujian_a'),
				'nilai_ujain_b'   		=> $this->input->post('nilai_ujian_b'),
				'nilai_total'   		=> $this->input->post('nilai_total'),
				'nilai_rata_rata'   	=> $this->input->post('nilai_rata_rata'),
				'nilai_grade'   		=> $this->input->post('nilai_grade'),
           	));
           	redirect('nilai/add');
        }

	}

	public function edit()
	{
		$id 	= $this->uri->segment(3);
		$header = array('company' => 'Company', 'title' => 'Edit Penilaian');
		$data 	= array(
			'title_breadcrumb' 	=> 'Edit',
			'title_header' 		=> 'Edit Penilaian',
			'url_refresh'		=> base_url('nilai/edit/').$id,
			'url_action'		=> base_url('nilai/do_edit'),
			'url_back'			=> base_url('nilai'),
			'detail'			=> $this->m_nilai->get_detail_data($id),
			'mahasiswa'			=> $this->m_nilai->get_list_mst_mahasiswa()
		);

		$this->layout->header($header);
		$this->layout->menu_login();
		$this->load->view('v_input', $data);
		$this->layout->footer();
	}

	public function do_edit()
	{
		$this->form_validation->set_rules('id', '', 'required', array('required' => 'Form Isian Wajib Diisi!'));
		$this->form_validation->set_rules('nilai_ujian_a', 'Nilai Ujian A', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		$this->form_validation->set_rules('nilai_ujian_b', 'Nilai Ujian B', 'required', array('required' => 'Form Isian %s Wajib Diisi!'));
		
		if ($this->form_validation->run() == TRUE) {

			$this->db->trans_begin();

			$params = array(
                'nilai_mahasiswa_id'   	=> $this->input->post('nim'),
				'nilai_ujian_a'   		=> $this->input->post('nilai_ujian_a'),
				'nilai_ujian_b'   		=> $this->input->post('nilai_ujian_b'),
				'nilai_total'   		=> $this->input->post('nilai_total'),
				'nilai_rata_rata'   	=> $this->input->post('nilai_rata_rata'),
				'nilai_grade'   		=> $this->input->post('nilai_grade'),
                'modified_user_id'  => $this->session->userdata('user_id'),
                'modified_date'     => date('Y-m-d H:i:s')
            );
            $where 	= array('nilai_id' => $this->input->post('id'));
            $result = $this->m_ref->update($where, 'trx_nilai', $params);

			if ($this->db->trans_status()) {
                $this->db->trans_commit();
                $this->session->set_flashdata('message', array('alert' => 'alert-success', 'pesan' => 'Data berhasil disimpan!', 'icon' => 'fa fa-check-circle'));
                redirect('nilai');
            } else {
                $this->db->trans_rollback();
                $this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Data gagal disimpan!', 'icon' => 'fa fa-times-circle'));
                redirect('nilai/edit/'.$this->input->post('id'));
            }

		} else {
			$error = $this->form_validation->error_array();
           	$error = array_values($error)[0];
           	$this->session->set_flashdata('message', array('alert' => 'alert-warning', 'pesan' => $error, 'icon' => 'fa fa-exclamation-triangle'));
           	
           	$this->session->set_flashdata('data', array(
				'nilai_mahasiswa_id'   	=> $this->input->post('nim'),
				'nilai_ujian_a'   		=> $this->input->post('nilai_ujian_a'),
				'nilai_ujian_b'   		=> $this->input->post('nilai_ujian_b'),
				'nilai_total'   		=> $this->input->post('nilai_total'),
				'nilai_rata_rata'   	=> $this->input->post('nilai_rata_rata'),
				'nilai_grade'   		=> $this->input->post('nilai_grade'),
           	));
           	redirect('nilai/edit/'.$this->input->post('id'));
		}
	}

	public function detail()
	{
		$id 	= $this->uri->segment(3);
		$header = array('company' => 'Company', 'title' => 'Detail Penilaian');
		$data 	= array(
			'title_breadcrumb' 	=> 'Detail',
			'title_header' 		=> 'Detail Penilaian',
			'url_refresh'		=> base_url('nilai/detail/').$id,
			'url_back'			=> base_url('nilai'),
			'detail'			=> $this->m_nilai->get_detail_data_view($id)
		);

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

			$where  = array('nilai_id' => $id);
			$result = $this->m_ref->delete($where, 'trx_nilai');

			if (!$this->db->error()['code']) {
	            $this->db->trans_commit();
	            $this->session->set_flashdata('message', array('alert' => 'alert-success', 'pesan' => 'Data berhasil dihapus!', 'icon' => 'fa fa-check-circle'));
	        } else {
	            $this->db->trans_rollback();
	            $this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Data gagal dihapus!', 'icon' => 'fa fa-times-circle'));
	        }

	        redirect('nilai');

		} else {
			$this->session->set_flashdata('message', array('alert' => 'alert-danger', 'pesan' => 'Data gagal dihapus!', 'icon' => 'fa fa-times-circle'));
			redirect('nilai');
		}
	}

	public function json_mahasiswa($id) {
        $nim = $this->m_nilai->get_json_mahasiswa($id);
        if (!$nim) {
            // Return a JSON response with a 404 status code if the user is not found
            return $this->output
                ->set_status_header(404)
                ->set_content_type('application/json')
                ->set_output(json_encode([
                    'error' => 'Mahasiswa not found'
                ]));
        }
        // Return a JSON response with the user data
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($nim));
    }

}