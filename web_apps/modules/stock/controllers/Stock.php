<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stock extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_stock');
		 //$this->load->model('laporan_stok/model_laporan_stok');
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

		$data['listing'] = $this->model_stock->listing();
		$this->load->view('stock/stock_view',$data);
	}

	public function view_stock()
	{
		 
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');

		$data['listing'] = $this->model_stock->get_all_laporan_stok();
		$this->load->view('stock/view_stock',$data);
	}

	public function add(){
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['kd_stock'] = "KDBRG".$this->transaksi_id();
		$data['opt_gudang'] = $this->model_stock->opt_gudang();
	 
		$this->load->view('stock/stock_add',$data);
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['opt_gudang'] = $this->model_stock->opt_gudang();
	 	$data['listing'] = $this->model_stock->edit($id)->row();
		$this->load->view('stock/stock_edit',$data);
	}

	public function pro_add(){
		 
	 
		$datapos = array('kd_stock'=>$this->input->post('kd_stock'),
						 'part_number'=>$this->input->post('part_number'),
						 'nama'=> $this->input->post('nama'),
						 'jenis_stock'=> $this->input->post('jenis_stock'),
						 'id_gudang'=> $this->input->post('id_gudang'),
						 'qty'=>0
						 );
		$sql =$this->model_stock->pro_add($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('stock')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('stock')."';
		        </script>";
		}
	}

	public function pro_edit(){
		 
		$datapos = array('id'=>$this->input->post('id'),
					     'kd_stock'=>$this->input->post('kd_stock'),
						 'part_number'=>$this->input->post('part_number'),
						 'nama'=> $this->input->post('nama'),
						 'jenis_stock'=> $this->input->post('jenis_stock'),
						 'id_gudang'=> $this->input->post('id_gudang')
						 );

		$sql =$this->model_stock->pro_edit($datapos);

		if($sql){
			    echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('stock')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('stock')."';
		        </script>";
		}
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_stock->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('stock')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penghapusan Data Berhasil');
				window.location='".base_url('stock')."';
		        </script>";
		}
	}

	 public function transaksi_id($param='') {
        $data = $this->model_stock->get_last_no();
        $lastid = $data->row();
        $idnya = $lastid->id;
       

            if($idnya=='') { // bila data kosong
                    $ID = $param."001";
            //00000001
                }else {
                    $MaksID = $idnya;
                    $MaksID++;
             
             if($MaksID < 10) $ID = $param."00".$MaksID;
               else if($MaksID < 100) $ID = $param."0".$MaksID;
    
                    else $ID = $MaksID;  
                }

                return $ID;
    }




	 
}
