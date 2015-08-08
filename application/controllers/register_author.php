<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register_author extends CI_Controller {

	public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('login_user'))) {
            redirect(base_url() . "index.php/user/");
        }
        $this->load->model('user_model');
    }
    
	public function index()
	{
            $this->load->view('register_author');
	}
        
         
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */