<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_gudang extends CI_Model {
 
	public function listing()
	{	
		$sql =$this->db->query("select * from tab_gudang order by id asc");

		return $sql;
	 
	}

	public function edit($id)
	{	
		$sql =$this->db->query("select * from tab_gudang where id = '$id'");

		return $sql;
	 
	}

	public function opt_gudang()
	{	
		$sql =$this->db->query("select * from tab_gudang order by id asc ");

		return $sql;
	 
	}

	public function pro_add($datapos){
		$sql = $this->db->query("insert into tab_gudang (id,nama,user_insert,date_insert) VALUES (null,'$datapos[nama]','$_SESSION[username]',now())");

		return $sql;
	}

	public function pro_edit($datapos){
		$sql = $this->db->query("update tab_gudang set nama = '$datapos[nama]', user_update = '$_SESSION[username]', date_update = now() where id = '$datapos[id]'");

		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tab_gudang where id = '$id'");
		return $sql;
	}
}
