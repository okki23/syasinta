<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
 
	public function listing()
	{	
		$sql =$this->db->query("SELECT*, CASE level
							    WHEN '1' THEN 'Administrator'
							    WHEN '2' THEN 'Admin Gudang'
							  	ELSE 'Produksi'
							    END AS status
							    FROM
							    tab_user order by id asc");

		return $sql;
	 
	}

	public function edit($id)
	{	
		$sql =$this->db->query("select * from tab_user where id = '$id'");

		return $sql;
	 
	}

	public function opt_gudang()
	{	
		$sql =$this->db->query("select * from tab_gudang order by id asc ");

		return $sql;
	 
	}

	public function pro_add($datapos){
		$sql = $this->db->query("insert into tab_user (id,username,password,level,user_insert,date_insert) VALUES (null,'$datapos[username]','$datapos[password]','$datapos[level]','$_SESSION[username]',now())");

		return $sql;
	}

	public function pro_edit_with_pass($datapos){
		$sql = $this->db->query("update tab_user set username = '$datapos[username]', password = '$datapos[password]', level = '$datapos[level]', user_update = '$_SESSION[username]', date_update = now() where id = '$datapos[id]'");

		return $sql;
	}

	public function pro_edit_no_pass($datapos){
			$sql = $this->db->query("update tab_user set username = '$datapos[username]', level = '$datapos[level]', user_update = '$_SESSION[username]', date_update = now() where id = '$datapos[id]'");
		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tab_user where id = '$id'");
		return $sql;
	}
}
