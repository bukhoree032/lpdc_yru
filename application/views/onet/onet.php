
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>DataTables</h1> -->
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
            <div class="col-12">
            <!-- --------------------------รายงาน------------------------ -->
            <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
               <div class="row">
                  <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #26cae4; color: #fff">
                        <span class="info-box-icon"><i class="far fa-address-book"></i></span>
                        <div class="info-box-content">
                           <span class="info-box-text">โรงเรียนที่เข้าร่วมทั้งหมด</span>
                           <span class="info-box-number"><?php echo $on_dashboard['all_num'] ;?> โรงเรียน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                           <?php echo $on_parish['all_parish'] ;?> ตำบล  <?php echo $on_parish['all_district'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-12 col-sm-6 col-12 evaluate" style="margin-top: -11px">
                     <div class="info-box" style="background-color: #17a2b8; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">โรงเรียนที่เข้าร่วมปีล่าสุด</span>
                           <span class="info-box-number"><?php echo $on_dashboard['all_num63'] ;?> โรงเรียน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $on_parish['all_parish63'] ;?> ตำบล  <?php echo $on_parish['all_district63'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
               </div>
            </div>
            <!-- /.col -->
           <div class="col-md-3 col-sm-6 col-12">
               <div class="row">
                  <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #3ad05c; color: #fff">
                        <span class="info-box-icon"><i class="far fa-address-card"></i></span>
                        <div class="info-box-content">
                           <span class="info-box-text">นราธิวาส</span>
                           <span class="info-box-number"><?php echo $on_dashboard['nara_num'] ;?> โรงเรียน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                           <?php echo $on_parish['nara_parish'] ;?> ตำบล  <?php echo $on_parish['nara_district'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-12 col-sm-6 col-12 evaluate" style="margin-top: -11px">
                     <div class="info-box" style="background-color: #28a745; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">โรงเรียนที่เข้าร่วมปีล่าสุด</span>
                           <span class="info-box-number"><?php echo $on_dashboard['nara_num63'] ;?> โรงเรียน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $on_parish['nara_parish63'] ;?> ตำบล  <?php echo $on_parish['nara_district63'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
               </div>
            </div>
            <!-- /.col -->
            <!-- /.col -->
           <div class="col-md-3 col-sm-6 col-12">
               <div class="row">
                  <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #ffc107; color: #fff">
                        <span class="info-box-icon" style="color: #fff"><i class="far fa-address-card"></i></span>
                        <div class="info-box-content" style="color: #fff">
                           <span class="info-box-text">ยะลา</span>
                           <span class="info-box-number"><?php echo $on_dashboard['yala_num'] ;?> โรงเรียน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                           <?php echo $on_parish['yala_parish'] ;?> ตำบล  <?php echo $on_parish['yala_district'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-12 col-sm-6 col-12 evaluate" style="margin-top: -11px">
                     <div class="info-box" style="background-color: #cb9800; color: #fff">
                        <div class="info-box-content" style="color: #fff">
                           <span class="info-box-text">โรงเรียนที่เข้าร่วมปีล่าสุด</span>
                           <span class="info-box-number"><?php echo $on_dashboard['yala_num63'] ;?> โรงเรียน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $on_parish['yala_parish63'] ;?> ตำบล  <?php echo $on_parish['yala_district63'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
               <div class="row">
                  <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #7f8991; color: #fff">
                        <span class="info-box-icon"><i class="far fa-address-card"></i></span>
                        <div class="info-box-content">
                           <span class="info-box-text">ปัตตานี</span>
                           <span class="info-box-number"><?php echo $on_dashboard['pat_num'] ;?> โรงเรียน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                           <?php echo $on_parish['pat_parish'] ;?> ตำบล  <?php echo $on_parish['pat_district'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-12 col-sm-6 col-12 evaluate" style="margin-top: -11px">
                     <div class="info-box" style="background-color: #636b72; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">โรงเรียนที่เข้าร่วมปีล่าสุด</span>
                           <span class="info-box-number"><?php echo $on_dashboard['pat_num63'] ;?> โรงเรียน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $on_parish['pat_parish63'] ;?> ตำบล  <?php echo $on_parish['pat_district63'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
               </div>
            </div>
          </div>
        
        <!-- ----------------------------/รายงาน---------------------------- -->

            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">รายชื่อ ONET</h3>
              </div>
              <?php if (!$this->session->userdata('login') == '') { ?>
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-2">
                      <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href="<?php echo site_url("Onet_c/Onet_c/Onet_add/"); ?>">+ เพิ่มโรงเรียน</a>
                    </div>
                  </div>
                </div>
              <?php } ?>
              <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
              <!-- ---------------------------------ค้นหา------------------------- -->
              <div class="card-header">
                <form action="<?php echo site_url("Onet_c/Onet_c/onet_search/"); ?>" method="post"enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_year" style="width: 100%;">
                          <?php if ($this->session->userdata('onet_search_year')) {
                            $session_year = $this->session->userdata('onet_search_year'); ?>
                            <option value="<?php echo $session_year; ?>" selected="selected"><?php echo $session_year; ?></option>
                            <option value="">ทุกปีงบประมาณ</option>
                          <?php }else{ ?> 
                            <?php foreach ($manage_year['cal'] as $cal) { ?>
                              <option value="<?php echo $cal->on_row_budget; ?>" selected="selected"><?php echo $cal->on_row_budget; ?></option>
                            <?php } ?>
                          <?php } ?>
                          <?php foreach ($manage_year['year'] as $year) { ?>
                            <option value="<?php echo $year->on_row_budget; ?>" ><?php echo $year->on_row_budget; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_pro" style="width: 100%;">
                          <?php if ($this->session->userdata('onet_search_pro')) { 
                            $session_pro = $this->session->userdata('onet_search_pro'); ?>
                              <?php foreach ($manage_provinces['pro'] as $pro) { 
                                if ($session_pro == $pro->pro_id) {?>
                                  <option value="<?php echo $pro->pro_id; ?>"><?php echo $pro->name_th; ?></option>
                                  <option value="">ทุกจังหวัด</option>
                                <?php }
                              } ?>
                          <?php }else{ ?>
                           <option value="" selected="selected">-- จังหวัด --</option>
                          <?php } ?>
                          <?php foreach ($manage_provinces['pro'] as $pro) { ?>
                            <option value="<?php echo $pro->pro_id; ?>"><?php echo $pro->name_th; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-sm-1">
                      <button type="submit" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-default" style="width: 100%">ค้นหา</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- --------------------------------/ค้นหา------------------------- -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%">ลำดับ</th>
                    <th style="width: 8%">รหัสโรงเรียน</th>
                    <th style="width: 12%">ชื่อโรงเรียน</th>
                    <th style="width: 13%">ที่อยู่</th>
                    <th style="width: 10%">เขตพื้นที่</th>
                    <th style="width: 12%">สังกัด</th>
                    <th style="width: 7%">เบอโทร</th>
                    <th style="width: 7%">นำทาง</th>
                    <th style="width: 8%">จัดการ</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i = "1" ;  
                    foreach ($onet as $onet) { ?>
                      <tr>
                        <td><?php echo $i ++; ?></td>
                        <td><?php echo $onet->on_id_school; ?></td> 
                        <td><?php echo $onet->on_name_school; ?></td>
                        <td>ต.<?php echo $onet->on_parish; ?> อ.<?php echo $onet->on_district; ?> จ.<?php echo $onet->name_th; ?></td>
                        <td><?php echo $onet->on_area; ?></td>
                        <td><?php echo $onet->on_affiliate; ?></td>
                        <td><?php echo $onet->on_tel; ?></td>
                        <td>
                          <?php if ($onet->on_latitude) { ?>
                            <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='http://www.google.com/maps/place/<?php echo $onet->on_latitude; ?>,<?php echo $onet->on_longitude; ?>'">นำทาง</button>
                          <?php }else{ ?>
                            <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='#'">ไม่มีข้อมูลนำทาง</button>
                          <?php } ?>
                          
                        </td>
                        <td>
                          <div class="col-sm-12">
                            <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='<?php echo site_url("Onet_c/Onet_c/onet_edit/".$onet->on_id); ?>'"><i class="fas fa-edit"></i></button>
                          </div>
                        </td>
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
