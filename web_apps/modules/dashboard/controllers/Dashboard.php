<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_dashboard');

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
		$data['list_po'] = $this->model_dashboard->list_po();

		//echo $this->db->last_query();

		$this->load->view('dashboard/dashboard_view',$data);
	}

	public function view()
	{
		$data['judul'] = 'Viewku';

		$this->load->view('user/tampilan_view',$data);
	}

	public function add()
	{
		$data['judul'] = 'Add Aku';
		$this->load->view('user/tampilan_add',$data);
	}


}
