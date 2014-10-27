<?php

class Package_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('package/package_model');
    }
    
  public function get_all_packages() {


        $this->db->select('*');
        $this->db->from('package');
        $this->db->where('del_ind','1');
        $this->db->order_by("package.package_id", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    
     function add_new_package($package_model) {
       return $this->db->insert('package', $package_model);
    }
    
    function update_package($package_model) {

        $data = array('package_id' => $package_model->get_package_id(),
            'package_name' => $package_model->get_package_name(),
            'max_targets' => $package_model->get_max_targets(),
            'max_objects' => $package_model->get_max_objects(),
            
        );

        $this->db->where('package_id', $package_model->get_package_id());
        return $this->db->update('package', $data);
    }
    
    function get_package_by_id($package_id) {

        $query = $this->db->get_where('package', array('package_id' => $package_id,'del_ind'=>'1'));
        return $query->row();
    }
    
}

