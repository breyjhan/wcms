<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function flash($data,$status = true){
	$CI = & get_instance();
	$msg['status'] 	= $status;
	$msg['data']	= $data;
	$CI->session->set_flashdata('msg', $msg);
}

function base($url=''){
	return base_url($url);	
}


/*------------------------
	 front helder below 
------------------------ */

function notify(){
	$user = new Users();
	//$CI = & get_instance();
	$msg  = $user->session->flashdata('msg');
	if(isset($msg)){
		if($msg['status'] == true){
			echo '<p class="alert alert-success">'.$msg['data'].'</p>';
		}else{
			echo '<p class="alert alert-danger">'.$msg['data'].'</p>';
		}
	}
}

function url($link=''){
	echo base_url($link);	
}

function css(){
	echo _CSS_;
}

function js(){
	echo _JS_;
}
function img($name=''){
	if($name != ''){
		echo _IMG_.$name;
	}else{
		echo _IMG_;
	}
}
function bootstrap(){
	echo _BOOTSTRAP_;
}