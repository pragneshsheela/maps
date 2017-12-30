<?php 
 

function p($data, $is_die = false){

	if(is_array($data)){
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}else{
		echo $data;
	}

	if($is_die)
	die;	
}

function myform_error($field){
  
  $error = form_error($field);
  $str = '';
  if(!empty($error)){
    $str .= '<br/><div class="alert alert-danger alert-dismissable">';
    $str .= '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>';
    $str .= '<strong>Warning!</strong>  '.strip_tags($error,'').'</div>';
  }
  return $str;
}

function flashMessage($success = '', $error = '') {
	$CI =& get_instance();
    if ($CI->session->flashdata('success') != "") {
        echo '<br/><div class="alert alert-success alert_notification alert-dismissible" role="alert" style="z-index: 999999;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $CI->session->flashdata('success') . '</div>';
    }else if ($CI->session->flashdata('error') != "") {
        echo '<br/><div class="alert alert-danger error_notification alert-dismissible " style="z-index: 999999;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . $CI->session->flashdata('error') . '</div>';
    }
}

function select($table, $select = null, $where = null, $options = null){
	$CI =& get_instance();
	return $CI->common_model->sql_select($table, $select , $where , $options );
}	
 
function update($table, $id = null, $data){
	$CI =& get_instance();
	return $CI->common_model->update($table, $id, $data);
}

 
function insert($table,$data){	
	$CI =& get_instance();
	return $CI->common_model->insert($table,$data);
}

 
function delete($table,$id){
	$CI =& get_instance();
	return $CI->common_model->delete($table,$id);
}


 
function qry($bool = false){
	$CI =& get_instance();
	echo $CI->db->last_query();
	if($bool)
	die;
}
 
function is_loggedin(){
	$CI =& get_instance();
	return $CI->session->userdata('loggedin');
}

 
function is_loggedin_admin(){
  $CI =& get_instance();
  return $CI->session->userdata('loggedin_admin');
}

function pagination_config(){
	
	$config['full_tag_open'] = '<div class="offer-pagination margin-top-30">';
  	$config['full_tag_close'] = '</div>';

  	$config['num_tag_open'] = '';
  	$config['num_tag_close'] = '';

  	$config['first_link'] = 'First';
  	$config['first_tag_open'] = '';
  	$config['first_tag_close'] = '';

  	$config['cur_tag_open'] = '<a class="active">';
  	$config['cur_tag_close'] = '</a>';

  	$config['prev_link'] = '<i class="jfont">&#xe800;</i>';
  	$config['prev_tag_open'] = '';
  	$config['prev_tag_close'] = '';

	 $config['next_link'] = '<i class="jfont">&#xe802;</i>';
  	$config['next_tag_open'] = '';
  	$config['next_tag_close'] = '';

  	$config['last_link'] = 'Last';
  	$config['last_tag_open'] = '';
  	$config['last_tag_close'] = '';
	return $config;
}

// function to get  the address
function get_lat_long($address){

    $address = str_replace(" ", "+", $address);
    $address = urlencode($address);
    $json = file_get_contents("http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false");
    $json = json_decode($json);

    $lat = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lat'};
    $long = $json->{'results'}[0]->{'geometry'}->{'location'}->{'lng'};
    return $lat.','.$long;
}
 

function startsWith($haystack, $needle) {    
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

