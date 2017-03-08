 <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 14px Helvetica, Sans-Serif; line-height: 24px;   }
        .clear { clear: both; }
        #page-wrap { width: 960px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 12px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 -5px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 12px; text-align: left; padding: 0 25px 0 0; width: 100%; float: left; margin-left: 20px; height: 40px; }
        .sub { font-style: italic; font-weight: bold; font-size: 10px; text-align: left; padding: 0 25px 0 0; width: 100%; float: left; margin-left: -10px; height: 40px; }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 5px; }
       
     </style>
<table width="100%" border="0" cellpadding="0" style="padding-bottom:1px; padding-left: 1px; padding-right: 1px; padding-top: 1px;">
    <tr>
 
        <td width="20%"> <img src="<?php echo base_url('images/logo.png');?>" width="110" height="60">  </td>
        <td width="75%"> <b> <br> &nbsp; PT.ASDP INDONESIA FERRY </b> <br> &nbsp; <b>REPORT DATA RIWAYAT HIDUP </b>  </td>        
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
    <tr>

        <td width="100%" align="center"> <b style="font-size: 12px;"> DAFTAR RIWAYAT HIDUP </b>  </td>
              
    </tr>
    <tr>
        <td> &nbsp; </td>
    </tr>
     
    &nbsp;
    <tr>
        <td> &nbsp; </td>
    </tr>
    
    <div style="font-size: 9px; align-content: left;">
            <table border="0">
                <tr>
                    <td width="30%;"> Nama Lengkap </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $name_full; ?></td>
                    <td rowspan="13"> <img src="<?php echo base_url('assets/images/foto/'.$foto);?>" width="90" height="120">  </td>
                    
                </tr>
            
             
                <tr>
                    <td width="30%;"> NIK </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $personelid; ?> </td>
                </tr>
           
             
                <tr>
                    <td width="30%;"> Pangkat/Golongan </td>
                    <td width="3%;" > : </td>
                    <td width="35%;">  </td>
                </tr>
             
           
                <tr>
                    <td width="30%;"> Tempat/Tanggal Lahir </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $tempatlahir.' / '.$tanggallahir; ?></td>
                </tr>
             
                <tr>
                    <td width="30%;"> Alamat Tempat Tinggal </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $isialamat;   ?>
                    </td>
                </tr>
            
                <tr>
                    <td width="30%;"> No.Telepon/Fax </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo '+'.$comunication; ?>  </td>
                </tr>
            
                <tr>
                    <td width="30%;"> Agama </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $agama; ?>   </td>
                </tr>
            
                <tr>
                    <td width="30%;"> Status Pernikahan </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $statusnikah; ?>  </td>
                </tr>
             
                <tr>
                    <td width="30%;"> SK </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $sk; ?> </td>
                </tr>
            
                <tr>
                    <td width="30%;"> Unker/Cabang </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $namaunit; ?> </td>
                </tr>
             
                <tr>
                    <td width="30%;"> Bagian/KMP </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $bagian;?> </td>
                </tr>
             
                <tr>
                    <td width="30%;"> Jabatan </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $namajabatan; ?></td>
                </tr>
             
                <tr>
                    <td width="30%;"> Wilayah </td>
                    <td width="3%;" > : </td>
                    <td width="35%;"> <?php echo $namawilayah; ?> </td>
                </tr>
            </table>
        </div>
 
       
        <dl>
             
            <dt>Data Suami / Istri / Anak <hr></dt>
            <dd>
               
                <p>
                    <table>
                 <?php
                 if($datakeluarga->num_rows() > 0){
                     foreach($datakeluarga->result() as $row){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "<b>".$row->name_full."</b> (".$row->hubungan." ,".$row->birth_place.", ".$row->tgllahir.")"; ?></td>  
                       </tr>
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
             
        </dl>
    
        <dl>
             
            <dt>Riwayat Pekerjaan <hr></dt>
            <dd>
                <p class="sub"> A.Penugasan</p>
                <p>
                <table>
                 <?php
                 if($penugasan->num_rows() > 0){
                     
                     foreach($penugasan->result() as $rowpenugasan){
                 ?>
                       <tr style="margin-top:10px; ">
                           <td> <?php echo " &nbsp; <b>".$rowpenugasan->nama_jabatan."</b> (".$rowpenugasan->nm_unit." ,  No.SK :".$rowpenugasan->legal_letter_no."   Tanggal SK :  ".$rowpenugasan->tanggalsk.") <br> <b> &nbsp; Keterangan : </b>" .$rowpenugasan->remark; ?></td>  
                       </tr>
                 <?php
                    
                 
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            <dd>
                <p class="sub"> B.Jabatan </p>
                <p>
                    <table>
                 <?php
                 if($rjabatan->num_rows() > 0){
                     foreach($rjabatan->result() as $rowrjab){
                 ?>
                       <tr style="margin-top:10px; padding: 0 0 5px 0; ">
                           <td> <?php echo " &nbsp; <b>".$rowrjab->nama_jabatan."</b> (".$rowrjab->nm_unit." ,  No.SK :".$rowrjab->legal_letter_no."   Tanggal SK :  ".$rowrjab->tanggalsk.") <br>  &nbsp;   <b>Keterangan : </b>" .$rowrjab->remark."<br>"; ?></td>  
                       </tr>
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            
            
            
            <dt>Riwayat Pendidikan <hr></dt>
            <dd>
                <p class="sub"> A.Pendidikan Formal </p>
                <p>
                    <table>
                 <?php
                 if($pendidikan->num_rows() > 0){
                     foreach($pendidikan->result() as $roweducation){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo " &nbsp; <b>".$roweducation->tingkat."</b> (<b>".$roweducation->major."</b>) <br> &nbsp; &nbsp;".$roweducation->education_institution. "<br>  &nbsp; Tahun Lulus : " .$roweducation->tanggallulus."<br>"; ?></td>  
                       </tr>
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            <dd>
                <p class="sub"> B.Pendidikan / Pelatihan Kelautan  </p>
                <p>
                    <table>
                 <?php
                 if($training->num_rows() > 0){
                     foreach($training->result() as $rowtraining){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "  &nbsp; <b>".$rowtraining->training_type_name." <br>  &nbsp; ".$rowtraining->training_institution_name."</b> <br>  &nbsp; Certificate No : ".$rowtraining->certificate_no. "<br>  &nbsp; Tahun Lulus : " .$rowtraining->tanggallulus."<br>"; ?></td>  
                       </tr>
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            
            <dd>
                <p class="sub"> C.Pendidikan Lainnya (Pelatihan/Penataran/Lokakarya/Seminar) </p>
                <p>
                    <table>
                 <?php
                 if($trainingother->num_rows() > 0){
                     foreach($trainingother->result() as $rowpelkur){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "  &nbsp; <b>".$rowpelkur->training_type_name." <br>  &nbsp; ".$rowpelkur->training_institution_name."</b> <br>  &nbsp;  Tahun Lulus : ".$rowpelkur->tanggallulus."<br>"; ?></td>  
                       </tr>
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            
            <dt>Riwayat Penghargaan<hr></dt>
            <dd>
               
                <p>
                    <table>
                 <?php
                 if($penghargaan->num_rows() > 0){
                     foreach($penghargaan->result() as $rowpenghargaan){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "<b>".$rowpenghargaan->description."</b> <b>(".$rowpenghargaan->jenispenghargaan.") </b><br> No.SK : ".$rowpenghargaan->reference_no."<br> Tanggal : ".$rowpenghargaan->tanggalpenghargaan."<br> Pemberi Penghargaan :".$rowpenghargaan->authority_officer."<br> Keterangan : ".$rowpenghargaan->remark."<br>"; ?></td>  
                       </tr> 
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            
            <dt>Riwayat Hukuman<hr></dt>
            <dd>
               
                <p>
                    <table>
                 <?php
                 if($hukuman->num_rows() > 0){
                     foreach($hukuman->result() as $rowhukuman){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "<b>".$rowhukuman->jenishukuman."</b> <br> Tanggal :".$rowhukuman->tanggalhukuman."  <br> No.Surat : ".$rowhukuman->reference_no."<br> Pemberi Hukuman :".$rowhukuman->authority_officer."<br>"; ?></td>  
                       </tr> 
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            <dt>Fasilitas<hr></dt>
            <dd>
               
                <p>
                    <table>
                 <?php
                 if($fasilitas->num_rows() > 0){
                     foreach($fasilitas->result() as $rowfasilitas){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "<b>".$rowfasilitas->jenisfasilitas."</b> <br> Owner :".$rowfasilitas->facility_owner."  <br> Brand : ".$rowfasilitas->brand."<br> No.Seri :".$rowfasilitas->serial_no."<br>"; ?></td>  
                       </tr> 
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            <dt>Endorsement<hr></dt>
            <dd>
               
                <p>
                    <table>
                 <?php
                 if($endorsement->num_rows() > 0){
                     foreach($endorsement->result() as $rowendor){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "<b>No.Endorsement : ".$rowendor->endorsment_no."</b> <br> Tanggal :".$rowendor->tanggalendor."  <br> Kewenangan : ".$rowendor->authority."<br> Keterangan :".$rowendor->remark."<br>"; ?></td>  
                       </tr> 
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            <dt>Medical Check Up<hr></dt>
            <dd>
               
                <p>
                    <table>
                 <?php
                 if($mcu->num_rows() > 0){
                     foreach($mcu->result() as $rowmcu){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "<b>Tanggal MCU : ".$rowmcu->tanggalmcu."</b> <br> Hasil :".$rowmcu->hasil."  <br> Catatan : ".$rowmcu->health_note."<br>"; ?></td>  
                       </tr> 
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            <dt>Buku Pelaut<hr></dt>
            <dd>
               
                <p>
                    <table>
                 <?php
                 if($bpelaut->num_rows() > 0){
                     foreach($bpelaut->result() as $rowbpelaut){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "<b>No.Buku : ".$rowbpelaut->book_no."</b> <br> Tanggal :".$rowbpelaut->tglbpelaut."  <br> Tempat Dikeluarkan : ".$rowbpelaut->place_of_issued."<br> Negara : ".$rowbpelaut->negara."<br>"; ?></td>  
                       </tr> 
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            
            <dt>Kemampuan Bahasa<hr></dt>
            <dd>
               
                <p>
                    <table>
                 <?php
                 if($bahasa->num_rows() > 0){
                     foreach($bahasa->result() as $rowbahasa){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "<b>Bahasa : ".$rowbahasa->tipebahasa."</b> <br> Oral Grade :".$rowbahasa->hasiloraltest."  <br> Written Grade : ".$rowbahasa->hasilwrittentest."<br>"; ?></td>  
                       </tr> 
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            
            <dt>Pengalaman Pekerjaan<hr></dt>
            <dd>
               
                <p>
                    <table>
                 <?php
                 if($rpekerjaan->num_rows() > 0){
                     foreach($rpekerjaan->result() as $rowrpekerjaan){
                 ?>
                       <tr style="margin-top:10px;">
                           <td> <?php echo "<b>Periode : ".$rowrpekerjaan->tglmulai." Sampai ".$rowrpekerjaan->tglakhir."</b> <br> Company / Employer:".$rowrpekerjaan->employer."  <br> Industry Type : ".$rowrpekerjaan->industry_type."<br> Position : ".$rowrpekerjaan->position_name."<br>"; ?></td>  
                       </tr> 
                 <?php
                 }
                 }else{
                 ?>
                    <tr>
                           <td> N/A </td>
                           
                    </tr>   
                 <?php
                 }
                 ?>
                 
                        
                </table>
                
                </p>
            </dd>
            
            
             
        </dl>
        <div style="font-size: 8px;font-weight: bolder;">
            
            <?php 
            date_default_timezone_set("Asia/Jakarta");
            echo date('M d, Y H:i A');
            ?> 
        </div>
    
</table>