<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_pelanggan');
		  //jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['listing'] = $this->model_pelanggan->listing();
		$this->load->view('pelanggan/pelanggan_view',$data);
	}

	public function add(){
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['opt_gudang'] = $this->model_pelanggan->opt_gudang();
	 
		$this->load->view('pelanggan/pelanggan_add',$data);
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['opt_gudang'] = $this->model_pelanggan->opt_gudang();
	 	$data['listing'] = $this->model_pelanggan->edit($id)->row();
		$this->load->view('pelanggan/pelanggan_edit',$data);
	}

	public function pro_add(){
		 
	 
		$datapos = array('nama'=>$this->input->post('nama'),
						 'alamat'=>$this->input->post('alamat'),
						 'no_telp'=> $this->input->post('no_telp'),
						 'email'=> $this->input->post('email')
						 );
		$sql =$this->model_pelanggan->pro_add($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('pelanggan')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('pelanggan')."';
		        </script>";
		}
	}

	public function pro_edit(){
		 
		
		$datapos = array('id'=>$this->input->post('id'),
						 'nama'=>$this->input->post('nama'),
						 'alamat'=>$this->input->post('alamat'),
						 'no_telp'=> $this->input->post('no_telp'),
						 'email'=> $this->input->post('email')
						 );

		$sql =$this->model_pelanggan->pro_edit($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('pelanggan')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('pelanggan')."';
		        </script>";
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_pelanggan->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('pelanggan')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('pelanggan')."';
		        </script>";
		}
	}




	 
}
