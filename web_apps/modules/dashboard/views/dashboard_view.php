<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
   

    <link href='<?php echo base_url('assets/demo/variations/default.css'); ?>' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/datatables/dataTables.css'); ?>' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/codeprettifier/prettify.css'); ?>' /> 
<link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/form-toggle/toggles.css');?>' /> 
     
 

    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/form-daterangepicker/daterangepicker-bs3.css'); ?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/fullcalendar/fullcalendar.css'); ?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/form-markdown/css/bootstrap-markdown.min.css'); ?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/codeprettifier/prettify.css');?>' /> 
    <link rel='stylesheet' type='text/css' href='<?php echo base_url('assets/plugins/form-toggle/toggles.css'); ?>' /> 

    
</head>

<body class="">

 

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
         
             <h4 align="center"> Selamat Datang <b> <?php echo $username; ?> ! </b> As <b><?php if($level == '1'){ echo "Adminisrator"; }else if($level == '2'){echo "Admin Gudang";} else { echo "Produksi"; } ?> </b> Silahkan gunakan menu sesuai kebutuhan anda </h4>
 
        </div>
        <div align="center">
            <a data-toggle="modal" href="#myModal" class="btn btn-danger btn-lg">Informasi Barang Minimum </a>
        </div>

        <!-- Modal -->
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">List Bahan baku kimia Yang Harus Di Order Kembali</h4>
                                        </div>
                                        <div class="modal-body">
                                           
                                         
                                            <p>
                                            <?php
                                            foreach ($list_po as $value) {
                                                echo "".$value->nama." -  <b>Sisa Stock ".$value->qty."</b> <br>" ;
                                            }
                                            ?>.
                                            </p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->


        

<hr>

    
        <?php
        if($level == '1'){
        ?>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('barang'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">Master Barang</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>
                        
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('gudang'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">Master Gudang</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>
                        <!--
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('pelanggan'); ?>">
                              
                                <div class="tiles-body-alt">
                                   
                                    <div class="text-center"><span class="text-top">Master Pelanggan</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>
                        -->
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('user'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">Master User</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


        <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('trans_barang_masuk'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top"> Barang Masuk </span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('trans_barang_keluar'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top"> Barang Keluar </span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>
                         
                    </div>
                </div>
            </div>


            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('laporan_barang_masuk/choose_date'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">Lap. Barang Masuk</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('laporan_barang_keluar/choose_date'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">Lap. Barang Keluar</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>

                         <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('laporan_stok'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">Lap. Stok Barang</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>
 
                         
                    </div>
                </div>

                


            </div>
    
        </div> <!-- container -->


        <?php
        }else if($level == '2'){
        ?>

          <div class="container">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('trans_barang_masuk'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top"> Barang Masuk </span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('trans_barang_keluar'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top"> Barang Keluar </span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>
                         
                    </div>
                </div>
            </div>


            <hr>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('laporan_barang_masuk/choose_date'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">Lap. Barang Masuk</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('laporan_barang_keluar/choose_date'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">Lap. Barang Keluar</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>
 
                         
                    </div>
                </div>

                


            </div>
    
        </div> <!-- container -->

        <?php  
        }else{
        ?>

        <div class="container">
        
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                          <div class="col-md-3 col-xs-12 col-sm-6">
                            <a class="info-tiles tiles-toyo" href="<?php echo base_url('stock'); ?>">
                              
                                <div class="tiles-body-alt">
                                    <!--i class="fa fa-bar-chart-o"></i-->
                                    <div class="text-center"><span class="text-top">Stok Barang</span> </div>
                                     
                                </div>
                                <div class="tiles-footer">Go to Menu</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

 
        </div> <!-- container -->

        <?php
        }   
        ?>

        
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php
$this->load->view('footer');
?>

</div> <!-- page-container -->


</body>
</html>
    
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
<script type='text/javascript' src='<?php echo base_url('assets/plugins/fullcalendar/fullcalendar.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-daterangepicker/daterangepicker.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/form-daterangepicker/moment.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/charts-flot/jquery.flot.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/charts-flot/jquery.flot.resize.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/charts-flot/jquery.flot.orderBars.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/pulsate/jQuery.pulsate.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/demo/demo-index.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/js/placeholdr.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/js/application.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/demo/demo.js');?>'></script> 


<script type='text/javascript' src='<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.js');?>'></script> 
<script type='text/javascript' src='<?php echo base_url('assets/demo/demo-datatables.js'); ?>'></script> 