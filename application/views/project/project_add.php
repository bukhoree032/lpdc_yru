<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Joli Admin - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('/lpdc_admin/') ?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">LPDC</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <!-- <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="<?php echo base_url('/lpdc_admin/') ?>assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url('/lpdc_admin/') ?>assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">John Doe</div>
                                <div class="profile-data-title">Web Developer/Designer</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li> -->
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="index.html"><span class="fa fa-desktop"></span> <span class="xn-text">แผงควบคุม</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">จัดการโครงการ</span></a>
                        <ul>
                            <li><a href="project_add.html"><span class="fa fa-user"></span> เพิ่มโครงการ</a></li>
                        </ul>
                    </li>
                      
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-comments"></span></a>
                        <div class="informer informer-danger">4</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-comments"></span> Messages</h3>                                
                                <div class="pull-right">
                                    <span class="label label-danger">4 new</span>
                                </div>
                            </div>
                            <div class="panel-body list-group list-group-contacts scroll" style="height: 200px;">
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-online"></div>
                                    <img src="assets/images/users/user2.jpg" class="pull-left" alt="John Doe"/>
                                    <span class="contacts-title">John Doe</span>
                                    <p>Praesent placerat tellus id augue condimentum</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user.jpg" class="pull-left" alt="Dmitry Ivaniuk"/>
                                    <span class="contacts-title">Dmitry Ivaniuk</span>
                                    <p>Donec risus sapien, sagittis et magna quis</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-away"></div>
                                    <img src="assets/images/users/user3.jpg" class="pull-left" alt="Nadia Ali"/>
                                    <span class="contacts-title">Nadia Ali</span>
                                    <p>Mauris vel eros ut nunc rhoncus cursus sed</p>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="list-group-status status-offline"></div>
                                    <img src="assets/images/users/user6.jpg" class="pull-left" alt="Darth Vader"/>
                                    <span class="contacts-title">Darth Vader</span>
                                    <p>I want my money back!</p>
                                </a>
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-messages.html">Show all messages</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-tasks"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-tasks"></span> Tasks</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 active</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <strong>Phasellus augue arcu, elementum</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 25 Sep 2014 / 50%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Aenean ac cursus</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">80%</div>
                                    </div>
                                    <small class="text-muted">Dmitry Ivaniuk, 24 Sep 2014 / 80%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Lorem ipsum dolor</strong>
                                    <div class="progress progress-small progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">95%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 23 Sep 2014 / 95%</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <strong>Cras suscipit ac quam at tincidunt.</strong>
                                    <div class="progress progress-small">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                                    </div>
                                    <small class="text-muted">John Doe, 21 Sep 2014 /</small><small class="text-success"> Done</small>
                                </a>                                
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- --------------------- add project ----------------------------- -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="form-horizontal">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><strong>เพิ่มโครงการปีงบประมานล่าสุด</strong></h3>
                                        <ul class="panel-controls">
                                            <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body">
                                        <p>Add class <code>.form-group-separated</code> to form wrapper to get rows separated</p>
                                    </div>
                                    <div class="panel-body form-group-separated">
                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">โครงการ</label>
                                            <div class="col-md-6 col-xs-12">
                                                <?php foreach ($activity["project"] as $pro) { ?>
                                                    <?php echo $pro->pro_initials; ?>
                                                <?php } ?>
                                                <span type="button" class="fa fa-edit" onclick="myFunction()" style="margin-left: 8px;color: "></span>
                                                <form id="pro_update" enctype='multipart/form-data' action='<?php echo site_url("Admin_c/Project_c/project_update") ?>' method='post' >
                                                    <div class="" id="demo"></div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">ปีงบประมาณ</label>
                                            <div class="col-md-6 col-xs-12">                                                                                            
                                                <select class="form-control select">
                                                    <?php $date_time = date("Y");?>
                                                    <option value="<?php echo $date_time + "543" ?>"><?php echo $date_time + "543" ?></option>
                                                    <option value="<?php echo $date_time + "542" ?>"><?php echo $date_time + "542" ?></option>
                                                </select>
                                                <span class="help-block">form-group-separated</span>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 col-xs-12 control-label">กิจกรรม</label>
                                            <div class="col-md-6 col-xs-12">
                                                <div class="panel-body">
                                                    <table class="table datatable">
                                                        <tbody>
                                                            <?php foreach ($activity["activity"] as $ac) { ?>
                                                                <tr>
                                                                    <!-- <?php if (isset($chk[1])) echo "checked"; ?> -->
                                                                    <td><input type="checkbox" name="vehicle1" value="Bike" ></td>
                                                                    <td><?php echo $ac->ac_initials; ?><span type="button" class="fa fa-edit" onclick="myFunction1()" style="margin-left: 8px;color: "></span><br>
                                                                    <div class="" id="<?php echo $ac->ac_id; ?>"></div>
                                                                    <script>
                                                                    function myFunction1() {
                                                                    document.getElementById("<?php echo $ac->ac_id; ?>").innerHTML = "<br><input class='form-control' type='text' name='' placeholder='ชื่อโครงการ' value='<?php echo $ac->ac_name; ?>'><br><input class='form-control' type='text' name='' placeholder='ชื่อโครงการ(ย่อ)' value='<?php echo $ac->ac_initials; ?>'><br><button>บันทึก</button><button style='margin-left:10px' onclick='myFunctionc1()'>ปิด</button>";
                                                                     }
                                                                     function myFunctionc1() {
                                                                    document.getElementById("<?php echo $ac->ac_id; ?>").innerHTML = "";
                                                                     }
                                                                    </script>
                                                                    </td>
                                                                </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <?php foreach ($activity["project"] as $pro) { ?>
                                                        <button type="button" class="btn btn-default" onclick="window.location='<?php echo site_url("Admin_c/Project_c/activity_add/".$pro->pro_id); ?>'">+</button> เพิ่มกิจกรรม
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right">บันทึก</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- --------------------- /add project ----------------------------- -->
                                              
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!-- MODALS -->        
        <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="defModalHead">Basic Modal</h4>
                    </div>
                    <div class="modal-body">
                        Some content in modal example
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url('/lpdc_admin/') ?>audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url('/lpdc_admin/') ?>audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->\

            <?php foreach ($activity["project"] as $pro) { ?>            
                <script>
                    function myFunction() {
                    document.getElementById("demo").innerHTML = "<input type='hidden' name='pro_id' value='<?php echo $pro->pro_id; ?>'>"+
                                                                    "<br>"+
                                                                    "<input class='th1 form-control' type='text' name='pro_name' placeholder='ชื่อโครงการ' value='<?php echo $pro->pro_name; ?>'>"+
                                                                    "<br>"+
                                                                    "<input class='th1 form-control' type='text' name='pro_initials' placeholder='ชื่อโครงการ(ย่อ)'  value='<?php echo $pro->pro_initials; ?>'>"+
                                                                    "<br>"+
                                                                    "<button type='submit'>บันทึก</button>"+
                                                                    "<button style='margin-left:10px' onclick='myFunctionc()'>ปิด</button>";
                     }
                     function myFunctionc() {
                        document.getElementById("demo").innerHTML = "";
                     }
                </script>
            <?php } ?>
        <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='../../js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/plugins/bootstrap/bootstrap-select.js"></script>
         <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/plugins/datatables/jquery.dataTables.min.js"></script>
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/settings.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url('/lpdc_admin/') ?>js/actions.js"></script>      
    </body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
      //เรียกใช้ evnet submit
      $("#pro_update").submit(function(evan) {
      evan.preventDefault();
          $(".th1 + span.require").remove();
          // $("#other_accident + span.require").remove();
          $(".th1").each(function(){
              //ดึงnameจากform
              var name = $(this).attr("name")
              var val = $(this).val()
               //เช็คค่าว่าง
               if (val=="") {
                   $(this).after("<span class='require'style ='color:red'>*จำเป็นต้องกรอก</span>")
               }
            });
            if($(".th1").next().is(".require")==false){
                 // $.ajax({
                 //    method: "POST",
                 //    url: "<?php echo site_url('Backend_control/inves_insert') ?>",
                 //    dataType: 'json',
                 //    data: $("#pro_update").serialize(),
                 //    success: function($result) {
                 //        console.log($result);
                 //          let html = "";
                 //              $.each($result, function(i, v){
                 //                html += '<tr class="css_tr_data" id="'+ v["inves_id"] +'">'
                 //                  + '<td>'
                 //                    + '<input name="checkdel[]" type="checkbox" class="css_data_item" id="'+ v["inves_id"] +'" value="'+ v["inves_id"] +'">' 
                 //                  + '</td>'
                 //                  + '<td>'+ v["inves_id"] +'</td>'
                 //                  + '<td>'+ v["inves_inspector"] +'</td>'
                 //                  + '<td>'
                 //                    + '<a id="'+ v["inves_id"] +'" class="inves_edit btn btn-sm btn-flat btn-success trash-multi" title="แก้ไข" data-toggle="modal" data-target="#inves_edit">'
                 //                      + '<i class="fa fa-wrench"></i> แก้ไข</a> '
                 //                  + '</td>'
                 //                  + '<td>'
                 //                    + '<a id="'+ v["inves_id"] +'" class="inves_delet btn btn-sm btn-flat btn-danger trash-multi"  title="ลบสถานะ">'
                 //                    + '<i class="fa fa-trash"></i> ลบสถานะ</a> '
                 //                  + '</td>'
                 //                + '</tr>';

                 //                console.log(i, v);
                 //              });

                 //              $('#inves_insert').modal('toggle');
                 //              $('#myModal_success').modal('show');
                 //              $('.table tbody').empty();
                 //              $('.table tbody').append(html);
                 //        //   }
                 //    }
                 //  });
            }else{
                return false;  
            }
      });
    });
</script>