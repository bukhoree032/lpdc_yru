
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
                    <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Household_c/Mushroom_c/mushroom_trace/".$hold->h_id); ?>'" style="width: 100%">< ย้อนกลับ</button>
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
                      $sum_mushroom = 0;
                  foreach ($shop_mushroom as $m_h) {
                    $sum_bay = $sum_bay + $m_h->m_tr_buy;
                    $sum_mushroom = $sum_mushroom + $m_h->m_tr_weight;
                  }

                  $i = "0";
                  foreach ($deal["hold"] as $hold) { 
                    $i ++;
                    if ($i == "1") { ?>
                      <p><?php echo $hold->h_title; ?><?php echo $hold->h_name; ?> <?php echo $hold->h_surname; ?></p>
                      <p>จำนวนเงินที่ขายได้ <?php echo $sum_bay; ?> บาท</p>
                      <p>นำหนักที่ขาย <?php echo $sum_mushroom; ?> กรัม</p>
                    <?php }else{

                    } ?>
                <?php } ?>


                
                <!-- ---------------------------- sch---------------------- -->
                <br>
                <!-- ---------------------------/ sch---------------------- -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 3%">ลำดับ</th>
                    <th style="width: 8%">วันที่</th>
                    <th style="width: 10%">จำนวนเห็ดที่เก็บ</th>
                    <th style="width: 10%">ปริมาณเห็ดที่ขาย</th>
                    <th style="width: 10%">จำนวนเงิน</th>
                    <th style="width: 15%">หมายเหตุ</th>
                    <th style="width: 10%">จัดการ</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $o = 0;
                  foreach ($shop_mushroom as $m_h) { 
                    $o ++;?>
                    <tr>
                      <td><?php echo $o; ?></td>
                      <td><?php echo $m_h->m_tr_date; ?></td>
                      <td><?php echo $m_h->m_tr_suplus; ?> ก้อน</td>
                      <td><?php echo $m_h->m_tr_weight; ?> กรัม</td>
                      <td><?php echo $m_h->m_tr_buy; ?> บาท</td>
                      <td><?php echo $m_h->m_tr_annotition; ?></td>
                      <td>
                        <div class="row">
                          <div class="col-sm-6">
                            <button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php echo $m_h->m_tr_id; ?>"><i class="fas fa-edit"></i></button>
                          </div>
                          <div class="col-sm-6">
                            <form action="<?php echo site_url("Household_c/Mushroom_c/mushroom_bay_delet/".$m_h->m_tr_id); ?>" method="post"enctype="multipart/form-data">
                              <button type="submit" class="btn btn-block btn-danger btn-xs"><i class="fas fa-prescription-bottle"></i></button>
                              <input type="" hidden="hidden" name="h_id" value="<?php echo $m_h->m_tr_h_id; ?>">
                            </form>
                          </div>
                        </div>
                      </td>
                      <!-- ------------------------model------------------------ --> 
                      <div class="modal" id="myModal<?php echo $m_h->m_tr_id; ?>">
                        <div class="modal-dialog">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <!-- <h4 class="modal-title">ติดตามครั้งที่ <?php echo $trace_row['trace']; ?></h4> -->
                                <h4 class="modal-title">ติดตามเห็ด</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <form action="<?php echo site_url("Household_c/Mushroom_c/trace_update/".$m_h->m_tr_h_id); ?>" method="post"enctype="multipart/form-data">  
                            <input type="" hidden="hidden" name="id" value="<?php echo $m_h->m_tr_id; ?>">                      
                              <div class="modal-body"> 
                                <div class="row">
                                  <div class="col-md-3">
                                    ช่วยเหลือ :
                                  </div>
                                  <div class="col-md-5">
                                     <select class="select2bs4 form-control" name="deal" style="width: 100%;">
                                        <?php $t_rows = $trace_row['cal'] ;
                                              $t_rows --;
                                        ?>
                                        <option selected="selected" value="<?php echo $m_h->m_tr_sh_id; ?>">ช่วยเหลือครั้งที่ <?php echo $m_h->m_tr_sh_id; ?></option>
                                        <?php $i = "0";
                                          $row = $m_h->m_tr_sh_id;

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
                                    รอบที่ติมตาม :
                                  </div>
                                  <div class="col-md-5">
                                     <select class="select2bs4 form-control" name="trace" style="width: 100%;">
                                        <option selected="selected" value="<?php echo $m_h->m_tr_row; ?>">ติดตามครั้งที่ <?php echo $m_h->m_tr_row; ?></option>
                                          <?php 

                                          $t_row = $m_h->m_tr_row;
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
                                    <input class="form-control" type="text" value="<?php echo $m_h->m_tr_suplus; ?>" name="gobbet" >
                                  </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-sm-3">
                                    เสียกี่ก่อน :
                                </div>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?php echo $m_h->m_tr_waste; ?>" name="waste" >
                                  </div>
                                </div>
                                <br>
                                  <b class="modal-title">ประวัติการขาย</b>
                                <br>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-sm-3">
                                    จำนวนเงิน :
                                </div>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?php echo $m_h->m_tr_buy; ?>" name="buy" >
                                  </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-sm-3">
                                    น้ำหนัก :
                                </div>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?php echo $m_h->m_tr_weight; ?>" name="weight" >
                                  </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-sm-3">
                                    ระยะเวลา :
                                </div>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" value="<?php echo $m_h->m_tr_period; ?>" name="period" >
                                  </div>
                                </div>
                                <div class="row" style="margin-top: 10px;">
                                  <div class="col-sm-3">
                                    หมายเหตุ :
                                </div>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="annotation" rows="4" id="comment"><?php echo $m_h->m_tr_annotition; ?></textarea>
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
