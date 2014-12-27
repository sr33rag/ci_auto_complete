<?php
 if(!defined('BASEPATH')) exit('No direct script access is allowed2');
 /**
  * This forms the business layer
  * @author Sreerag
  *
  */
 class Ac_lib {
 	protected $CI;
 	public function __construct() {
 		$this->CI =& get_instance();
 		//$this->CI->load->config('autocomplete/ac_lib',TRUE);
 		$this->CI->load->model('autocomplete/autocomplete_model');
 	}
 	
 	public function look_up($keyword) {
   	  return $this->CI->autocomplete_model->look_up($keyword); //search in db 	  
 	}
 }
?>