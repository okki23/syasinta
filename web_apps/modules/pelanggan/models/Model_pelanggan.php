<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelanggan extends CI_Model {
 
	public function listing()
	{	
		$sql =$this->db->query("select * from tab_pelanggan order by id asc");

		return $sql;
	 
	}

	public function edit($id)
	{	
		$sql =$this->db->query("select * from tab_pelanggan where id = '$id'");

		return $sql;
	 
	}

	public function opt_gudang()
	{	
		$sql =$this->db->query("select * from tab_gudang order by id asc ");

		return $sql;
	 
	}

	public function pro_add($datapos){
		$sql = $this->db->query("insert into tab_pelanggan (id,nama,alamat,no_telp,email,user_insert,date_insert) VALUES (null,'$datapos[nama]','$datapos[alamat]','$datapos[no_telp]','$datapos[email]','$_SESSION[username]',now())");

		return $sql;
	}

	public function pro_edit($datapos){
		$sql = $this->db->query("update tab_pelanggan set nama = '$datapos[nama]', alamat = '$datapos[alamat]', no_telp = '$datapos[no_telp]',email = '$datapos[email]', user_update = '$_SESSION[username]', date_update = now() where id = '$datapos[id]'");

		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tab_pelanggan where id = '$id'");
		return $sql;
	}
}
