<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan_stok extends CI_Model {
 
	public function __construct(){
		parent ::__construct();
		 
	}
 
	public function get_all_laporan_stok(){
 
	$query = $this->db->query("select a.*,b.nama as namagudang from tab_barang a 
							  left join tab_gudang b on b.id = a.id_gudang order by a.id asc");

 	return $query;
	}
  
 
}
