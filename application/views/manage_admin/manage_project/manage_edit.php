  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
                  <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Admin_c/Project_c"); ?>'">< ย้อนกลับ</button>
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

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <!-- SELECT2 EXAMPLE -->
       <!-- ------------------------------ -->
       <div class="card" style="padding: 10px">
              <div class="card-header">
                <h3 class="card-title">ข้อมูลสวนตัว</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 150px"></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <form action="<?php echo site_url("Admin_c/Project_c/year_insert/"); ?>" method="post"enctype="multipart/form-data">
                      <tr>
                        <td><b>ปีงบประมาน</b></td>
                        <td>
                          <?php $date_time = date("Y");?>
                          <input type="hidden" name="pro_id" value="<?php echo $date_time + "543" ?>"><?php echo $date_time + "543" ?>
                        </td>
                      </tr>
                      <tr>
                        <td><b>โครงการ</b></td>
                        <?php foreach ($activity['project'] as $pro) { ?>
                          <input type="hidden" name="pro_id" value="<?php echo $pro->pro_id; ?>">
                          <td><?php echo $pro->pro_initials; ?>  <a href="<?php echo site_url("Admin_c/Project_c/project_edit/".$pro->pro_id) ?>" style="color: #000"><i class="fas fa-edit"></i></a></td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td><b>กิจกรรม</b></td>
                        <td>
                          <div class="" style="margin-left: 20PX">
                            <?php foreach ($activity['activity'] as $ac) { ?>
                              <input class="form-check-input" name="activity_add[]" type="checkbox" value=" <?php echo $ac->ac_id ?>" >
                              <?php echo $ac->ac_id; ?> <?php echo $ac->ac_name ?> (<?php echo $ac->ac_initials ?>) <a href="<?php echo site_url("Admin_c/Project_c/activity_edit/".$ac->ac_id) ?>" style="color: #000"><i class="fas fa-edit"></i></a><br>
                            <?php } ?>

                            <!-- <?php foreach ($activity['activity'] as $ac) {
                              foreach ($activity_year as $ac_y) {
                                if ($ac->ac_id == $ac_y->pro_year_activity) {
                                  $true = "true";
                                }
                              }?>
                              <?php if ($true == "true") { ?>
                                <input class="form-check-input" name="activity_add[]" type="checkbox" value="<?php echo $ac->ac_id ?>" checked> <?php echo $ac->ac_name ?> (<?php echo $ac->ac_initials ?>) 
                                <a href="<?php echo site_url("Admin_c/Project_c/activity_edit/".$ac->ac_id) ?>" style="color: #000"><i class="fas fa-edit"></i></a><br>
                              <?php }else{ ?>
                                <input class="form-check-input" name="activity_add[]" type="checkbox" value="<?php echo $ac->ac_id ?>"> <?php echo $ac->ac_name ?> (<?php echo $ac->ac_initials ?>) 
                                <a href="<?php echo site_url("Admin_c/Project_c/activity_edit/".$ac->ac_id) ?>" style="color: #000"><i class="fas fa-edit"></i></a><br>
                              <?php }
                            } ?> -->
                          </div>
                          <br>
                          <?php foreach ($activity['project'] as $pro) { ?>
                            <a href="<?php echo site_url("Admin_c/Project_c/activity_add/".$pro->pro_id) ?>">
                              <div class="" style="width: 17%;border: 1px solid #000;padding: 4px">
                                <center>+ เพิ่มกิจกรรม</center>
                              </div>
                            </a>
                          <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>
                          <div class="row">
                            <div class="col-md-2">
                              <br>
                               <button type="submit" class="btn btn-block bg-gradient-primary">บันทึก</button>
                             </div>
                          </div>
                        </td>
                      </tr>
                    </form>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
       <!-- ------------------------------ -->
      
        <!-- /.card -->

            
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
