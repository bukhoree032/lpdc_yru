<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>dist/css/adminlte.min.css">

  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>dist/css/adminlte.min.css">
  
  <link rel="stylesheet" href="<?php echo base_url('/lpdc_admin/') ?>css/responsive.css">
  
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <?php header("Cache-Control: public, max-age=60, s-maxage=60");?> 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">Home</a>
        <!-- <a href="<?php echo base_url('/lpdc_admin/') ?>index3.html" class="nav-link">Home</a> -->
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('/lpdc_admin/') ?>dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('/lpdc_admin/') ?>dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('/lpdc_admin/') ?>dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php if(empty($this->session->userdata('login'))){ ?>
      <script type="text/javascript">
        $(window).load(function(){
          document.getElementById("check_login").submit();
        });
      </script>
      <form name="check_login" id="check_login" method="post" action="<?php echo site_url("Welcome/index/") ?>" enctype="multipart/form-data">
	
      </form>
      <?php } ?>
      
      <!-- Sidebar user (optional) -->
      <?php if (!$this->session->userdata('login') == '') { ?>
        <div class="sidebar">
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="<?php echo base_url('/lpdc_admin/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">ADMIN</a>
              </div>
            </div>
      <?php }else{ ?>
        <a href="#" class="brand-link">
        <!-- <a href="<?php echo base_url('/lpdc_admin/') ?>index3.html" class="brand-link"> -->
          <img src="<?php echo base_url('/lpdc_admin/') ?>dist/img/AdminLTELogo.png"
               alt="AdminLTE Logo"
               class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">LPDC</span>
        </a>

        <!-- Sidebar -->
          <div class="sidebar">
      <?php } ?>
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <!--แผงควบคุม -->
            <li class="nav-item">
            <?php if ($this->session->userdata('back_page') == 'Dashboard'){ ?>
              <a href="<?php echo site_url("Dashboard_c/Dashboard_c/"); ?>" class="nav-link active">
            <?php }else{ ?> 
              <a href="<?php echo site_url("Dashboard_c/Dashboard_c/"); ?>" class="nav-link">
            <?php } ?>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                แผงควบคุม
              </p>
            </a>
          </li>

          <?php 
            $row_ac = 0;
            foreach ($activity_nav["activity"] as $ac) {
              if ($ac->ac_id == $this->session->userdata('back_page')) {
                $ac_nav = $ac->ac_id;
                $pro_nav = $ac->ac_id_pro;
                $row_ac = "1";
              }else if ($row_ac == 0) {
                $ac_nav = "asd123";
                $pro_nav = "asd123";
              }
              ?>
          <?php } ?>
          
          <?php if ($this->session->userdata('back_page') == $ac_nav) { ?>
            <li class="nav-item has-treeview  menu-open">
          <?php }else if ($this->session->userdata('back_page') == 'househole_manag'){ ?>
            <li class="nav-item has-treeview  menu-open">
          <?php }else if ($this->session->userdata('back_page') == 'househole_eva'){ ?>
            <li class="nav-item has-treeview  menu-open">
          <?php }else{ ?>
            <li class="nav-item has-treeview">
          <?php } ?>
           <!-- <a href="#" <?php if ($this->session->userdata('back_page') == 'househole_manag') { ?> class="nav-link active"  <?php }else{ ?> class="nav-link"
              <?php } ?> > -->
          
          <?php if ($this->session->userdata('back_page') == $ac_nav) { ?>
            <a href="#" class="nav-link active">
          <?php }else if ($this->session->userdata('back_page') == 'househole_manag'){ ?>
            <a href="#" class="nav-link active">
          <?php }else if ($this->session->userdata('back_page') == 'househole_eva'){ ?>
            <a href="#" class="nav-link active">
          <?php }else{ ?>
            <a href="#" class="nav-link">
          <?php } ?>
              <i class="nav-icon fas fa-circle"></i>
              <p>
                โครงการ
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

          <?php if ($this->session->userdata('back_page') == 'househole_manag'){
            $ac_nav = '1';
            $pro_nav = '3';
          }else if ($this->session->userdata('back_page') == 'househole_eva') {
            $ac_nav = '2';
            $pro_nav = '3';
          } ?>
              <?php foreach ($activity_nav["project"] as $pro) { ?>
                  <ul class="nav nav-treeview">
                      <?php if ($pro->pro_id == $pro_nav) { ?>
                        <li class="nav-item has-treeview  menu-open">
                      <?php }else{ ?>
                      <li class="nav-item has-treeview">
                      <?php } ?>
                      <!-- <a href="#" class="nav-link"> -->
                      <?php if ($pro->pro_id == $pro_nav) { ?>
                        <a href="#" class="nav-link active">
                      <?php }else{ ?>
                        <a href="#" class="nav-link">
                      <?php } ?>
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                          <?php echo $pro->pro_initials; ?>
                          <i class="right fas fa-angle-left"></i>
                        </p>
                      </a>

                      
                      <?php foreach ($activity_nav["activity_hold"] as $ac_hold) { //เพิ่มครัวเรือน กับ ประเมิน
                        if ($pro->pro_id == $ac_hold->ac_m_id_pro) { ?>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <?php if ($ac_hold->ac_m_id == $ac_nav) { ?>
                                <a href="<?php echo "$ac_hold->ac_m_link/"; ?>" class="nav-link active">
                              <?php }else{ ?>
                                <a href="<?php echo "$ac_hold->ac_m_link/"; ?>" class="nav-link ">
                              <?php } ?>
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p><?php echo $ac_hold->ac_m_initials; ?></p>
                              </a>
                            </li>
                          </ul>
                        <?php }else{

                        } ?>
                      <?php } ?>


                      <?php foreach ($activity_nav["activity"] as $ac) { 
                        if ($pro->pro_id == $ac->ac_id_pro) { 
                          $ac_id = $ac->ac_id; ?>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <!-- <a type="button" href="<?php echo site_url("Household_c/Honey_c/".$ac->ac_id); ?>" class="nav-link"> -->
                              <!-- <a href="<?php echo "$ac->ac_link/".$ac_id; ?>" class="nav-link"> -->
                              <?php if ($ac->ac_id == $ac_nav) { ?>
                              <a href="<?php echo "$ac->ac_link/index/".$ac_id; ?>" class="nav-link active">
                              <?php }else{ ?>
                              <a href="<?php echo "$ac->ac_link/index/".$ac_id; ?>" class="nav-link">
                              <?php } ?>
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p><?php echo $ac->ac_initials; ?></p>
                              </a>
                            </li>
                          </ul>
                        <?php }else{

                        } ?>
                      <?php } ?>
                    </li>
                  </ul>
              <?php } ?>
              


              <!-- ------------------------ -->
              <!-- <?php if ($this->session->userdata('back_page') == 'househole_manag') { ?> 
                  <li class="nav-item has-treeview  menu-open">
              <?php }else if ($this->session->userdata('back_page') == 'househole_evaluate') { ?>  
                  <li class="nav-item has-treeview  menu-open">
              <?php }else{ ?> 
                  <li class="nav-item has-treeview">
              <?php } ?>
                <a href="#" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    ครัวเรือนยากจน
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                    <a href="<?php echo site_url("Household_c/Manage_c"); ?>"  <?php if ($this->session->userdata('back_page') == 'househole_manag') { ?> class="nav-link active"  <?php }else{ ?> class="nav-link"
              <?php } ?> >
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>เพิ่มครัวเรือน</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="" <?php if ($this->session->userdata('back_page') == 'househole_evaluate') { ?> class="nav-link active"  <?php }else{ ?> class="nav-link" <?php } ?> >
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>ประเเมิน</p>
                    </a>
                  </li>
                </ul>
              </li>



              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    OTOP
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul> -->
          <?php if (!$this->session->userdata('login') == '') { ?>
            <?php if ($this->session->userdata('back_page') == 'manage_project') { ?> 
                <li class="nav-item has-treeview  menu-open">
            <?php }else{ ?> 
                <li class="nav-item has-treeview">
            <?php } ?>
              <a href="#" <?php if ($this->session->userdata('back_page') == 'manage_project') { ?> class="nav-link active"  <?php }else{ ?> class="nav-link"
                <?php } ?>>
                <i class="far fa-address-book"></i>
                <p style="margin-left: 5px">
                   จัดการโครงการ
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo site_url("Admin_c/Project_c"); ?>" <?php if ($this->session->userdata('back_page') == 'manage_project') { ?> class="nav-link active"  <?php }else{ ?> class="nav-link"
                <?php } ?>>
                    <?php 
                        $this->session->unset_userdata('back_page');
                        $this->session->set_userdata("back_page",'manage_project'); 
                    ?>
                    <i class="far fa-circle nav-icon"></i>
                    <p>เพิ่มโครงการ/กิจกรรม</p>
                  </a>
                </li>
                
              </ul>
            </li>
          <?php }else{ ?>

          <?php } ?>


          <?php if (!$this->session->userdata('login') == '') { ?>
            <li class="nav-item">
              <a href="<?php echo site_url("Welcome/logout"); ?>" class="nav-link">
                <!-- <i class="fa fa-sign-in"></i> -->
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  LOGOUT
                </p>
              </a>
            </li>
          <?php }else{ ?>
            <li class="nav-item">
              <a href="<?php echo site_url("Welcome/login"); ?>" class="nav-link">
                <!-- <i class="fa fa-sign-in"></i> -->
                <i class="nav-icon fas fa-sign-in-alt"></i>
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <p>
                  LOGIN
                </p>
              </a>
            </li>
          <?php } ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  

