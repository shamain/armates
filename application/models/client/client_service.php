<?php

class Client_service extends CI_Model {
    
     function __construct() {
        parent::__construct();
        $this->load->model('client/client_model');
}
//     public function get_all_clients() {
//
//
//        $this->db->select('*');
//        $this->db->from('client');
//        $this->db->where('del_ind','1');
//        $this->db->order_by("client.client_id", "desc");
//        $query = $this->db->get();
//        return $query->result();
//    }
 public function get_all_clients() {

        $this->db->select('client.*');
        $this->db->from('client');
        $this->db->where('client.del_ind', '1');
        $query = $this->db->get();
        return $query->result();
    }
     function add_new_client($client_model) {
        return $this->db->insert('client', $client_model);
        
    }

    function get_client_by_id($client_id) {

        $query = $this->db->get_where('client', array('client_id' => $client_id,'del_ind'=>'1'));
        return $query->row();
    }
    
       function update_client($client_model) {

        $data = array('client_id' => $client_model->get_client_id(),
            
            'client_fname' => $client_model->get_client_fname(),
            'client_lname' => $client_model->get_client_lname(),
            'client_password' => $client_model->get_client_password(),
            'client_email' => $client_model->get_client_email(),
            'client_bday' => $client_model->get_client_bday(),
            'client_contact' => $client_model->get_client_contact(),  
            'client_avatar' => $client_model->get_client_avatar(),
           
        );

        $this->db->where('client_id', $client_model->get_client_id());
        return $this->db->update('client', $data);
    }
        function delete_client($client_id) {
        $data = array('del_ind' => '0');
        $this->db->where('client_id', $client_id);
        return $this->db->update('client', $data);
    }
    
    //update online status
    function update_online_status($client_model) {
        $data = array('is_online' => $client_model->get_is_online());
        $this->db->where('client_id', $client_model->get_client_id());
        return $this->db->update('client', $data);
    }
    
    function authenticate_user($client_model) {

        $data = array('client_email' => $client_model->get_client_email() /* , 'Password'=>$employee_model->get_employee_password() */, 'client.del_ind' => '1');

        $this->db->select('client.*');
        $this->db->from('client');
        $this->db->where($data);
        $query = $this->db->get();

        return $query->row();
    }

    function authenticate_user_with_password($client_model) {

        $data = array('client_email' => $client_model->get_client_email(), 'client_password' => $client_model->get_client_password(), 'client.del_ind' => '1');

        $this->db->select('client.*');
        $this->db->from('client');
        $this->db->where($data);
        $query = $this->db->get();
        return $query->row();
    }
    
    
}

