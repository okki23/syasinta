<!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
               
                <?php
                if($level == '1'){
                ?>

                <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-home"></i> <span>Dashboard </span></a></li>

                <li class="divider"></li>

                <li><a href="<?php echo base_url('barang'); ?>"><i class="fa fa-tasks"></i> <span>Barang</span></a></li>
                <li><a href="<?php echo base_url('gudang'); ?>"><i class="fa fa-tasks"></i> <span>Gudang</span></a></li>
                <!--<li><a href="<?php echo base_url('pelanggan'); ?>"><i class="fa fa-tasks"></i> <span>Pelanggan</span></a></li> -->
                <li><a href="<?php echo base_url('user'); ?>"><i class="fa fa-tasks"></i> <span>User</span></a></li>

                <li class="divider"></li>

               <li><a href="<?php echo base_url('trans_barang_masuk'); ?>"><i class="fa fa-tasks"></i> <span>Barang Masuk</span></a></li>
               <li><a href="<?php echo base_url('trans_barang_keluar'); ?>"><i class="fa fa-tasks"></i> <span>Barang Keluar</span></a></li>

    

               <li class="divider"></li>

               <li><a href="<?php echo base_url('laporan_barang_masuk/choose_date'); ?>"><i class="fa fa-tasks"></i> <span>Lap. Barang Masuk</span></a></li>
               <li><a href="<?php echo base_url('laporan_barang_keluar/choose_date'); ?>"><i class="fa fa-tasks"></i> <span>Lap. Barang Keluar</span></a></li>
              <li><a href="<?php echo base_url('laporan_stok'); ?>"><i class="fa fa-tasks"></i> <span>Lap. Stok barang</span></a></li>
               

               <li class="divider"></li>

               <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-tasks"></i> <span>Logout</span></a></li>



                <?php
                }else if($level == '2'){
                ?>


                <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-home"></i> <span>Dashboard </span></a></li>

               

                <li class="divider"></li>

               <li><a href="<?php echo base_url('trans_barang_masuk'); ?>"><i class="fa fa-tasks"></i> <span>Barang Masuk</span></a></li>
               <li><a href="<?php echo base_url('trans_barang_keluar'); ?>"><i class="fa fa-tasks"></i> <span>Barang Keluar</span></a></li>

    

               <li class="divider"></li>

               <li><a href="<?php echo base_url('laporan_barang_masuk/choose_date'); ?>"><i class="fa fa-tasks"></i> <span>Lap. Barang Masuk</span></a></li>
               <li><a href="<?php echo base_url('laporan_barang_keluar/choose_date'); ?>"><i class="fa fa-tasks"></i> <span>Lap. Barang Keluar</span></a></li>
               

               <li class="divider"></li>

               <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-tasks"></i> <span>Logout</span></a></li>

                <?php
                }else{
                ?>

               <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-home"></i> <span>Dashboard </span></a></li>

               

                
    

               <li class="divider"></li>
 
                <li><a href="<?php echo base_url('stock'); ?>"><i class="fa fa-tasks"></i> <span>Stok barang</span></a></li>
               

               <li class="divider"></li>

               <li><a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-tasks"></i> <span>Logout</span></a></li>
                <?php
                }
                ?>
                
             
                
            </ul>
            <!-- END SIDEBAR MENU -->
        </nav>
