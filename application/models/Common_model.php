<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {
 

	public function insert($table,$data){

		$this->db->insert($table,$data);
		$id = $this->db->insert_id(); // fetch last inserted id in table
		return $id;
	}
	
	public function update($table,$id = null,$data){
            if(is_array($id)){
            	$this->db->where($id);
            }else{
            	$this->db->where('id',$id);
            }
		$this->db->update($table,$data);
		$update_id = $this->db->affected_rows(); // fetch affected rown in table.
		return $update_id;
	}

	public function delete($table,$id){
		if(is_array($id)){
			$this->db->where($id);
		}else{
			$this->db->where(array('id'=>$id));
		}
		$this->db->delete($table);
	}

/* 	Master function to select required data from DB
*
*	@select =  String select statement e.g user.id or MAX(user.id)
*	@table = String name of the table
*	@where = mixed optional where condition
*			ex :
*				array( 

*					'where_in' => array('users.id' => [5,10]);
					'where'=>array('name'=>'test'), 
					'like'=>array('name'=>'test')
*				)
*	@options = Array Optional conditions e.g order,join, group, limit, count, single

*	array(
			'offset'=>'5',
			'limit'=>'5',
			'join'=>array(
				array(
					'table'=>'table_name',
					'condition'=>'tab1.id=tab2.id',
					'join'=>'left' // default
				)
			)
		)

*/
	public function sql_select($table, $select = null, $where = null, $options = null){
		
		if(!empty($select)){
			$this->db->select($select);
		}

		$this->db->from($table);

		/* Check wheather where conditions is required or not. */
		if(!empty($where)){

			if(is_array($where)){
				$check_where = array(
					'where',
					'or_where',	
					'where_in',
					'or_where_in',
					'where_not_in',
					'or_where_not_in',
					'like','or_like',
					'not_like',	
					'or_not_like'
					);

				foreach($where as $key => $value){
					if(in_array($key,$check_where)){

						foreach($value as $k => $v){
							if(in_array($key,array('like','or_like','not_like','or_not_like')))
							{
									$check = 'both';
									if($v[0] == '%'){
										$check = 'before';
									$v = ltrim($v,'%');
									}else if($v[strlen($v) - 1] == '%'){
										$check = 'after';
									$v = rtrim($v,'%');
									}
									$this->db->$key($k,$v,$check);
							}else{
								$this->db->$key($k,$v);
							}
						}
					}
				}	

				if(!empty($where['where_str'])){
					foreach($where['where_str'] as $w_str){
						$this->db->where($w_str);
					}

				}

				if(!empty($where['or_where_str'])){
					foreach($where['or_where_str'] as $or_w_str){
						$this->db->or_where($or_w_str);
					}
				}
							
			}else{

				

				// $this->db->where($where);
			}

			if(!empty($where['where_str'])){
				
				foreach($where['where_str'] as $w_str){
					$this->db->where($w_str);
				}			

			}
		}
		
		
		/* Check fourth parameter is passed and process 4th param. */
		if(!empty($options) && is_array($options)){
			$check_key = array('group_by','order_by');
			foreach ($options as $key => $value) {
					if(in_array($key, $check_key)){
						if(is_array($value)){
							foreach($value as $k => $v){
								$this->db->$key($v);
							}
						}else{
							$this->db->$key($value);
						}
					}
			}
		}

		/* Check query needs to limit or not.  */
		if(isset($options['limit']) && !empty($options['limit']) && isset($options['offset']) && !empty($options['offset']) ){
			$this->db->limit($options['limit'],$options['offset']);
		}
		else if(isset($options['limit'])){
			$this->db->limit($options['limit']);
		}

		/* Check tables need to join or not */
		if(isset($options['join']) && !empty($options['join'])){
			foreach($options['join'] as $join){
				if(!isset($join['join']))
					$join['join'] = 'left';	
				$this->db->join($join['table'],$join['condition'],$join['join']);
			}
		}
	
		$method = 'result_array';
		/* Check wheather return only single row or not. */
		if(isset($options) && ((!is_array($options) && $options == true) || (isset($options['single']) && $options['single']== true )) ){
			$method = 'row_array';
		}

		/* Check to return only count or full data */
		if(isset($options['count']) && $options['count'] == true){
			return $this->db->count_all_results();
		}else{
			return $this->db->get()->$method();
		}
		
	}
	
}
/* End of file Common_model.php */
/* Location: ./application/models/Common_model.php */
