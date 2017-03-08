<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trans_barang_masuk extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_trans_barang_masuk');
		  //jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}
	}

	public function cek_barang(){
		$id =$this->input->post('id');
		$sql = $this->db->query("select * from tab_barang where id = '$id' ")->result();
		echo json_encode($sql);
	}
	public function index()
	{
		$data['judul'] = 'Program Aplikasi Persediaan Bahan Baku Kimia';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['listing'] = $this->model_trans_barang_masuk->listing();
		//var_dump($data['listing']);
		$this->load->view('trans_barang_masuk/trans_barang_masuk_view',$data);
	}

	public function add(){
		$data['judul'] = 'Program Aplikasi Persediaan Bahan Baku Kimia';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['opt_barang'] = $this->model_trans_barang_masuk->opt_barang();
	 
		$this->load->view('trans_barang_masuk/trans_barang_masuk_add',$data);
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['judul'] = 'Program Aplikasi Persediaan Bahan Baku Kimia';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['opt_barang'] = $this->model_trans_barang_masuk->opt_barang();
	 	$data['listing'] = $this->model_trans_barang_masuk->edit($id)->row();
		$this->load->view('trans_barang_masuk/trans_barang_masuk_edit',$data);
	}

	public function pro_add(){
		 
	 
		$datapos = array('id_barang'=>$this->input->post('id_barang'),
						 'qty'=> $this->input->post('qty'),
						 'tanggal'=> $this->input->post('tanggal')						 
						 );
		//echo $datapos['tanggal'];
		//exit();

		$sql =$this->model_trans_barang_masuk->pro_add($datapos);
		//rubah qty ke master
		$this->db->query("update tab_barang set qty = qty+$datapos[qty] where id = '$datapos[id_barang]'");
		if($sql){
			    echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('trans_barang_masuk')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('trans_barang_masuk')."';
		        </script>";
		}
	}

	public function pro_edit(){
		 
		$datapos = array('id'=>$this->input->post('id'),
						 'id_barang'=>$this->input->post('id_barang'),
						 'qty'=> $this->input->post('qty'),
						 'tanggal'=> $this->input->post('tanggal')						 
						 );

		//$sqla = $this->db->query("update tab_barang set qty = qty-$datapos[qty] where id = '$datapos[id_barang]'");
		//echo "update tab_barang set qty = qty-".$datapos['qty']." where id = '".$datapos['id_barang']."' ";
		//exit();

		//ambil data buat dibalikin
		$sqla = $this->db->query("select * from trans_barang_masuk where id = '$datapos[id]'")->row();
		$dataa = $sqla->qty;
		//balikin ke data semula
	    $this->db->query("update tab_barang set qty = qty-$dataa where id = '$datapos[id_barang]'");

		//set update yang baru
		$this->db->query("update tab_barang set qty = qty+$datapos[qty] where id = '$datapos[id_barang]'");

		//masuk ke transaksi
		$sql =$this->model_trans_barang_masuk->pro_edit($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('trans_barang_masuk')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('trans_barang_masuk')."';
		        </script>";
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_trans_barang_masuk->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('trans_barang_masuk')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('trans_barang_masuk')."';
		        </script>";
		}
	}




	 
}
