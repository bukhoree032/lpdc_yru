
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
                  <!-- <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/"); ?>'">< ย้อนกลับ</button>
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
       <?php foreach ($otop as $otop) {  ?>
        <form action="<?php echo site_url("Otop_c/Manage_otop_c/otop_t_insert/".$otop->o_s_id); ?>" method="post"enctype="multipart/form-data">
         <div class="card" style="padding: 10px">
            <div class="card-header">
              <h3 class="card-title">ติดตาม (<?php echo $otop->o_group_name ?>)</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="row">
                <div class="col-md-3">
                  <label>ปีงบประมาน </label>
                  <select class="form-control select2bs4" name="o_t_row_budget" style="width: 100%;">
                      <?php $date_time = $otop->o_s_row_budget;?>
                      <option value="<?php echo $date_time ;?>" selected="selected"><?php echo $date_time; ?></option>
                      <option><?php echo $date_time + '1' ?></option>
                      <option><?php echo $date_time +  '0' ?></option>
                      <option><?php echo $date_time +  '-1' ?></option>
                      <option><?php echo $date_time +  '-2' ?></option>

                      <!-- <?php $date_time = date("Y");?> -->
                      <!-- <option value="<?php echo $date_time + '543' ?>" selected="selected"><?php echo $date_time + '543' ?></option>
                      <option><?php echo $date_time + '543' + '1' ?></option>
                      <option><?php echo $date_time + '543' +  '0' ?></option>
                      <option><?php echo $date_time + '543' +  '-1' ?></option>
                      <option><?php echo $date_time + '543' +  '-2' ?></option> -->
                  </select>
                </div>
                <div class="col-md-9">
                </div>
                <div class="col-md-6">
                  <br>
                  <b>1.ชื่อกลุ่ม</b>
                  <br>
                  <?php echo $otop->o_group_name ?>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="" style="margin-top: 10px">
                    <b>2.พื้นที่</b>
                  </div>บ้านเลขที่<?php echo $otop->o_house_number ?> บ้าน.<?php echo $otop->o_village ?> ม.<?php echo $otop->o_swine ?> ต.<?php echo $otop->o_parish ?> อ.<?php echo $otop->o_district ?> จ.<?php echo $otop->name_th ?>
                </div>
                <div class="col-md-6">
                </div>
                <!-- ------------------------------- input multi-------------------------- -->
                <div class="col-md-6">
                  <div class="" style="margin-top: 10px">
                    <b>3.ผลิตภัณที่จำนาย</b>
                  </div>
                    <?php foreach ($selecgoalANDpro["s_pro"] as $s_pro) {?>
                      - <?php echo $s_pro->o_p_name ?><br>
                    <?php } ?>
                    <!-- <div class="container">
                      <form class="form-inline" role="form" id="frm_scents">
                        <div class="row" id="p_scents">
                          <div class="form-group">
                            <input type="text" class="form-control form-control-sm" id="Fld_Alias" placeholder="ผลิตภัณ" />
                          </div><br>
                        </div>
                      </form> 
                      <div style="margin-top: 10px"></div>
                      <a href="#" id="addScnt"><i class="fa fa-plus" aria-hidden="true"></i> <b>เพิ่ม</b></a>
                    </div> -->
                </div>
                <!-- ----------------------------------------/------------------------------ -->
                <div class="col-md-6">
                </div>
                <div class="col-md-12">
                  <div class="" style="margin-top: 10px">
                  <b>4.วัตถุดิบที่ใช้ในการผลิต</b>
                  </div>
                </div>
                <div class="col-md-6">
                   - วัตถุดิบในท้องถิ่น
                   <textarea class="form-control form-control-sm" type="" name="o_t_local_ingre" rows="5"></textarea>
                </div>
                <div class="col-md-6">
                   - วัตถุดิบในตลาด
                   <textarea class="form-control form-control-sm" type="" name="o_t_market_ingre" rows="5"></textarea>
                </div>
                <div class="col-md-12">
                  <div class="" style="margin-top: 10px">
                  <b>5.ต้นทุนการผลิต</b>
                  </div>
                </div>
                <div class="col-md-3">
                   - ราคาวัตถุดิบ/เดือน
                   <div class="row">
                     <div class="col-md-9 col-9"><input class="form-control form-control-sm" type="" name="o_t_price_ingre"></div>
                     <div class="col-md-3 col-3">บาท</div>
                   </div>
                </div>
                <div class="col-md-3">
                   - ราคาวัสดุอุปกรณ์/เดือน
                   <div class="row">
                     <div class="col-md-9 col-9"><input class="form-control form-control-sm" type="" name="o_t_price_material"></div>
                     <div class="col-md-3 col-3">บาท</div>
                   </div>
                </div>
                <div class="col-md-3">
                   - ค่าจ้างแรงงาน/เดือน
                   <div class="row">
                     <div class="col-md-9 col-9"><input class="form-control form-control-sm" type="" name="o_t_pay"></div>
                     <div class="col-md-3 col-3">บาท</div>
                   </div>
                </div>
                <div class="col-md-5">
                  <div class="" style="margin-top: 10px">
                  <b>6.กำไร/ชิ้น</b>
                  </div>
                  <div class="row">
                     <div class="col-md-9 col-9"><input class="form-control form-control-sm" type="" name="o_t_profit"></div>
                     <div class="col-md-3 col-3">บาท</div>
                   </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-5">
                  <div class="" style="margin-top: 10px">
                  <b>7.รายได้ของการจำหน่ายผลิตภัฑ์/เดือน</b>
                  </div>
                  <div class="row">
                     <div class="col-md-9 col-9"><input class="form-control form-control-sm" type="" name="o_t_income"></div>
                     <div class="col-md-3 col-3">บาท</div>
                   </div>
                </div>
                <div class="col-md-12">
                  <div class="" style="margin-top: 10px">
                  <b>8.ราคาจำนาย</b>
                  </div>
                </div>
                <div class="col-md-3">
                   - ปลีก
                   <div class="row">
                     <div class="col-md-9 col-9"><input class="form-control form-control-sm" type="" name="o_t_retail_price"></div>
                     <div class="col-md-3 col-3">บาท</div>
                   </div>
                </div>
                <div class="col-md-3">
                   - ส่ง
                   <div class="row">
                     <div class="col-md-9 col-9"><input class="form-control form-control-sm" type="" name="o_t_send_price"></div>
                     <div class="col-md-3 col-3">บาท</div>
                   </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="" style="margin-top: 10px">
                    <b>9.กลุ่มลูกค้าเป้าหมาย</b>
                  </div>
                  <input class="form-control form-control-sm" type="" name="o_t_tar_group">
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="" style="margin-top: 10px">
                    <b>10.ตลาดภายในท้องถิ่น</b>
                  </div>
                  <input class="form-control form-control-sm" type="" name="o_t_local_market">
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="" style="margin-top: 10px">
                    <b>11.แหล่งกระจ่ายสินค้าภายนอก</b>
                  </div>
                  <input class="form-control form-control-sm" type="" name="o_t_external_supply">
                </div>
                 <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div class="" style="margin-top: 10px">
                    <b>12.การจำหน่ายสินค้าแบบออนไน์ (เคยมีเพจจำหน่ายหรือไม่)</b>
                  </div>
                  
                  <div class="row">
                  <div class="col-sm-4">
                    เลือกคำตอบ
                  <!-- radio -->
                      <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radioPrimary1" name="o_t_pay_online" value="1">
                          <label for="radioPrimary1">
                            มี
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radioPrimary2" name="o_t_pay_online" value="2">
                          <label for="radioPrimary2">
                            ไม่มี
                          </label>
                        </div>
                      </div>
                    </div>
                     <div class="col-md-8">
                      ชื่อเพจ
                      <input class="form-control form-control-sm" type="" name="o_t_page_name">
                      </div>
                  </div>
                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-8">
                  <div class="" style="margin-top: 10px">
                    <b>13.มหาวิทยาลัยราชภัฏยะลา เข้ามาดำเนินโครงการยกระดับผลิตภัณฑ์ท้องถิ่นประเภทใด</b>
                  </div>
                  <!-- ----------------chkbox -------------------------- -->

                  <?php $r = 0; 
                  foreach ($selecgoalANDpro["s_goal"] as $s_goal) {
                    $r ++;?>

                    <div class="" style="margin-top: 10px">
                      <b>13.<?php echo $r; ?> <?php echo $s_goal->o_g_name; ?></b><br>
                    </div>
                    <div class="col-md-8">
                      <div class="" style="margin-top: 10px">
                        <b>ประเมินการดำเนินงาน</b>
                      </div>
                      <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radioPrimary11<?php echo $r; ?>" name="<?php echo $s_goal->o_s_g_id ; ?>" value="1">
                          <label for="radioPrimary11<?php echo $r; ?>">
                            บรรลุ
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radioPrimary22<?php echo $r; ?>" name="<?php echo $s_goal->o_s_g_id ; ?>" value="2">
                          <label for="radioPrimary22<?php echo $r; ?>">
                            ไม่บรรลุ
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radioPrimary221<?php echo $r; ?>" name="<?php echo $s_goal->o_s_g_id ; ?>" value="3">
                          <label for="radioPrimary221<?php echo $r; ?>">
                            อยู่ระหว่างการดำเนินงาน
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="" style="margin-top: -15px">
                        <b>หมายเหตุ</b>
                      </div>
                       <textarea class="form-control form-control-sm" type="" name="o_s_g_annotition<?php echo $s_goal->o_s_g_id ; ?>" rows="5"></textarea>
                    </div>
                  <?php } ?>
                  <br>

                  <!-- ------------------/------------------------------- -->
                </div>
                <!-- <div class="col-md-8">
                  <div class="" style="margin-top: 10px">
                    <b>14.การดำเนินการ</b>
                  </div>
                   <textarea class="form-control form-control-sm" type="" name="o_t_operation" rows="5"></textarea>
                </div> -->
                <div class="col-md-6">
                  <div class="" style="margin-top: 10px">
                    <b>15.มีหน่วยงานอื่นที่เข้ามาสนับสนุนหรือไม่</b>
                  </div>
                  
                  <div class="row">
                  <div class="col-sm-4">
                    เลือกคำตอบ
                  <!-- radio -->
                      <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radio11" name="o_t_agency_sub" value="1">
                          <label for="radio11">
                            มี
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="radio22" name="o_t_agency_sub" value="2">
                          <label for="radio22">
                            ไม่มี
                          </label>
                        </div>
                      </div>
                    </div>
                     <div class="col-md-8">
                      ชื่อหน่วยงาน
                      <input class="form-control form-control-sm" type="" name="o_t_agency">
                      </div>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="" style="margin-top: 10px">
                    <b>16.กลุ่มผู้ประกอบการประสบปัญหาด้านใด</b>
                  </div>
                   <textarea class="form-control form-control-sm" type="" name="o_t_problem" rows="4"></textarea> 
                </div>
                <div class="col-md-8">
                  <div class="" style="margin-top: 10px">
                    <b>17.กลุ่มผู้ประกอบการมีความต้องการอะไร</b>
                  </div>
                   <textarea class="form-control form-control-sm" type="" name="o_t_need" rows="4"></textarea> 
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-sm-2">
                  <button type="" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%">บันทึก</button>
                </div>
              </div>
              <br>
            </div>
            <!-- /.card-body -->
          </div>
        </form>
      <?php } ?>
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
<!-- Ekko Lightbox -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/ekko-lightbox/ekko-lightbox.min.js"></script>


<!-- <script type='text/javascript' src='https://code.jquery.com/jquery-1.12.4.min.js'></script> -->


<script type="text/javascript">
var scntDiv = $("#frm_scents");
var i = $("#p_scents").length + 1;

$(function() {
  $("#addScnt").click(function() {
    $(
      '<div class="row" id="p_scents"><div class="form-group"><input type="text" class="form-control form-control-sm" id="ผลิตภัณ(' +
        i +
        ')" placeholder="ผลิตภัณ" /></div><div class="form-group"></div><a href="#" id="remScnt" onclick="removeCont(this);"><i class="fa fa-minus-circle" aria-hidden="true"></i> Remove</a></div>'
    ).appendTo(scntDiv);
    i++;
    return false;
  });
});

function removeCont(_this) {
  if (i > 1) {
    $(_this).parent().remove();
    i--;
  }}
</script>

<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

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
</htm