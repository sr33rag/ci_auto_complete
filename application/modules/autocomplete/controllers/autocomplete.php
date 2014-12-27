<?php 
 if(!defined('BASEPATH')) exit('No direct script access allowed');
 /**
  * The controller layer
  * @author Sreerag
  **/
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
 		if(!empty($results)) {
 			$data['response']='true';
 			foreach($results as $row) {
 				$data['message'][]=array('id'=>$row->id,'value'=>$row->printable_name,'');
 			}
 		}
 		if('IS_AJAX') {
 			echo json_encode($data);
 		} else {
 			$this->load->view('index',$data);
 		}
 	}
 }

?>