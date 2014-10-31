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
        $client_model->set_added_by(1);
        $client_model->set_added_date(date("Y-m-d H:i:s"));

        echo $client_service->add_new_client($client_model);
    }

    function edit_client_view($client_id) {
//        $perm = Access_controll_service::check_access('EDIT_PACKAGE');
//        if ($perm) {

        $client_service = new Client_service();


        $data['heading'] = "Edit Client Deatils";
        $data['client'] = $client_service->get_client_by_id($client_id);


        $partials = array('content' => 'client/edit_client_view');
        $this->template->load('template/main_template', $partials, $data);
//        } else {
//            
//        }
    }


 function edit_client() {

//        $perm = Access_controllerservice :: checkAccess('EDIT_EMPLOYEE');
//        if ($perm) {

        $client_model = new Client_model();
        $client_service = new Client_service();

        $client_model->set_client_no($this->input->post('client_no', TRUE));
        $client_model->set_client_fname($this->input->post('client_fname', TRUE));
        $client_model->set_client_lname($this->input->post('client_lname', TRUE));
        $client_model->set_client_password(md5($this->input->post('client_password', TRUE)));
        $client_model->set_client_email($this->input->post('client_email', TRUE));
        
        $client_model->set_client_bday($this->input->post('client_bday', TRUE));
        $client_model->set_client_contact($this->input->post('client_contact', TRUE));
        
        $client_model->set_client_avatar($this->input->post('client_avatar', TRUE));
        
        $client_model->set_updated_by($this->session->userdata('CLIENT_ID'));
        $client_model->set_updated_date(date("Y-m-d H:i:s"));

        $client_model->set_client_id($this->input->post('client_id', TRUE));

        if ($this->input->post('client_id', TRUE) == $this->session->userdata('ClIENT_ID')) {
            $this->session->set_userdata('CLIENT_PROPIC', $this->input->post('client_avatar', TRUE));
        }


        echo $client_service->update_client($client_model);
//        } else {
//            $this->template->load('template/access_denied_page');
//        }
    }
    
    function upload_client_image() {

        $uploaddir = './uploads/clients/';
        $unique_tag = 'client';

        $filename = $unique_tag . time() . '-' . basename($_FILES['uploadfile']['name']); //this is the file name
        $file = $uploaddir . $filename; // this is the full path of the uploaded file

        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) {
            echo $filename;
        } else {
            echo "error";
        }
    }
}
