<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];


        $this->load->model('login_check');
        $data['user'] = $this->login_check->check($uname);
        if (!is_null($data['user'])) {
            foreach ($data['user'] as $obj) {
                if ($obj->pass === $pass) {
                    $this->load->view('home');
                }
            }
        } else {
            $this->load->view('welcome_message');
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>