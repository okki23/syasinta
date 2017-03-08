<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_login');
	}
	

	public function index()
	{
		$data['judul'] = ' Aplikasi Persediaan Bahan Baku Kimia CV Bakti Karya';
		$this->load->view('login/login_view',$data);
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		//echo $username. "<br>" .$password. "<br>";
		//exit();

		$cek = $this->model_login->auth($username,$password)->num_rows();
		$get = $this->model_login->auth($username,$password)->row();
		if($cek > 0){
			$list = array('username'=>$get->username,'level'=>$get->level);
			$this->session->set_userdata($list);
			//echo "1"; 
		 	redirect('dashboard');
		}else{
			//echo "0";
			redirect($this->index());
		}

	}

	public function logout(){
		//mematikan seluruh session yang sudah terdaftar dan kembali ke halaman login
		$this->session->sess_destroy($data);
		redirect(base_url('login'));
	}


	 
}
