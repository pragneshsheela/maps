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
    * Get product by his is
    * @param int $product_id 
    * @return array
    */
    public function get_customer_by_id($id)
    {
		$this->db->select('*');
		$this->db->from('zj_cleaners_import');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->result_array(); 
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
   
    function count_customers($manufacture_id=null, $search_string=null, $order=null)
    {
		$this->db->select('*');
		$this->db->from('zj_cleaners_import');
        $this->db->where('add_user_type', 'customer');
		/*if($manufacture_id != null && $manufacture_id != 0){
			$this->db->where('manufacture_id', $manufacture_id);
		}*/
		if($search_string){
			$this->db->like('firstname', $search_string);
		}
		if($order){
			$this->db->order_by($order, 'Asc');
		}else{
		    $this->db->order_by('id', 'Asc');
		}
		$query = $this->db->get();
		return $query->num_rows();        
    }

    /**
    * Store the new item into the database
    * @param array $data - associative array with data to store
    * @return boolean 
    */
    function store_product($data)
    {
		$insert = $this->db->insert('zj_cleaners_import', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
	    //return $insert;
	}

    /**
    * Update product
    * @param array $data - associative array with data to store
    * @return boolean
    */
    function update_product($id, $data)
    {
		
        $this->db->where('id', $id);
		$this->db->update('zj_cleaners_import', $data);
		$report = array();
		$report['error'] = $this->db->_error_number();
		$report['message'] = $this->db->_error_message();
		if($report !== 0){
			return true;
		}else{
			return false;
		}
	}

    /**
    * Delete product
    * @param int $id - product id
    * @return boolean
    */
	function delete_customer($id){
		$this->db->where('id', $id);
		$this->db->delete('zj_cleaners_import'); 
	}
    
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
