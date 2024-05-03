<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_api');
    }

    function auth_get()
    {
        $token = $this->input->get('token');
        $data = $this->m_api->get_data_user($token);

        if (!empty($data)) {
            $message = array(
                'status'    => true,
                'message'   => 'Data berhasil ditemukan',
                'data'      => $data,
            );
            $this->set_response($message, REST_Controller::HTTP_OK);
        } else {
            $message = array(
                'status'    => false,
                'message'   => 'Data gagal ditemukan',
                'data'      => NULL,
            );
            $this->set_response($message, REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
}