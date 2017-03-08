<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_stok extends CI_Controller {
 
	 
	  
	
    public function __construct(){
         parent::__construct();
         $this->load->model('model_laporan_stok');
         if($this->session->userdata('username') == ''){
            redirect(base_url('login'));
        }
    }
        
        public function index(){
            $this->load->library("pdf");
            $data['listing'] = $this->model_laporan_stok->get_all_laporan_stok();

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
            $html = $this->load->view('laporan_stok/laporan_stok',$data,true);

            $this->pdf->writeHTML($html, true, false, true, false, "");
            $this->pdf->Output("Laporan Stok.pdf", "I");        
        }
         
}
