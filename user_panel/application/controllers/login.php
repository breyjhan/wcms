<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
	   
		$this->load->helper('url');
	   	$this->load->helper('My_functions');
		$this->load->model('Users');
		$this->load->model('Users_info');
	}

	public function index(){
		$ixlog = $this->session->userdata('user_xlog');
		if(isset($ixlog)){
			redirect(site_url('user/dashboard'),'refresh');
		}
		$this->load->view('login');
		
	}

	public function out(){
		$user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    	$this->session->sess_destroy();
    	redirect(site_url(),false);
    }

	public function login_check(){
		$this->load->library('form_validation');
		if($_POST){

         	$this->form_validation->set_rules('username', 'Name', 'required'); 
         	$this->form_validation->set_rules('password', 'Password', 'required'); 

            if ($this->form_validation->run() == FALSE)
            {	
            	$msg = 'Failed:'.validation_errors();
            	flash($msg,false);
                redirect(site_url('login'),'refresh');
            }
            else
            {
            	$input['user_uname'] = $_POST['username'];
            	$input['user_pass']	 = sha1($_POST['password']);
            	$res = $this->Users->get_row($input);
            	if($res){
            		$ch['ui_user_id'] = $res->user_id;
            		$res = $this->Users_info->get_row($ch);
            		$this->session->set_userdata('user_xinfo',$res);
            		$this->session->set_userdata('user_xlog',true);
                	redirect(site_url('login'),'refresh');
            	}else{
            		flash('Wrong Username / Password!',false);
            		redirect(site_url('login'),'refresh');
            	}

            }
		}else{
			redirect(site_url('login'),'refresh');
		}
	}


}
