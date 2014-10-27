<?php

class Clients_service extends CI_Model {
    
     function __construct() {
        parent::__construct();
        $this->load->model('client/client_model');
    }
    
    public function get_all_clients($client_id) {

        $this->db->select('client.*');
        $this->db->from('client');
        $this->db->where('client.client_id', $client_id);
        $query = $this->db->get();
        return $query->result();
    }
}
