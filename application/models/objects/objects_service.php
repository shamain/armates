<?php

class Objects_service extends CI_Model {
    
     function __construct() {
        parent::__construct();
        $this->load->model('objects/objects_model');
    }
    
    public function get_all_objects($object_id) {

        $this->db->select('objects.*');
        $this->db->from('objects');
        $this->db->where('objects.object_id', $object_id);
        $query = $this->db->get();
        return $query->result();
    }
    
    function add_new_object($objects_model) {
        $this->db->insert('objects', $objects_model);
        return $this->db->insert_id();
    }
    
    function delete_object($object_id) {
        $data = array('del_ind' => '0');
        $this->db->where('object_id', $object_id);
        return $this->db->update('objects', $data);
    }
    
    
    function update_object($objects_model) {

        $data = array('object_id' => $objects_model->get_object_id(),
            'target_id' => $objects_model->get_target_id(),
            'object_name' => $objects_model->get_object_name(),
            
        );

        $this->db->where('object_id', $objects_model->get_object_id());
        return $this->db->update('objects', $data);
    }

}

