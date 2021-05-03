
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
                  

                  <!-- <?php $i = "0";
                    foreach ($trace_dtail["hold"] as $hold) { 
                      $i ++;
                      if ($i == "1") { ?>
                        <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Chicken_c/trace/".$hold->h_id); ?>'">< ย้อนกลับ</button>
                        </div>
                      <?php }else{

                      } ?>
                  <?php } ?> -->
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
                <h3 class="card-title">รายละเอียดเพิ่มเติม</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="row">
                  
                </div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 155px"></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><b>ชื่อ-  สกุล</b></td>
                      <?php foreach ($trace_dtail["hold"] as $hold) { ?>
                        <td><?php echo $hold->h_title; ?><?php echo $hold->h_name; ?> <?php echo $hold->h_surname; ?></td>
                      <?php } ?>
                    </tr>
                    <tr>
                      <td><b>วันที่ติดตาม</b></td>
                      <?php foreach ($trace_dtail["trace"] as $trace) { ?>
                        <td><?php echo $trace->c_tr_date; ?></td>
                      <?php } ?>
                    </tr>
                    <tr>
                      <td><b>ช่วยเหลือ</b></td>
                      <?php foreach ($trace_dtail["trace"] as $trace) { ?>
                        <td>ครั้งที่ <?php echo $trace->c_tr_sh_id; ?></td>
                      <?php } ?>
                      
                    </tr>
                    <tr>
                      <td><b>ติดตาม</b></td>
                      <?php foreach ($trace_dtail["trace"] as $trace) { ?>
                        <td>ครั้งที่ <?php echo $trace->c_tr_row; ?></td>
                      <?php } ?>
                      
                    </tr>

                    <tr>
                      <td><b>ไก่ที่ได้รับ</b></td>
                      <?php foreach ($trace_dtail["honey"] as $honey) { ?>
                        <td><?php echo $honey->c_sh_gobbet; ?> ลัง</td>
                      <?php } ?>
                    </tr>
                    
                    <tr>
                      <td><b>อาหารที่ได้รับ</b></td>
                      <?php foreach ($trace_dtail["honey"] as $honey) { ?>
                        <td><?php echo $honey->c_sh_food; ?> กิโลกรัม</td>
                      <?php } ?>
                    </tr>
                    
                    <tr>
                      <td><b>คอกที่ได้รับ</b></td>
                      <?php foreach ($trace_dtail["honey"] as $honey) { ?>
                        <td><?php echo $honey->c_sh_stall; ?> คอก</td>
                      <?php } ?>
                    </tr>

                    <tr>
                      <td><b>ไก่ตัวผู้ที่ตาย</b></td>
                      <?php foreach ($trace_dtail["trace"] as $trace) { ?>
                        <td><?php echo $trace->c_tr_dead_male; ?> ตัว</td>
                      <?php } ?>
                    </tr>
                    
                    <tr>
                      <td><b>ไก่ที่รอด</b></td>
                      <?php foreach ($trace_dtail["trace"] as $trace) { ?>
                        <td><?php echo $trace->c_tr_gobbet_female; ?> ตัว</td>
                      <?php } ?>
                    </tr>
                    
                    <tr>
                      <td><b>ไก่ตัวเมียที่ตาย</b></td>
                      <?php foreach ($trace_dtail["trace"] as $trace) { ?>
                        <td><?php echo $trace->c_tr_dead_female; ?> ตัว</td>
                      <?php } ?>
                    </tr>

                    <tr>
                      <td><b>ไก่ที่รอดรวม</b></td>
                      <?php 
                        $sum_gobbet = 0 ;
                        foreach ($trace_dtail["trace"] as $trace) {
                        $sum_gobbet = $trace->c_tr_gobbet_female + $trace->c_tr_gobbet_male;
                        ?>
                        <td><?php echo $sum_gobbet; ?> ตัว</td>
                      <?php } ?>
                    </tr>

                    <tr>

                      <td><b>ไก่ที่ตายรวม</b></td>
                      <?php 
                        $sum_date = 0 ;
                        foreach ($trace_dtail["trace"] as $trace) { 
                        $sum_date = $trace->c_tr_dead_female + $trace->c_tr_dead_male;
                        ?>
                        <td><?php echo $sum_date; ?> ตัว</td>
                      <?php } ?>
                    </tr>

                   <!--  <tr>
                      <td><b>ลังผึ้งที่เสีย</b></td>
                      <?php foreach ($trace_dtail["trace"] as $trace) { ?>
                        <td><?php echo $trace->c_tr_annotation; ?> ลัง</td>
                      <?php } ?>
                      
                    </tr> -->




                    <!-- <tr>
                      <td><b>ลังที่เก็บน้ำผึ้งได้</b></td>
                      <?php foreach ($trace_dtail["shop"] as $shop) { ?>
                        <td><?php echo $shop->h_shop_keep; ?> ลัง</td>
                      <?php } ?>
                    </tr>
                    <tr>
                      <td><b>ปริมาณน้ำผึ้ง</b></td>
                      <?php foreach ($trace_dtail["shop"] as $shop) { ?>
                        <td><?php echo $shop->h_shop_honey; ?> CC</td>
                      <?php } ?>
                    </tr>
                    <tr>
                      <td><b>จำนวนเงิน</b></td>
                      <?php foreach ($trace_dtail["shop"] as $shop) { ?>
                        <td><?php echo $shop->h_shop_buy; ?> บาท</td>
                      <?php } ?>
                    </tr> -->
                    <tr>
                      <td><b>หมายเหตุ</b></td>
                      <?php foreach ($trace_dtail["trace"] as $trace) { ?>
                        <td><?php echo $trace->c_tr_annotation; ?></td>
                      <?php } ?>
                    </tr>
                    
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
