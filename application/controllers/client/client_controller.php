<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Client_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
      
        $this->load->model('client/client_model');
        $this->load->model('client/client_service');
    }

 function manage_clients() {
        $client_service = new Client_service();
        
        $data['heading'] = "Client";
        $data['clients'] = $client_service->get_all_clients($this->session->userdata('client_id'));
        
        $partials = array('content' => 'client/manage_client_view');
        $this->template->load('template/main_template', $partials, $data);
    }
    
}
