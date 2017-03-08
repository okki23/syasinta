<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $judul; ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Avant">
    <meta name="author" content="The Red Team">

    <!-- <link href="assets/less/styles.less" rel="stylesheet/less" media="all">  -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css?=121'); ?>">
 

     
    <link href='<?php echo base_url('assets/demo/variations/default.css');?>' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    
      

    <link rel='stylesheet' type='text/css' href='<?php echo ('assets/plugins/form-select2/select2.css');?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/form-multiselect/css/multi-select.css');?> ' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.css');?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/form-daterangepicker/daterangepicker-bs3.css');?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/form-fseditor/fseditor.css');?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/form-tokenfield/bootstrap-tokenfield.css');?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/js/jqueryui.css');?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/codeprettifier/prettify.css');?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/form-toggle/toggles.css');?>' /> 

    <script type="text/javascript" src="<?php echo base_url('assets/js/less.js');?>"></script>
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
           

            <h1>Master User</h1>
            
        </div>

        <div class="container">

<div class="panel panel-midnightblue">
    <div class="panel-heading">
        <h4>Form Add User</h4>
        <div class="options">   
            <a href="javascript:;"><i class="fa fa-cog"></i></a>
            <a href="javascript:;"><i class="fa fa-wrench"></i></a>
            <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <div class="panel-body collapse in">
        <form action="<?php echo base_url('user/pro_edit'); ?>" class="form-horizontal row-border" method="POST">
        <input type="hidden" name="id" value="<?php echo $listing->id;?>">
            <div class="form-group">
                <label class="col-sm-3 control-label">Username</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" value="<?php echo $listing->username;?>" name="username">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Password</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Level</label>
                <div class="col-sm-6">
                  <select class="form-control" id="source" name="level">
                        <option value="">--Pilih--</option>
                        <option value="1" <?php if($listing->level == '1'){ echo "selected=selected"; } ?> >Administrator</option>
                        <option value="2" <?php if($listing->level == '2'){ echo "selected=selected"; } ?> >Admin Gudang</option>
                        <option value="3" <?php if($listing->level == '3'){ echo "selected=selected"; } ?> >Produksi</option>
                    </select>
                </div>
            </div>
            
       
        <div class="panel-footer">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="btn-toolbar">
                        <button class="btn-primary btn-block btn">Simpan</button>
                      
                    </div>
                </div>
            </div>
        </div>

         </form>
    </div>
    
</div>
 
   



            

        </div> <!-- container -->

    </div> <!--wrap -->

</div> <!-- page-content -->


 <?php
$this->load->view('footer');
?>


</div> <!-- page-container -->
 

<script type='text/javascript' src='<?php echo base_url('assets/js/jquery-1.10.2.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/js/jqueryui-1.10.3.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/js/bootstrap.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/js/enquire.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/js/jquery.cookie.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/js/jquery.nicescroll.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/codeprettifier/prettify.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/easypiechart/jquery.easypiechart.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/sparklines/jquery.sparklines.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-toggle/toggle.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-multiselect/js/jquery.multi-select.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/quicksearch/jquery.quicksearch.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-typeahead/typeahead.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-select2/select2.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-autosize/jquery.autosize-min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-daterangepicker/daterangepicker.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-datepicker/js/bootstrap-datepicker.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-daterangepicker/moment.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-fseditor/jquery.fseditor-min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-jasnyupload/fileinput.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-tokenfield/bootstrap-tokenfield.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/demo/demo-formcomponents.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/js/placeholdr.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/js/application.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/demo/demo.js');?>'></script> 

</body>
</html>