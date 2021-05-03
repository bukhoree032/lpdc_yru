
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
              <!-- <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/") ?>'">< ย้อนกลับ</button>
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
                <br>

                <?php foreach ($househole as $hous) { ?>
                  <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/eva_detail_year_edit/".$hous->h_id) ?>'">แก้ไขข้อมูลส่วนตัว</button>
                  </div>
                <?php } ?>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 150px"></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($househole as $hous) { ?>
                      <tr>
                          <td><b>รูปประจำตัว</b></td>
                          <td>
                            <?php if ($manage_detail_imag["profile"]) { ?>
                              <?php foreach ($manage_detail_imag["profile"] as $profile) { ?>
                                <div class="row">
                                    <div class="col-sm-2" style="margin-left: 10px">
                                        <a href="" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                          <img src="<?php echo base_url('/imag/') ?><?php echo $profile->im_name; ?>" style=" width: 100%" class="img-fluid mb-2" alt="white sample"/>
                                        </a>
                                        <div class="col-sm-12"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/eva_add/".$hous->h_id) ?>'">แก้ไขรูปประจำตัว</button>
                                        </div>
                                    </div>
                                </div>
                                
                              <?php } ?>
                            <?php }else{ ?>
                              <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 70%" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/eva_add/".$hous->h_id) ?>'">เพิ่มรูปประจำตัว</button>
                              </div>
                            <?php } ?>
                          </td>
                      </tr>
                      <tr>
                        <td><b>ชื่อ-สกุล</b></td>
                        <td><?php echo $hous->h_title; ?><?php echo $hous->h_name; ?> <?php echo $hous->h_surname; ?></td>
                      </tr>
                      <tr>
                        <td><b>อายุ</b></td>
                        <?php if ($hous->h_age) { ?>
                          <td><?php echo $hous->h_age; ?> ปี</td>
                        <?php }else{ ?>
                        <td> -</td>
                        <?php } ?>
                        
                      </tr>
                      <tr>
                        <td><b>ที่อยู่</b></td>
                        <td>บ้านเลขที่ <?php echo $hous->h_house_number; ?> ม.<?php echo $hous->h_swine; ?> ต.<?php echo $hous->h_parish; ?> อ.<?php echo $hous->h_district; ?> จ.<?php echo $hous->name_th; ?></td>
                        
                      </tr>
                      <tr>
                        <td><b>พิกัด</b></td>
                        <?php if ($hous->h_latitude) { ?>
                          <td>ละติจูด : <?php echo $hous->h_latitude; ?> , ลองจิจูด : <?php echo $hous->h_longitude; ?></td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td><b>รายได้</b></td>
                        <?php if ($hous->h_revenue) { ?>
                          <td><?php echo $hous->h_revenue; ?> บาท</td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                        
                      </tr>
                      <tr>
                        <td><b>อาชีพที่ส่งเสริม</b></td>
                        <td><?php echo $hous->ac_name; ?> (<?php echo $hous->ac_initials; ?>)</td>
                        
                      </tr>
                      <tr>
                        <td><b>เบอร์โทร</b></td>
                        <?php if ($hous->h_tel) { ?>
                          <td><?php echo $hous->h_tel; ?></td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                        
                      </tr>
                      <tr>
                        <td><b>ระดับการศึกษา</b></td>
                        <?php if ($hous->h_education) { ?>
                          <td><?php echo $hous->h_education; ?></td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td><b>หมายเหตุ</b></td>
                        <?php if ($hous->h_annotition) { ?>
                          <td><?php echo $hous->h_annotition; ?></td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                      </tr>
                      <tr>
                      <td><b>สภาพแวดล้อม</b></td>
                      <td>
                        <div class="row">
                          <div class="col-12">
                            <div class="card card-primary">
                              <div class="card-header">
                                <div class="card-title">
                                 สภาพแวดล้อม
                                </div>
                              </div>
                                <div class="card-body">
                                  <div class="row">
                                    <?php foreach ($manage_detail_imag["around"] as $around) { ?>
                                      <div class="col-sm-2">
                                        <a href="" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                            <img src="<?php echo base_url('/imag/') ?><?php echo $around->im_name; ?>" class="img-fluid mb-2" alt="white sample"/>
                                        </a>
                                      </div>
                                    <?php } ?>
                                  </div>
                                </div>
                            </div>
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
</body>
</html>
