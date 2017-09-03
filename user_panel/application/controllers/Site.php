<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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
		$this->load->model('Pages');

		$this->userinfo = $this->session->userdata('user_xinfo');
	}

	public function index(){
		
			redirect(site_url('user/dashboard'),'refresh');
		
	}
	public function manage($site='',$page=''){
		if($site == ''){
			redirect(site_url('user/dashboard'),'refresh');
		}else{

			$user_info 				= $this->session->userdata('user_xinfo');
			$get_site['s_owner_id'] = $user_info->ui_user_id;
			$get_site['s_id'] 		= $site;
			$data['site'] 			= $site = $this->Sites->get_row($get_site);
			$get_pages['page_acc']	= $page_acc = $site->s_id; 
			$data['pages']			= $this->Pages->get_where($get_pages);
			
			if($page == 'page'){
				$str = 'ABCEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz0123456789';
				$data['account'] = $key = substr(str_shuffle($str),0,11);
				$this->session->set_userdata($key,$page_acc);
				$this->load->view('manage/_header',$data);
				$this->load->view('manage/pages',$data);
				$this->load->view('manage/_footer');
			}elseif($page == 'new_page'){
				$this->load->view('page/_header',$data);
				$this->load->view('page/new_page',$data);
				$this->load->view('page/_footer');
			}else{
				$this->load->view('manage/_header',$data);
				$this->load->view('manage/site',$data);
				$this->load->view('manage/_footer');
			}
			

		}
	}


}
