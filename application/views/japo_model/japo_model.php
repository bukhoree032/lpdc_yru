


    <!-- Main content -->
    
        <!-- ----------------------------/รายงาน---------------------------- -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">รายชื่อครัวเรือนโครงการ JAPO Model</h3>
              </div>
              <?php if (!$this->session->userdata('login') == '') { ?>
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-2">
                      <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href="<?php echo site_url("Japo_c/Manage_japo_c/japo_add/"); ?>">+ เพิ่มสมาชิก</a>
                    </div>
                  </div>
                </div>
              <?php }else{
                
              } ?>
              
              <!-- ---------------------------------ค้นหา------------------------- -->
              <form id="form_ingredient" action="<?php echo site_url("Japo_c/Manage_japo_c/japo_search/"); ?>" method="post"enctype="multipart/form-data">
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_year" style="width: 100%;" onchange="changeFunc();">

                      <?php if ($this->session->userdata('japo_search_year')) {
                        $session_year = $this->session->userdata('japo_search_year'); ?>
                        <option value="<?php echo $session_year; ?>" selected="selected"><?php echo $session_year; ?></option>
                        <option value="">ทุกปีงบประมาณ</option>
                      <?php }else{ ?> 
                        <?php foreach ($manage_year['cal'] as $cal) { ?>
                          <option value="<?php echo $cal->j_row_budget; ?>" selected="selected"><?php echo $cal->j_row_budget; ?></option>
                        <?php } ?>
                      <?php } ?>
                      <?php foreach ($manage_year['year'] as $year) { ?>
                        <option value="<?php echo $year->j_row_budget; ?>" ><?php echo $year->j_row_budget; ?></option>
                      <?php } ?>
                    </select> 
                    </div>
                    <!-- ------------------------model------------------------ -->
                    
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_pro" style="width: 100%;" onchange="changeFunc();">
                      <?php if ($this->session->userdata('japo_search_pro')) { 
                        $session_pro = $this->session->userdata('japo_search_pro'); ?>
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
                    <!-- <div class="col-sm-1">
                      <button type="submit" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%">ค้นหา</button>
                    </div> -->
                    
                    <!-- <div class="col-sm-4"></div> -->
                  </div>
                  <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
                </div>
              </form>
              <!-- --------------------------------/ค้นหา------------------------- -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 4%">ลำดับ</th>
                      <th style="width: 15%">ชื่อ-สกุล</th>
                      <th style="width: 25%">ที่อยู่</th>
                      <!-- <th style="width: 12%">ความพร้อม</th> -->
                      <th style="width: 8%">เบอร์โทร</th>
                      <th style="width: 6%">นำทาง</th>
                      <!-- <th style="width: 8%">รายได้</th> -->
                      <?php if (!$this->session->userdata('login') == '') { ?>
                        <th style="width: 12%">จัดการ</th>
                      <?php }else{

                      } ?>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                    $i = "1";
                    foreach ($japo as $hous) { ?>
                    <tr>
                      <td><?php echo $i ++; ?></td>
                      <td><?php echo $hous->j_title; ?><?php echo $hous->j_name; ?> <?php echo $hous->j_surname; ?></td>
                      <td>บ้านเลขที่ <?php echo $hous->j_house_number; ?> ม.<?php echo $hous->j_swine; ?> ต.<?php echo $hous->j_parish; ?> อ.<?php echo $hous->j_district; ?> จ.<?php echo $hous->name_th; ?></td>
                      <!-- <td><?php echo $hous->ac_initials; ?></td> -->
                      <td><?php echo $hous->j_tel; ?></td>
                      <!-- <td><?php echo $hous->h_revenue; ?></td> -->
                      <td>
                        <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='http://www.google.com/maps/place/<?php echo $hous->j_latitude; ?>,<?php echo $hous->j_longitude; ?>'">นำทาง</button>
                      </td>
                      <?php if (!$this->session->userdata('login') == '') { ?>
                        <td>
                          <div class="row">
                            <div class="col-sm-4">
                              <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Japo_c/Manage_japo_c/japo_deal/".$hous->j_id); ?>'">ช่วยเหลือ</button>
                            </div>
                            <div class="col-sm-4">
                              <form action="<?php echo site_url("Japo_c/Manage_japo_c/japo_trace/".$hous->j_id); ?>" method="post"enctype="multipart/form-data">
                                <button type="submit" class="btn btn-block btn-success btn-xs">ติดตาม</button>
                                <input type="" hidden="hidden" name="acid" value="">
                              </form>
                            </div>
                            <div class="col-sm-2">
                              <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='<?php echo site_url("Japo_c/Manage_japo_c/japo_edit/".$hous->j_id); ?>'"><i class="fas fa-edit"></i></button>
                            </div>
                            <div class="col-sm-2">
                              <button type="button" class="btn btn-block btn-danger btn-xs" onclick="window.location='<?php echo site_url("Japo_c/Manage_japo_c/japo_delete/".$hous->j_id); ?>'"><i class="fas fa-prescription-bottle"></i></button>
                            </div>
                          </div>
                        </td>
                      <?php }else{

                      } ?>
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


<script type="text/javascript">

   function changeFunc() {
    document.getElementById("form_ingredient").submit();
    // $('#example1').data.reload();
   }

</script>
</body>
</html>
