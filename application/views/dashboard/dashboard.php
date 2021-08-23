<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
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

    <style>
      .chart_o {
        height: 400px;
      }
    </style>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <!-- PIE CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">ครัวเรือน</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div id="Household" style="min-height: 400px; height: 250px; max-height: 250px; max-width: 100%;"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="col-md-4 ">
            <!-- DONUT CHART -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">ตำบล</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div id="parish" style="min-height: 400px; height: 250px; max-height: 250px; max-width: 100%;"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-4 ">
            <!-- DONUT CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">อำเภอ</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div id="district" style="min-height: 400px; height: 250px; max-height: 250px; max-width: 100%;"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-4 ">
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">หมู่บ้าน</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div id="moo" style="min-height: 400px; height: 250px; max-height: 250px; max-width: 100%;"></div>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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
<!-- ChartJS -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/chart.js/Chart.min.js"></script>
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
<script>
  var xArray = ["ยะลา", "นราธิวาส", "ปัตตานี"];
  var yArray = [<?php echo $Dashboard['yala_h'] ?>, <?php echo $Dashboard['nara_h'] ?>, <?php echo $Dashboard['pat_h'] ?>];

  var layout = {title:"ครัวเรือนทั้งหมด <?php echo $Dashboard['yala_h']+$Dashboard['nara_h']+$Dashboard['pat_h'] ?> ครัวเรือน<br>โรงเรียนทั้งหมด <?php echo $Dashboard['pat_scholl']+$Dashboard['nara_scholl']+$Dashboard['yala_scholl'] ?> โรงเรียน"};

  var data = [{labels:xArray, values:yArray, type:"pie"}];

  Plotly.newPlot("Household", data, layout);
</script>
<script>
  var xArray = ["ยะลา", "นราธิวาส", "ปัตตานี"];
  var yArray = [<?php echo $Dashboard['yala_parish'] ?>, <?php echo $Dashboard['nara_parish'] ?>, <?php echo $Dashboard['pat_parish'] ?>];

  var layout = {title:"ตำบลทั้งหมด <?php echo $Dashboard['all_parish'] ?> ตำบล"};

  var data = [{labels:xArray, values:yArray, hole:.4, type:"pie"}];

  Plotly.newPlot("parish", data, layout);
</script>
<script>
  var xArray = ["ยะลา", "นราธิวาส", "ปัตตานี"];
  var yArray = [<?php echo $Dashboard['yala_district'] ?>, <?php echo $Dashboard['nara_district'] ?>, <?php echo $Dashboard['pat_district'] ?>];

  var layout = {title:"อำเภอทั้งหมด <?php echo $Dashboard['all_district'] ?> อำเภอ"};

  var data = [{labels:xArray, values:yArray, hole:.4, type:"pie"}];

  Plotly.newPlot("district", data, layout);
</script>
<script>
  var xArray = ["ยะลา", "นราธิวาส", "ปัตตานี"];
  var yArray = [<?php echo $yala_moo ?>, <?php echo $nara_moo ?>, <?php echo $pat_moo ?>];

  var layout = {title:"อำเภอทั้งหมด <?php echo $all_moo ?> อำเภอ"};

  var data = [{labels:xArray, values:yArray, hole:.4, type:"pie"}];

  Plotly.newPlot("moo", data, layout);
</script>
</body>
</html>
