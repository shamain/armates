<?php


class Orders_service extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->model('orders/orders_model');
    }
    
     public function get_all_orders() {

        $this->db->select('orders.*');
        $this->db->from('orders');
        $this->db->where('orders.del_ind', '1');
        $query = $this->db->get();
        return $query->result();
    }

    function add_new_order($orders_model) {
       return $this->db->insert('orders', $orders_model);
    }
    
}
