<?php
 if(!defined('BASEPATH')) exit('No direct script access is allowed3');
 /**
  * This forms the data access layer
  * @author Sreerag
  *
  */
 class Autocomplete_model extends CI_Model {
 	protected $CI;
 	public function __construct() {
 		parent::__construct();
 		$this->CI =& get_instance();
 		$this->CI->load->database();
 	}
 	
 	public function look_up($country_code) {
 		$end_res=null;
 		$this->db->select('*')
 		          ->from('country')
 		          ->like('printable_name',$country_code,'after');
 		$query=$this->db->get();
 		if (!empty($query)) {
 			$end_res=$query->result();
 		}
 		return $end_res;
 	}
 }
?>