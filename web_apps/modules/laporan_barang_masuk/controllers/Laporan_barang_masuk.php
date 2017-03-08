<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_barang_masuk extends CI_Controller {
 
	 
	  
	
    public function __construct(){
         parent::__construct();
         $this->load->model('model_laporan_barang_masuk');
         if($this->session->userdata('username') == ''){
            redirect(base_url('login'));
        }
    }
        
    public function cetak(){
            $this->load->library("pdf");
            $start = $this->input->post('start');
            $end = $this->input->post('end');
             $data['start'] = $start;
            $data['end'] = $end;
            $data['listing'] = $this->model_laporan_barang_masuk->get_all_laporan_barang_masuk($start,$end);

            $this->pdf->setPrintHeader(false);
            $this->pdf->setPrintFooter(true,'aku','kau');
            $this->pdf->SetHeaderData("", "", 'Judul Header', "codedb.co");
            $this->pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            // set auto page breaks
            $this->pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);    
            // add a page
            $this->pdf->AddPage("P","A4");
             // set font
            $this->pdf->SetFont("helvetica", "", 9); 
            $html = $this->load->view('laporan_barang_masuk/laporan_barang_masuk',$data,true);

            $this->pdf->writeHTML($html, true, false, true, false, "");
            $this->pdf->Output("Laporan Barang Masuk.pdf", "I");        
    }

    public function choose_date(){
        $data['judul'] = 'Program Aplikasi Persediaan Bahan Baku Kimia';
        $data['username'] = $this->session->userdata('username');
        $data['level'] = $this->session->userdata('level');
        //$data['listing'] = $this->model_gudang->listing();
        $this->load->view('laporan_barang_masuk/choose_date',$data);
    }
         
}
