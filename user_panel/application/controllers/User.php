<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

		$ixlog = $this->session->userdata('user_xlog');
	   	if(!isset($ixlog)){
		  redirect(site_url(),'refresh');
		}

		$this->load->helper('My_functions');
		$this->load->model('Users');

		$this->userinfo = $this->session->userdata('user_xinfo');
	}

	public function index()
	{
		redirect(site_url('user/dashboard'),'refresh');
	}

	public function dashboard()
	{
		$this->load->view('_header');
		$this->load->view('dashboard');
		$this->load->view('_footer');
	}


	public function site($site = ''){
		if($site ==''){

			$this->load->view('_header');
			$this->load->view('site');
			$this->load->view('_footer');

		}else{
			$this->load->view('_header');
			$this->load->view('site');
			$this->load->view('_footer');
		}
	}


}
