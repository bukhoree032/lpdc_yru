

            <div class="card">
              <div class="card-header">
                  <h3 class="card-title">การเลี้ยงผึ้งชันโรง</h3>
              </div>
              <div class="card-header">
                <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
              </div>
              <!-- ---------------------------------ค้นหา------------------------- -->
              <div class="card-header">
                <form action="<?php echo site_url("Household_c/Honey_c/honey_search/".$acid); ?>" method="post"enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_year" style="width: 100%;">
                          <?php if ($this->session->userdata('honey_search_year')) {
                            $session_year = $this->session->userdata('honey_search_year'); ?>
                            <option value="<?php echo $session_year; ?>" selected="selected"><?php echo $session_year; ?></option>
                            <option value="">ทุกปีงบประมาณ</option>
                          <?php }else{ ?> 
                            <?php foreach ($manage_year['cal'] as $cal) { ?>
                              <option value="<?php echo $cal->h_row_budget; ?>" selected="selected"><?php echo $cal->h_row_budget; ?></option>
                            <?php } ?>
                          <?php } ?>
                          <?php foreach ($manage_year['year'] as $year) { ?>
                            <option value="<?php echo $year->h_row_budget; ?>" ><?php echo $year->h_row_budget; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_pro" style="width: 100%;">
                          <?php if ($this->session->userdata('honey_search_pro')) { 
                            $session_pro = $this->session->userdata('honey_search_pro'); ?>
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
                    
                    <!-- <div class="col-sm-4"></div> -->
                  </div>
                <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
                </form>
              </div>
              <!-- --------------------------------/ค้นหา------------------------- -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 7%">#</th>
                    <th style="width: 20%">ชื่อ-สกุล</th>
                    <th style="width: 35%">ที่อยู่</th>
                    <th style="width: 12%">เบอร์โทร</th>
                    <th style="width: 10%">นำทาง</th>
                    <?php if (!$this->session->userdata('login') == '') { ?>
                      <th style="width: 16%">จัดการ</th>
                    <?php }else{

                    } ?>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i = "1" ;  
                    foreach ($househole as $hous) { ?>
                      <tr>
                        <td><?php echo $i ++; ?></td>
                        <td><?php echo $hous->h_title; ?><?php echo $hous->h_name; ?> <?php echo $hous->h_surname; ?></td>  
                        <td>บ้านเลขที่ <?php echo $hous->h_house_number; ?> ม.<?php echo $hous->h_swine; ?> ต.<?php echo $hous->h_parish; ?> อ.<?php echo $hous->h_district; ?> จ.<?php echo $hous->name_th; ?></td>
                        <td><?php echo $hous->h_tel; ?></td>
                        
                        <td>
                          <?php if ($hous->h_latitude) { ?>
                            <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='http://www.google.com/maps/place/<?php echo $hous->h_latitude; ?>,<?php echo $hous->h_longitude; ?>'">นำทาง</button>
                          <?php }else{ ?>
                            <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='#'">ไม่มีข้อมูลนำทาง</button>
                          <?php } ?>
                          
                        </td>
                        <?php if (!$this->session->userdata('login') == '') { ?>
                          <td>
                            <div class="row">
                              <div class="col-sm-5">
                                <?php if ($hous->id) { ?>
                                 <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Household_c/Honey_c/honey_deal/".$hous->h_id); ?>'">ช่วยเหลือ</button>
                                <?php }else{ ?>
                                  <button type="button" class="btn btn-block btn-danger btn-xs" onclick="window.location='<?php echo site_url("Household_c/Honey_c/honey_deal/".$hous->h_id); ?>'">ช่วยเหลือ</button>
                                <?php } ?>
                              </div>
                              <div class="col-sm-5">
                                <form action="<?php echo site_url("Household_c/Honey_c/trace/".$hous->h_id); ?>" method="post"enctype="multipart/form-data">
                                  <button type="submit" class="btn btn-block btn-success btn-xs">ติดตาม</button>
                                  <input type="" hidden="hidden" name="acid" value="<?php echo $hous->h_occupation; ?>">
                                </form>
                              </div>
                              <div class="col-sm-2">
                                <form action="<?php echo site_url("Household_c/Honey_c/househole_edit/".$hous->h_id); ?>" method="post"enctype="multipart/form-data">
                                  <button type="" class="btn btn-block btn-success btn-xs"><i class="fas fa-edit"></i></button>
                                  <input type="" hidden="hidden" name="acid" value="<?php echo $hous->h_occupation; ?>">
                                </form>
                              </div>
                            </div>
                          </td>
                        <?php }else{

                        } ?>
                      </tr>
                  <?php } ?>
                  
                 
                  </tfoot>
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
