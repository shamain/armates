<?php

class App_model extends CI_Model {

    var $app_id;
    var $app_name;
    var $client_id;
    var $del_ind;
    var $added_by;
    var $added_date;

    function __construct() {
        parent::__construct();
    }

    public function get_app_id() {
        return $this->app_id;
    }

    public function set_app_id($app_id) {
        $this->app_id = $app_id;
    }

    public function get_app_name() {
        return $this->app_name;
    }

    public function set_app_name($app_name) {
        $this->app_name = $app_name;
    }

    public function get_client_id() {
        return $this->client_id;
    }

    public function set_client_id($client_id) {
        $this->client_id = $client_id;
    }

    public function get_del_ind() {
        return $this->del_ind;
    }

    public function set_del_ind($del_ind) {
        $this->del_ind = $del_ind;
    }

    public function get_added_by() {
        return $this->added_by;
    }

    public function set_added_by($added_by) {
        $this->added_by = $added_by;
    }

    public function get_added_date() {
        return $this->added_date;
    }

    public function set_added_date($added_date) {
        $this->added_date = $added_date;
    }

}

