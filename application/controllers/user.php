<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function login() {
        $uname = $this->input->post('email_address');
        $pass = $this->input->post('password');
        $remember = $rhis->input->post('remember');
        $ip = $this->input->server('REMOTE_ADDR');


        $password = $this->user_model->get_pass($uname);


        if (!is_null($password)) {
//            $pass = hash("md5", $pass);
            if ($password === $pass) {
                $this->load->view('home');
                $this->user_model->loginLogSave($uname, $ip);
            } else {
                $this->load->view('welcome_message');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>