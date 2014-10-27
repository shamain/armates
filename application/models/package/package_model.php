 
 
<?php

class Package_model extends CI_Model {
    

var $package_id;
var $package_name;
var $max_targets;
var $max_objects;
var $del_ind;
var $added_by;
var $added_date;

 function __construct() {
        parent::__construct();
    }
    public function get_Package_id() {
        return $this->package_id;
    }

    public function get_Package_name() {
        return $this->package_name;
    }

    public function get_Max_targets() {
        return $this->max_targets;
    }

    public function get_Max_objects() {
        return $this->max_objects;
    }

    public function get_Del_ind() {
        return $this->del_ind;
    }

    public function get_Added_by() {
        return $this->added_by;
    }

    public function get_Added_date() {
        return $this->added_date;
    }
    public function set_Package_id($package_id) {
        $this->package_id = $package_id;
    }

    public function set_Package_name($package_name) {
        $this->package_name = $package_name;
    }

    public function set_Max_targets($max_targets) {
        $this->max_targets = $max_targets;
    }

    public function set_Max_objects($max_objects) {
        $this->max_objects = $max_objects;
    }

    public function set_Del_ind($del_ind) {
        $this->del_ind = $del_ind;
    }

    public function set_Added_by($added_by) {
        $this->added_by = $added_by;
    }

    public function set_Added_date($added_date) {
        $this->added_date = $added_date;
    }




}