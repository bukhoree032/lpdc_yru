
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
                  <!-- <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Manage_c"); ?>'">< ย้อนกลับ</button>
                  </div> -->
                  
                <div class="col-sm-2">
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
                <h3 class="card-title">ประวัติการลบ</h3>
              </div>
              
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 10%">ลำดับที่</th>
                    <th style="width: 18%">ชื่อ-สกุล</th>
                    <th style="width: 40%">ที่อยู่</th>
                    <th style="width: 12%">เบอร์โทร</th>
                    <th style="width: 10%">กู้คืน</th>
                    <th style="width: 10%">จัดการ</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($househole_data_bin as $hous) { ?>
                    <tr>
                      <td><?php echo $hous->h_id; ?></td>
                      <td><?php echo $hous->h_title; ?><?php echo $hous->h_name; ?> <?php echo $hous->h_surname; ?></td>
                      <td>บ้านเลขที่ <?php echo $hous->h_house_number; ?> ม.<?php echo $hous->h_swine; ?> ต.<?php echo $hous->h_parish; ?> อ.<?php echo $hous->h_district; ?> จ.<?php echo $hous->name_th; ?></td>
                      <td><?php echo $hous->h_tel; ?></td>
                      <td>
                        <div class="row">
                          <div class="col-sm-12">
                            <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='<?php echo site_url("Household_c/Manage_c/househole_not_bin/".$hous->h_id); ?>'">กู้คืน</button>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="row">
                          <div class="col-sm-12">
                             <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Household_c/Manage_c/househole_bin_detail/".$hous->h_id); ?>'"><i class="far fa-eye"></i></button>
                          </div>
                        </div>
                      </td>
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
