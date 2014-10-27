<?php

class Targets_model extends CI_Model {
    
    var $target_id;
    var $app_id;
    var $target_name;
    var $del_ind;
    var $added_by;
    var $added_date;
    
    function __construct() {
        parent::__construct();
    }
    
    public function get_target_id() {
        return $this->target_id;
    }

    public function get_app_id() {
        return $this->app_id;
    }

    public function get_target_name() {
        return $this->target_name;
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

    public function set_target_id($target_id) {
        $this->target_id = $target_id;
    }

    public function set_app_id($app_id) {
        $this->app_id = $app_id;
    }

    public function set_target_name($target_name) {
        $this->target_name = $target_name;
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

