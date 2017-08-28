<?php
defined('BASEPATH') OR exit('No direct script access allowed');



	
/* ---------------
Front end Funtions
-----------------*/

function is_home(){   
	$curr = base_url(uri_string());
	if($curr == base_url()){
		return true;
	}else{
		return false;
	}
}
function get_header(){
	include 'theme/inc_header.php';
}
function get_footer(){
	include 'theme/inc_footer.php';
}
function get_page($get){
	$CI = & get_instance();
	if($get =='home' || $get =='index'){
		$CI->load->view($get);
	}else{
		$CI->load->view($get);
	}
}

function get_content($page){
	echo file_get_contents('theme/content/'.$page.'.shtml',true); 
}
