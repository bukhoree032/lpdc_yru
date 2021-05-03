
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

                <?php foreach ($otop as $hous) { ?>
                  <div class="row">
                  <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Otop_ubi_c/otop_detail_year_edit/".$hous->o_ubi_id) ?>'">แก้ไขข้อมูลการประเมิน</button>
                  </div>
                  <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Otop_ubi_c/otop_edit/".$hous->o_ubi_id) ?>'">แก้ไขข้อมูลส่วนตัว</button>
                  </div>
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
                    <?php foreach ($otop_year as $househole_year1) { ?>
                    <tr>
                        <td><b>ปีงบประมาณ</b></td>
                        <td>
                          <?php echo $househole_year1->e_y_row_budget; ?>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php foreach ($otop as $hous) { ?>
                      
                      <tr>
                        <td><b>ชื่อ-สกุล</b></td>
                        <td><?php echo $hous->o_ubi_title; ?><?php echo $hous->o_ubi_name; ?> <?php echo $hous->o_ubi_surname; ?></td>
                      </tr>
                      <tr>
                        <td><b>อายุ</b></td>
                        <?php if ($hous->o_ubi_age) { ?>
                          <td><?php echo $hous->o_ubi_age; ?> ปี</td>
                        <?php }else{ ?>
                        <td> -</td>
                        <?php } ?>
                        
                      </tr>
                      <tr>
                        <td><b>ที่อยู่</b></td>
                        <td>บ้านเลขที่ <?php echo $hous->o_ubi_house_number; ?> ม.<?php echo $hous->o_ubi_alley; ?> ต.<?php echo $hous->o_ubi_parish; ?> อ.<?php echo $hous->o_ubi_district; ?> จ.<?php echo $hous->o_ubi_district; ?></td>
                        
                      </tr>
                      <tr>
                        <td><b>พิกัด</b></td>
                        <?php if ($hous->o_ubi_latitude) { ?>
                          <td>ละติจูด : <?php echo $hous->o_ubi_latitude; ?> , ลองจิจูด : <?php echo $hous->o_ubi_longitude; ?></td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                      </tr>
                      <tr>
                        <td><b>รายได้</b></td>
                        <?php if ($hous->o_ubi_revenue) { ?>
                          <td><?php echo $hous->o_ubi_revenue; ?> บาท</td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                        
                      </tr>
                      <tr>
                        <td><b>เบอร์โทร</b></td>
                        <?php if ($hous->o_ubi_tel) { ?>
                          <td><?php echo $hous->o_ubi_tel; ?></td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                        
                      </tr>
                      <tr>
                        <td><b>อาชีพที่ส่งเสริม</b></td>
                        <td><?php echo $hous->o_ubi_ac_name; ?> (<?php echo $hous->o_ubi_ac_initials; ?>)</td>
                      </tr>

                      <?php 
                        if ($hous->o_ubi_occupation == '1') {
                          $title_initials = "ไก่";
                          $title_in = "ตัว";
                          $title = "ตาย";
                        }else if ($hous->o_ubi_occupation == '2') {
                          $title_initials = "เห็ด";
                          $title_in = "ก่อน";
                          $title = "เสีย";
                        }else if ($hous->o_ubi_occupation == '4') {
                          $title_initials = "รังผึ้ง";
                          $title_in = "รัง";
                          $title = "เสีย";
                        }else if ($hous->o_ubi_occupation == '3') {
                          $title_initials = "เห็ด";
                          $title_in = "ก่อน";
                          $title = "เสีย";
                        }else if ($hous->o_ubi_occupation == '5') {
                          $title_initials = "ชิ้นงาน";
                          $title_in = "ชิ้นงาน";
                          $title = "เสีย";
                        }

                    }
                    foreach ($otop_year as $househole_year) {
                      if ($hous->o_ubi_occupation == '6') { ?>
                        <tr>
                          <td><b>ผลิตได้</b></td>
                          <?php if ($househole_year->e_y_product) { ?>
                            <td><?php echo $househole_year->e_y_gobbet; ?> ชิ้น/เดือน
                            </td>
                          <?php }else{ ?>
                            <td> -</td>
                          <?php } ?>
                        </tr>
                      <?php }else if ($hous->o_ubi_occupation == '6') {

                      }else if ($hous->o_ubi_occupation == '5') { ?>
                        <tr>
                          <td><b>ผลิตภัณฑ์ที่ทำ</b></td>
                          <?php if ($househole_year->e_y_product) { ?>
                            <td><?php echo $househole_year->e_y_product; ?>
                                &nbsp;&nbsp;&nbsp; ผลิตได้ <?php echo $househole_year->e_y_gobbet; ?> ชิ้น/เดือน
                            </td>
                          <?php }else{ ?>
                            <td> -</td>
                          <?php } ?>
                        </tr>
                      <?php }else if ($hous->o_ubi_occupation == '6') {

                      }else{ ?>
                        <tr>
                          <td><b>ได้รับ<?php echo $title_initials; ?></b></td>
                          <?php if ($househole_year->e_y_gobbet) { ?>
                            <td><?php echo $househole_year->e_y_gobbet; ?> <?php echo $title_in; ?> 
                                &nbsp;&nbsp;&nbsp; <?php echo $title_initials; ?><?php echo $title; ?> <?php echo $househole_year->e_y_gobbet_dead; ?> <?php echo $title_in; ?>
                                &nbsp;&nbsp;&nbsp; รอด <?php echo $househole_year->e_y_gobbet_sur; ?> <?php echo $title_in; ?>
                                <?php if ($hous->o_ubi_occupation == '1') { ?>
                                  &nbsp;&nbsp;&nbsp; เชือด <?php echo $househole_year->e_y_eat; ?> <?php echo $title_in; ?>
                                <?php } ?>
                            </td>
                          <?php }else{ ?>
                            <td> -</td>
                          <?php } ?>
                        </tr>
                      <?php } ?>
                      <tr>
                        <td><b>จำหน่าย<?php echo $title_initials; ?></b></td>
                        <?php if ($househole_year->e_y_quantity_sold) { ?>
                          <td><?php echo $househole_year->e_y_quantity_sold; ?> <?php echo $title_in; ?>/เดือน
                              &nbsp;&nbsp;&nbsp; รายได้ <?php echo $househole_year->e_y_income; ?> บาท/เดือน
                          </td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                      </tr>
                      <!-- <tr>
                        <td><b>พร้อมหรือไม่</b></td>
                        <?php if ($househole_year->e_y_status_ready == 0 || $househole_year->e_y_status_ready == '') { ?>
                          <td> -</td>
                        <?php }else if ($househole_year->e_y_status_ready == 1) { ?>
                          <td> พร้อมรับการช้วยเหลือ
                              <?php if ($househole_year->e_y_ready_note != '') { ?>
                                &nbsp;&nbsp;&nbsp; <b>เพราะ</b> <?php echo $househole_year->e_y_ready_note; ?>
                            <?php } ?>
                          </td>
                        <?php }else if ($househole_year->e_y_status_ready == 2) { ?>
                          <td> ไม่พร้อมรับการช้วยเหลือ
                            <?php if ($househole_year->e_y_ready_note != '') { ?>
                              &nbsp;&nbsp;&nbsp; <b>เพราะ</b> <?php echo $househole_year->e_y_ready_note; ?>
                            <?php } ?>
                          </td>
                        <?php } ?>
                      </tr> -->
                      <tr>
                        <td><b>รายละเอียด</b></td>
                        <td><?php echo $househole_year->e_y_detail; ?></td>
                      </tr>

                      <tr>
                        <td><b>ความรู้</b></td>
                        <?php if ($househole_year->e_y_4_1 == 0 || $househole_year->e_y_4_1 == '') { ?>
                          <td> -</td>
                        <?php }else if ($househole_year->e_y_4_1 == 1) { ?>
                          <td> มีความรู้และความเข้าใจในการทำเกษตร
                              <?php if ($househole_year->e_y_4_1_note != '') { ?>
                                &nbsp;&nbsp;&nbsp; <b>เพราะ</b> <?php echo $househole_year->e_y_4_1_note; ?>
                            <?php } ?>
                          </td>
                        <?php }else if ($househole_year->e_y_4_1 == 2) { ?>
                          <td> ไม่มีความรู้และความเข้าใจในการทำเกษตร
                            <?php if ($househole_year->e_y_4_1_note != '') { ?>
                              &nbsp;&nbsp;&nbsp; <b>เพราะ</b> <?php echo $househole_year->e_y_4_1_note; ?>
                            <?php } ?>
                          </td>
                        <?php } ?>
                      </tr>

                      <tr>
                        <td><b>มีพื้นที่</b></td>
                        <?php if ($househole_year->e_y_4_2 == '') { ?>
                          <td> -</td>
                        <?php }else{ ?>
                          <td>
                            ประมาณ <?php echo $househole_year->e_y_4_2; ?> เมตร
                          </td>
                        <?php } ?>
                      </tr>

                      <tr>
                        <td><b>มีพื้นที่หรือไม่</b></td>
                        <?php if ($househole_year->e_y_4_3 == 0 || $househole_year->e_y_4_3 == '') { ?>
                          <td> -</td>
                        <?php }else if ($househole_year->e_y_4_3 == 1) { ?>
                          <td> มีพื้นที่บริเวณใกล้ที่อยู่อาศัย
                              <?php if ($househole_year->e_y_4_3_note != '') { ?>
                                &nbsp;&nbsp;&nbsp; <b>หมายเหตุ</b> <?php echo $househole_year->e_y_4_3_note; ?>
                            <?php } ?>
                          </td>
                        <?php }else if ($househole_year->e_y_4_3 == 2) { ?>
                          <td> ไม่มีพื้นที่บริเวณใกล้ที่อยู่อาศัย
                            <?php if ($househole_year->e_y_4_3_note != '') { ?>
                              &nbsp;&nbsp;&nbsp; <b>หมายเหตุ</b> <?php echo $househole_year->e_y_4_3_note; ?>
                            <?php } ?>
                          </td>
                        <?php } ?>
                      </tr>

                      <tr>
                        <td><b>บ่อเลี้ยงปลา</b></td>
                        <?php if ($househole_year->e_y_4_4 == 0 || $househole_year->e_y_4_4 == '') { ?>
                          <td> -</td>
                        <?php }else if ($househole_year->e_y_4_4 == 1) { ?>
                          <td> มีบ่อเลี้ยงปลา
                              <?php if ($househole_year->e_y_4_4_note != '') { ?>
                                &nbsp;&nbsp;&nbsp; <b>หมายเหตุ</b> <?php echo $househole_year->e_y_4_4_note; ?>
                            <?php } ?>
                          </td>
                        <?php }else if ($househole_year->e_y_4_4 == 2) { ?>
                          <td> ไม่มีบ่อเลี้ยงปลา
                            <?php if ($househole_year->e_y_4_4_note != '') { ?>
                              &nbsp;&nbsp;&nbsp; <b>หมายเหตุ</b> <?php echo $househole_year->e_y_4_4_note; ?>
                            <?php } ?>
                          </td>
                        <?php } ?>
                      </tr>

                      <tr>
                        <td><b>วัสดุอุปกรณ์</b></td>
                        <?php if ($househole_year->e_y_4_5 == 0 || $househole_year->e_y_4_5 == '') { ?>
                          <td> -</td>
                        <?php }else if ($househole_year->e_y_4_5 == 1) { ?>
                          <td> มีโรงเรืยนหรือวัสดุอุปกรณ์
                              <?php if ($househole_year->e_y_4_5_note != '') { ?>
                                &nbsp;&nbsp;&nbsp; <b>หมายเหตุ</b> <?php echo $househole_year->e_y_4_5_note; ?>
                            <?php } ?>
                          </td>
                        <?php }else if ($househole_year->e_y_4_5 == 2) { ?>
                          <td> ไม่มีโรงเรืยนหรือวัสดุอุปกรณ์
                            <?php if ($househole_year->e_y_4_5_note != '') { ?>
                              &nbsp;&nbsp;&nbsp; <b>หมายเหตุ</b> <?php echo $househole_year->e_y_4_5_note; ?>
                            <?php } ?>
                          </td>
                        <?php } ?>
                      </tr>

                      <tr>
                        <td><b>ที่ดินเหมาะปลูกผัก</b></td>
                        <?php if ($househole_year->e_y_4_5 == 0 || $househole_year->e_y_4_5 == '') { ?>
                          <td> -</td>
                        <?php }else if ($househole_year->e_y_4_5 == 1) { ?>
                          <td> มีที่ดินเหมาะแก่การเพาะปลูกผัก
                              <?php if ($househole_year->e_y_4_5_note != '') { ?>
                                &nbsp;&nbsp;&nbsp; <b>เพราะ</b> <?php echo $househole_year->e_y_4_5_note; ?>
                            <?php } ?>
                          </td>
                        <?php }else if ($househole_year->e_y_4_5 == 2) { ?>
                          <td> ไม่มีที่ดินเหมาะแก่การเพาะปลูกผัก
                            <?php if ($househole_year->e_y_4_5_note != '') { ?>
                              &nbsp;&nbsp;&nbsp; <b>เพราะ</b> <?php echo $househole_year->e_y_4_5_note; ?>
                            <?php } ?>
                          </td>
                        <?php } ?>
                      </tr>

                      

                      <!-- <tr>
                        <td><b>จำนวน<?php echo $title_initials; ?>ที่รอด</b></td>
                        <?php if ($hous->e_y_gobbet_sur) { ?>
                          <td><?php echo $hous->e_y_gobbet_sur; ?> <?php echo $title_in; ?></td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                      </tr>
                      <tr>
                      <tr>
                        <td><b>จำนวน<?php echo $title_initials; ?>ที่<?php echo $title; ?></b></td>
                        <?php if ($hous->e_y_gobbet_sur) { ?>
                          <td><?php echo $hous->e_y_gobbet_sur; ?> <?php echo $title_in; ?></td>
                        <?php }else{ ?>
                          <td> -</td>
                        <?php } ?>
                      </tr> -->
                      <tr>  
                      
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
