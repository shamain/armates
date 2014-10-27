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
    
    
    
}

