<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $judul; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">

     
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css?=121');?>">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

     
    <link href='<?php echo base_url();?>assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    
    <link href='<?php echo base_url();?>assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    
    

<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/plugins/form-select2/select2.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/plugins/form-multiselect/css/multi-select.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/plugins/form-daterangepicker/daterangepicker-bs3.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/plugins/form-fseditor/fseditor.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/plugins/form-tokenfield/bootstrap-tokenfield.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/js/jqueryui.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/plugins/codeprettifier/prettify.css' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url();?>assets/plugins/form-toggle/toggles.css' /> 

<script type="text/javascript" src="<?php echo base_url();?>assets/js/less.js"></script>
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery-1.10.2.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jqueryui-1.10.3.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/js/bootstrap.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/js/enquire.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.cookie.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.nicescroll.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/codeprettifier/prettify.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/easypiechart/jquery.easypiechart.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/sparklines/jquery.sparklines.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-toggle/toggle.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-multiselect/js/jquery.multi-select.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/quicksearch/jquery.quicksearch.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-typeahead/typeahead.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-select2/select2.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-autosize/jquery.autosize-min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-daterangepicker/daterangepicker.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-datepicker/js/bootstrap-datepicker.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-daterangepicker/moment.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-fseditor/jquery.fseditor-min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-jasnyupload/fileinput.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/plugins/form-tokenfield/bootstrap-tokenfield.min.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/demo/demo-formcomponents.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/js/placeholdr.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/js/application.js'></script> 
<script type='text/javascript' src='<?php echo base_url();?>assets/demo/demo.js'></script> 


<script type="text/javascript">
$("#tutup").hide();
$(document).ready(function(){
    
    $("#source_barang").on("change",function(){
         var isi = $(this).val();
         //alert(isi);
         $.ajax({
            url:"<?php echo base_url('trans_barang_keluar/get_json_tgl_stok'); ?>",
            data:{konten:isi},
            type:"POST",
            success:function(data){
                console.log(data);
                //var isidom = JSON.parse(data);
                $("#opt_tgl_masuk").html(data)
            }
         });

         $.ajax({
            url:"<?php echo base_url('trans_barang_keluar/get_val_barang'); ?>",
            data:{konten:isi},
            type:"POST",
            success:function(datax){
                console.log(datax);
                var isidom = JSON.parse(datax);
                $("#val_id_brg").val(isidom.id_barang);
            }
         });
    });

    $("#opt_tgl_masuk").on("change",function(){
        var tglbrg = $(this).val();
        var kdbrg = $("#val_id_brg").val();
        $.ajax({
             url:"<?php echo base_url('trans_barang_keluar/get_val_stok_json'); ?>",
            data:{tglbrg:tglbrg,kdbrg:kdbrg},
            type:"POST",
            success:function(datas){
                console.log(datas);
                var isidom = JSON.parse(datas);
                $("#stoks").val(isidom.qty);
            }
        });
    });
});
</script>
</head>

<body>

 
    <?php 
    $this->load->view('header');
    ?>
    <div id="page-container">
    <?php
    $this->load->view('sidebar');
    ?>

     
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
           

            <h1>Transaksi Barang Keluar</h1>
            
        </div>

        <div class="container">

<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Form Add Transaksi Barang Keluar</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <form action="<?php echo base_url('trans_barang_keluar/pro_add');?>" method="POST" enctype="multipart/form-data" class="form-horizontal row-border">
            <div class="form-group">
            <input type="hidden" name="val_id_brg" id="val_id_brg">
                <label class="col-sm-3 control-label">Nama Barang</label>
                <div class="col-sm-6">
                    <select class="form-control" id="source_barang" name="id_barang">
                        <option value="">--Pilih--</option>
                        <?php
                        foreach ($opt_barang->result() as $rowopt) {     
                        echo "<option value=".$rowopt->id."> ".$rowopt->kd_barang." - ".$rowopt->nama." </option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Tanggal Masuk Barang</label>
                <div class="col-sm-6">
                   <select class="form-control" id="opt_tgl_masuk" name="opt_tgl_masuk">
                        <option value="">--Pilih--</option>
                       
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Stok Barang Per Tanggal Masuk </label>
                <div class="col-sm-6">
                    <input type="text" readonly="readonly" class="form-control" name="stoks" id="stoks">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Qty</label>
                <div class="col-sm-6">
                <div class="col-sm-3">
                 <input type="number" class="form-control" name="qty"> 
                </div>
                <div class="col-sm-3">
                (KG)
                </div>
                  
                </div>
            </div>

          
            <div class="form-group">
                <label class="col-sm-3 control-label">Tanggal</label>
                 <div class="col-sm-6">
                    <input type="text" class="form-control" id="tanggal" name="tanggal">
                </div>
            </div>
            
            
          
           
            
       
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="btn-toolbar">
                        <button class="btn-primary btn">Submit</button>
                        
                    </div>
                </div>
            </div>
        </div>
         </form>
    </div>
    
</div>
   
            



<!-- Colorpicker Modal -->
  <div class="modal fade modals" id="cpicker_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Colorpickers</h4>
        </div>
        <div class="modal-body">
        <form action="" class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label">Default</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control cpicker" data-color-format="hex" value="#fff">
                </div>
            </div>
            <div class="form-group"  >
                <label class="col-sm-3 control-label">   </label>
                <div class="col-sm-6">
                    <textarea class="form-control fullscreen"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">RGBA</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control cpicker" data-color-format="rgba" value="rgba(255, 146, 180,0.9)">
                    <p class="help-block">RGBA format specified via data-tag</p>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Input Group</label>
                <div class="col-sm-6">
                    <div class="input-group color cpicker" data-color="rgb(255, 146, 180)" data-color-format="rgb">
                        <input type="text" readonly class="form-control" value="">
                        <span class="input-group-addon"><i style="background-color: rgb(255, 146, 180); margin-left: 8px;"></i></span>
                    </div>
                </div>
            </div>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->




        </div> <!-- container -->

    </div> <!--wrap -->

</div> <!-- page-content -->


    <footer role="contentinfo">
        <div class="clearfix">
            <ul class="list-unstyled list-inline pull-left">
                <li>Yasinta Damayanti Pratiwi 2017 </li>
            </ul>
            <button class="pull-right btn btn-inverse-alt btn-xs hidden-print" id="back-to-top"><i class="fa fa-arrow-up"></i></button>
        </div>
    </footer>

</div> <!-- page-container -->
 




</body>
</html>