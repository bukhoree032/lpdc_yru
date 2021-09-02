
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">

              <div class="col-sm-3">
                  <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- ----------------------------/รายงาน---------------------------- -->
            <div class="card">
              <div class="card-header">
                
                <h3 class="card-title">ประวัติการติดตาม (<?php echo $trace['quer_code']['j_title']; ?><?php echo $trace['quer_code']['j_name']; ?> <?php echo $trace['quer_code']['j_surname']; ?>)</h3>
              </div>
              
              <!-- ---------------------------------แจก------------------------- -->
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-2">
                    <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#myModal" style="width: 100%">+ อุปกรณ์</button> -->
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="width: 100%">+ ติดตาม </button>
                      <ul class="dropdown-menu">
                        <?php if(isset($occupation)){ ?>
                          <?php foreach ($occupation as $key => $value) { ?>
                            <li data-toggle="modal" data-target="#myModal_trace_<?php echo $key ?>"><a style='cursor: pointer;'><?php echo $value ?></a></li>
                          <?php } ?>
                        <?php }else{ ?>
                            <li><a style='cursor: pointer;'>ไม่มีอาชีพ</a></li>
                        <?php } ?>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <!-- <a type="button" class="btn btn-primary" href="<?php echo site_url("Japo_c/Manage_japo_c/japo_trace/".$j_id); ?>" style="width: 100%">+ ประวัติการซื้อ</a> -->
                  </div>
                  <!-- ------------------------model------------------------ -->
                  <?php $this->load->view('japo_model/modal_trace/honey'); ?>
                  <?php $this->load->view('japo_model/modal_trace/chicken'); ?>
                  <?php $this->load->view('japo_model/modal_trace/mushroom'); ?>
                  <?php $this->load->view('japo_model/modal_trace/vegetable'); ?>
                  <!-- ------------------------/model------------------------  -->
                </div>
              </div>

              <!-- --------------------------------/แจก------------------------- -->

              <!-- /.card-header -->
              <div class="card-body">
                <?php $this->load->view('japo_model/tablink/css'); ?>
                <?php $this->load->view('japo_model/tablink/tablink'); ?>
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
