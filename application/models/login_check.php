<?php

class Login_check extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    function check($uname){
        $qry = $this->db->query("SELECT * FROM login WHERE uname='".$uname."'");
        
        if ($qry->num_rows()>0) {
            return $qry->result();
        }else{
            return NULL;
        }
    }
    
}
?>