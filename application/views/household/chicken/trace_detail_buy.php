
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">
              <!-- <?php $i = "0";
                foreach ($deal["hold"] as $hold) { 
                  $i ++;
                  if ($i == "1") { ?>
                    <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Household_c/Chicken_c/trace/".$hold->h_id); ?>'" style="width: 100%">< ย้อนกลับ</button>
                    </div>
                  <?php }else{

                  } ?>
              <?php } ?> -->
              <div class="col-sm-3">
                    <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
                </div>
            </div>
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
                <h3 class="card-title">ประวัติการซื้อ</h3>
              </div>
              
              

              <!-- --------------------------------/แจก------------------------- -->

              <!-- /.card-header -->
              <div class="card-body">

                <?php $sum_bay = 0;
                      $sum_chicken = 0;
                  foreach ($shop_chicken as $s_h) {
                    $sum_bay = $sum_bay + $s_h->c_s_buy;
                    $sum_chicken = $sum_chicken + $s_h->c_s_weight ;
                  }

                  $i = "0";
                  foreach ($deal["hold"] as $hold) { 
                    $i ++;
                    if ($i == "1") { ?>
                      <p><?php echo $hold->h_title; ?><?php echo $hold->h_name; ?> <?php echo $hold->h_surname; ?></p>
                      <p>จำนวนเงินที่ซื้อ <?php echo $sum_bay; ?> บาท</p>
                      <p>นำหนักไก่ทั้งหมด <?php echo $sum_chicken; ?> กิโลกรัม</p>
                    <?php }else{

                    } ?>
                <?php } ?>


                
                <!-- ---------------------------- sch---------------------- -->
                <br>
                <!-- ---------------------------/ sch---------------------- -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%">ลำดับ</th>
                    <th style="width: 10%">วันที่</th>
                    <th style="width: 10%">ตัวผู้</th>
                    <th style="width: 10%">ตัวเมีย</th>
                    <th style="width: 10%">ไก่รวม</th>
                    <th style="width: 10%">น้ำหนัก</th>
                    <th style="width: 10%">จำนวนเงิน</th>
                    <th style="width: 10%">จัดการ</th>
                    <!-- <th style="width: 20%">ภาพรวม</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php $o = 0;
                    $chicken = 0;
                    $weight = 0;

                  foreach ($shop_chicken as $c_h) { 
                    $o ++;
                    $chicken = $c_h->c_s_male + $c_h->c_s_female;
                    $weight = $c_h->c_s_weight; 
                    $bay = $c_h->c_s_buy; ?>
                    <tr>
                      <td><?php echo $o; ?></td>
                      <td><?php echo $c_h->c_s_date; ?></td>
                      <td><?php echo $c_h->c_s_male; ?> ตัว</td>
                      <td><?php echo $c_h->c_s_female; ?> ตัว</td>
                      <td><?php echo $chicken; ?> ตัว</td>
                      <td><?php echo $c_h->c_s_weight; ?> กิโลกรัม</td>
                      <td><?php echo $bay; ?> บาท</td>
                      <td>
                        <div class="row">
                          <div class="col-sm-6">
                            <button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $c_h->c_s_id; ?>"><i class="fas fa-edit"></i></button>
                          </div>
                          <div class="col-sm-6">
                            <form action="<?php echo site_url("Household_c/Chicken_c/chicken_by_delet/".$c_h->c_s_id); ?>" method="post"enctype="multipart/form-data">
                              <button type="submit" class="btn btn-block btn-danger btn-xs"><i class="fas fa-prescription-bottle"></i></button>
                              <input type="" hidden="hidden" name="h_id" value="<?php echo $c_h->c_s_h_id; ?>">
                            </form>
                          </div>
                          <!-- <div class="col-sm-4">
                            <form action="<?php echo site_url("Household_c/Chicken_c/trace_detail/".$hid); ?>" method="post"enctype="multipart/form-data">
                              <button type="submit" class="btn btn-block btn-primary btn-xs"><i class="far fa-eye"></i></button>
                              <input type="" hidden="hidden" name="trace" value="<?php echo $trace->c_tr_id; ?>">
                              <input type="" hidden="hidden" name="trace_s" value="<?php echo $trace->c_tr_row; ?>">
                              <input type="" hidden="hidden" name="deal" value="<?php echo $trace->c_tr_sh_id; ?>">
                            </form>
                          </div> -->
                        </div>
                      </td>
                      <!-- ------------------------model------------------------ -->
                        <div class="modal" id="myModal<?php echo $c_h->c_s_id; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">แก้ไขการซื้อไก่เบตง</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class="modal-body">
                                <form action="<?php echo site_url("Household_c/Chicken_c/shop_update/".$c_h->c_s_id); ?>" method="post"enctype="multipart/form-data"> 
                                  <div class="row">
                                    <div class="col-md-3">
                                      ช่วยเหลือ :
                                    </div>
                                    <div class="col-md-5">
                                       <select class="select2bs4 form-control" name="sh_row" style="width: 100%;">
                                          
                                          <option selected="selected" value="<?php echo $c_h->c_s_sh_id ; ?>">ช่วยเหลือครั้งที่ <?php echo $c_h->c_s_sh_id; ?></option>
                                          <?php $i = "0";
                                            foreach ($deal["honey"] as $honey) {
                                              $row = $honey->c_sh_id;
                                            }
                                            if ($row >= 5) {
                                              for ($i=1; $i <= $row; $i++) { ?>
                                              <option value="<?php echo $i; ?>">ช่วยเหลือครั้งที่ <?php echo $i; ?></option>
                                              <?php } ?>
                                              <option value="<?php echo $i; ?>">ช่วยเหลือครั้งที่ <?php echo $i ; ?></option>
                                          <?php }else{ ?>
                                            <option value="1">ช่วยเหลือครั้งที่ 1</option>
                                            <option value="2">ช่วยเหลือครั้งที่ 2</option>
                                            <option value="3">ช่วยเหลือครั้งที่ 3</option>
                                            <option value="4">ช่วยเหลือครั้งที่ 4</option>
                                            <option value="5">ช่วยเหลือครั้งที่ 5</option>
                                          <?php } ?>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="row" style="padding-top: 12px">
                                    <div class="col-md-3">
                                      รอบที่ติดตาม :
                                    </div>
                                    <div class="col-md-5">
                                       <select class="select2bs4 form-control" name="tr_row" style="width: 100%;">
                                          <option selected="selected" value="<?php echo $c_h->c_s_tr_id ; ?>">ติดตามครั้งที่ <?php echo $c_h->c_s_tr_id ; ?></option>
                                            <?php 
                                            foreach ($deal["trace_row"] as $tr_row) {
                                              $t_row = $tr_row->c_tr_row;
                                            }
                                            if ($t_row >= 5) {
                                              for ($i=1; $i <= $t_row; $i++) { ?>
                                                <option value="<?php echo $i; ?>">ติดตามครั้งที่ <?php echo $i; ?></option>
                                              <?php } ?>
                                              <option value="<?php echo $i; ?>">ติดตามครั้งที่ <?php echo $i ; ?></option>
                                            <?php }else{ ?>
                                            <option value="1">ติดตามครั้งที่ 1</option>
                                            <option value="2">ติดตามครั้งที่ 2</option>
                                            <option value="3">ติดตามครั้งที่ 3</option>
                                            <option value="4">ติดตามครั้งที่ 4</option>
                                            <option value="5">ติดตามครั้งที่ 5</option>
                                            <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                  <br> 
                                  <div class="row">
                                    <div class="col-md-12">
                                      <input type="text" hidden="" value="<?php echo $c_h->c_s_h_id; ?>" name="h_id" >
                                      <div class="row">
                                        <div class="col-md-3">
                                          วันที่ซื้อ : 
                                        </div>
                                        <div class="col-md-5">
                                          <input type="date" class="form-control" name="time" value="<?php echo $c_h->c_s_h_id; ?>">
                                        </div>
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-sm-3">
                                          ไก่ตัวผู้ :<br>
                                        </div>
                                        <div class="col-sm-5">
                                          <input class="form-control" type="text" name="male" value="<?php echo $c_h->c_s_male; ?>">
                                        </div>&nbsp;&nbsp; ตัว
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-sm-3">
                                          ไก่ตัวเมีย :<br>
                                        </div>
                                        <div class="col-sm-5">
                                          <input class="form-control" type="text" name="female" value="<?php echo $c_h->c_s_weight; ?>">
                                        </div>&nbsp;&nbsp; ตัว
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-3">
                                          น้ำหนัก : 
                                        </div>
                                        <div class="col-md-5">
                                          <input type="text" class="form-control" name="weight" value="<?php echo $c_h->c_s_weight; ?>">
                                        </div>&nbsp;&nbsp; กรัม
                                      </div>

                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-3">
                                          จำนวนเงิน : 
                                        </div>
                                        <div class="col-md-5">
                                          <input type="text" class="form-control" name="price" value="<?php echo $c_h->c_s_buy; ?>">
                                        </div>&nbsp;&nbsp; บาท
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-3">
                                          ระยะเวลา : 
                                        </div>
                                        <div class="col-md-5">
                                          <input type="text" class="form-control" name="period" value="<?php echo $c_h->c_s_period; ?>">
                                        </div>&nbsp;&nbsp; เดือน
                                      </div>
                                      <br>
                                        <b class="modal-title">จำนวนไก่ที่เหลือ</b>
                                      <br>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-sm-3">
                                          ไก่ตัวผู้ :<br>
                                        </div>
                                        <div class="col-sm-5">
                                          <input class="form-control" type="text" name="male_left" value="<?php echo $c_h->c_s_male_left; ?>">
                                        </div>&nbsp;&nbsp; ตัว
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-sm-3">
                                          ไก่ตัวเมีย :<br>
                                        </div>
                                        <div class="col-sm-5">
                                          <input class="form-control" type="text" name="female_left" value="<?php echo $c_h->c_s_female_left; ?>">
                                        </div>&nbsp;&nbsp; ตัว
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-3">
                                          หมายเหตุ : 
                                        </div>
                                        <div class="col-md-8">
                                          <textarea class="form-control" rows="4" name="annotation" id="comment"><?php echo $c_h->c_s_annotition; ?></textarea>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">บันทึก</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                                  </div>
                                </form>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      <!-- ------------------------/model------------------------ -->
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
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
