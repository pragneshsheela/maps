<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct(){

		parent::__construct();
		
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');

		$this->load->model('order_m');
	}

	public function index() {
		
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        $data['orders']=  select('tbl_order',false,array('where'=>array('system_status'=>'new')));
        //p($data,TRUE);

        $username = $this->session->userdata('identity');
        $data['username']=$username;
		$this->template->load('admin','order/index',$data);
	}

	public function import() {

		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin()) {
            redirect('auth', 'refresh');
        }

        if (!empty($_FILES['upload']['name'])) {
        	
        	$file = $_FILES['upload']['tmp_name'];
		
			//load the excel library
			$this->load->library('excel');

			//read file from path
			$objPHPExcel = PHPExcel_IOFactory::load($file);

			//get only the Cell Collection
			$cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

			//extract to a PHP readable array format
			foreach ($cell_collection as $cell) {

			 	$column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
			 	$row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
			 	$data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
			 	
			 	//header will/should be in row 1 only. 
			 	if ($row == 1) {
			 		$header[$row][$column] = $data_value;
			 	} else {
			 		$arr_data[$row][$column] = trim($data_value, '"');
			 	}
			}
			// p($arr_data, TRUE);
			
			foreach ($arr_data as $value) {
				$data_add = [];
				foreach($value as $key => $val) {
					$key = $header[1][$key];
					$value = $val;
					$data_add[$key] = $value;
				}
				insert('tbl_order',$data_add);
			}

			$this->session->set_flashdata('success', 'Order has been imported Successfully.');
			redirect('order/index');


		} else {
			$username = $this->session->userdata('identity');
	 		$data['username']=$username;
		 	$this->template->load('admin','order/import',$data);
		}
	}
}
