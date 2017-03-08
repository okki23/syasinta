<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_stock extends CI_Model {
 
	public function listing()
	{	
		$sql =$this->db->query("select a.*,b.nama as nama_gudang from tab_barang a left join tab_gudang b on b.id = a.id_gudang order by a.id asc");

		return $sql;
	 
	}

	public function edit($id)
	{	
		$sql =$this->db->query("select * from tab_barang where id = '$id'");

		return $sql;
	 
	}

	public function get_all_laporan_stok(){
 
	$query = $this->db->query("select a.*,b.nama as namagudang from tab_barang a 
							  left join tab_gudang b on b.id = a.id_gudang order by a.id asc");

 	return $query;
	}

	public function opt_gudang()
	{	
		$sql =$this->db->query("select * from tab_gudang order by id asc ");

		return $sql;
	 
	}

	public function pro_add($datapos){
		$sql = $this->db->query("insert into tab_barang (id,kd_stock,part_number,nama,jenis_stock,id_gudang,qty,user_insert,date_insert) VALUES (null,'$datapos[kd_stock]','$datapos[part_number]','$datapos[nama]','$datapos[jenis_stock]','$datapos[id_gudang]','$datapos[qty]','$_SESSION[username]',now())");

		return $sql;
	}

	public function pro_edit($datapos){
		$sql = $this->db->query("update tab_barang set kd_stock = '$datapos[kd_stock]', part_number = '$datapos[part_number]', nama = '$datapos[nama]',jenis_stock = '$datapos[jenis_stock]', id_gudang = '$datapos[id_gudang]', user_update = '$_SESSION[username]', date_update = now() where id = '$datapos[id]'");

		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tab_barang where id = '$id'");
		return $sql;
	}

	public function get_last_no(){
		$query = $this->db->query("SELECT SUBSTR(MAX(kd_stock),-3) AS id  FROM tab_barang");
	       
		return $query;
		}
}
