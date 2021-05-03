
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
                           <!-- <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/") ?>'">< ย้อนกลับ</button>
                           </div>
                        </div> -->
              <div class="col-sm-2">
                  <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
              </div>
          </div>
          <div class="col-sm-4">
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
        <div class="row">
          <div class="col-12">


            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ประเเมิณความเหมาะสม</h3>
              </div>
              
              <!-- /.card-header -->
              <?php foreach ($househole as $hous) { ?>
                <form action="<?php echo site_url("Household_c/Evaluate_c/eva_update/"); ?>" method="post"enctype="multipart/form-data">
                  <div class="card-body">
                    <input id="" type="hidden" name="h_id" value="<?php echo $hous->h_id; ?>">
                    <p>ประเเมิณ</p>
                    <?php if ($hous->h_status_past == '1') { ?>
                      <input type="radio" id="male" name="gender" value="1" checked> &nbsp;ผ่าน
                      <input type="radio" id="female" name="gender" value="2" style="margin-left: 2%"> &nbsp;ไม่ผ่าน 
                    <?php }else if ($hous->h_status_past == '2') { ?>
                      <input type="radio" id="male" name="gender" value="1" > &nbsp;ผ่าน
                      <input type="radio" id="female" name="gender" value="2" style="margin-left: 2%" checked> &nbsp;ไม่ผ่าน 
                    <?php }else{ ?>
                      <input type="radio" id="male" name="gender" value="1" > &nbsp;ผ่าน
                      <input type="radio" id="female" name="gender" value="2" style="margin-left: 2%"> &nbsp;ไม่ผ่าน 
                    <?php } ?>
                      <br>
                    <div class="form-group" style="margin-top: 1%">
                      <p>อาชีพเสริม</p>
                      <div class="row">
                        <div class="col-md-3">
                          <select class="form-control" name="occupation" id="sel1">
                            <option selected="selected" value="<?php echo $hous->ac_id; ?>"><?php echo $hous->ac_initials; ?></option>
                            <?php foreach ($activity_hold as $ac_hold) { ?>
                                  <option value="<?php echo $ac_hold->ac_id; ?>"><?php echo $ac_hold->ac_initials; ?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="col-md-9"></div>
                      </div>
                    </div>
                    <div class="form-group" style="margin-top: 1%">
                      <p>เหตุผล</p>
                      <div class="row">
                        <div class="col-md-6">
                          <textarea class="form-control" name="annotition" rows="4" id="comment"><?php echo $hous->h_annotition; ?></textarea>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-2">
                          <br>
                          <button type="submit" class="btn btn-primary">บันทึก</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              <?php } ?>
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
