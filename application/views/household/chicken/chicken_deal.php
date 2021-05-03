
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
                    <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Household_c/Chicken_c/index/".$hold->h_occupation); ?>'" style="width: 100%">< ย้อนกลับ</button>
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
                <?php $i = "0";
                  foreach ($deal["hold"] as $hold) { 
                    $i ++;
                    if ($i == "1") { ?>
                      <h3 class="card-title">ประวัติการแจกไก่เบตง (<?php echo $hold->h_title; ?><?php echo $hold->h_name; ?> <?php echo $hold->h_surname; ?>)</h3>
                    <?php }else{

                    } ?>
                <?php } ?>
              </div>
              
              <!-- ---------------------------------แจก------------------------- -->
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="">
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#myModal" style="width: 100%">+ ช่วยเหลือ</button>
                    </div>
                  </div>
                  <!-- ------------------------model------------------------ -->
                  <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="<?php echo site_url("Household_c/Chicken_c/chicken_insert/".$hid); ?>" method="post"enctype="multipart/form-data">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <?php $i = "1" ;
                              foreach ($deal["honey"] as $honey ) { 
                                $i ++;
                              }
                            ?>
                            <!-- <h4 class="modal-title">แจกไก่เบตงครั่งที่ <?php echo $i; ?></h4> -->
                            <h4 class="modal-title">ช่วยเหลือไก่เบตง</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          
                          <!-- Modal body -->
                          <div class="modal-body">
                            <!-- <p>จำนวน : </p>
                            <?php $i = "1" ;
                              foreach ($deal["honey"] as $honey ) { 
                                $i ++;
                              }

                              if ($i == "1") { ?>
                                <input type="text" name="gender" value="5" style="max-width: 78px">&nbsp;&nbsp; รัง
                              <?php }else{ ?>
                                <input type="text" name="gender" value="15" style="max-width: 78px">&nbsp;&nbsp; รัง
                              <?php } ?> -->
                            <!-- <div class="row">
                              <b class="modal-title">จำนวนไก่ที่รอด</b>
                            </div> -->
                            <div class="row">
                              <div class="col-md-3" >
                                ช่วยเหลือ :
                              </div>
                              <div class="col-md-5">
                                 <select class="select2bs4 form-control" name="deal" style="width: 100%;">
                                    <option selected="selected" value="<?php echo $trace_row['cal'] ; ?>">ช่วยเหลือครั้งที่ <?php echo $trace_row['cal'] ; ?></option>
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
                              <div class="col-sm-3" >
                                จำนวนไก่ :<br>
                              </div>
                              <div class="col-sm-5">
                                <input class="form-control" type="text" name="gobbet" >
                              </div>
                            </div>
                            <div class="row" style="padding-top: 12px">
                              <div class="col-sm-3">
                                อาหาร/กก. :<br>
                              </div>
                              <div class="col-sm-5">
                                <input class="form-control" type="text" name="kk" >
                              </div>
                            </div>
                            <div class="row" style="padding-top: 12px">
                              <div class="col-sm-3">
                                คอก :<br>
                              </div>
                              <div class="col-sm-5">
                                <input class="form-control" type="text" name="stall" >
                              </div>
                            </div>
                            <?php $i = "0";
                              foreach ($deal["hold"] as $hold) { 
                                $i ++;
                                if ($i == "1") { ?>
                                  <input hidden="hidden" name="occupation" value="<?php echo $hold->h_occupation; ?>">
                                <?php }else{

                                } ?>
                            <?php } ?>
                            <div class="row" style="padding-top: 12px">
                              <div class="col-sm-3">
                                หมายเหตุ :<br>
                              </div>
                              <div class="col-sm-8">
                                <textarea class="form-control" rows="4" id="comment" name="annotation"></textarea>
                              </div>
                            </div>
                          </div>
                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- ------------------------/model------------------------ -->
                </div>
                <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
              </div>
              <!-- --------------------------------/แจก------------------------- -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%">ลำดับ</th>
                    <th style="width: 10%">ช่วยเหลือ</th>
                    <th style="width: 15%">จำนวนไก่</th>
                    <th style="width: 15%">อาหาร/กก.</th>
                    <th style="width: 10%">คอก</th>
                    <th style="width: 35%">หมายเหตุ</th>
                    <th style="width: 15%">วันที่แจก</th>
                    <th style="width: 15%">ติดตาม</th>
                    <th style="width: 10%">แก้ไข</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $row = 0;
                    foreach ($deal["honey"] as $honey ) { 
                    $row ++;
                    ?>
                    <tr>
                      <td><?php echo $row; ?></td>
                      <td>ครั้งที่<?php echo $honey->c_sh_id; ?></td>
                      <td><?php echo $honey->c_sh_gobbet; ?> ตัว</td>
                      <td><?php echo $honey->c_sh_food; ?> กก.</td>
                      <td><?php echo $honey->c_sh_stall; ?> คอก</td>
                      <td><?php echo $honey->c_sh_annotation; ?></td>
                      <td><?php echo $honey->c_sh_date; ?></td>
                      <td>
                        <form action="<?php echo site_url("Household_c/Chicken_c/trace_search/".$hid); ?>" method="post"enctype="multipart/form-data">
                          <button type="submit" class="btn btn-block btn-success btn-xs">ติดตาม</button>
                          <input type="" hidden="hidden" name="deal" value="<?php echo $honey->c_sh_id; ?>">
                        </form>
                      </td>
                      <td>
                        <div class="row">
                          <div class="col-sm-6">
                            <button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#myModal_edit<?php echo $honey->c_id; ?>" style="width: 100%"><i class="fas fa-edit"></i></button>
                          </div>
                          <div class="col-sm-6">
                            <form action="<?php echo site_url("Household_c/Chicken_c/chicken_sh_delet/".$honey->c_id); ?>" method="post"enctype="multipart/form-data">
                              <button type="submit" class="btn btn-block btn-danger btn-xs"><i class="fas fa-prescription-bottle"></i></button>
                              <input type="" hidden="hidden" name="c_id" value="<?php echo $honey->c_sh_h_id; ?>">
                            </form>
                          </div>
                        </div>
                      </td>
                      <!-- ------------------------model------------------------ -->
                       <div class="modal" id="myModal_edit<?php echo $honey->c_id; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <form action="<?php echo site_url("Household_c/Chicken_c/chicken_edit/".$hid); ?>" method="post"enctype="multipart/form-data">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">แก้ไขประวัติดารช่วยเหลือไก่เบตง <?php echo $honey->c_sh_id; ?></h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="col-md-3" >
                                      ช่วยเหลือ :
                                    </div>
                                    <div class="col-md-5">
                                       <select class="select2bs4 form-control" name="deal" style="width: 100%;">
                                          <option selected="selected" value="<?php echo $honey->c_sh_id; ?>">ช่วยเหลือครั้งที่ <?php echo $honey->c_sh_id; ?></option>
                                          <?php $i = "0";
                                            // foreach ($deal["honey"] as $honey) {
                                            //   $row = $honey->c_sh_id;
                                            // }
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
                                    <div class="col-sm-3" >
                                      จำนวนไก่ :<br>
                                    </div>
                                    <div class="col-sm-5">
                                      <input class="form-control" type="text" value="<?php echo $honey->c_sh_gobbet; ?>" name="gobbet" >
                                    </div>
                                  </div>
                                  <div class="row" style="padding-top: 12px">
                                    <div class="col-sm-3">
                                      อาหาร/กก. :<br>
                                    </div>
                                    <div class="col-sm-5">
                                      <input class="form-control" type="text" value="<?php echo $honey->c_sh_food; ?>" name="kk" >
                                    </div>
                                  </div>
                                  <div class="row" style="padding-top: 12px">
                                    <div class="col-sm-3">
                                      คอก :<br>
                                    </div>
                                    <div class="col-sm-5">
                                      <input class="form-control" type="text" value="<?php echo $honey->c_sh_stall; ?>" name="stall" >
                                    </div>
                                  </div>
                                  <?php $i = "0";
                                    foreach ($deal["hold"] as $hold) { 
                                      $i ++;
                                      if ($i == "1") { ?>
                                        <input hidden="hidden" name="occupation" value="<?php echo $hold->h_occupation; ?>">
                                      <?php }else{

                                      } ?>
                                  <?php } ?>

                                  <input hidden="hidden" name="id_deal" value="<?php echo $honey->c_id; ?>">
                                  <div class="row" style="padding-top: 12px">
                                    <div class="col-sm-3">
                                      หมายเหตุ :<br>
                                    </div>
                                    <div class="col-sm-8">
                                      <textarea class="form-control" rows="4" id="comment" name="annotation"><?php echo $honey->c_sh_annotation; ?></textarea>
                                    </div>
                                  </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                  <button type="submit" class="btn btn-primary">บันทึก</button>
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                              </form>
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
        </div>
        <!-- /.row -->
      </div>
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
