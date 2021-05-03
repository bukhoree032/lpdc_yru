
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
            <h4 class="card-title">ประเมินประจำปี <b> <?php echo $hous->h_title; ?><?php echo $hous->h_name; ?> <?php echo $hous->h_surname; ?>(<?php echo $hous->ac_initials; ?>)</b></h3>

              <?php 
                if ($hous->ac_id == '8') {
                  $title_initials = "ไก่";
                  $title_in = "ตัว";
                  $title = "ตาย";
                }else if ($hous->ac_id == '10') {
                  $title_initials = "เห็ด";
                  $title_in = "ก่อน";
                  $title = "เสีย";
                }else if ($hous->ac_id == '9') {
                  $title_initials = "รังผึ้ง";
                  $title_in = "รัง";
                  $title = "เสีย";
                }else if ($hous->ac_id == '6') {
                  $title_initials = "ชิ้นงาน";
                  $title_in = "ชิ้นงาน";
                  $title = "เสีย";
                }else if ($hous->ac_id == '5') {
                  $title_initials = "ชิ้นงาน";
                  $title_in = "ชิ้นงาน";
                  $title = "เสีย";
                }
              ?>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <!-- <form action="<?php echo site_url("Household_c/Manage_c/househole_update/"); ?>" method="post"enctype="multipart/form-data"> -->
          <form action="<?php echo site_url("Household_c/Evaluate_c/househole_update_year/"); ?>" method="post"enctype="multipart/form-data">
          <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-2">
                <div class="form-group">
                  <label>ปีงบประมาน </label>
                  <select class="form-control select2bs4" name="e_y_row_budget" style="width: 100%;">
                    <option  value="<?php echo $hous->h_row_budget; ?>" selected="selected"><?php echo $hous->h_row_budget; ?></option>
                    <option>2564</option>
                    <option>2563</option>
                    <option>2562</option>
                  </select>
                </div>
              </div>
                <div class="col-md-12">
                  <div class="">
                    <h5 class="card-title"></h5>
                  </div>
                  <div class="" style="margin-top: 30px">
                    <b>1.ติดตามผลการพัฒนาทักษรอาชีพในช่วงที่ผ่านมา</b></div>
                </div>
                <input type="hidden" name="h_id" value="<?php echo $hous->h_id  ; ?>">
                <?php if ($hous->ac_id == '5') { ?>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>ผลิตภัณฑ์ที่ทำ</label>
                      <input type="text" class="form-control" name="e_y_product" value="" placeholder="ผลิตภัณฑ์ที่ทำ">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>จำนวนชิ้นงานที่ผลิตได้/เดือน</label>
                      <input type="number" class="form-control" name="e_y_gobbet" value="" placeholder="จำนวนกี่ชิ้นต่อเดือน">
                    </div>
                  </div>
                  <div hidden="hidden">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>จำนวน<?php echo $title_initials; ?>ที่มีปัจจุบัน</label>
                        <input type="number" class="form-control" name="e_y_gobbet_sur" value="" placeholder="จำนวนกี่<?php echo $title_in; ?>">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>จำนวน<?php echo $title_initials; ?>ที่<?php echo $title; ?></label>
                        <input type="number" class="form-control" name="e_y_gobbet_dead" value="" placeholder="จำนวนกี่<?php echo $title_in; ?>">
                      </div>
                    </div>
                  </div>
                <?php }else if ($hous->ac_id == '6') {?>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>จำนวนชิ้นงานที่ผลิตได้/เดือน</label>
                      <input type="number" class="form-control" name="e_y_gobbet" value="" placeholder="จำนวนกี่ชิ้นต่อเดือน">
                    </div>
                  </div>
                  <div hidden="hidden">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>ผลิตภัณฑ์ที่ทำ</label>
                        <input type="text" class="form-control" name="e_y_product" value="" placeholder="ผลิตภัณฑ์ที่ทำ">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>จำนวน<?php echo $title_initials; ?>ที่มีปัจจุบัน</label>
                        <input type="number" class="form-control" name="e_y_gobbet_sur" value="" placeholder="จำนวนกี่<?php echo $title_in; ?>">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>จำนวน<?php echo $title_initials; ?>ที่<?php echo $title; ?></label>
                        <input type="number" class="form-control" name="e_y_gobbet_dead" value="" placeholder="จำนวนกี่<?php echo $title_in; ?>">
                      </div>
                    </div>
                  </div>
                <?php }else{ ?>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>จำนวน<?php echo $title_initials; ?>ที่ได้รับ</label>
                      <input type="number" class="form-control" name="e_y_gobbet" value="" placeholder="จำนวนกี่<?php echo $title_in; ?>">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>จำนวน<?php echo $title_initials; ?>ที่มีปัจจุบัน</label>
                      <input type="number" class="form-control" name="e_y_gobbet_sur" value="" placeholder="จำนวนกี่<?php echo $title_in; ?>">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>จำนวน<?php echo $title_initials; ?>ที่<?php echo $title; ?></label>
                      <input type="number" class="form-control" name="e_y_gobbet_dead" value="" placeholder="จำนวนกี่<?php echo $title_in; ?>">
                    </div>
                  </div>
                  <div class="col-md-3" hidden="hidden">
                    <div class="form-group">
                      <label>ผลิตภัณฑ์ที่ทำ</label>
                      <input type="text" class="form-control" name="e_y_product" value="" placeholder="ผลิตภัณฑ์ที่ทำ">
                    </div>
                  </div>
                <?php } ?>

                <div class="col-md-6"></div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>จำนวน<?php echo $title_initials; ?>ที่จำหน่าย/เดือน</label>
                    <input type="number" class="form-control" name="e_y_quantity_sold" value="" placeholder="จำนวนกี่<?php echo $title_in; ?>ต่อเดือน">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>รายได้ที่จำหน่าย<?php echo $title_initials; ?>/เดือน</label>
                    <input type="number" class="form-control" name="e_y_income" value="" placeholder="รายได้ต่อเดือน">
                  </div>
                </div>
                 
                <div class="col-md-6"></div>
                <div class="col-md-6">

                  <div class="" style="margin-top: 10px">
                    <b>2.ความพร้อมและความต้องการในการับการสนับสนุนอาชีพ</b>
                  </div>
                  
                  <div class="row">
                  <div class="col-sm-4">
                    เลือกคำตอบ
                  <!-- radio -->
                      <div class="form-group clearfix">
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="e_y_status_ready1" name="e_y_status_ready" value="1">
                          <label for="e_y_status_ready1">
                            พร้อม
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="e_y_status_ready2" name="e_y_status_ready" value="2">
                          <label for="e_y_status_ready2">
                            ไม่พร้อม
                          </label>
                        </div>
                      </div>
                    </div>
                     <div class="col-md-8">
                      เพราะ
                      <input class="form-control form-control-sm" type="" name="e_y_ready_note">
                      </div>
                  </div>
                </div>

                <div class="col-md-6"></div>

                <div class="col-md-6">
                  <div class="" style="margin-top: 10px">
                    <b>3.แนวทางการส่งเสริมทักษะอาชีพเพิ่มเติม (เลือกได้ครัวเรือนละ 1 อาชีพ)</b>
                  </div>
                  <br>
                  <div class="col-md-12">
                    <!-- <select class="form-control select2bs4" name="h_title" style="width: 100%;"> -->
                    <select class="form-control" name="e_y_ready_raise" style="width: 100%;">
                      <option value="" selected="selected">เลือกได้ครัวเรือนละ 1 อาชีพ</option>
                      <option value="8">เลี้ยงไก่เบตง</option>
                      <option value="9">เลี้ยงผึ้งชันโรง</option>
                      <option value="28">เลี้ยงปลาสลิด</option>
                      <option value="29">ปลูกผักท้องถิ่น</option>
                      <option value="10">การผลิตเห็ด</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6"></div>

                <div class="col-md-6">
                  <div class="" style="margin-top: 30px">
                    <b>4.ความพร้อมต้นทุนของครัวเรือนในการประกอบอาชีพที่ข้อรับการสนับสนุน</b>
                  </div>
                  <br>

                  <div class="col-sm-12">
                    <div class="" style="margin-top: -10px">
                      4.1 มีความรู้และความเข้าใจในการทำเกษตร หรือไม่
                    </div>
                    <br>
                    <div class="row" style="margin-top: -15px">
                      <div class="col-sm-4">
                        เลือก
                        <!-- radio -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_11" name="e_y_4_1" value="1">
                            <label for="e_y_4_11">
                              มีความรู้
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_12" name="e_y_4_1" value="2">
                            <label for="e_y_4_12">
                              ไม่มีความรู้
                            </label>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-8">
                        หมายเหตุ (*ถ้ามี)
                        <input class="form-control form-control-sm" type="" name="e_y_4_1_note">
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-sm-12">
                    <div class="" style="margin-top: 10px">
                      4.2 มีพื้นที่ประมาณ/เมตร
                    </div>
                    <br>
                    <div class="row" style="margin-top: -15px">
                       <div class="col-md-6">
                        <!-- หมายเหตุ (*ถ้ามี) -->
                        <input class="form-control form-control-sm" type="" name="e_y_4_2">
                      </div>
                      <div class="col-md-2">
                        เมตร
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="" style="margin-top: 10px">
                      4.3 มีพื้นที่ป่า/ส่วน บริเวณใกล้ที่อยู่อาศัยหรือไม่
                    </div>
                    <br>
                    <div class="row" style="margin-top: -15px">
                      <div class="col-sm-4">
                        เลือก
                        <!-- radio -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_31" name="e_y_4_3" value="1">
                            <label for="e_y_4_31">
                              มี
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_32" name="e_y_4_3" value="2">
                            <label for="e_y_4_32">
                              ไม่มี
                            </label>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-8">
                        หมายเหตุ
                        <input class="form-control form-control-sm" type="" name="e_y_4_3_note">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="" style="margin-top: 10px">
                      4.4 มีบ่อเลี้ยงปลาหรือไม่
                    </div>
                    <br>
                    <div class="row" style="margin-top: -15px">
                      <div class="col-sm-4">
                        เลือก
                        <!-- radio -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_41" name="e_y_4_4" value="1">
                            <label for="e_y_4_41">
                              มี
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_42" name="e_y_4_4" value="2">
                            <label for="e_y_4_42">
                              ไม่มี
                            </label>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-8">
                        หมายเหตุ
                        <input class="form-control form-control-sm" type="" name="e_y_4_4_note">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="" style="margin-top: 10px">
                      4.5 มีโรงเรืยนหรือวัสดุอุปกรณ์ หรือไม่
                    </div>
                    <br>
                    <div class="row" style="margin-top: -15px">
                      <div class="col-sm-4">
                        เลือก
                        <!-- radio -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_51" name="e_y_4_5" value="1">
                            <label for="e_y_4_51">
                              มี
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_52" name="e_y_4_5" value="2">
                            <label for="e_y_4_52">
                              ไม่มี
                            </label>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-8">
                        หมายเหตุ
                        <input class="form-control form-control-sm" type="" name="e_y_4_5_note">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="" style="margin-top: 10px">
                      4.6 มีที่ดินเหมาะแก่การเพาะปลูกผัก หรือไม่
                    </div>
                    <br>
                    <div class="row" style="margin-top: -15px">
                      <div class="col-sm-4">
                        เลือก
                        <!-- radio -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_61" name="e_y_4_6" value="1">
                            <label for="e_y_4_61">
                              มี
                            </label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="radio" id="e_y_4_62" name="e_y_4_6" value="2">
                            <label for="e_y_4_62">
                              ไม่มี
                            </label>
                          </div>
                        </div>
                      </div>
                       <div class="col-md-8">
                        หมายเหตุ
                        <input class="form-control form-control-sm" type="" name="e_y_4_6_note">
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="" style="margin-top: 10px">
                      4.7 อุณหภูมิอากาศ ขณะสอบถาม
                    </div>
                    <br>
                    <div class="row" style="margin-top: -15px">
                       <div class="col-md-4">
                        <!-- หมายเหตุ (*ถ้ามี) -->
                        <input class="form-control form-control-sm" type="" name="e_y_temperature">
                      </div>
                      <div class="col-md-2">
                        องศาเซลเซียส
                      </div>
                      /
                      <div class="col-md-1">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; เวลา
                      </div>
                      <div class="col-md-4">
                        <!-- หมายเหตุ (*ถ้ามี) -->
                        <input class="form-control form-control-sm" type="date" name="e_y_date_tem" >
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
                <br>
                 <div class="col-sm-2"><button type="submit" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%">บันทึก</button></div>
                <!-- /.col -->
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

</body>
</html>
