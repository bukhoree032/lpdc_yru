
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
              <!-- <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c"); ?>'"><ย้อนกลับ</button>
              </div> -->
              <div class="col-sm-2">
                  <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
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
                <h3 class="card-title">เพิ่มการดำเนินการ</h3>
              </div>
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-2">
                    <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-default" style="width: 100%">+ เพิ่มการดำเนินการ</button>
                  </div>
                  <div class="col-sm-2">
                    
                  </div>
                  <div class="col-sm-8">
                   
                  </div>
                  <!-- <div class="col-sm-4"></div> -->
                </div>
                <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
              </div>
              <!-- --------------------------------/ค้นหา------------------------- -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10%">ลำดับ</th>
                      <th style="width: 80%">ชื่อการดำเนินการ</th>
                      <th style="width: 10%">แก้ไข</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $row = 0;
                    foreach ($goalANDpro['goal'] as $goal) { 
                    $row ++;  ?>
                    <tr>
                      <td><?php echo $row; ?></td>
                      <td><?php echo $goal->o_g_name; ?></td>
                      <td>
                        <div class="row">
                          
                          <div class="col-sm-12">
                            <button type="button" class="btn btn-block btn-success btn-xs"  data-toggle="modal" data-target="#modal-default<?php echo $goal->o_g_id; ?>" ><i class="fas fa-edit"></i></button>
                          </div>
                          
                        </div>
                      </td>
                    </tr>
                    <!-- ------------modal add product ------------------------ -->
                     <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h4 class="modal-title">การดำเนินการใหม่</h4>
                                 <button type="button" class="close" name="" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <!-- <form id="form_product_insert" method="post"enctype="multipart/form-data"> -->
                              <form id="form_product_insert" action="<?php echo site_url("Otop_c/Manage_otop_c/goal_insert/"); ?>" method="post"enctype="multipart/form-data">
                                 <div class="modal-body">
                                    <p>การดำเนินการ</p>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="customer_records">
                                             <div class="row">
                                                <div class="col-md-8">
                                                   <input class="form-control" name="goal_name[]" type="text"  placeholder="ชื่อการดำเนินการ">
                                                </div>
                                                <!-- <div class="col-md-4">
                                                   <a class="extra-fields-customer" href="#">เพิ่มการดำเนินการ</a>
                                                </div> -->
                                             </div>
                                          </div>
                                          <div class="customer_records_dynamic"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                   <button type="submit" class="btn btn-primary">บันทึก</button>
                                   <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;  </button>
                                 </div>
                              </form>
                           </div>
                           <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                     </div>
                     <!-- /.modal -->
                      <!-- ------------modal add product ------------------------ -->
                     <div class="modal fade" id="modal-default<?php echo $goal->o_g_id; ?>">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <h4 class="modal-title">แก้ไขชื่อการดำเนินการ</h4>
                                 <button type="button" class="close" name="" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              <!-- <form id="form_product_insert" method="post"enctype="multipart/form-data"> -->
                              <form id="form_product_insert" action="<?php echo site_url("Otop_c/Manage_otop_c/goal_update/".$goal->o_g_id); ?>" method="post"enctype="multipart/form-data">
                                 <div class="modal-body">
                                    <p>การดำเนินการ</p>
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="customer_records">
                                             <div class="row">
                                                <div class="col-md-8">
                                                   <input class="form-control" name="goal_name" type="text"  value="<?php echo $goal->o_g_name; ?>" placeholder="ชื่อการดำเนินการฑ์">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="customer_records_dynamic"></div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal-footer">
                                   <button type="submit" class="btn btn-primary">บันทึก</button>
                                   <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;  </button>
                                 </div>
                              </form>
                           </div>
                           <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                     </div>
                     <!-- /.modal -->
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

<!-- <script type="text/javascript">
  $(document).ready(function() {

      //เรียกใช้ evnet submit
      $("#form_product_insert").submit(function(evan) {
      evan.preventDefault();
          $(".th1 + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".th1").each(function(){
            });
            if($(".th1").next().is(".require")==false){
                 $.ajax({
                    method: "POST",
                    url: "<?php echo site_url('Otop_c/Manage_otop_c/product_insert/') ?>",
                    dataType: 'json',
                    data: $("#form_product_insert").serialize(),
                    success: function($result) {
                      console.log($result);
                          // $('#myModal_register_admin_idcard').modal('show');
                        let html = "";
                            $.each($result, function(i, v){
                              html += '<tr>'
                                        + '<td>'+ v["o_p_id"] +'</td>'
                                        + '<td>'+ v["o_p_name"] +'</td>'
                                        + '<td>'
                                          + '<div class="row">'
                                            
                                            + '<div class="col-sm-12">'
                                              + '<button type="button" class="btn btn-block btn-success btn-xs"  data-toggle="modal" data-target="#modal-default'+ v["o_p_id"] +'" ><i class="fas fa-edit"></i></button>'
                                            + '</div>'
                                            
                                          + '</div>'
                                       + '</td>'
                                      + '</tr>';
                              console.log(i, v);
                            });

                            $('#modal-default').modal('toggle');
                            // $('#myModal_success').modal('show');
                            $('.table tbody').empty();
                            $('.table tbody').append(html);
                    }
                  });
            }else{
                return false;  
            }
      });
    });
</script> -->
