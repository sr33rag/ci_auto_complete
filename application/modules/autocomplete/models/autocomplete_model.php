<?php
 if(!defined(BASEPATH)) exit('No direct script access is allowed');
 class Autocomplete_model extends CI_Model {
 	
 	public function __construct() {
 		$this->load->library('database');
 	}
 	
 	public function look_up($country_code) {
 		$this->db->select('*')
 		          ->from('country')
 		          ->like('printable_name',$country_code,'after');
 		$query=$this->db->get();
 		return $query->result();
 	}
 }
?>