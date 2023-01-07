<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?=$title;?>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <!-- Info boxes -->
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-folder"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">PRODUCT</span>
                    <span class="info-box-number"><?=money(count($total_product));?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-folder"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">CATEGORY</span>
                    <span class="info-box-number"><?=money(count($total_product_category));?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Sales</span>
                    <span class="info-box-number"><?=money(count($total_order));?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Members</span>
                    <span class="info-box-number"><?=money(count($total_member));?></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="box">
    <button id="print" onclick="window.print()" class ="btn btn-primary">Print <i class="fa fa-print"></i></button> 
        <div class="box-body table-responsive">
            <table id="tabel" class="table table-bordered table-striped table-hover">
                <thead class="bg-gray">
                    <tr>
                        <td width="20">NO</td>
                        <td width="5"><i class="fa fa-eye"></i></td>
                        <td>KODE</td>
                        <td>NO RESI</td>
                        <td>WAKTU</td>
                        <td>PEMESAN</td>
                        <td>TOTAL HARGA</td>
                        <td>STATUS BAYAR</td>
                        <td>STATUS</td>
                    </tr>
                </thead>
                <tbody>
                    <?php 
				$n=1; 
				// if($_GET['s']=='draft'){
				// 	$param = 'draft';
				// }elseif($_GET['s']=='delete'){
				// 	$param = 'delete';
				// }else{
				// 	$param = 'publish';
				// }
				foreach($alltransaction as $t): 
				?>
                    <tr>
                        <td><?=$n++.'.';?></td>
                        <td><a href="<?=base_url('transaction/detail/').$t->idorder;?>"><i class="fa fa-eye"></i></a>
                        </td>
                        <td><?=$t->code;?></td>
                        <td><?=$t->no_resi;?></td>
                        <td><?=date('Y-m-d H:i:s',$t->datetime);?></td>
                        <td><?=$t->user_fullname;?></td>
                        <td><?='Rp. '.money($t->total_harga);?></td>
                        <td>
                            <label
                                class="label <?php if($t->status_bayar=='lunas'){echo 'label-success';}else{echo 'label-warning';}?>"><?=$t->status_bayar;?></label>
                        </td>
                        <td>
                            <label
                                class="label <?php if($t->status=='proses'||$t->status=='pengiriman'){echo 'label-info';}elseif($t->status=='pembayaran pending'){echo 'label-warning';}else{echo 'label-success';}?>"><?=$t->status;?></label>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- /.content -->



<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
<!-- modal info -->
<div class="modal fade" id="modal_info">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informasi</h4>
            </div>
            <div class="modal-body">
                <h4>Selamat Datang</h4>
                <p>Anda telah berhasil login dengan hak akses <b><?=$this->session->userdata('access');?></b></p>
            </div>
        </div>
    </div>
</div>
<style>
    
    @media print {
      table tr td:nth-child(2) {
        display: none;
        style :none;
      }
    }
  </style>

<script>
    window.onbeforeprint = function() {
      var table = document.getElementById("tabel");
      var cells = table.getElementsByTagName("td");
      for (var i = 0; i < cells.length; i++) {
        if (i % $3 == 2) {
          cells[i].style.display = "none";
        }
      }
    
      
    };
$(document).ready(function() {
    $('#modal_info').modal('show', {
        backdrop: 'static'
    });
});
</script>