<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trans_barang_keluar extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_trans_barang_keluar');
		  //jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['judul'] = 'Program Aplikasi Persediaan Bahan Baku Kimia';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['listing'] = $this->model_trans_barang_keluar->listing();
		$this->load->view('trans_barang_keluar/trans_barang_keluar_view',$data);
	}

	public function get_json_tgl_stok(){
		$datapos = $this->input->post('konten');
		$sql = $this->db->query("select * from trans_barang_masuk where id_barang = '$datapos' order by tanggal ASC")->result();
		//echo json_encode($sql);
		//var_dump($sql);
			echo "<option value=''>--Pilih--</option>";
			$no = 1;
		foreach($sql as $row){
			echo "<option value=".$row->tanggal.">".$no." ) ".$row->tanggal." </option>";
		$no++;
		}

		
	}

	public function get_val_stok_json(){
		$tglbrg = $this->input->post('tglbrg');
		$kdbrg = $this->input->post('kdbrg');
		$sql = $this->db->query("select * from trans_barang_masuk where tanggal = '$tglbrg' && id_barang = '$kdbrg' ")->row();
		echo json_encode($sql);
		//var_dump($sql);
		/*
			echo "<option value=''>--Pilih--</option>";
		foreach($sql as $row){
			echo "<option value=".$row->tanggal."> ".$row->tanggal." </option>";
		}
		*/
		
	}

	public function get_val_barang(){
		$datapos = $this->input->post('konten');
		$sql = $this->db->query("select a.*,b.kd_barang,b.nama,b.part_number,b.jenis_barang from trans_barang_masuk a
		left join tab_barang b on b.id = a.id_barang where a.id_barang = '$datapos'")->row();
		echo json_encode($sql);
		//var_dump($sql);
		/*
		foreach($sql as $row){
			echo "<option value=".$row->tanggal."> ".$row->tanggal." </option>";
		}
		*/
		
	}
	public function add(){
		$data['judul'] = 'Program Aplikasi Persediaan Bahan Baku Kimia';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['opt_barang'] = $this->model_trans_barang_keluar->opt_barang();	 
		$this->load->view('trans_barang_keluar/trans_barang_keluar_add',$data);
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['judul'] = 'Program Aplikasi Persediaan Bahan Baku Kimia';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['opt_barang'] = $this->model_trans_barang_keluar->opt_barang();
	 	$data['listing'] = $this->model_trans_barang_keluar->edit($id)->row();
		$this->load->view('trans_barang_keluar/trans_barang_keluar_edit',$data);
	}

	public function pro_add(){
		 
	 
		$datapos = array('id_barang'=>$this->input->post('id_barang'),
						 'qty'=> $this->input->post('qty'),
						 'tanggal'=> $this->input->post('tanggal')	
						 'val_id_brg'=>$this->input->post('val_id_brg');					 
						 );
		//echo $datapos['tanggal'];
		//exit();

		$sql =$this->model_trans_barang_keluar->pro_add($datapos);
		$this->db->query("update tab_barang set qty = qty-$datapos[qty] where id = '$datapos[id_barang]'");

		if($sql){
			    echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('trans_barang_keluar')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('trans_barang_keluar')."';
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
		$sqla = $this->db->query("select * from trans_barang_keluar where id = '$datapos[id]'")->row();
		$dataa = $sqla->qty;
		//balikin ke data semula
	    $this->db->query("update tab_barang set qty = qty+$dataa where id = '$datapos[id_barang]'");

		//set update yang baru
		$this->db->query("update tab_barang set qty = qty-$datapos[qty] where id = '$datapos[id_barang]'");

		//masuk ke transaksi
		$sql =$this->model_trans_barang_keluar->pro_edit($datapos);

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
		$sql = $this->model_trans_barang_keluar->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('trans_barang_keluar')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('trans_barang_keluar')."';
		        </script>";
		}
	}




	 
}
