<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_pass($uname) {
        $this->db->select('pass');
        $this->db->from('login');
        $this->db->where('uname', $uname);
        $res = $this->db->get();
        $arr = $res->result();

        if ($res->num_rows() > 0) {
            $pass = $arr[0]->password;
            return $pass;
        } else {
            return NULL;
        }
    }

    function loginLogSave($uname, $ipadd) {
        $this->db->query("INSERT INTO loginlogview(uname,ip) VALUES('" . $uname . "','" . $ipadd . "')");
    }

}

?>