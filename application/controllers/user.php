<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('login');
    }

    public function login() {
        $email = $this->input->post('email_address');
        $pass = $this->input->post('password');
        $remember = $rhis->input->post('remember');
        $ip = $this->input->server('REMOTE_ADDR');

        $pass = sha1($pass);
        
        $user = $this->user_model->get_pass($email);

        if (!is_null($user)) {
//            $pass = hash("md5", $pass);
            if ($user->password === $pass) {
                $this->load->view('home');
                $this->user_model->loginLogSave($user->id, $ip);
            } else {
                $this->load->view('login');
            }
        } else {
            $this->load->view('login');
        }
    }

    public function register() {
        
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>