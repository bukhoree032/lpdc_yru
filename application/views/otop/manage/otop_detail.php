
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
              <!-- <?php if($this->session->flashdata('exit_rate')) { ?>
                <?php foreach ($otop_detail as $otop) { ?>
                  <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_rate/".$otop->o_row_budget); ?>'"><ย้อนกลับ</button>
                  </div>
                <?php } ?>
              <?php }else{ ?>
                <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c"); ?>'"><ย้อนกลับ22222222</button>
                </div>
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

      <?php foreach ($otop_detail as $otop) { ?>
       <!-- ------------------------------ -->
       <div class="card" style="padding: 10px">
              <div class="card-header">
                <h3 class="card-title">ข้อมูลกลุ่ม<?php echo $otop->o_group_name ?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th style="width: 170px"></th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><b>ปีงบประมาณ</b></td>
                      <td><?php echo $otop->o_row_budget; ?></td>
                    </tr>
                    <tr>
                      <td><b>ชื่อกลุ่ม</b></td>
                      <td><?php echo $otop->o_group_name; ?></td>
                    </tr>
                    <tr>
                      <td><b>ที่อยู่</b></td>
                      <td>บ้านเลขที่ <?php echo $otop->o_house_number; ?> ม.<?php echo $otop->o_swine; ?> ต.<?php echo $otop->o_parish; ?> อ.<?php echo $otop->o_district; ?> จ.<?php echo $otop->name_th; ?></td>
                    </tr>
                    <tr>
                      <td><b>ประธานกลุ่ม</b></td>
                      <td><?php echo $otop->o_title; ?><?php echo $otop->o_name; ?> <?php echo $otop->o_surname; ?></td>
                    </tr>
                    <tr>
                      <td><b>ผลิตภัณฑ์  </b></td>
                      <td>
                        <?php foreach ($selecgoalANDpro['s_pro'] as $s_pro) { ?>
                          - <?php echo $s_pro->o_p_name; ?> <br>
                        <?php } ?>
                      </td>
                    </tr>
                    <tr>
                      <td><b>การดำเนินงาน  </b></td>
                      <td>
                        <?php foreach ($selecgoalANDpro['s_goal'] as $s_goal) { ?>
                          - <?php echo $s_goal->o_g_name; ?> <br>
                        <?php } ?>
                      </td>
                    </tr>
                    <tr>
                      <td><b>รายได้ต่อเดือน</b></td>
                      <td><?php echo $otop->o_monthly_income; ?> บาท</td>
                    </tr>
                    <tr>
                      <td><b>รายได้ต่อปี</b></td>
                      <td><?php echo $otop->o_annual_income; ?> บาท</td>
                    </tr>
                    <tr>
                      <td><b>เบอร์โทร</b></td>
                      <td><?php echo $otop->o_tel; ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          <?php } ?>
       <!-- ------------------------------ -->

       <?php foreach ($otop_detail as $otop) { 
        if ($otop->o_t_id == '') {
          
        }else{?>

          <!-- ------------------------------ -->
          <div class="card" style="padding: 10px">
                <div class="card-header">
                  <h3 class="card-title">ข้อมูลติดตามกลุ่ม<?php echo $otop->o_group_name ?> ปีงบประมาน <?php echo $otop->o_t_row_budget; ?></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 200px"></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><b>ชื่อกลุ่ม</b></td>
                        <td><?php echo $otop->o_group_name; ?></td>
                      </tr>
                      <tr>
                        <td><b>ผลิตภัณฑ์  </b></td>
                        <td>
                          <?php foreach ($selecgoalANDpro['s_pro'] as $pro) { ?>
                            - <?php echo $pro->o_p_name; ?>
                          <br>
                          <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <td><b>การดำเนินงาน</b></td>
                        <td>
                          <?php foreach ($selecgoalANDpro['s_goal'] as $goal) { ?>
                            - <?php echo $goal->o_g_name; ?> 
                            <?php if ($goal->o_s_g_status == '1'){ ?>
                              <font color="#32CD32"> ผ่าน </font> 
                              <?php if ($goal->o_s_g_annotition != '' ){ ?>
                                ( <?php echo $goal->o_s_g_annotition; ?> )
                              <?php } ?>
                            <?php }else if ($goal->o_s_g_status == '2'){ ?>
                              <font color="#FF0000"> ไม่ผ่าน </font>( <?php echo $goal->o_s_g_annotition; ?> )
                            <?php }else if ($goal->o_s_g_status == '3'){ ?>
                              <font color="#FFD700"> อยู่ระหว่างการดำเนินงาน </font>( <?php echo $goal->o_s_g_annotition; ?> )
                            <?php } ?>

                          <br>
                          <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <td><b>วัตถุดิบในท้องถิ่น </b></td>
                        <td><?php echo $otop->o_t_local_ingre; ?></td>
                      </tr>
                      <tr>
                        <td><b>วัตถุดิบในตลาด</b></td>
                        <td><?php echo $otop->o_t_market_ingre; ?></td>
                      </tr>
                      <tr>
                        <td><b>ราคาวัตถุดิบ/เดือน</b></td>
                        <td><?php echo $otop->o_t_price_ingre; ?> บาท</td>
                      </tr>
                      <tr>
                        <td><b>ราคาวัสดุอุปกรณ์/เดือน</b></td>
                        <td><?php echo $otop->o_t_price_material; ?> บาท/</td>
                      </tr>
                      <tr>
                        <td><b>ค่าจ้างแรงงาน/เดือน</b></td>
                        <td><?php echo $otop->o_t_pay; ?> บาท</td>
                      </tr>
                      <tr>
                        <td><b>กำไร/ชิ้น</b></td>
                        <td><?php echo $otop->o_t_profit; ?> บาท</td>
                      </tr>
                      <tr>
                        <td><b>รายได้ของการจำหน่ายผลิตภัฑ์/เดือน</b></td>
                        <td><?php echo $otop->o_t_income; ?> บาท</td>
                      </tr>
                      <tr>
                        <td><b>ราคาจำนาย</b></td>
                        <td><b>ราคาปลีก</b> <?php echo $otop->o_t_retail_price; ?> บาท / <b>ราคาส่ง</b> <?php echo $otop->o_t_send_price; ?> บาท</td> 
                      </tr>
                      <tr>
                        <td><b>กลุ่มลูกค้าเป้าหมาย</b></td>
                        <td><?php echo $otop->o_t_tar_group; ?></td>
                      </tr>
                      <tr>
                        <td><b>ตลาดภายในท้องถิ่น</b></td>
                        <td><?php echo $otop->o_t_local_market; ?></td>
                      </tr>
                      <tr>
                        <td><b>แหล่งกระจ่ายสินค้าภายนอก</b></td>
                        <td><?php echo $otop->o_t_external_supply; ?></td>
                      </tr>
                      <tr>
                        <td><b>มีเพจจำหน่ายผลิตภัณฑ์หรือไม่</b></td>
                        <td>
                          <?php if ($otop->o_t_pay_online == '1'){ ?>
                            <font color="#32CD32">( มีเพจเฟสบุ๊ค )</font>
                            ชื่อเพจเฟสบุ๊ค <?php echo $otop->o_t_page_name; ?>
                          <?php }else if ($otop->o_t_pay_online == '2'){ ?>
                            <font color="#FF0000">( ไม่มีเพจเฟสบุ๊ค )</font>
                          <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <td><b>มีหน่วยงานอื่นที่เข้ามาสนับสนุนหรือไม่</b></td>
                        <td>
                          <?php if ($otop->o_t_agency_sub == '1'){ ?>
                            <font color="#32CD32">( มีหน่วยงานเข้าช้วยเหลือ )</font>
                            ชื่อหน่วยงาน <?php echo $otop->o_t_agency; ?>
                          <?php }else if ($otop->o_t_pay_online == '2'){ ?>
                            <font color="#FF0000">( ไม่มีหน่วยงานเข้าช้วยเหลือ )</font>
                          <?php } ?>
                        </td>
                      </tr>
                      <tr>
                        <td><b>กลุ่มผู้ประกอบการประสบปัญหา</b></td>
                        <td><?php echo $otop->o_t_problem; ?></td>
                      </tr>
                      <tr>
                        <td><b>กลุ่มผู้ประกอบการมีความต้องการ</b></td>
                        <td><?php echo $otop->o_t_need; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
            <?php } 
          }?>
      
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
