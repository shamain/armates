<?php

class App_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('app/app_model');
    }

    public function get_all_apps_for_client($client_id) {

        $this->db->select('app.*');
        $this->db->from('app');
        $this->db->where('app.client_id', $client_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_all_apps() {

        $this->db->select('app.*');
        $this->db->from('app');
        $this->db->where('app.del_ind', '1');
        $query = $this->db->get();
        return $query->result();
    }

    function add_new_app($app_model) {
       return $this->db->insert('app', $app_model);
    }

    function delete_app($app_id) {
        $data = array('del_ind' => '0');
        $this->db->where('app_id', $app_id);
        return $this->db->update('app', $data);
    }

    function get_project_by_id($project_id) {
        $query = $this->db->get_where('project', array('project_id' => $project_id));
        return $query->row();
    }

    function get_project_by_name($name) {

        $query = $this->db->get_where('project', array('project_name' => $name));
        return $query->row();
    }

    function update_project($project_model) {

        $data = array(
            'project_name' => $project_model->get_project_name(),
            'project_vendor' => $project_model->get_project_vendor(),
            'project_start_date' => $project_model->get_project_start_date(),
            'project_end_date' => $project_model->get_project_end_date(),
            'project_description' => $project_model->get_project_description(),
            'project_logo' => $project_model->get_project_logo()
        );

        $this->db->where('project_id', $project_model->get_project_id());

        return $this->db->update('project', $data);
    }

    function get_projects_for_employee($emp_code) {

        $this->db->select('project.*');
        $this->db->from('project');
        $this->db->join('task', 'task.project_id = project.project_id');
        $this->db->join('employee_tasks', 'employee_tasks.task_id = task.task_id');
        $this->db->where('employee_tasks.task_status', '0');
        $this->db->where('employee_tasks.employee_id IN('. $emp_code.')');
        $this->db->group_by("task.project_id");
        $this->db->order_by("project.project_id", "desc");
        $query = $this->db->get();

        return $query->result();
    }
    
    function get_last_project_id(){
        $this->db->select('project_id');
        $this->db->from('project');
        $this->db->order_by("project_id", "desc");
        $this->db->limit(1);
        $query = $this->db->get();

        return $query->row();
    }
    
    function update_app($app_model) {

        $data = array('app_id' => $app_model->get_app_id(),
            'app_name' => $app_model->get_app_name(),
            'app_description' => $app_model->get_app_description(),
            'app_scene'=>$app_model->get_scene_file(),
           
            
        );

        $this->db->where('app_id', $app_model->get_app_id());
        return $this->db->update('app', $data);
    }
    
    function get_app_by_id($app_id) {

        $query = $this->db->get_where('app', array('app_id' => $app_id,'del_ind'=>'1'));
        return $query->row();
    }
    
     function update_app_scenes($app_model) {
        $data = array('app_scene' => $app_model->get_scene_file());
        $this->db->where('app_id', $app_model->get_app_id());
        return $this->db->update('app', $data);
    }
    
    
    

}
