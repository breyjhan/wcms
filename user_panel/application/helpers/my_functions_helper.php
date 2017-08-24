<?php
defined('BASEPATH') OR exit('No direct script access allowed');


function flash($data,$status = true){
	$user = new Users();
	$msg['status'] 	= $status;
	$msg['data']	= $data;
	$user->session->set_flashdata('msg', $msg);
}

function base(){
	return base_url();	
}


/*------------------------
	 front helder below 
------------------------ */

function notify(){
	$user = new Users();
	$msg  = $user->session->flashdata('msg');
	if(isset($msg)){
		if($msg['status'] == true){
			echo '<p class="alert alert-success">'.$msg['data'].'</p>';
		}else{
			echo '<p class="alert alert-danger">'.$msg['data'].'</p>';
		}
	}
}

function url($link){
	echo base_url().$link;	
}

function css(){
	echo _CSS_;
}

function js(){
	echo _JS_;
}
function img(){
	echo _IMG_;
}
function bootstrap(){
	echo _BOOTSTRAP_;
}