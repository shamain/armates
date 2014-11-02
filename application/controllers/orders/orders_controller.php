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
}