
<?php


class Client_model extends CI_Model {
    

var $client_id;
var $client_no;
var $client_fname;
var $client_lname;
var $client_password;
var $client_email;
var $client_bday;
var $client_contact;
var $client_avatar;
var $is_online;
var $del_ind;
var $added_by;
var $added_date;
var $updated_by;
var $updated_date;

 function __construct() {
        parent::__construct();
    }

    public function get_client_id() {
        return $this->client_id;
    }

    public function get_client_no() {
        return $this->client_no;
    }

    public function get_client_fname() {
        return $this->client_fname;
    }

    public function get_client_lname() {
        return $this->client_lname;
    }

    public function get_client_password() {
        return $this->client_password;
    }

    public function get_client_email() {
        return $this->client_email;
    }

    public function ge_client_bday() {
        return $this->client_bday;
    }

    public function get_client_contact() {
        return $this->client_contact;
    }

    public function get_client_avatar() {
        return $this->client_avatar;
    }

    public function get_is_online() {
        return $this->is_online;
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

    public function get_updated_by() {
        return $this->updated_by;
    }

    public function get_updated_date() {
        return $this->updated_date;
    }

    public function set_client_id($client_id) {
        $this->client_id = $client_id;
    }

    public function set_client_no($client_no) {
        $this->client_no = $client_no;
    }

    public function set_client_fname($client_fname) {
        $this->client_fname = $client_fname;
    }

    public function set_client_lname($client_lname) {
        $this->client_lname = $client_lname;
    }

    public function set_client_password($client_password) {
        $this->client_password = $client_password;
    }

    public function set_client_email($client_email) {
        $this->client_email = $client_email;
    }

    public function set_client_bday($client_bday) {
        $this->client_bday = $client_bday;
    }

    public function set_client_contact($client_contact) {
        $this->client_contact = $client_contact;
    }

    public function set_client_avatar($client_avatar) {
        $this->client_avatar = $client_avatar;
    }

    public function set_is_online($is_online) {
        $this->is_online = $is_online;
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

    public function set_updated_by($updated_by) {
        $this->updated_by = $updated_by;
    }

    public function set_updated_date($updated_date) {
        $this->updated_date = $updated_date;
    }


}
