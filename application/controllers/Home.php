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
		
		$data['cities'] = $this->mapshome_model->get_citylist();
		$data['routes'] =  array();
		//$data['routes'] = $this->mapshome_model->get_routes();
				
        $username = $this->session->userdata('identity');
        $data['username']=$username;
		$this->template->load('admin','home/index',$data);
	}
	public function getroutes() {
		$output = null; 	
		$id_ccity = $this->input->post('id',TRUE);
		$data['routes'] = $this->mapshome_model->get_routes($id_ccity);
		// echo $this->db->last_query();
		$route = array();
		//print_r($data['routes']);
		$cnt = 0;
		$len = count($data['routes']);
		foreach ($data['routes'] as $row) {
		 		// $output .= "<li><div  class='chkRoute'><input onclick='loadwaypointmap();'  class='chkRoute' id="."way".$cnt." name='waypoints[]' type='checkbox' >".$row['route_name']."<input type='hidden' class='rtId' value='1416100'>
	    //             <input type='hidden' class='rtOrig' value=''>
	    //             <input type='hidden' class='rtDest' value=''>
	    //             <input type='hidden' class='rtOlat' value='21.216165'>
	    //             <input type='hidden' class='rtOlng' value='72.839844'>
	    //             <input type='hidden' class='rtDlat' value='21.21616'>
	    //             <input type='hidden' class='rtDlng' value='72.839844'>
					// <input type='hidden' id='rtWp' value='{&quot;start&quot;:{&quot;lat&quot;:21.216165,&quot;lng&quot;:72.839844},&quot;end&quot;:{&quot;lat&quot;:21.216165,&quot;lng&quot;:72.839844},&quot;waypoints&quot;:[[21.385982,73.764817],[21.542767,73.799422]]}'></div></li>";
			$route_id = $row['route_id'];
			if(!isset($route[$route_id])) {
				$route[$route_id] = [];
				$route[$route_id]['latitude'] = $row['route_latitude'];
				$route[$route_id]['longitude'] = $row['route_longitude'];
				//$route[$route_id]['image'] = $row['poi_image'];
				$route[$route_id]['image'] = [];
				$route[$route_id]['waypoints_latitude_longitude'] = [];
			};

			if($row['poi_latitude'] && $row['poi_longitude']) {
				$temp = array($row['poi_latitude'], $row['poi_longitude']);
				array_push($route[$route_id]['waypoints_latitude_longitude'], $temp);
			}

			if($row['poi_image']) {
				array_push($route[$route_id]['image'], $row['poi_image']);
			}

			$cnt++;
			if($cnt  == $len) {
				$cnt_new = 1;
				foreach ($route as $key => $value) {

					if($key) {
						$slider_image = '';
						if(count($value['waypoints_latitude_longitude']) !== 0) {
							$waypoints_latitude_longitude = '';
							$c=1;
							$l = count($value['waypoints_latitude_longitude']);
							foreach ($value['waypoints_latitude_longitude'] as $key_sub => $value_sub) {
								$waypoints_latitude_longitude .= '[';
								$waypoints_latitude_longitude .= implode(",", $value_sub);
								$waypoints_latitude_longitude .= ']';
								if($c !== $l) {
									$waypoints_latitude_longitude .= ',';
								}
								$c++;
							}
						}
						$slider_image .= implode(",", $value['image']);
						
						$output .= "<li><div><input onclick='loadwaypointmap(".$key.");'  class='chkRoute' id="."way_".$key." name='waypoints[]' type='checkbox' ><span onclick='routeFun(".$key.");' class='cursor_pointer'>".$row['route_name']."</span><input type='hidden' class='rtId' value='".$key."'>
		                <input type='hidden' class='rtOrig' value=''>
		                <input type='hidden' class='rtDest' value=''>
		                <input type='hidden' class='rtOlat' value='".$value['latitude']."'>
		                <input type='hidden' class='rtOlng' value='".$value['longitude']."'>
		                <input type='hidden' class='rtDlat' value='".$value['latitude']."'>
		                <input type='hidden' class='rtDlng' value='".$value['longitude']."'>
		                <input type='hidden' id="."image_".$key." value='".$slider_image."'>
						<input type='hidden' class='rtWp' id='rtWp_".$key."' value='{&quot;start&quot;:{&quot;lat&quot;:".$value['latitude'].",&quot;lng&quot;:".$value['longitude']."},&quot;end&quot;:{&quot;lat&quot;:".$value['latitude'].",&quot;lng&quot;:".$value['longitude']."},&quot;waypoints&quot;:[".$waypoints_latitude_longitude."]}'></div></li>";
					$cnt_new++;
					}
					
				}
			}
			
		}
		echo $output; die();
		//p($route, FALSE);
	}

}
?>

