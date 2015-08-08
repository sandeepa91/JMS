<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!($this->session->userdata('login_user'))) {
            redirect(base_url() . "index.php/user/");
        }
        $this->load->model('user_model');
    }

	public function index()
	{       $fieldSet = array('id','first_name');
                $tableName = 'user';
                $data['userData'] = $this->user_model->getData($fieldSet, $tableName);
                //var_dump($data);     
                //redirect(base_url() . "index.php/home/",$data);
                $this->load->view('home',$data);
                //var_dump($data);
                
	}
         
}
