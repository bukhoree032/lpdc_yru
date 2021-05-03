
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>DataTables</h1> -->
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
                <h3 class="card-title">ข้อมูลครัวเรือนยากจน</h3>
              </div>
              <div class="card-header">
                <form action="<?php echo site_url("Admin_c/Project_c/pro_insert/"); ?>" method="post"enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-3">
                      ชื่อโครงการ(เต็ม) :
                      <input class="form-control form-control-sm" type="" name="pro_name">
                    </div>
                    <div class="col-md-3">
                      ชื่อโครงการ(ย่อ) :
                      <input class="form-control form-control-sm" type="" name="pro_initials">
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12" style="margin-left: 0px">
                        <div class="customer_records">
                        <div class="row"></div>
                          <!-- <input type="hidden" name="at_id" value=""> -->
                          <input name="ac_namefull[]" type="text" placeholder="ชื่อกิจกรรมเต็ม">
                          <input name="ac_nameshort[]" type="text" placeholder="ชื่อกิจกรรมย่อ">
                          <input name="link[]" type="text" placeholder="link">
                             <a class="extra-fields-customer" href="#">เพิ่ม</a>
                        </div>
                          <div class="customer_records_dynamic"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <br>
                       <button type="submit" class="btn btn-block bg-gradient-primary">บันทึก</button>
                     </div>
                  </div>
                </form>
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
