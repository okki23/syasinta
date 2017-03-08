<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_laporan_barang_keluar extends CI_Model {
 
	public function __construct(){
		parent ::__construct();
		 
	}
 
	public function get_all_laporan_barang_keluar($start,$end){
 
	$query = $this->db->query("select a.*,b.nama as namabarang,c.nama as namagudang from trans_barang_keluar a 
left join tab_barang b on b.id = a.id_barang
left join tab_gudang c on c.id = b.id_gudang where tanggal BETWEEN '$start' AND '$end' order by a.id asc");

 	return $query;
	}
  
 
}
