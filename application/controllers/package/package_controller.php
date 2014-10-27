<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Package_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
      
        $this->load->model('package/package_model');
        $this->load->model('package/package_service');
    }

 function manage_packages() {
        $package_service = new Package_service();
        
        $data['heading'] = "Packages";
        $data['packages'] = $package_service->get_all_packages($this->session->userdata('package_id'));
        
        $partials = array('content' => 'package/manage_package_view');
        $this->template->load('template/main_template', $partials, $data);
    }
    
    function add_new_package() {
       
            $package_model = new Package_model();
            $package_service = new Package_service();

            $package_model->set_package_name($this->input->post('package_name', TRUE));
            $package_model->set_Max_targets(10);
            $package_model->set_Max_objects(10);
            $package_model->set_added_by(1);
            $package_model->set_added_date(date("Y-m-d H:i:s"));
            $package_model->set_del_ind('1');


            echo $package_service->add_new_package($package_model);
      
    }
    
    function edit_package_view($package_id) {
//        $perm = Access_controll_service::check_access('EDIT_PACKAGE');
//        if ($perm) {

            $package_service = new Package_service();


            $data['heading'] = "Edit Package Deatils";
            $data['package'] = $package_service->get_package_by_id($package_id);


            $partials = array('content' => 'package/edit_package_view');
            $this->template->load('template/main_template', $partials, $data);
//        } else {
//            
//        }
    }
    
    function edit_package() {

//        $perm = Access_controll_service::check_access('EDIT_PACKAGE');
//        if ($perm) {

            $package_model = new Package_model();
            $package_service = new Package_service();

            
            $package_model->set_package_name($this->input->post('package_name', TRUE));
            $package_model->set_Max_targets($this->input->post('max_targets', TRUE));
            $package_model->set_Max_objects($this->input->post('max_objects', TRUE));
            

            echo $package_service->update_package($package_model);
//        } else {
//            
//        }
    }
    
    
    
}

