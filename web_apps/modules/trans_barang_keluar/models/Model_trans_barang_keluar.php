<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_trans_barang_keluar extends CI_Model {
 
	public function listing()
	{	
		$sql =$this->db->query("select a.*,b.kd_barang as kodebarang,b.nama as namabarang,c.nama as namagudang from 
								trans_barang_keluar a 
								left join tab_barang b on b.id = a.id_barang
								left join tab_gudang c on c.id = b.id_gudang order by a.id asc");

		return $sql;
	 
	}

	public function edit($id)
	{	
		$sql =$this->db->query("select * from trans_barang_keluar where id = '$id'");

		return $sql;
	 
	}

	public function opt_barang()
	{	
		$sql =$this->db->query("select * from tab_barang order by id asc ");

		return $sql;
	 
	}

	public function pro_add($datapos){
		$sql = $this->db->query("insert into trans_barang_keluar (id,id_barang,qty,tanggal,user_insert,date_insert) VALUES (null,'$datapos[id_barang]','$datapos[qty]','$datapos[tanggal]','$_SESSION[username]',now())");

		return $sql;
	}

	public function pro_edit($datapos){
		$sql = $this->db->query("update trans_barang_keluar set id_barang = '$datapos[id_barang]', qty = '$datapos[qty]', tanggal = '$datapos[tanggal]', user_update = '$_SESSION[username]', date_update = now() where id = '$datapos[id]'");

		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from trans_barang_keluar where id = '$id'");
		return $sql;
	}
}
