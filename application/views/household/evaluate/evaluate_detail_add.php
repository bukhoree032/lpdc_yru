
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-8">
                        <div class="row">
                          <!-- <?php  
                            if($this->session->flashdata('exit')) {
                          ?> 
                            <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Manage_c"); ?>'">< ย้อนกลับ</button>
                            </div>
                          <?php }else{ ?> 
                            <div class="col-sm-2"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/") ?>'">< ย้อนกลับ</button>
                           </div>
                          <?php } ?> -->
                          <div class="col-sm-2">
                              <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
                          </div>
                        </div>
                     </div>
                     <div class="col-sm-4">
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <!-- SELECT2 EXAMPLE -->
                  <!-- ------------------------------ -->
                  <div class="card" style="padding: 10px">
                     <div class="card-header">
                        <h3 class="card-title">ข้อมูลส่วนตัว</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="">
                        <div class="row">
                           <div class="col-sm-12">
                              <?php foreach ($eva_add as $eva) { ?>
                                 <form action="<?php echo site_url("Household_c/Evaluate_c/eva_insert/"); ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                       <input id="" type="hidden" name="h_id" value="<?php echo $eva->h_id; ?>">
                                       <div class="col-md-12">
                                             <br>
                                             รูปโปรไฟล์ : <br>
                                             <input id="file-inputp" name="profile" type="file" >
                                             <div class="row" style="margin-top: 10px ">
                                                <div class="col-md-2" style="margin-left: 10px">
                                                    <div class="">
                                                      <b>รูปปัจจุบัน</b>
                                                      <br>
                                                      <br>
                                                      <?php foreach ($manage_detail_imag["profile"] as $profile) { ?>
                                                        <div id="imag_pro_<?php echo $profile->im_id; ?>"> 
                                                          <a href="" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                            <img src="<?php echo base_url('/imag/') ?><?php echo $profile->im_name; ?>" style="width: 80%" class="img-fluid mb-2" alt="white sample"/>
                                                          </a>
                                                          <div class="col-sm-"><button type="button" id="<?php echo $profile->im_id; ?>" class="delet_imag_pro btn btn-block bg-gradient-danger btn-sm" style="margin-top: -9px; width: 80%"><i class="fas fa-prescription-bottle"></i> ลบโปรไฟล์</button>
                                                          </div>
                                                        </div>
                                                      <?php } ?>
                                                    </div>  
                                                 </div>
                                                 <div class="col-md-2">
                                                   <div class="">
                                                      <b>รูปใหม่</b>
                                                      <br>
                                                      <br>
                                                      <div id="previewp" style="margin-top: 1%"></div>
                                                   </div>
                                                 </div>
                                             </div>
                                        </div>
                                          <div class="col-md-12">
                                            <br>
                                            รูปสภาพแวดล้อม :<br> 
                                            <input id="file-input" name="around[]" type="file" multiple>
                                            <br>
                                            <br>
                                            <div class="row">
                                              <div class="col-12">
                                                <div class="card card-primary">
                                                  <div class="card-header">
                                                    <div class="card-title">
                                                     สภาพแวดล้อม
                                                    </div>
                                                  </div>
                                                  <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                          <div class="row">
                                                            <?php foreach ($manage_detail_imag["around"] as $around) { ?>
                                                              <div class="col-sm-2" id="imag_<?php echo $around->im_id; ?>">
                                                                <a href="" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                                                                  <img src="<?php echo base_url('/imag/') ?><?php echo $around->im_name; ?>" style="height: 70%; width: 90%" class="img-fluid mb-2" alt="white sample"/>
                                                                </a>
                                                                  <div class="col-sm-"><button type="button" id="<?php echo $around->im_id; ?>" onclick="myFunction_delet()" class="btn btn-block bg-gradient-danger btn-sm" style="margin-top: -9px; width: 90%"><i class="fas fa-prescription-bottle"></i> ลบรูป</button>
                                                                  </div>    
                                                              </div>
                                                            <?php } ?>
                                                            <div id="preview"></div>
                                                          </div>
                                                        </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                       </div>
                                       <div class="col-md-12">
                                           <br>
                                           รายละเอียดเพิ่มเติม :<br>
                                            <textarea name="detail" style="width: 100%" rows="8"><?php echo $eva->h_around; ?></textarea>
                                       </div>
                                       
                                       <div class="col-sm-12"><br>
                                          <div class="col-md-5">
                                            <div  id="geo_data">
                                              ละติจูด : <input type="text" class="form-control" name="lat" value="<?php echo $eva->h_latitude; ?>"  >
                                              ลองติจูด : <input type="text" class="form-control" name="long" value="<?php echo $eva->h_longitude; ?>"  >
                                            </div>
                                          </div>
                                          <br>
                                          <div id="map_canvas" style="background: #f5f5f5; height:300px; width: 100%;">
                                              <iframe src="https://maps.google.com/maps?q=<?php echo $eva->h_latitude; ?>,<?php echo $eva->h_longitude; ?>&hl=es;z=14&amp;output=embed" style="height: 300px"></iframe>
                                          </div>
                                          <br>
                                          <button type="button" class="btn bg-gradient-primary" onclick="myFunction()">+ ปักหมุดที่อยู่ปัจจุบัน</button>
                                          <style>iframe {width:100%;height:100%;}</style>
                                          <div>
                                             <hr>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                         <button type="submit" class="btn bg-gradient-primary">บันทึก</button>
                                       </div>
                                    </div>
                                 </form>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- ------------------------------ -->
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
      <aside class="control-sidebar control-sidebar-dark">
         <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <script>
         function previewImages() {

           var $preview = $('#previewp').empty();
           if (this.files) $.each(this.files, readAndPreview);

           function readAndPreview(i, file) {
             
             if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
               return alert(file.name +" is not an image");
             } // else...
             
             var reader = new FileReader();

             $(reader).on("load", function() {
               $preview.append($("<img/>", {src:this.result, height:100}));
             });

             reader.readAsDataURL(file);
             
           }

         }

         $('#file-inputp').on("change", previewImages);
      </script>
      <script>
         function previewImages() {

           var $preview = $('#preview').empty();
           if (this.files) $.each(this.files, readAndPreview);

           function readAndPreview(i, file) {
             
             if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
               return alert(file.name +" is not an image");
             } // else...
             
             var reader = new FileReader();

             $(reader).on("load", function() {
               $preview.append($("<img/>", {src:this.result, height:100}));
             });

             reader.readAsDataURL(file);
             
           }

         }

         $('#file-input').on("change", previewImages);
      </script>
      <?php foreach ($eva_add as $eva) {?>
        <?php if ($eva->h_latitude != ''){ ?>
          <script type="text/javascript">
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
                            $("#geo_data").html('ละติจูด : <input type="text" class="form-control" name="lat" value="'+<?php echo $eva->h_latitude; ?>+'"> ลองติจูด : <input type="text" class="form-control" name="long" value="'+<?php echo $eva->h_longitude; ?>+'"  >');
                            initialLocation = new google.maps.LatLng(<?php echo $eva->h_latitude; ?>,<?php echo $eva->h_longitude; ?>);
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
                            $("#geo_data").html('ละติจูด : <input type="text" class="form-control" name="lat" value="'+marker.getPosition().lat()+'"> ลองติจูด : <input type="text" class="form-control" name="long" value="'+marker.getPosition().lng()+'">');
                        });
                    }
                }

                $(document).ready(function() {
                    initialize();
                });
            </script>
          <?php }else{ ?>
            
          <?php } ?> 
      <?php } ?>
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
                          $("#geo_data").html('ละติจูด : <input type="text" class="form-control" name="lat" value="'+location.latitude+'"> ลองติจูด : <input type="text" class="form-control" name="long" value="'+location.longitude+'"  >');
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
                        $("#geo_data").html('ละติจูด : <input type="text" class="form-control" name="lat" value="'+marker.getPosition().lat()+'"> ลองติจูด : <input type="text" class="form-control" name="long" value="'+marker.getPosition().lng()+'"  >');
                      });
                  }
              }

              $(document).ready(function() {
                  initialize();
              });
        }
      </script>
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
      <!-- <script src="jquery-3.5.1.min.js"></script> -->
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

      <script type="text/javascript">
        $(document).ready(function() {
              $(document).on('click','.delet_imag',function(evan) {
                evan.preventDefault();
                alert ($(this).attr('id'));
                var id = $(this).attr('id');
                 $.ajax({
                      method: "POST",
                      url: "<?php echo site_url('Household_c/Evaluate_c/detel_imag') ?>",
                      dataType: 'json',
                      data: {id:id},
                      success: function($result) {
                              console.log($result);

                              swal("", "บันทึกข้อมูลเรียบร้อย !!", "success");
                              $('#imag_'+$result).empty();
                          }
                   });
              })
          });
      </script>

      
      <script src="<?php echo base_url('/lpdc_admin/') ?>sweetalert.min.js"></script>

   </body>
</html>