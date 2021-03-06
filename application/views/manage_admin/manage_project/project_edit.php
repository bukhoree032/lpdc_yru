
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="" style="padding: 10px">
              <div class="row">
                <div class="col-md-2">
                  <?php foreach ($activity['project'] as $pro) { ?>
                    <button type="button" class="btn btn-block bg-gradient-primary" onclick="window.location='<?php echo site_url("Admin_c/Project_c/activity/".$pro->pro_id) ?>'" style="width: 70%">< ย้อนกลับ</button>
                  <?php } ?>
                </div>
              </div>
            </div>
      <div class="container-fluid">
        <!-- ----------------------------/รายงาน---------------------------- -->
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">แก้ไขชื่อโครงการ</h3>
              </div>
              <form enctype="multipart/form-data" action="<?php echo site_url("Admin_c/Project_c/project_update") ?>" method="post" >
                <div class="card-header">
                  <div class="row">
                    <?php foreach ($activity['project'] as $pro) { ?>
                        <input type="hidden" name="pro_id" value="<?php echo $pro->pro_id; ?>">
                        <div class="col-md-3">
                          ชื่อโครงการ :
                          <input class="form-control form-control-sm" type="" name="pro_name" value="<?php echo $pro->pro_name; ?>">
                        </div>
                        <div class="col-md-3">
                          ชื่อโครงการ(ย่อ) :
                          <input class="form-control form-control-sm" type="" name="pro_initials" value="<?php echo $pro->pro_initials; ?>">
                        </div>
                      <?php } ?>
                      <div class="col-sm-6"></div>
                      <div class="col-md-2">
                        <br>
                        <button type="submit" class="btn btn-block bg-gradient-primary">บันทึก</button>
                      </div>
                  </div>
                  <br>
                </div>
              </form>

              <!-- --------------------------------/ค้นหา------------------------- -->
              <!-- /.card-header -->

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
     <script type="text/javascript">
   $('.extra-fields-customer').click(function() {
    $('.customer_records').clone().appendTo('.customer_records_dynamic');
    $('.customer_records_dynamic .customer_records').addClass('single remove');
    $('.single .extra-fields-customer').remove();
    $('.single').append('<a href="#" class="remove-field btn-remove-customer">ลบ</a>');
    $('.customer_records_dynamic > .single').attr("class", "remove");
   
    $('.customer_records_dynamic input').each(function() {
      var count = 0;
      var fieldname = $(this).attr("name");
      $(this).attr('name', fieldname + count);
      count++;
    });
   
   });
   
   $(document).on('click', '.remove-field', function(e) {
    $(this).parent('.remove').remove();
    e.preventDefault();
   });
</script>
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
