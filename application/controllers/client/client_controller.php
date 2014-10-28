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
    
    function add_new_client() {
       
            $client_model = new Client_model();
            $client_service = new Client_service();

        $client_model->set_client_no($this->input->post('client_no', TRUE));
        $client_model->set_client_fname($this->input->post('client_fname', TRUE));
        $client_model->set_client_lname($this->input->post('client_lname', TRUE));
        $client_model->set_client_password($this->input->post('client_password', TRUE));
        $client_model->set_client_email($this->input->post('client_email', TRUE));
        $client_model->set_client_avatar('default_cover_pic.png');  
        $client_model->set_del_ind('1');
        $client_model->set_added_by($this->session->userdata('client_id'));
        $client_model->set_added_date(date("Y-m-d H:i:s"));

            echo $client_service->add_new_client($client_model);
  

      
    }
        
    function edit_client_view($client_id) {
//        $perm = Access_controll_service::check_access('EDIT_PACKAGE');
//        if ($perm) {

            $client_service = new Client_service();


            $data['heading'] = "Edit Client Deatils";
            $data['clients'] = $client_service->get_client_by_id($client_id);


            $partials = array('content' => 'client/edit_client_view');
            $this->template->load('template/main_template', $partials, $data);
//        } else {
//            
//        }
    }
    
    function edit_edit_client_view() {

//        $perm = Access_controll_service::check_access('EDIT_PACKAGE');
//        if ($perm) {

            $client_model = new Client_model();
            $client_service = new Client_service();

            
        $client_model->set_client_no($this->input->post('client_no', TRUE));
        $client_model->set_client_fname($this->input->post('client_fname', TRUE));
        $client_model->set_client_lname($this->input->post('client_lname', TRUE));
        $client_model->set_client_password($this->input->post('client_password', TRUE));
        $client_model->set_client_email($this->input->post('client_email', TRUE));
        $client_model->set_client_avatar('default_cover_pic.png');  
            

            echo $client_service->update_client($client_model);
//        } else {
//            
//        }
    }
}
