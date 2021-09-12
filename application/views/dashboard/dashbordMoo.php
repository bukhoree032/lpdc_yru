
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
      <div class="card">
        <!-- ---------------------------------ค้นหา------------------------- -->
        <form action="<?php echo site_url("Household_c/Manage_c/househole_search/"); ?>" method="post"enctype="multipart/form-data">
          <div class="card-header">
            <div class="row">
              <div class="col-sm-2">
               ปีงบประมาณ :
                <select class="form-control select2bs4" name="year" style="width: 100%;">
                  <?php if ($this->session->userdata('househole_search_year')) {
                    $session_year = $this->session->userdata('househole_search_year'); ?>
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
              <br> -
              <div class="col-sm-2">
                ถึงปีงบประมาณ :
                <select class="form-control select2bs4" name="to_year" style="width: 100%;">
                  <?php if ($this->session->userdata('househole_search_year')) {
                    $session_year = $this->session->userdata('househole_search_year'); ?>
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
                จังหวัด :
                <select class="form-control select2bs4" name="pro" style="width: 100%;">
                <?php if ($this->session->userdata('househole_search_pro')) { 
                  $session_pro = $this->session->userdata('househole_search_pro'); ?>
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

              <div class="col-sm-2">
                โครงการ :
                <select class="form-control select2bs4" name="acti" style="width: 100%;">
                <?php if ($this->session->userdata('househole_search_acti')) {
                  $session_acti = $this->session->userdata('househole_search_acti'); ?>
                    <?php foreach ($manage_year['acti'] as $acti) {
                      if ($session_acti == $acti->ac_id) { ?>
                        <option value="<?php echo $acti->ac_id; ?>"><?php echo $acti->ac_initials; ?></option>
                        <option value="">ทุกกิจกรรม</option>
                      <?php }
                    } ?> -->
                <?php }else{ ?>
                  <option value="" selected="selected">-- อาชีพส่งเสริม --</option>
                <?php } ?>
                <?php foreach ($manage_year['acti'] as $acti) { ?>
                  <option value="<?php echo $acti->ac_id; ?>"><?php echo $acti->ac_initials; ?></option>
                <?php } ?>
              </select>
              </div>
              <div class="col-sm-1"> <br>
                <button type="submit" class="btn btn-block bg-gradient-primary" style="width: 100%">ค้นหา</button>
              </div>
              
              <!-- <div class="col-sm-4"></div> -->
            </div>
            <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
          </div>
        </form>
        <!-- --------------------------------/ค้นหา------------------------- -->
        <div class="row">
          <!-- /.card-header -->
          <div class="card-body col-sm-4" >
              <h4>อำเภอ ( <?php echo $manage_dashboard['all_district']; ?> อำเภอ)</h4><br>
            <table id="example_district" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 10%">ลำดับ</th>
                  <th style="width: 90%">อำเภอ</th>
                </tr>
              </thead>
              <tbody>
                <?php $row = '1'; ?>
                <?php foreach ($manage_dashboard['data_all_district'] as $key => $value) { ?>
                  <tr>
                    <td><?php echo $row++ ?></td>
                    <td><?php echo $value ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <!-- /.card-header -->
          <div class="card-body col-sm-4" >
              <h4>ตำบล ( <?php echo $manage_dashboard['all_parish']; ?> ตำบล)</h4><br>
            <table id="example_parish" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 10%">ลำดับ</th>
                  <th style="width: 90%">ตำบล</th>
                </tr>
              </thead>
              <tbody>
                <?php $row = '1'; ?>
                <?php foreach ($manage_dashboard['data_all_parish'] as $key => $value) { ?>
                  <tr>
                    <td><?php echo $row++ ?></td>
                    <td><?php echo $value ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <!-- /.card-header -->
          <div class="card-body col-sm-4" >
              <h4>หมู่บ้าน ( <?php echo $manage_dashboard['all_moo']; ?> หมู่บ้าน)</h4><br>
            <table id="example_moo" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th style="width: 6%">ลำดับ</th>
                  <th style="width: 15%">ตำบล</th>
                  <th style="width: 15%">หมู่</th>
                </tr>
              </thead>
              <tbody>
                <?php $row = '1'; ?>
                <?php foreach ($manage_dashboard['data_all_moo'] as $key => $value) { ?>
                    <tr>
                      <td><?php echo $row++ ?></td>
                      <td><?php echo $key ?></td>
                      <td>
                      <?php foreach ($value as $key_moo => $value_moo) {
                          if($key_moo != 0){
                            echo",";
                          }
                          echo $value_moo;
                      } ?>
                      </td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
      <!-- /.card -->
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
    $("#example_district").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  $(function () {
    $("#example_parish").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  $(function () {
    $("#example_moo").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
