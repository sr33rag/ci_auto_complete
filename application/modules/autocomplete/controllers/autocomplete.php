<?php 
 if(!defined('BASEPATH')) exit('No direct script access allowed1');
 class Autocomplete extends CI_Controller {
  
 	public function __construct() {
 		parent::__construct();
 		$this->load->helper(array('url','form'));
 		$this->load->library('ac_lib');
 	}
 	
 	public function index() {
 		$this->load->view('show_view');
 	}
 	
 	public function lookup() {
 		$country_keyword=$this->input->post('term');
 		$data['response']='false'; //default response
 		
 		$results=$this->ac_lib->look_up($country_keyword);
 		
 		if('IS_AJAX') {
 			echo json_encode($results);
 		} else {
 			$this->load->view('index',$results);
 		}
 	}
 }

?>