<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$exceptional_url = array('admin','admin/logout','admin/forgot_password','admin/change','admin/reset_password');

		// if(in_array(uri_string(), $exceptional_url) == FALSE && is_loggedin() == FALSE){
		// 	// redirect('admin');
		// } 
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */