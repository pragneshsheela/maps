<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
<?php
class Mapshome_model extends CI_Model {
 
    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        $this->load->database();
    }

   
   

    /**
    * Fetch products data from the database
    * possibility to mix search, filter and order
    * @param int $manufacuture_id 
    * @param string $search_string 
    * @param strong $order
    * @param string $order_type 
    * @param int $limit_start
    * @param int $limit_end
    * @return array
    */
   
  

   
    
    function get_citylist(){        
        $this->db->select('*'); 
        $this->db->from('cities');
        $this->db->order_by('city_name', 'Asc');       
        $query = $this->db->get();        
        return $query->result_array();
    }
    function get_routes($city){

        // $this->db->select('routes.route_id,routes.route_name');                     
        // $this->db->from('cities');
        // $this->db->join('routes', 'routes.city_id = cities.city_id');
        // $this->db->where('cities.city_id', $city);
        // $query = $this->db->get();        
        // return $query->result_array();

        $this->db->select('*');
        $this->db->from('cities a'); 
        $this->db->join('routes b', 'b.city_id = a.city_id', 'left');
        $this->db->join('pois c', 'c.route_id = b.route_id', 'left');
        $this->db->where('a.city_id',$city);
        $this->db->order_by('c.route_id','asc'); 
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>	
