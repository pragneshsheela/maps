<?php
	class Order_m extends MY_Model{

		protected $table = "tbl_order";
		protected $primary_key = "id";
		protected $fields = array('id','_id','order_id','status','item_count','total','txn_id','email','seller_name','discounts_total','financial_status','line_item_name','line_item_variant_id','line_item_unit_price','line_item_price','line_item_sku','line_item_discounts_total','line_item_discount','line_item_price_compareprice_discount','line_item_taxes_total','line_item_total','line_item_quantity','line_item_info','created_on','shipping_status','shipping_total','updated_on','info','shipping_address_country','shipping_address_full_name','shipping_address_address','shipping_address_city','shipping_address_state','shipping_address_zip' ,'shipping_address_phone','payment_details_type','client_ip','client_device','system_created_on','system_updated_on','system_status');
	} 
?>