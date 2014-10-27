<?php

class Targets_service extends CI_Model {
    
     function __construct() {
        parent::__construct();
        $this->load->model('targets/targets_model');
    }
    
    public function get_all_targets($target_id) {

        $this->db->select('targets.*');
        $this->db->from('targets');
        $this->db->where('targets.target_id', $target_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function add_new_target($targets_model) {
        $this->db->insert('targets', $targets_model);
        return $this->db->insert_id();
    }
    
    function delete_target($target_id) {
        $data = array('del_ind' => '0');
        $this->db->where('target_id', $target_id);
        return $this->db->update('targets', $data);
    }
    
    
    function update_target($targets_model) {

        $data = array('target_id' => $targets_model->get_target_id(),
            'app_id' => $targets_model->get_app_id(),
            'target_name' => $targets_model->get_target_name(),
            
        );

        $this->db->where('target_id', $targets_model->get_target_id());
        return $this->db->update('targets', $data);
    }
}

