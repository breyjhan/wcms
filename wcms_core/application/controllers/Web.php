<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Sites');
		$this->load->model('Pages');

	}
	public function index(){
		$get_site['s_url'] 	  = '//'.$_SERVER['HTTP_HOST'];
		$site 				  = $this->Sites->get_row($get_site);
		$get_page['page_acc'] = $site->s_id;
		$get_page['page_slug'] = 'home';
		$data['page'] = $page =  $this->Pages->get_row($get_page);

		if($page){
			$this->load->view('main',$data);
		}else{
			show_404();
		}
	}
	public function page($page){
		$get_site['s_url'] 	  = '//'.$_SERVER['HTTP_HOST'];
		$site 				  = $this->Sites->get_row($get_site);
		$get_page['page_acc'] = $site->s_id;
		$get_page['page_slug'] = $page;
		$data['page'] = $page = $this->Pages->get_row($get_page);

		if($page){
			$this->load->view('main',$data);
		}else{
			show_404();
		}
		
	}

}
