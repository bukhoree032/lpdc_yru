
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
                    <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Household_c/Honey_c/index/".$hold->h_occupation); ?>'" style="width: 100%">< ย้อนกลับ</button>
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
                      <h3 class="card-title">ประวัติการช่วยเหลือผึ้ง (<?php echo $hold->h_title; ?><?php echo $hold->h_name; ?> <?php echo $hold->h_surname; ?>)</h3>
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
                    <!-- <div class="evaluate1">
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Household_c/Honey_c/honey_add/".$hid); ?>'" style="width: 100%">+ แจก</button>
                    </div> -->
                  </div>
                  <!-- ------------------------model------------------------ -->
                  <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="<?php echo site_url("Household_c/Honey_c/honey_insert/".$hid); ?>" method="post"enctype="multipart/form-data">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <?php $i = "1" ;
                              foreach ($deal["honey"] as $honey ) { 
                                $i ++;
                              } 
                            ?>
                            <!-- <h4 class="modal-title">แจกผึ้งครั่งที่ <?php echo $i; ?></h4> -->
                            <h4 class="modal-title">ช่วยเหลือผึ้ง</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          
                          <!-- Modal body -->
                          <div class="modal-body">
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-md-3">
                                ช่วยเหลือ :
                              </div>
                              <div class="col-md-5">
                                 <select class="select2bs4 form-control" name="deal" style="width: 100%;">
                                    <option selected="selected" value="<?php echo $trace_row['cal'] ; ?>">ช่วยเหลือครั้งที่ <?php echo $trace_row['cal'] ; ?></option>
                                    <?php $i = "0";
                                      foreach ($deal["honey"] as $honey) {
                                        $row = $honey->h_sh_id;
                                      }
                                      if ($row >= 5) {
                                        for ($i=1; $i <= $row; $i++) { ?>
                                        <option value="<?php echo $i; ?>">แจกครั้งที่ <?php echo $i; ?></option>
                                        <?php } ?>
                                        <option value="<?php echo $i; ?>">แจกครั้งที่ <?php echo $i ; ?></option>
                                    <?php }else{ ?>
                                      <option value="1">แจกครั้งที่ 1</option>
                                      <option value="2">แจกครั้งที่ 2</option>
                                      <option value="3">แจกครั้งที่ 3</option>
                                      <option value="4">แจกครั้งที่ 4</option>
                                      <option value="5">แจกครั้งที่ 5</option>
                                    <?php } ?>
                                </select>
                              </div>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                              <div class="col-md-3">
                                <p>รังที่มีผึ้ง : </p>
                              </div>
                              <div class="col-md-5">
                                <?php $i = "1" ;
                                  foreach ($deal["honey"] as $honey ) { 
                                    $i ++;
                                  }

                                  if ($i == "1") { ?>
                                    <input type="text" class=" form-control" name="gender" value="5">
                                  <?php }else{ ?>
                                    <input type="text" class=" form-control" name="gender" value="15">
                                  <?php } ?>

                                <?php $i = "0";
                                  foreach ($deal["hold"] as $hold) { 
                                    $i ++;
                                    if ($i == "1") { ?>
                                      <input hidden="hidden" name="occupation" value="<?php echo $hold->h_occupation; ?>">
                                    <?php }else{

                                    } ?>
                                <?php } ?>
                              </div> 
                              <div  class="col-md-3" style="margin-top: 10px;">&nbsp;&nbsp; รัง</div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-md-3">
                                <p>รังเปล่า : </p>
                              </div>
                              <div class="col-md-5">
                                <?php $i = "1" ;
                                  foreach ($deal["honey"] as $honey ) { 
                                    $i ++;
                                  }

                                  if ($i == "1") { ?>
                                    <input type="text" class=" form-control" name="empty" value="15">
                                  <?php }else{ ?>
                                    <input type="text" class=" form-control" name="empty" value="0">
                                  <?php } ?>

                                <?php $i = "0";
                                  foreach ($deal["hold"] as $hold) { 
                                    $i ++;
                                    if ($i == "1") { ?>
                                      <input hidden="hidden" name="occupation" value="<?php echo $hold->h_occupation; ?>">
                                    <?php }else{

                                    } ?>
                                <?php } ?>
                              </div> 
                              <div  class="col-md-3" style="margin-top: 10px;">&nbsp;&nbsp; รัง</div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-md-3" >
                                <p>หมายเหตุ : </p>
                              </div>
                              <div class="col-md-8">
                                <textarea class="form-control" name="annotation" rows="4" id="comment"></textarea>
                              </div>
                            </div>
                          </div>
                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;  </button>
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
                    <th style="width: 7%">ลำดับ</th>
                    <th style="width: 12%">ช่วยเหลือ</th>
                    <th style="width: 12%">รังที่มีผึ้ง</th>
                    <th style="width: 12%">รังเปล่า</th>
                    <th style="width: 30%">หมายเหตุ</th>
                    <th style="width: 10%">เวลา</th>
                    <th style="width: 10%">ติดตาม</th>
                    <th style="width: 14%">แก้ไข</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $o = 0;
                    foreach ($deal["honey"] as $honey ) { 
                    $o ++;
                    ?>
                    <tr>
                      <td><?php echo $o; ?></td>
                      <td>แจกครั้งที่ <?php echo $honey->h_sh_id; ?></td>
                      <td><?php echo $honey->h_sh_gobbet; ?> รัง</td>
                      <td><?php echo $honey->h_sh_empty; ?> รัง</td>
                      <td><?php echo $honey->h_sh_annotation; ?></td>
                      <td><?php echo $honey->h_sh_date; ?></td>
                      <td>
                        <form action="<?php echo site_url("Household_c/Honey_c/trace_search/".$hid); ?>" method="post"enctype="multipart/form-data">
                          <button type="submit" class="btn btn-block btn-success btn-xs">ติดตาม</button>
                          <input type="" hidden="hidden" name="deal" value="<?php echo $honey->h_sh_id; ?>">
                        </form>
                      </td>
                      <td>
                        <div class="row">
                          <div class="col-sm-6">
                             <button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#myModal_edit<?php echo $honey->h_sh_id; ?> " style="width: 100%"><i class="fas fa-edit"></i></button>
                          </div>

                          <div class="col-sm-6">
                            <form action="<?php echo site_url("Household_c/Honey_c/honey_sh_delet/".$honey->id); ?>" method="post"enctype="multipart/form-data">
                              <button type="submit" class="btn btn-block btn-danger btn-xs"><i class="fas fa-prescription-bottle"></i></button>
                              <input type="" hidden="hidden" name="h_id" value="<?php echo $honey->h_sh_h_id; ?>">
                            </form>
                          </div>
                        </div>
                      </td>


                        <!-- ------------------------model------------------------ -->
                          <div class="modal" id="myModal_edit<?php echo $honey->h_sh_id; ?>">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <form action="<?php echo site_url("Household_c/Honey_c/honey_edit/".$honey->id); ?>" method="post"enctype="multipart/form-data">
                                  <!-- Modal Header -->
                                  <div class="modal-header">
                                    <h4 class="modal-title">แก้ไขประวัติการช่วยเหลือผึ้งครั่งที่ <?php echo $honey->h_sh_id; ?></h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  
                                  <!-- Modal body -->
                                  <div class="modal-body">
                                        <input type="" hidden="hidden" name="h_id" value="<?php echo $honey->h_sh_h_id; ?>">

                                        <div class="row" style="margin-top: 10px;">
                                          <div class="col-md-3">
                                            <p>รังที่มีผึ้ง : </p>
                                          </div>
                                          <div class="col-md-5">
                                            <input type="text" class=" form-control" name="gender" value="<?php echo $honey->h_sh_gobbet; ?>">
                                          </div> 
                                          <div  class="col-md-3" style="margin-top: 10px;">&nbsp;&nbsp; รัง</div>
                                        </div>

                                        <div class="row" style="margin-top: 10px;">
                                          <div class="col-md-3">
                                            <p>รังเปล่า : </p>
                                          </div>
                                          <div class="col-md-5">
                                            <input type="text" class=" form-control" name="empty" value="<?php echo $honey->h_sh_empty; ?>">
                                          </div> 
                                          <div  class="col-md-3" style="margin-top: 10px;">&nbsp;&nbsp; รัง</div>
                                        </div>

                                        <div class="row" style="margin-top: 10px;">
                                          <div class="col-md-3" >
                                            <p>หมายเหตุ : </p>
                                          </div>
                                          <div class="col-md-8">
                                            <textarea class="form-control" name="annotation" rows="4" id="comment"><?php echo $honey->h_sh_annotation; ?></textarea>
                                          </div>
                                        </div>
                                  </div>
                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">บันทึก</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;</button>
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
