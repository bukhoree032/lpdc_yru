
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-8">
            <div class="row">
                <div class="col-sm-2">
                  <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <?php if(!$this->session->flashdata('exit')) { ?> 
          <div class="card-header">
            <h3 class="card-title">เพิ่มข้อมูลครัวเรือน</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <form action="<?php echo site_url("Onet_c/Onet_c/onet_update/"); ?>" method="post" enctype="multipart/form-data">
          <!-- /.card-header -->
            <div class="card-body">
              <input type="hidden" name="on_id" value="<?php echo $onet_edit['quer_code']['on_id'] ?>">
              <div class="row">
                <div class="col-md-2">
                <div class="form-group">
                  <label>ปีงบประมาน </label>
                  <select class="form-control select2bs4" name="on_row_budget" style="width: 100%;">
                    <?php $date_time = $onet_edit['quer_code']['on_row_budget'];?>
                      <option value="<?php echo $date_time?>" selected="selected"><?php echo $date_time?></option>
                      <option><?php echo $date_time + '1' ?></option>
                      <option><?php echo $date_time + '0' ?></option>
                      <option><?php echo $date_time + '-1' ?></option>
                      <option><?php echo $date_time + '-2' ?></option>
                  </select>
                </div>
              </div>
                <div class="col-md-12">
                  <div class="">
                    <h5 class="card-title">ข้อมูลสวนตัว</h5>
                  </div>
                  <div class="" style="margin-top: 30px"></div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>รหัสโรงเรียน</label>
                    <input type="number" class="form-control" name="on_id_school" value="<?php echo $onet_edit['quer_code']['on_id_school'] ?>" required>
                  </div>
                  <!-- /.form-group -->
                </div>
                  <!-- /.form-group -->
                <div class="col-md-9">
                  <div class="form-group">
                    <label>ชื่อโรงเรียน</label>
                    <input type="text" class="form-control" name="on_name_school" value="<?php echo $onet_edit['quer_code']['on_name_school'] ?>" required>
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>เขตพื้นที่</label>
                    <input type="text" class="form-control" name="on_area" value="<?php echo $onet_edit['quer_code']['on_area'] ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label>สังกัด	</label>
                    <input type="text" class="form-control" name="on_affiliate" value="<?php echo $onet_edit['quer_code']['on_affiliate'] ?>">
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>เบอร์โทร</label>
                    <input type="text" class="form-control" name="on_tel" value="<?php echo $onet_edit['quer_code']['on_tel'] ?>">
                  </div>
                </div>
                <!-- <div class="col-md-3">
                  <div class="form-group">
                    <label>on_affiliate</label>
                    <select class="form-control select2bs4" name="j_occupation[]" style="width: 100%;" multiple>
                      <?php foreach ($manage_year['acti'] as $acti) { ?>
                        <option value="<?php echo $acti->ac_id; ?>"><?php echo $acti->ac_initials; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div> -->
                <div class="col-md-9">
                </div>
                <div class="col-md-12">
                  <div class="">
                    <hr>
                    <h5 class="card-title">ข้อมูลที่อยู่</h5>
                  </div>
                  <div class="" style="margin-top: 50px"></div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>บ้านเลขที่</label>
                    <input type="text" class="form-control" name="on_house_number" value="<?php echo $onet_edit['quer_code']['on_house_number'] ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label>บ้าน</label>
                    <input type="text" class="form-control" name="on_village" value="<?php echo $onet_edit['quer_code']['on_village'] ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-1">
                  <div class="form-group">
                    <label>หมู่</label>
                    <input type="text" class="form-control" name="on_swine" value="<?php echo $onet_edit['quer_code']['on_swine'] ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>ซอย</label>
                    <input type="text" class="form-control" name="on_alley" value="<?php echo $onet_edit['quer_code']['on_alley'] ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>ถนน</label>
                    <input type="text" class="form-control" name="on_street" value="<?php echo $onet_edit['quer_code']['on_street'] ?>">
                  </div>
                  <!-- /.form-group -->
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>ตำบล</label>
                    <select class="form-control select2" name="on_parish" style="width: 100%;" required>
                        <option value="<?php echo $onet_edit['quer_code']['on_parish'] ?>" selected="selected"><?php echo $onet_edit['quer_code']['on_parish'] ?></option>
                      <?php foreach ($provinces['dis'] as $pro) { ?>
                        <option value="<?php echo $pro->dis_name_th; ?>" ><?php echo $pro->dis_name_th; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>อำเถอ</label>
                    <select class="form-control select2" name="on_district" style="width: 100%;" required>
                      <option value="<?php echo $onet_edit['quer_code']['on_district'] ?>" selected="selected"><?php echo $onet_edit['quer_code']['on_district'] ?></option>
                      <?php foreach ($provinces['aum'] as $pro) { ?>
                        <option value="<?php echo $pro->aum_name_th; ?>" ><?php echo $pro->aum_name_th; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label>จังหวัด</label>
                    <select class="form-control select2" name="on_province" style="width: 100%;" required>
                      <?php foreach ($provinces['pro'] as $pro) { ?>
                        <option value="<?php echo $pro->pro_id; ?>" <?php if($onet_edit['quer_code']['on_province'] == $pro->pro_id){?>selected="selected"<?php } ?>><?php echo $pro->name_th; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <!-- <div class="col-sm-2"><button type="submit" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%">บันทึก</button></div> -->
                <!-- /.col -->
              </div>
              <div class="col-md-12">
                <div class="">
                  <hr>
                  <h5 class="card-title">ข้อมูลเพิ่มเติม</h5>
                </div>
                <div class="" style="margin-top: 50px"></div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-sm-12"><br>
                    <div  id="geo_data">
                      ละติจูด : <input type="text" class="form-control" name="on_latitude" value="<?php echo $onet_edit['quer_code']['on_latitude'] ?>"  style="width:30%;" >
                      ลองติจูด : <input type="text" class="form-control" name="on_longitude" value="<?php echo $onet_edit['quer_code']['on_longitude'] ?>" style="width:30%;" >
                    </div>
                    <br>
                    <button type="button" class="btn bg-gradient-primary" onclick="myFunction()">+ ปักหมุดที่อยู่ปัจจุบัน</button>
                    <br>
                    <br>
                    <div id="map_canvas" style="background: #f5f5f5; height:300px; width: 100%;">
                        <iframe src="https://maps.google.com/maps?q=<?php echo $onet_edit['quer_code']['on_latitude']; ?>,<?php echo $onet_edit['quer_code']['on_longitude']; ?>&hl=es;z=14&amp;output=embed" style="height: 300px"></iframe>
                    </div>
                    <br>
                    <style>iframe {width:100%;height:100%;}</style>
                    <div>
                        <hr>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="col-sm-2"><button type="submit" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%">บันทึก</button></div>
                  </div>
                </div>
              </div>
              <!-- /.row -->
            </div>
          </form>
        <?php }else{

        } ?>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

            
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
<!-- Select2 -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('/lpdc_admin/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('/lpdc_admin/') ?>dist/js/demo.js"></script>
<!-- Page script -->

<script type="text/javascript">
  function myFunction() {
    var initialLocation;
        var bangkok = new google.maps.LatLng(13.755, 100.501589);
        function initialize() {
            var myOptions = {
                zoom: 15,
                //center: latlng,
                mapTypeControl: false,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);

            // detect geolocation lat/lng
            if ( navigator.geolocation ) {
                navigator.geolocation.getCurrentPosition(function(location) {
                    var location = location.coords;
                    // $("#geo_data").html('lat: <input type="" name="lat" value="'+location.latitude+'"><br />long: <input type="" name="lat" value="'+location.longitude+'">');
                    $("#geo_data").html('ละติจูด : <input type="text" class="form-control" name="lat" value="'+location.latitude+'"  style="width:30%;" > ลองติจูด : <input type="text" class="form-control" name="long" value="'+location.longitude+'"  style="width:30%;"  >');
                    initialLocation = new google.maps.LatLng(location.latitude, location.longitude);
                    map.setCenter(initialLocation);
                    setMarker(initialLocation);
                }, function() {
                    handleNoGeolocation();
                });
            } else {
                handleNoGeolocation();
            }

            // no geolocation
            function handleNoGeolocation() {
                map.setCenter(bangkok);
                setMarker(bangkok);
                $("#geo_data").html('lat: 13.755716<br />long: 100.501589');
            }

            // set marker
            function setMarker(initialName) {
                var marker = new google.maps.Marker({
                    draggable: true,
                    position: initialName,
                    map: map,
                    title: "คุณอยู่ที่นี่."
                });
                google.maps.event.addListener(marker, 'dragend', function(event) {
                    $("#geo_data").html('ละติจูด: <input type="text" class="form-control" name="lat" value="'+marker.getPosition().lat()+'"  style="width:30%;" ><br /> ลองติจูด: <input type="text" class="form-control" name="long" value="'+marker.getPosition().lng()+'"  style="width:30%;" >');
                });
            }
        }

        $(document).ready(function() {
            initialize();
        });
  }
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
</body>
</html>
