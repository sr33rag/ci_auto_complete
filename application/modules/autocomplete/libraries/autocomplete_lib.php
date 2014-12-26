<?php
 if(!defined(BASEPATH)) exit('No direct script access is allowed');
 class Autocomplete_lib {
 	
 	public function __construct() {
 		$this->load->model('autocomplete_model');
 	}
 	
 	public function look_up($keyword) {
 		$this->autocomplete_model->look_up($keyword);
 	}
 }
?>