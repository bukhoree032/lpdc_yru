
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">
              <?php $i = "0";
                foreach ($deal["hold"] as $hold) {
                  $i ++;
                  if ($i == "1") { ?>
                  <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Household_c/Honey_c/index/".$hold->h_occupation); ?>'" style="width: 100%">< ย้อนกลับ</button>
                  </div>
                  <?php }else{

                  } ?>
                <?php } ?>
            </div>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- ----------------------------/รายงาน---------------------------- -->
          <form action="<?php echo site_url("Household_c/Honey_c/trace_insert/".$hid); ?>" method="post"enctype="multipart/form-data">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ติดตาม</h3>
              </div>
              
              <!-- ---------------------------------แจก------------------------- -->
              <div class="card-header">
                <div class="row">
                              <div class="col-md-3">
                                รอบที่แจก :
                              </div>

                              <div class="col-md-5">
                                <select class="select2bs4 form-control" name="deal" style="width: 100%;">
                                    <?php $t_rows = $trace_row['cal'] ;
                                          $t_rows --;
                                    ?>
                                    <option selected="selected" value="<?php echo $t_rows; ?>">แจกครั้งที่ <?php echo $t_rows; ?></option>
                                    <?php $i = "0";
                                      foreach ($deal["honey"] as $honey) {
                                        $row = $honey->h_sh_id;
                                      }
                                      if ($row >= 5) {
                                        for ($i=1; $i <= $row; $i++) { ?>
                                        <option value="<?php echo $i; ?>">แจกครั้งที่ <?php echo $i; ?></option>
                                        <?php } ?>
                                        <option value="<?php echo $i; ?>">แจกครั้งที่ <?php echo $i ; ?></option>
                                    <?php }else{ ?>
                                      <option value="1">แจกครั้งที่ 1</option>
                                      <option value="2">แจกครั้งที่ 2</option>
                                      <option value="3">แจกครั้งที่ 3</option>
                                      <option value="4">แจกครั้งที่ 4</option>
                                      <option value="5">แจกครั้งที่ 5</option>
                                    <?php } ?>
                                </select>
                              </div>
                            </div>

                            <div class="row" style="padding-top: 12px">
                              <div class="col-md-3">
                                รอบที่ติมตาม :
                              </div>
                              <div class="col-md-5">
                                 <select class="select2bs4 form-control" name="trace" style="width: 100%;">
                                    <option selected="selected" value="<?php echo $trace_row['trace']; ?>">ติดตามครั้งที่ <?php echo $trace_row['trace']; ?></option>
                                    
                                    <?php 
                                      foreach ($deal["trace_row"] as $tr_row) {
                                        $t_row = $tr_row->h_tr_row;
                                      }
                                      if ($t_row >= 5) {
                                        for ($i=1; $i <= $row; $i++) { ?>
                                          <option value="<?php echo $i; ?>">ติดตามครั้งที่ <?php echo $i; ?></option>
                                        <?php } ?>
                                        <option value="<?php echo $i; ?>">ติดตามครั้งที่ <?php echo $i ; ?></option>
                                      <?php }else{ ?>
                                      <option value="1">ติดตามครั้งที่ 1</option>
                                      <option value="2">ติดตามครั้งที่ 2</option>
                                      <option value="3">ติดตามครั้งที่ 3</option>
                                      <option value="4">ติดตามครั้งที่ 4</option>
                                      <option value="5">ติดตามครั้งที่ 5</option>
                                      <?php } ?>
                                </select>
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-3">
                                รอดกี่ลัง :
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="suplus" >
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-3">
                                เสียกี่ลัง :
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="up" >
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-3">
                                หมายเหตุ :
                              </div>
                              <div class="col-md-8">
                                <textarea class="form-control" name="annotation" rows="4" id="comment"></textarea>
                              </div>
                            </div>
                          </div>
               <br>
                <div class="form-group" style="margin-top: 1%">
                  <p>หมายเหตุ</p>
                  <div class="row">
                    <div class="col-md-12">
                      <textarea class="form-control" rows="4" name="annotation" id="comment"></textarea>
                    </div>
                    <div class="col-md-2">
                      <br>
                      <button type="submit" class="btn btn-primary">บันทึก</button>
                    </div>
                  </div>
                  </div>
              </div>
              <!-- --------------------------------/แจก------------------------- -->
              <!-- /.card-header -->
             

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </form>
      </div>
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
