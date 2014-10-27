<?php

class Objects_model extends CI_Model {
    
    var $object_id;
    var $target_id;
    var $object_name;
    var $format;
    var $del_ind;
    var $added_by;
    var $added_date;
    
    
    function __construct() {
        parent::__construct();
    }
    
    public function get_object_id() {
        return $this->object_id;
    }

    public function get_target_id() {
        return $this->target_id;
    }

    public function get_object_name() {
        return $this->object_name;
    }
    
    public function get_format() {
        return $this->format;
    }

    
    public function get_del_ind() {
        return $this->del_ind;
    }

    public function get_added_by() {
        return $this->added_by;
    }

    public function get_added_date() {
        return $this->added_date;
    }

    public function set_object_id($object_id) {
        $this->object_id = $object_id;
    }

    public function set_target_id($target_id) {
        $this->target_id = $target_id;
    }

    public function set_object_name($object_name) {
        $this->object_name = $object_name;
    }
    
    public function set_format($format) {
        $this->format = $format;
    }

    
    public function set_del_ind($del_ind) {
        $this->del_ind = $del_ind;
    }

    public function set_added_by($added_by) {
        $this->added_by = $added_by;
    }

    public function set_added_date($added_date) {
        $this->added_date = $added_date;
    }



}

