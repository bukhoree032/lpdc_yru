
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-8">
                        <div class="row">
                           <!-- <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c"); ?>'">< ย้อนกลับ</button>
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
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <!-- SELECT2 EXAMPLE -->
                  <div class="card card-default">
                     <div class="card-header">
                        <h3 class="card-title">เพิ่มกลุ่ม otop</h3>
                        <div class="card-tools">
                           <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                           <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                     </div>
                     <form action="<?php echo site_url("Otop_c/Manage_otop_c/otop_insert"); ?>" method="post"enctype="multipart/form-data">
                        <!-- /.card-header -->
                        <div class="card-body">
                           <div class="row">
                              <div class="col-md-2">
                                 <div class="form-group">
                                    <label>ปีงบประมาน </label>
                                    <select class="form-control select2bs4" name="o_row_budget" style="width: 100%;">
                                        <?php $date_time = date("Y");?>
                                        <option value="<?php echo $date_time + '543' ?>" selected="selected"><?php echo $date_time + '543' ?></option>
                                        <option><?php echo $date_time + '543' + '1' ?></option>
                                        <option><?php echo $date_time + '543' +  '0' ?></option>
                                        <option><?php echo $date_time + '543' +  '-1' ?></option>
                                        <option><?php echo $date_time + '543' +  '-2' ?></option>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="">
                                    <b class="card-title">ประฐานกลุ่ม</b>
                                 </div>
                                 <div class="" style="margin-top: 30px"></div>
                              </div>
                              <div class="col-md-2">
                                 <div class="form-group">
                                    <label>คำนำหน้า</label>
                                    <select class="form-control select2bs4" name="title" style="width: 100%;">
                                       <option selected="selected" value="">-- คำนำหน้า --</option>
                                       <option value="นาย">นาย</option>
                                       <option value="นาง">นาง</option>
                                       <option value="นางสาว">นางสาว</option>
                                    </select>
                                 </div>
                              </div>
                              <!-- /.form-group -->
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>ชื่อ</label>
                                    <input type="text" name="name" class="form-control"  >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>สกุล</label>
                                    <input type="text" name="surname" class="form-control"  >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>เบอร์โทร</label> <font style="font-size: 12px">*กรณีมากกว่า 1 เบอร์ให้ใส่ /หรือ, ขั้นกลาง</font>
                                    <input type="text" name="tel" class="form-control" placeholder="" >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-9">
                              </div>
                              <div class="col-md-12">
                                 <div class="">
                                    <hr>
                                    <h5 class="card-title">ข้อมูลกลุ่ม</h5>
                                 </div>
                                 <div class="" style="margin-top: 50px"></div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label>ชื่อกลุ่ม</label>
                                    <input type="text" name="group_name" class="form-control"  >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>รายต่อเดือน</label>
                                    <input type="text" name="o_monthly_income" class="form-control" placeholder="3000" >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>ถึง</label>
                                    <input type="text" name="o_to_monthly_income" class="form-control" placeholder="7000" >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-5">
                                 <div class="form-group">
                                    <div class="product">
                                       <label>ผลิตภัณฑ์</label>
                                       <select class="select2 select2-hidden-accessible" multiple="" name="product[]" data-placeholder="เลือกผลิตภัณฑ์" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                             <?php foreach ($goalANDpro["pro"] as $pro) { ?>
                                                <option value="<?php echo $pro->o_p_id; ?>"><?php echo $pro->o_p_name; ?></option> 
                                             <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-1">
                                 <button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/product"); ?>'"style="width: 100%;margin-top: 30%">เพิ่ม</button>
                                 <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-default" style="width: 100%;margin-top: 30%">เพิ่ม</button> -->
                                 
                              </div>
                              <div class="col-md-5">
                                 <div class="form-group">
                                    <label>การดำเนินงาน</label>
                                    <select class="select2 select2-hidden-accessible" name="goal[]" multiple="" data-placeholder="การดำเนินงาน" style="width: 100%;" data-select2-id="8" tabindex="-1" aria-hidden="true">
                                       <?php foreach ($goalANDpro["goal"] as $goal) { ?>
                                          <option value="<?php echo $goal->o_g_id; ?>"><?php echo $goal->o_g_name; ?></option> 
                                       <?php } ?>
                                    </select>
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-1">
                                 <button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/goal"); ?>'"  style="width: 100%;margin-top: 30%" >เพิ่ม</button>
                                 
                              </div>
                              <div class="col-md-12">
                                 <div class="">
                                    <hr>
                                    <h5 class="card-title">สถานที่จัดกิจกรรม</h5>
                                 </div>
                                 <div class="" style="margin-top: 50px"></div>
                              </div>
                              <div class="col-md-2">
                                 <div class="form-group">
                                    <label>บ้านเลขที่</label>
                                    <input type="text" name="o_house_number" class="form-control"  >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>บ้าน</label>
                                    <input type="text" name="o_village" class="form-control"  >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-1">
                                 <div class="form-group">
                                    <label>หมู่</label>
                                    <input type="text" name="o_swine" class="form-control"  >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-2">
                                 <div class="form-group">
                                    <label>ซอย</label>
                                    <input type="text" name="o_alley" class="form-control"  >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>ถนน</label>
                                    <input type="text" name="o_street" class="form-control"  >
                                 </div>
                                 <!-- /.form-group -->
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>ตำบล</label>
                                    <select class="form-control select2" name="o_parish" style="width: 100%;">
                                       <option selected="selected" value="">-- เลือกตำบล --</option>
                                       <?php foreach ($manage_provinces['dis'] as $dis) { ?>
                                         <option value="<?php echo $dis->dis_name_th; ?>"><?php echo $dis->dis_name_th; ?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>อำเถอ</label>
                                    <select class="form-control select2" name="o_district" style="width: 100%;">
                                       <option selected="selected" value="">-- เลือกอำเภอ --</option>
                                       <?php foreach ($manage_provinces['aum'] as $aum) { ?>
                                         <option value="<?php echo $aum->aum_name_th; ?>"><?php echo $aum->aum_name_th; ?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <div class="form-group">
                                    <label>จังหวัด</label>
                                    <select class="form-control select2" name="o_province" style="width: 100%;">
                                       <option value="" selected="selected" value="">-- เลือกจังหวัด --</option>
                                       <?php foreach ($manage_provinces['pro'] as $pro) { ?>
                                         <option value="<?php echo $pro->pro_id; ?>"><?php echo $pro->name_th; ?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                              </div>
                              <div class="col-sm-2">
                                 <button type="" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%">บันทึก</button>
                              </div>
                              <!-- /.col -->
                           </div>
                           <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                     </form>
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
         $('.extra-fields-customer1').click(function() {
         $('.customer_records1').clone().appendTo('.customer_records_dynamic1');
         $('.customer_records_dynamic1 .customer_records1').addClass('single remove1');
         $('.single .extra-fields-customer1').remove();
         $('.single').append('<a href="#" class="remove-field btn-remove-customer">ลบ</a>');
         $('.customer_records_dynamic1 > .single').attr("class", "remove");
         
         $('.customer_records_dynamic1 input').each(function() {
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

<!-- <script type="text/javascript">
  $(document).ready(function() {

      //เรียกใช้ evnet submit
      $("#form_product_insert").submit(function(evan) {
      evan.preventDefault();
          $(".th1 + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".th1").each(function(){
            });
            if($(".th1").next().is(".require")==false){
                 $.ajax({
                    method: "POST",
                    url: "<?php echo site_url('Otop_c/Manage_otop_c/product_insert/') ?>",
                    dataType: 'json',
                    data: $("#form_product_insert").serialize(),
                    success: function($result) {
                      console.log($result);
                          // $('#myModal_register_admin_idcard').modal('show');
                        let html = "<label>aaaaaaaaa</label>"
                                    '<select class="select2 select2-hidden-accessible" multiple="" name="product[]" data-placeholder="เลือกผลิตภัณฑ์" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">'
                                                ;
                            // $.each($result, function(i, v){
                            //   html += '<option value="'+ v["o_p_id"] +'">'+ v["o_p_name"] +'</option> ';
                            //   console.log(i, v);
                            // });

                            $.each($result, function(i, v){
                              html += '<option value="'+ v["o_p_id"] +'">'+ v["o_p_name"] +'</option> ';
                              console.log(i, v);
                            });
                            html += '</select>';

                            $('#modal-default').modal('toggle');
                            // $('#myModal_success').modal('show');
                            $('.product').empty();
                            $('.product').append(html);
                    }
                  });
            }else{
                return false;  
            }
      });
    });
</script> -->