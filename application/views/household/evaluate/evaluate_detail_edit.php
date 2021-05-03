
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
              <!-- <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c"); ?>'">< ย้อนกลับ</button>
              </div> -->
              <div class="col-sm-2">
                  <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
              </div>
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

    <?php foreach ($househole as $hous) { ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">เพิ่มครัวเรือน</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- <form action="<?php echo site_url("Household_c/Manage_c/househole_update/"); ?>" method="post"enctype="multipart/form-data"> -->
          <form action="<?php echo site_url("Household_c/Evaluate_c/househole_update/"); ?>" method="post"enctype="multipart/form-data">
          <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                <div class="form-group">
                  <label>ปีงบประมาน </label>
                  <select class="form-control select2bs4" style="width: 100%;">
                    <option value="<?php echo $hous->h_row_budget; ?>" selected="selected"><?php echo $hous->h_row_budget; ?></option>
                    <option>2564</option>
                    <option>2563</option>
                    <option>2562</option>
                  </select>
                </div>
              </div>
                <div class="col-md-12">
                  <div class="">
                    <h5 class="card-title">ข้อมูลสวนตัว</h5>
                  </div>
                  <div class="" style="margin-top: 30px"></div>
                </div>
                <input type="hidden" name="h_id" value="<?php echo $hous->h_id  ; ?>">
                <div class="col-md-2">
                  <div class="form-group">
                    <label>คำนำหน้า</label>
                    <select class="form-control select2bs4" name="h_title" style="width: 100%;">
                      <option value="<?php echo $hous->h_title; ?>" selected="selected"><?php echo $hous->h_title; ?></option>
                      <option >นาย</option>
                      <option>นาง</option>
                      <option>นางสาว</option>
                    </select>
                  </div>
                </div>
                  <!-- /.form-group -->
                <div class="col-md-4">
                  <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" class="form-control" name="h_name" value="<?php echo $hous->h_name; ?>" >
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>สกุล</label>
                    <input type="text" class="form-control" name="h_surname" value="<?php echo $hous->h_surname; ?>" >
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <label>อายุ</label>
                    <input type="text" class="form-control" name="h_age" value="<?php echo $hous->h_age; ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>อาชีพที่ส่งเสริม</label>
                    <select class="form-control select2bs4" name="h_occupation" style="width: 100%;">
                      <option value="<?php echo $hous->h_occupation; ?>" selected="selected"><?php echo $hous->ac_initials; ?></option>
                      <option>เลี้ยงไก่เบตง</option>
                      <option>ผึ้งชันโรง</option>
                      <option>ปลูกเห็ด</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>รายได้</label>
                    <input type="text" class="form-control" name="h_revenue" value="<?php echo $hous->h_revenue; ?>" >
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>ระดับการศึกษา</label>
                    <input type="text" class="form-control" name="h_education" value="<?php echo $hous->h_education; ?>" >
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>เบอร์โทร</label>
                    <input type="text" class="form-control" name="h_tel" value="<?php echo $hous->h_tel; ?>" >
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label>จำนวนสมาชิกในครัวเรือน</label>
                    <input type="text" class="form-control" name="h_hold_members" value="<?php echo $hous->h_hold_members; ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label>ประกอบอาชีพแล้วจำนวน</label>
                    <input type="text" class="form-control" name="h_work_hold_members" value="<?php echo $hous->h_work_hold_members; ?>" >
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-9">
                </div>
                <div class="col-md-12">
                  <div class="">
                    <hr>
                    <h5 class="card-title">ข้อมูลที่อยู่</h5>
                  </div>
                  <div class="" style="margin-top: 50px"></div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>บ้านเลขที่</label>
                    <input type="text" class="form-control" name="" value="<?php echo $hous->h_house_number; ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>บ้าน</label>
                    <input type="text" class="form-control" name="h_village" value="<?php echo $hous->h_village; ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <label>หมู่</label>
                    <input type="text" class="form-control" name="h_swine" value="<?php echo $hous->h_swine; ?>"  >
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>ซอย</label>
                    <input type="text" class="form-control" name="h_alley" value="<?php echo $hous->h_alley; ?>"  >
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>ถนน</label>
                    <input type="text" class="form-control" name="h_street" value="<?php echo $hous->h_street; ?>"  >
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>ตำบล</label>
                    <select class="form-control select2" name="h_parish" style="width: 100%;">
                      <option value="<?php echo $hous->h_parish; ?>" selected="selected"><?php echo $hous->h_parish; ?></option>

                      <?php foreach ($provinces['dis'] as $pro) { ?>
                        <option value="<?php echo $pro->dis_name_th; ?>" ><?php echo $pro->dis_name_th; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>อำเถอ</label>
                    <select class="form-control select2" name="h_district" style="width: 100%;">
                      <option value="<?php echo $hous->h_district; ?>" selected="selected"><?php echo $hous->h_district; ?></option>
                      <?php foreach ($provinces['aum'] as $pro) { ?>
                        <option value="<?php echo $pro->aum_name_th; ?>" ><?php echo $pro->aum_name_th; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>จังหวัด</label>
                    <select class="form-control select2" name="h_province" style="width: 100%;">
                      <option value="<?php echo $hous->h_province; ?>" selected="selected"><?php echo $hous->name_th; ?></option>
                      <?php foreach ($provinces['pro'] as $pro) { ?>
                        <option value="<?php echo $pro->name_th; ?>" ><?php echo $pro->name_th; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                    <div class="col-sm-2"><button type="submit" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%">บันทึก</button>
                    </div>
                 
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </form>
          <!-- /.card-body -->
          <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
        <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <?php } ?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer> -->

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
<!-- Select2 -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/lpdc_admin/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/lpdc_admin/') ?>dist/js/demo.js"></script>
<!-- Page script -->


<!-- DataTables -->
<!-- <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="../../dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
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
