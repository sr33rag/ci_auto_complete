<?php
 if(!defined('BASEPATH')) exit('No direct script access is allowed2');
 class Ac_lib {
 	protected $CI;
 	public function __construct() {
 		$this->CI =& get_instance();
 		//$this->CI->load->config('autocomplete/ac_lib',TRUE);
 		$this->CI->load->model('autocomplete/autocomplete_model');
 	}
 	
 	public function look_up($keyword) {
 		$ret_vals[][]=NULL; //collection of rows
 		$res_rows=$this->CI->autocomplete_model->look_up($keyword); //search in db
 		if(!empty($res_rows)) {
 		  foreach($res_rows as $res_row) {
 		  	$retvals['message'][]=array('id'=>$res_row->id,
 		  			'value'=>$res_row->printable_name);
 		  }
 		}
 	  return $ret_vals;
 	}
 }
?>