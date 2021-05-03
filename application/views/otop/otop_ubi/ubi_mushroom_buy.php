
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">
                <!-- <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Otop_c/Otop_ubi_c/index/"); ?>'" style="width: 100%">< ย้อนกลับ</button>
                </div> -->
                <div class="col-sm-3">
                    <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
                </div>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- ----------------------------/รายงาน---------------------------- -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ประวัติการซื้อ</h3>
              </div>
              
              

              <!-- --------------------------------/แจก------------------------- -->

              <!-- /.card-header -->
              <div class="card-body">

                <?php $sum_bay = 0;
                      $sum_mushroom = 0;
                  foreach ($shop_mushroom as $m_h) {
                    $sum_bay = $sum_bay + $m_h->o_ubi_tr_buy;
                    $sum_mushroom = $sum_mushroom + $m_h->o_ubi_tr_weight;
                  }

                  $i = "0";
                  foreach ($deal["hold"] as $hold) { 
                    $i ++;
                    if ($i == "1") { ?>
                      <p><?php echo $hold->o_ubi_title; ?><?php echo $hold->o_ubi_name; ?> <?php echo $hold->o_ubi_surname; ?></p>
                      <p>จำนวนเงินที่ขายได้ <?php echo $sum_bay; ?> บาท</p>
                      <p>น้ำหนักที่ขาย <?php echo $sum_mushroom; ?> กรัม</p>
                    <?php }else{

                    } ?>
                <?php } ?>


                
                <!-- ---------------------------- sch---------------------- -->
                <br>
                <!-- ---------------------------/ sch---------------------- -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%">ลำดับ</th>
                    <th style="width: 10%">วันที่</th>
                    <th style="width: 10%">จำนวนเห็ดที่เก็บ</th>
                    <th style="width: 10%">ปริมาณเห็ดที่ขาย/กรัม</th>
                    <th style="width: 10%">จำนวนเงิน</th>
                    <th style="width: 20%">หมายเหตุ</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $o = 0;
                  foreach ($shop_mushroom as $m_h) { 
                    $o ++;?>
                    <tr>
                      <td><?php echo $o; ?></td>
                      <td><?php echo $m_h->o_ubi_tr_date; ?></td>
                      <td><?php echo $m_h->o_ubi_tr_suplus; ?> ก้อน</td>
                      <td><?php echo $m_h->o_ubi_tr_weight; ?> กรัม</td>
                      <td><?php echo $m_h->o_ubi_tr_buy; ?> บาท</td>
                      <td><?php echo $m_h->o_ubi_tr_annotition; ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/lpdc_admin/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/lpdc_admin/') ?>dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
