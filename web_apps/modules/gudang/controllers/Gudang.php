<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gudang extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_gudang');
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
		$data['listing'] = $this->model_gudang->listing();
		$this->load->view('gudang/gudang_view',$data);
	}

	public function add(){
		$data['judul'] = 'Program Aplikasi Persediaan Bahan Baku Kimia';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
	 
	 
		$this->load->view('gudang/gudang_add',$data);
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['judul'] = 'Program Aplikasi Persediaan Bahan Baku Kimia';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		 
	 	$data['listing'] = $this->model_gudang->edit($id)->row();
		$this->load->view('gudang/gudang_edit',$data);
	}

	public function pro_add(){
		 
		$datapos = array('nama'=> $this->input->post('nama'));

		$sql =$this->model_gudang->pro_add($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('gudang')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('gudang')."';
		        </script>";
		}
	}

	public function pro_edit(){
		 
	$datapos = array('id'=> $this->input->post('id'),
					 'nama'=> $this->input->post('nama'));

		$sql =$this->model_gudang->pro_edit($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('gudang')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('gudang')."';
		        </script>";
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_gudang->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('gudang')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('gudang')."';
		        </script>";
		}
	}




	 
}
