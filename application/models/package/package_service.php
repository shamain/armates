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
}

