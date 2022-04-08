
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">รายชื่อครัวเรือนยากจน</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 6%">ลำดับ</th>
                      <th style="width: 6%">ปี</th>
                      <th style="width: 15%">ชื่อ-สกุล</th>
                      <th style="width: 25%">ที่อยู่</th>
                      <th style="width: 12%">ความพร้อม</th>
                      <th style="width: 8%">เบอร์โทร</th>
                      <th style="width: 8%">รายได้</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                  $i = "1";
                  foreach ($household as $key => $hous) { ?>
                    <tr>
                      <td><?php echo $key ++; ?></td>
                      <td><?php echo $hous['h_row_budget'] ?></td>
                      <td><?php echo $hous['h_title']; ?><?php echo $hous['h_name']; ?> <?php echo $hous['h_surname']; ?></td>
                      <td>บ้านเลขที่ <?php echo $hous['h_house_number']; ?> ม.<?php echo $hous['h_swine']; ?> ต.<?php echo $hous['h_parish']; ?> อ.<?php echo $hous['h_district']; ?> จ.<?php echo $hous['h_province']; ?></td>
                      <?php
                        foreach($activity_nav['activity'] as $key_activity => $value_ac){
                          if($value_ac->ac_id == $hous['h_occupation']){ ?>
                            <td><?php echo $value_ac->ac_initials; ?></td>
                          <?php }
                        }
                      ?>
                      <td><?php echo $hous['h_tel']; ?></td>
                      <td><?php echo $hous['h_revenue']; ?></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">รายชื่อครัวเรือนยากจน</h3>
                </div>
                <div class="card-body">
                  
                </div>
                <!-- /.card-body -->
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
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
