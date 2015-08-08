<?php

class User_model extends CI_Model {

    function __construct() {
        parent::__construct();
        
    }

    function get_pass($email) {
        $this->db->select('id, password, first_name');
        $this->db->from('user');
        $this->db->where('email_address', $email);
        $res = $this->db->get();
        $arr = $res->result();

        date_default_timezone_set('Asia/Colombo');
        $date = date('m/d/Y h:i:s a', time());

        if ($res->num_rows() > 0) {
            foreach ($res->result() as $row) {
                 
                $userData = array('user' => $row-> first_name, "logtime" => $date);
                $this->session->set_userdata('login_user', $userData);
                  return $arr[0];
            }
           
        } else {
            return NULL;
        }
    }
    
    public function getData($fieldSet, $tableName, $where = '') {
        if ($where == "") {
            $this->db->select($fieldSet)->from($tableName);
        } else {
            $this->db->select($fieldset)->from($tableName)->where($where);
        }
        $query = $this->db->get();
        return $query->result();
    }
    
    
    function loginLogSave($uid, $ipadd) {
        $data = array('user_id' => $uid, 'ip' => $ipadd);
        $this->db->insert('login_log', $data);
    }

    function loginLogRetriv() {
        $this->db->select('user_id,timestamp,IP');
        $this->db->from('login_log');
    }

    function saveUser($param) {
        $this->db->insert('user', $param);
    }

}

?>