<?php 
 if(!defined(BASEPATH)) exit('No direct script access allowed');
 class Autocomplete extends MX_Controller {
  
 	public function __construct() {
 		$this->load->library('autocomplete_lib','ac_lib');
 	}
 	
 	public function index() {}
 	
 	public function lookup() {
 		$country_keyword=$this->input->post('country');
 		$this->ac_lib->look_up($country_keyword);
 	}
 }

?>