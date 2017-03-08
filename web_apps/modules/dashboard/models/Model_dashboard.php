<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {
 
	public function list_po()
	{
	 return $this->db->query("select * from tab_barang WHERE qty <= 5")->result();
	   
	}

	public function list_po_count()
	{
		/*echo $this->db
       ->where('active',1)
       ->count_all_results('table_name');*/
	 return $this->db->where('qty','>5')->count_all_results('tab_barang');
	 
	}



}
