<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class App_controller extends CI_Controller {

    function __construct() {
        parent::__construct();


//        if (!$this->session->userdata('EMPLOYEE_LOGGED_IN')) {
//            redirect(site_url() . '/login/login_controller');
//        } else {
        $this->load->model('app/app_model');
        $this->load->model('app/app_service');
        
        $this->load->model('objects/objects_model');
        $this->load->model('objects/objects_service');


//        }
    }

    function manage_apps() {

        $app_service = new App_service();


        $data['heading'] = "My Apps";
        $data['apps'] = $app_service->get_all_apps_for_client(1);

        $partials = array('content' => 'app/manage_app_view');
        $this->template->load('template/main_template', $partials, $data);
    }

    function add_new_app() {
       
            $app_model = new App_model();
            $app_service = new App_service();

            $app_model->set_app_name($this->input->post('app_name', TRUE));
            $app_model->set_app_description($this->input->post('app_description', TRUE));
            $app_model->set_client_id(1);
            $app_model->set_added_by(1);
            $app_model->set_added_date(date("Y-m-d H:i:s"));
            $app_model->set_del_ind('1');


            echo $app_service->add_new_app($app_model);
      
    }
    
    function upload_object_view($app_id) {

        $object_service = new Objects_service();


        $data['heading'] = "My Objects";
        $data['objects'] = $object_service->get_all_objects_for_app($app_id);

        $partials = array('content' => 'app/upload_object_view');
        $this->template->load('template/main_template', $partials, $data);
    }
    

    function add_new_project() {


        $project_model = new Project_model();
        $project_service = new Project_service();
        $project_stuff_temp_service = new Project_stuff_temp_service();
        $project_stuff_service = new Project_stuff_service();
        $project_stuff_model = new Project_stuff_model();

        $project_temp_stuff = $project_stuff_temp_service->get_all_project_stuff_temp_for_company($this->session->userdata('EMPLOYEE_COMPANY_CODE'));

        $project_model->set_project_name($this->input->post('project_name', TRUE));
        $project_model->set_project_vendor($this->input->post('project_vendor', TRUE));
        $project_model->set_project_start_date($this->input->post('project_start_date', TRUE));
        $project_model->set_project_end_date($this->input->post('project_end_date', TRUE));
        $project_model->set_project_description($this->input->post('project_description', TRUE));
        $project_model->set_project_logo($this->input->post('project_logo', TRUE));
        $project_model->set_company_code($this->session->userdata('EMPLOYEE_COMPANY_CODE'));
        $project_model->set_del_ind('1');
        $project_model->set_added_date(date("Y-m-d H:i:s"));
        $project_model->set_added_by($this->session->userdata('EMPLOYEE_CODE'));



        $project_id = $project_service->add_new_project($project_model);
        $msg = 1;

        foreach ($project_temp_stuff as $stuff) {
            $project_stuff_model->set_stuff_name($stuff->stuff_name);
            $project_stuff_model->set_company_code($stuff->company_code);
            $project_stuff_model->set_project_id($project_id);
            $project_stuff_model->set_del_ind('1');
            $project_stuff_model->set_added_date(date("Y-m-d H:i:s"));
            $project_stuff_model->set_added_by($this->session->userdata('EMPLOYEE_CODE'));

            $msg = $project_stuff_service->add_new_project_stuff($project_stuff_model);
        }

        echo $msg;



//        } else {
//            $this->template->load('template/access_denied_page');
//        }
    }

    function delete_project() {

        $perm = Access_controll_service::check_access('DELETE_PROJECT');
        if ($perm) {

            $project_service = new Project_service();
            $task_service = new Task_service();

            $not_complete_count = $task_service->get_not_complete_task_count_for_project(trim($this->input->post('id', TRUE)));
            if ($not_complete_count == 0) {
                echo $project_service->delete_project(trim($this->input->post('id', TRUE)));
            } else {
                echo 2;
            }
        } else {
            
        }
    }

    function edit_project_view($id) {
        $perm = Access_controll_service::check_access('EDIT_PROJECT');
        if ($perm) {


            $project_service = new Project_service();


            $data['heading'] = "Edit Project";
            $data['project'] = $project_service->get_project_by_id($id);


            $partials = array('content' => 'projects/edit_project_view');
            $this->template->load('template/main_template', $partials, $data);
        } else {
            
        }
    }

    function edit_project() {

//        $perm = Access_controllerservice :: checkAccess('EDIT_PROJECTS');
//        if ($perm) {

        $project_model = new Project_model();
        $project_service = new Project_service();

        $project_model->set_project_name($this->input->post('project_name', TRUE));
        $project_model->set_project_vendor($this->input->post('project_vendor', TRUE));
        $project_model->set_project_start_date($this->input->post('project_start_date', TRUE));
        $project_model->set_project_end_date($this->input->post('project_end_date', TRUE));
        $project_model->set_project_description($this->input->post('project_description', TRUE));
        $project_model->set_project_logo($this->input->post('project_logo', TRUE));

        $project_model->set_project_id($this->input->post('project_id', TRUE));



        echo $project_service->update_project($project_model);
//        } else {
//            $this->template->load('template/access_denied_page');
//        }
    }

    function upload_project_logo() {

        $uploaddir = './uploads/project_logo/';
        $unique_tag = 'prj_logo';

        $filename = $unique_tag . time() . '-' . basename($_FILES['uploadfile']['name']); //this is the file name
        $file = $uploaddir . $filename; // this is the full path of the uploaded file

        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) {
            echo $filename;
        } else {
            echo "error";
        }
    }

    function add_temp_project_stuff() {

        $project_stuff_temp_model = new Project_stuff_temp_model();
        $project_stuff_temp_service = new Project_stuff_temp_service();

        $files = $this->input->post('file_name', TRUE);
//        $files = explode(',', $files);

        foreach ($files as $file) {

            $project_stuff_temp_model->set_stuff_name($file);
            $project_stuff_temp_model->set_company_code($this->session->userdata('EMPLOYEE_COMPANY_CODE'));
            $project_stuff_temp_model->set_del_ind('1');
            $project_stuff_temp_model->set_added_date(date("Y-m-d H:i:s"));
            $project_stuff_temp_model->set_added_by($this->session->userdata('EMPLOYEE_CODE'));


            echo $project_stuff_temp_service->add_new_project_stuff_temp($project_stuff_temp_model);
        }
    }

    public function print_project_pdf_report() {
        $project_service = new Project_service();


        $data['heading'] = "Project Report";
        $data['projects'] = $project_service->get_all_projects_for_company($this->session->userdata('EMPLOYEE_COMPANY_CODE'));

        $SResultString = $this->load->view('reports/project_report', $data, TRUE);
        $footer = $this->load->view('reports/pdf_footer', $data, TRUE);
        $this->load->library('MPDF56/mpdf');
        $mpdf = new mPDF('utf-8', 'A4');
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->SetFooter($footer);
        $mpdf->WriteHTML($SResultString);
        $mpdf->Output();
    }

    /*
     * Api Methods for Project
     */

    /*
     * @parameters employee code
     * Give all projects for particular emploee
     * return all project details as json object
     */

    public function get_projects_for_employee() {

        $project_service = new Project_service();
        $result = $project_service->get_projects_for_employee($this->input->post('employee_code'));

        echo json_encode($result);
    }

    /*
     * @parameters project id ,employee code 
     * Give all task for particular emploee and particular project
     * return all task details as json object
     */

    public function get_task_for_employee() {

        $task_service = new Task_service();
        $result = $task_service->get_employee_task_by_project($this->input->post('employee_code'));

        echo json_encode($result);
    }

    
    function edit_app_view($app_id) {
//        $perm = Access_controll_service::check_access('EDIT_APP');
//        if ($perm) {

            $app_service = new APP_service();


            $data['heading'] = "Edit App Deatils";
            $data['app'] = $app_service->get_app_by_id($app_id);


            $partials = array('content' => 'app/edit_app_view');
            $this->template->load('template/main_template', $partials, $data);
//        } else {
//            
//        }
    }
    
    function edit_app() {

//        $perm = Access_controll_service::check_access('EDIT_APP');
//        if ($perm) {

            $app_model = new App_model();
            $app_service = new App_service();

            
            $app_model->set_app_name($this->input->post('app_name', TRUE));
            $app_model->set_app_description($this->input->post('app_description', TRUE));
            
            

            echo $app_service->update_app($app_model);
//        } else {
//            
//        }
    }
    
    function upload_object_image() {

        $uploaddir = './upload/objects/';
        $unique_tag = 'object_image';

        $filename = $unique_tag . time() . '-' . basename($_FILES['uploadfile']['name']); //this is the file name
        $file = $uploaddir . $filename; // this is the full path of the uploaded file

        if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $file)) {
            echo $filename;
        } else {
            echo "error";
        }
    }
}
