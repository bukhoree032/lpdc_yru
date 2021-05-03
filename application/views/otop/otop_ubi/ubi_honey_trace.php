
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">
              <!-- <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Otop_c/Otop_ubi_c/index/"); ?>'" style="width: 100%">< ย้อนกลับ</button>
              </div> -->
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
                      <h3 class="card-title">ประวัติการติดตาม (<?php echo $hold->o_ubi_title; ?><?php echo $hold->o_ubi_name; ?> <?php echo $hold->o_ubi_surname; ?>)</h3>
                      
                    <?php }else{

                    } ?>
                <?php } ?>
              </div>
              
              <!-- ---------------------------------แจก------------------------- -->
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="">
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#myModal" style="width: 100%">+ ติดตาม</button>
                    </div>
                  </div>
                  <!-- ------------------------model------------------------ -->
                  <form action="<?php echo site_url("Otop_c/Otop_ubi_c/honey_trace_insert/".$oid); ?>" method="post"enctype="multipart/form-data">  
                    <div class="modal" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                        
                          <!-- Modal Header -->
                          <div class="modal-header">
                              <!-- <h4 class="modal-title">ติดตามครั้งที่ <?php echo $trace_row['trace']; ?></h4> -->
                              <h4 class="modal-title">ติดตามการเลี้ยงผึ้งชันโรง</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          
                          <!-- Modal body -->
                          <input type="" hidden="hidden" name="deal" value="<?php echo $trace_row['trace']; ?>">                      
                          <div class="modal-body"> 
                            <div class="row">
                              <div class="col-md-3">
                                รอกที่แจก :
                              </div>
                              <div class="col-md-5">
                                 <select class="select2bs4 form-control" name="deal" style="width: 100%;">
                                    <?php $t_rows = $trace_row['cal'] ;
                                          $t_rows --;
                                    ?>
                                    <option selected="selected" value="<?php echo $t_rows; ?>">แจกครั้งที่ <?php echo $t_rows; ?></option>
                                    <?php $i = "0";
                                      foreach ($deal["honey"] as $honey) {
                                        $row = $honey->m_sh_id;
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

                            <div class="row" style="padding-top: 12px">
                              <div class="col-md-3">
                                รอบที่ติมตาม :
                              </div>
                              <div class="col-md-5">
                                 <select class="select2bs4 form-control" name="trace" style="width: 100%;">
                                    <option selected="selected" value="<?php echo $trace_row['trace']; ?>">ติดตามครั้งที่ <?php echo $trace_row['trace']; ?></option>
                                      <?php 
                                      foreach ($deal["trace_row"] as $tr_row) {
                                        $t_row = $tr_row->m_tr_row;
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
                            <!-- <br>
                              <b class="modal-title">ไก่เบตงที่รอด</b>
                            <br> -->
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-sm-3">
                                เหลือกี่ลัง :
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="gobbet" >
                              </div>
                            </div>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-sm-3">
                                เสียกี่ลัง :
                            </div>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="waste" >
                              </div>
                            </div>
                            <br>
                              <b class="modal-title">ประวัติการขาย</b>
                            <br>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-md-3">
                                จำนวนรังที่เก็บ : 
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="keep" >
                              </div>&nbsp;&nbsp; ลัง
                            </div>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-md-3">
                                ระยะเวลา : 
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="period" >
                              </div>&nbsp;&nbsp; เดือน
                            </div>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-md-3">
                                จำนวน CC : 
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="CC" >
                              </div>&nbsp;&nbsp; CC
                            </div>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-md-3">
                                จำนวนเงิน : 
                              </div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="price" >
                              </div>&nbsp;&nbsp; บาท
                            </div>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-sm-3">
                                หมายเหตุ :
                            </div>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="annotation" rows="4" id="comment"></textarea>
                              </div>
                            </div>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;  </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- ------------------------/model------------------------ -->
                  <div class="col-sm-2" >
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm"  onclick="window.location='<?php echo site_url("Otop_c/Otop_ubi_c/ubi_shop_honey/".$oid); ?>'" style="width: 100%">ประวัติการซื้อ</button>
                  </div>
                </div>
                

                <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
              </div>

              <!-- --------------------------------/แจก------------------------- -->

              <!-- /.card-header -->
              <div class="card-body">
                <!-- ---------------------------- sch---------------------- -->
                <form action="<?php echo site_url("Otop_c/Otop_ubi_c/trace_search/".$oid); ?>" method="post"enctype="multipart/form-data"> 
                  <div class="row">
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="deal" style="width: 100%;">
                        <option selected="selected" value="">-- เลือกครั้งที่แจก --</option>
                        <?php $i = "0";
                          foreach ($deal["honey"] as $honey) {
                            $row = $honey->o_ubi_sh_id;
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
                    <div class="col-sm-1">
                      <button type="submit" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-default" style="width: 100%">ค้นหา</button>
                    </div>
                    <!-- <div class="col-sm-4"></div> -->
                  </div>
                </form>
                <br>
                <!-- ---------------------------/ sch---------------------- -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 2%">ลำดับ</th>
                    <th style="width: 8%">แจก</th>
                    <th style="width: 9%">ติดตาม</th>
                    <th style="width: 8%">จำนวนที่ได้รับ</th>
                    <th style="width: 7%">รอดกี่ลัง</th>
                    <th style="width: 6%">เสียกี่ลัง</th>
                    <!-- <th style="width: 3%">รวม</th> -->
                    <th style="width: 10%">หมายเหตุ</th>
                    <th style="width: 7%">แก้ไข</th>
                    <!-- <th style="width: 8%">ภาพรวม</th> -->
                  </tr>
                  </thead>
                  <tbody>
                  <?php $o = 0;
                    foreach ($deal["trace"] as $trace ) {
                    $o ++; 
                    if ($trace->o_ubi_occupation == "1") {
                      $sur = "ตัว";
                    }else if ($trace->o_ubi_occupation == "4"){
                      $sur = "ลัง";
                    }else{
                      $sur = "ก้อน";
                    }
                    ?>
                    <tr>
                      <td><?php echo $o; ?></td>
                      <td>แจกรอบที่ <?php echo $trace->o_ubi_tr_sh_id; ?></td>
                      <td>ติดตามรอบที่ <?php echo $trace->o_ubi_tr_row; ?></td>
                      <td><?php echo $trace->o_ubi_sh_gobbet; ?> <?php echo $sur; ?></td>
                      <td><?php echo $trace->o_ubi_tr_suplus; ?> <?php echo $sur; ?></td>
                      <td><?php echo $trace->o_ubi_tr_waste; ?> <?php echo $sur; ?></td>
                      <!-- <td><?php echo $trace->m_tr_suplus; ?> ก้อน</td> -->
                      <!-- <td><?php echo $sum; ?> ก้อน</td> -->
                      <td><?php echo $trace->o_ubi_tr_annotition; ?></td>
                      <td>
                        <button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#myModal_edit<?php echo $trace->o_ubi_tr_id; ?>"><i class="fas fa-edit"></i></button>
                      </td>
                      <!-- ------------------------model------------------------ --> 
                      <div class="modal" id="myModal_edit<?php echo $trace->o_ubi_tr_id; ?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <!-- <h4 class="modal-title">ติดตามครั้งที่ <?php echo $trace_row['trace']; ?></h4> -->
                                <h4 class="modal-title">แก้ไขการติดตามการเลี้ยงผึ้งชันโรง</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <form action="<?php echo site_url("Otop_c/Otop_ubi_c/trace_edit/".$oid); ?>" method="post"enctype="multipart/form-data"> 
                            <input type="" hidden="hidden" name="deal" value="<?php echo $trace_row['trace']; ?>">  
                            <input type="" hidden="hidden" name="id" value="<?php echo $trace->o_ubi_tr_id; ?>">                      
                              <div class="modal-body"> 
                                <div class="row">
                                  <div class="col-md-3">
                                    รอกที่แจก :
                                  </div>
                                  <div class="col-md-5">
                                     <select class="select2bs4 form-control" name="deal" style="width: 100%;">
                                        <?php $t_rows = $trace_row['cal'] ;
                                              $t_rows --;
                                        ?>
                                        <option selected="selected" value="<?php echo $trace->o_ubi_tr_sh_id; ?>">แจกครั้งที่ <?php echo $trace->o_ubi_tr_sh_id; ?></option>
                                        <?php $i = "0";
                                          foreach ($deal["honey"] as $honey) {
                                            $row = $honey->m_sh_id;
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

                                <div class="row" style="padding-top: 12px">
                                  <div class="col-md-3">
                                    รอบที่ติมตาม :
                                  </div>
                                  <div class="col-md-5">
                                     <select class="select2bs4 form-control" name="trace" style="width: 100%;">
                                        <option selected="selected" value="<?php echo $trace->o_ubi_tr_row; ?>">ติดตามครั้งที่ <?php echo $trace->o_ubi_tr_row; ?></option>
                                          <?php 
                                          foreach ($deal["trace_row"] as $tr_row) {
                                            $t_row = $tr_row->m_tr_row;
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
                                <!-- <br>
                                  <b class="modal-title">ไก่เบตงที่รอด</b>
                                <br> -->
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-sm-3">
                                    เหลือกี่ก่อน :
                                </div>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?php echo $trace->o_ubi_tr_suplus; ?>" name="gobbet" >
                                  </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-sm-3">
                                    เสียกี่ก่อน :
                                </div>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?php echo $trace->o_ubi_tr_waste; ?>" name="waste" >
                                  </div>
                                </div>
                                <br>
                                  <b class="modal-title">ประวัติการขาย</b>
                                <br>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-md-3">
                                    จำนวนรังที่เก็บ : 
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control" value="<?php echo $trace->o_ubi_tr_keep; ?>" name="keep" >
                                  </div>&nbsp;&nbsp; ลัง
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-md-3">
                                    ระยะเวลา : 
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control" value="<?php echo $trace->o_ubi_tr_period; ?>" name="period" >
                                  </div>&nbsp;&nbsp; เดือน
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-md-3">
                                    จำนวน CC : 
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control" value="<?php echo $trace->o_ubi_tr_weight; ?>" name="CC" >
                                  </div>&nbsp;&nbsp; CC
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-md-3">
                                    จำนวนเงิน : 
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" class="form-control" value="<?php echo $trace->o_ubi_tr_buy; ?>" name="price" >
                                  </div>&nbsp;&nbsp; บาท
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-sm-3">
                                    หมายเหตุ :
                                </div>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="annotation" rows="4" id="comment"><?php echo $trace->o_ubi_tr_annotition; ?></textarea>
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
                      <!-- <td>
                        <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='trace_detail.html'"  style="width: 70%"><i class="far fa-eye"></i></button>
                      </td> -->
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
