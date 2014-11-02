<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Orders_controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('orders/orders_model');
        $this->load->model('orders/orders_service');
    }

    function manage_orders() {
        $orders_service = new Orders_service();

        $data['heading'] = "Order";
        $data['orders'] = $orders_service->get_all_orders($this->session->userdata('order_id'));

        $partials = array('content' => 'order/manage_order_view');
        $this->template->load('template/main_template', $partials, $data);
    }
    
     function add_order() {

        $orders_model = new Orders_model();
        $orders_service = new Orders_service();

        $orders_model->set_address($this->input->get('address', TRUE));
        $orders_model->set_comments($this->input->get('comments', TRUE));
        $orders_model->set_deliver_date(date("Y-m-d H:i:s",strtotime($this->input->get('deliver_date', TRUE))));
        $orders_model->set_sofa_model($this->input->get('model', TRUE));
        $orders_model->set_item_count($this->input->get('count', TRUE));
        $orders_model->set_del_ind('1');

        echo $orders_service->add_new_order($orders_model);
    }
    
}