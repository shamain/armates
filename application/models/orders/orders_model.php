<?php

class Orders_model extends CI_Model {
    
    var $order_id;
    var $address;
    var $sofa_model;
    var $item_count;
    var $comments;
    var $deliver_date;
    var $del_ind;
    
     function __construct() {
        parent::__construct();
    }

    public function get_order_id() {
        return $this->order_id;
    }

    public function set_order_id($order_id) {
        $this->order_id = $order_id;
    }

    public function get_address() {
        return $this->address;
    }

    public function set_address($address) {
        $this->address = $address;
    }

    public function get_sofa_model() {
        return $this->sofa_model;
    }

    public function set_sofa_model($sofa_model) {
        $this->sofa_model = $sofa_model;
    }

    public function get_item_count() {
        return $this->item_count;
    }

    public function set_item_count($item_count) {
        $this->item_count = $item_count;
    }

    public function get_comments() {
        return $this->comments;
    }

    public function set_comments($comments) {
        $this->comments = $comments;
    }

    public function get_deliver_date() {
        return $this->deliver_date;
    }

    public function set_deliver_date($deliver_date) {
        $this->deliver_date = $deliver_date;
    }

    public function get_del_ind() {
        return $this->del_ind;
    }

    public function set_del_ind($del_ind) {
        $this->del_ind = $del_ind;
    }


    
}
