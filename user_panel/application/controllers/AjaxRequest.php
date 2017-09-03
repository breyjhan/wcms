<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AjaxRequest extends CI_Controller {

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
		  
		  	$data['status'] = false;
			$data['msg'] = 'Something went wrong!';
			echo json_encode($data);
			exit;

		}

		$this->load->model('Users');
		$this->load->model('Sites');
		$this->load->model('Pages');
	}

	public function index(){
		$data['status'] = false;
		$data['msg'] = 'Something went wrong!';
		echo json_encode($data);
		exit;
	}

	public function addpage(){
		$status = false;
		$msg = 'nothing';

		if($_POST){
			$this->load->library('form_validation');  
			$this->form_validation->set_rules('title', 'Page Title', 'trim|required');
	        $this->form_validation->set_rules('description', 'Page Description', 'trim');
	        $this->form_validation->set_rules('keywords', 'Page Keywords', 'trim');
	        $this->form_validation->set_rules('slug', 'Page slug', 'trim|max_length[32]');

	        if ($this->form_validation->run() == FALSE)
	        {
	        	$status = false;
				$msg 	= validation_errors('<div class="alert alert-danger">','</div>'); 

			}else{
				$key 	 = $this->input->post('account');
				$account = $this->session->userdata($key);

				if($account != null){
					$insert['page_acc'] 		= $account;
					$insert['page_title'] 		= $this->input->post('title');
		        	$insert['page_description'] = $this->input->post('description');
		        	$insert['page_keyword'] 	= $this->input->post('keywords');
		        	$insert['page_slug'] 		= $this->input->post('slug');

		        	if($this->Pages->insert($insert)){
		        		$status = true;
						$msg 	= 'Page added successfully!';
						flash($msg,$status);
		        	}else{
		        		$status = false;
						$msg 	= 'Cannot add this page!';
		        	}
				}else{
					$status = false;
					$msg 	= 'Something went wrong!';
				}
			}

			$data['status'] = $status;
			$data['msg'] = $msg;
			echo json_encode($data);
			exit;
		}else{
			$data['status'] = 'true';
			$data['msg'] = 'get';
			echo json_encode($data);
			exit;
		}
	}




}
