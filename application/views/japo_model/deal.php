
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">
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
                <h3 class="card-title">ประวัติการช่วยเหลือ Japo Model</h3>
              </div>
              
              <!-- ---------------------------------แจก------------------------- -->
              
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-2">
                      <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#myModal" style="width: 100%">+ อุปกรณ์</button> -->
                      <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">+ ส่งเสริม
                        </button>
                        <ul class="dropdown-menu">
                          <?php foreach ($occupation as $key => $value) { ?>
                            <li data-toggle="modal" data-target="#myModal_<?php echo $key ?>"><a style='cursor: pointer;'><?php echo $value ?></a></li>
                          <?php } ?>
                        </ul>
                      </div>
                    </div>
                  <!-- <div class="col-sm-2">
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#myModal" style="width: 100%">+ ส่งเสริม</button>
                  </div> -->
                  <!-- ------------------------model------------------------ -->
                  <?php $this->load->view('japo_model/modal_deal/honey'); ?>
                  <?php $this->load->view('japo_model/modal_deal/chicken'); ?>
                  <?php $this->load->view('japo_model/modal_deal/mushroom'); ?>
                  <?php $this->load->view('japo_model/modal_deal/vegetable'); ?>
                  <!-- ------------------------/model------------------------  -->
                </div>
              </div>
              <?php
                function honey($gobbet ,$empty)
                {
                  $data = "กล่องทีมีผึ้ง ".$gobbet." กล่อง / กล่องเปล่า ".$empty." กล่อง";
                  return $data;
                }
                function chicken($gobbet ,$empty)
                {
                  $data = "ตัวผู้ ".$gobbet." ตัว / ตัวเมีย ".$empty." ตัว";
                  return $data;
                }
                function vegetable($gobbet ,$empty)
                {
                  $data = "ผัก ".$gobbet." ชนิด";
                  return $data;
                }
                function mushroom($gobbet ,$empty)
                {
                  $data = "เห็ด ".$gobbet." ก้อน";
                  return $data;
                }
              ?>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%">#</th>
                    <th style="width: 12%">อาชีพ</th>
                    <th style="width: 30%">ช่วยเหลือ</th>
                    <th style="width: 20%">หมายเหตุ</th>
                    <th style="width: 10%">ติดตาม</th>
                    <th style="width: 10%">แก้ไข</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($japo_deal['quer_deal'] as $key => $value) { ?>
                      <?php
                        if($value['j_s_occupation'] == '8'){
                          $data = chicken($value['j_s_receive'], $value['j_s_occupation']);
                        }
                        if($value['j_s_occupation'] == '9'){
                          $data = honey($value['j_s_receive'], $value['j_s_occupation']);
                        }
                        if($value['j_s_occupation'] == '10'){
                          $data = mushroom($value['j_s_receive'], $value['j_s_occupation']);
                        }
                        if($value['j_s_occupation'] == '29'){
                          $data = vegetable($value['j_s_receive'], $value['j_s_occupation']);
                        }
                          // $data = honey("4" ,"0")
                      ?>
                      <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value['ac_initials'] ?></td>
                        <td><?php echo $data; ?></td>
                        <td><?php echo $value['j_s_annotation'] ?></td>
                        <td>
                          <form action="" method="post"enctype="multipart/form-data">
                            <button type="submit" class="btn btn-block btn-success btn-xs">ติดตาม</button>
                            <input type="" hidden="hidden" name="deal" value="">
                          </form>
                        </td>
                        <td></td>
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
