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


		$ixlog = $this->session->userdata('user_xlog');
	   	if(!isset($ixlog)){
		  redirect(site_url(),'refresh');
		}

		$this->load->model('Users');
		$this->load->model('Sites');

		$this->userinfo = $this->session->userdata('user_xinfo');
	}

	public function index()
	{
		redirect(site_url('user/dashboard'),'refresh');
	}

	public function dashboard()
	{
		$user_info 				= $this->session->userdata('user_xinfo');
		$get_site['s_owner_id'] = $user_info->ui_user_id;
		$data['sites'] 			= $this->Sites->get_row($get_site);
		$this->load->view('_header',$data);
		$this->load->view('dashboard',$data);
		$this->load->view('_footer');
	}


	public function site($site = ''){
		if($site ==''){
			$user_info 				= $this->session->userdata('user_xinfo');
			$get_site['s_owner_id'] = $user_info->ui_user_id;
			$data['sites'] 			= $this->Sites->get_row($get_site);
			$this->load->view('_header',$data);
			$this->load->view('site',$data);
			$this->load->view('_footer');

		}else{
			$this->load->view('_header');
			$this->load->view('site');
			$this->load->view('_footer');
		}
	}

	public function profile(){
		$user_info = $this->session->userdata('user_xinfo');
		$data['user_info'] =$user_info;
		$get_site['s_owner_id'] = $user_info->ui_user_id;
		$data['sites'] 			= $this->Sites->get_row($get_site);
		$this->load->view('_header',$data);
		$this->load->view('profile/profile',$data);
		$this->load->view('_footer');
	}

	public function update_profile(){
		$user_info = $this->session->userdata('user_xinfo');
		$data['user_info'] =$user_info;
		$get_site['s_owner_id'] = $user_info->ui_user_id;
		$data['sites'] 			= $this->Sites->get_row($get_site);
		$this->load->view('_header',$data);
		$this->load->view('profile/profile_edit',$data);
		$this->load->view('_footer');
	}


}
