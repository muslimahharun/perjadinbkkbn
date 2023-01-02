<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getUserByUsername($nama){
        $this->db->where('nama', $nama);
        return $this->db->get('users')->result_array();
    }

    function getUsers(){
        return $this->db->get('users')->result_array();
    }
}