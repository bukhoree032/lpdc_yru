
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="" style="padding: 10px">
              <div class="row">
                <div class="col-md-2">
                  <?php foreach ($activity_edit as $ac) { ?>
                    <button type="button" class="btn btn-block bg-gradient-primary" onclick="window.location='<?php echo site_url("Admin_c/Project_c/activity/".$ac->ac_id_pro) ?>'" style="width: 70%">< ย้อนกลับ</button>
                  <?php } ?>
                </div>
              </div>
            </div>
      <div class="container-fluid">
        <!-- ----------------------------/รายงาน---------------------------- -->
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">แก้ไขชื่อกิจกรรม</h3>
              </div>
              <div class="card-header">
                <form action="<?php echo site_url("Admin_c/Project_c/activity_update/"); ?>" method="post"enctype="multipart/form-data">
                  <?php foreach ($activity_edit as $ac) { ?>
                    <div class="row">
                      <input type="hidden" name="ac_id" value="<?php echo $ac->ac_id; ?>">
                      <input type="hidden" name="pro_id" value="<?php echo $ac->ac_id_pro; ?>">
                      <div class="col-md-3">
                        ชื่อกิจกรรม(เต็ม) :
                        <input class="form-control form-control-sm" type="" name="ac_name" value="<?php echo $ac->ac_name; ?>">
                      </div>
                      <div class="col-md-2">
                        ชื่อกิจกรรม(ย่อ) :
                        <input class="form-control form-control-sm" type="" name="ac_initials" value="<?php echo $ac->ac_initials; ?>">
                      </div>
                      <div class="col-md-3">
                        ที่อยู่ลิ้ง(Link) :
                        <input class="form-control form-control-sm" type="" name="ac_link" value="<?php echo $ac->ac_link; ?>">
                      </div>
                      <div class="col-sm-6"></div>
                      <div class="col-md-2">
                        <br>
                        <button type="submit" class="btn btn-block bg-gradient-primary">บันทึก</button>
                      </div>
                    </div>
                  <?php } ?>
                </form>
                <br>
              </div>

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
