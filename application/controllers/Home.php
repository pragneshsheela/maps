<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		$this->load->model('mapshome_model');
	}

	public function index() {
		
		// if (!$this->ion_auth->logged_in()) {
  //           redirect('auth', 'refresh');
  //       }


		$data['cities'] = $this->mapshome_model->get_citylist();
		$data['routes'] =  array();
		//$data['routes'] = $this->mapshome_model->get_routes();
				
        $username = $this->session->userdata('identity');
        $data['username']=$username;
		$this->template->load('admin','home/index',$data);
	}
	public function getroutes() {
		$output = null; 	
		$id_ccity = $this->input->post('id',TRUE);		//die();
			
		///$data['routes'] =  array();
		$data['routes'] = $this->mapshome_model->get_routes($id_ccity);

		///print_r($data['routes']);
			$cnt = 1;
		 foreach ($data['routes'] as $row)  
		      {  	         
					
		         //$output .= "<option value='".$row['route_id']."'>".$row['route_name']."</option>";  

		         $output .= "<li><div  class='chkRoute'><input onclick='loadwaypointmap();'  class='chkRoute' id="."way".$cnt." name='waypoints[]' type='checkbox' >".$row['route_name']."<input type='hidden' class='rtId' value='1416100'>
                            <input type='hidden' class='rtOrig' value=''>
                            <input type='hidden' class='rtDest' value=''>
                            <input type='hidden' class='rtOlat' value='21.216165'>
                            <input type='hidden' class='rtOlng' value='72.839844'>
                            <input type='hidden' class='rtDlat' value='21.21616'>
                            <input type='hidden' class='rtDlng' value='72.839844'>
							<input type='hidden' id='rtWp' value='{&quot;start&quot;:{&quot;lat&quot;:21.216165,&quot;lng&quot;:72.839844},&quot;end&quot;:{&quot;lat&quot;:21.216165,&quot;lng&quot;:72.839844},&quot;waypoints&quot;:[[21.385982,73.764817],[21.542767,73.799422]]}'></div></li>";
		         $cnt++;
		      }  
		      echo $output;
		      die();

		
                            
                            
						
	}

}
?>

