
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
        <div class="row">
            <div class="col-12">
            <!-- --------------------------รายงาน------------------------ -->
            <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
               <div class="row">
                  <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #26cae4; color: #fff">
                        <span class="info-box-icon"><i class="far fa-address-book"></i></span>
                        <div class="info-box-content">
                           <span class="info-box-text">กลุ่ม OTOP ทั้งหมด</span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['all_num'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                           <?php echo $o_manage_parish['all_parish'] ;?> ตำบล <?php echo $o_manage_parish['all_district'] ;?> อำเภอ <?php echo $o_manage_parish['all_moo'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #17a2b8; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">กลุ่ม OTOP ปี <?php echo $o_manage_dashboard['year62'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['all_num62'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['all_parish62'] ;?> ตำบล  <?php echo $o_manage_parish['all_district62'] ;?> อำเภอ <?php echo $o_manage_parish['all_moo62'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #19b1c9; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">กลุ่ม OTOP ปี <?php echo $o_manage_dashboard['year63'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['all_num'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['all_parish'] ;?> ตำบล  <?php echo $o_manage_parish['all_district'] ;?> อำเภอ <?php echo $o_manage_parish['all_moo'] ;?> หมู่บ้าน
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.col -->
           <div class="col-md-3 col-sm-6 col-12">
               <div class="row">
                  <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #3ad05c; color: #fff">
                        <span class="info-box-icon"><i class="far fa-address-card"></i></span>
                        <div class="info-box-content">
                           <span class="info-box-text">นราธิวาส</span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['nara_num'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                           <?php echo $o_manage_parish['nara_parish'] ;?> ตำบล  <?php echo $o_manage_parish['nara_district'] ;?> อำเภอ <?php echo $o_manage_parish['nara_moo'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #28a745; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">ปี <?php echo $o_manage_dashboard['year62'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['nara_num62'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['nara_parish62'] ;?> ตำบล  <?php echo $o_manage_parish['nara_district62'] ;?> อำเภอ <?php echo $o_manage_parish['nara_moo62'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #2cb74c; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">ปี <?php echo $o_manage_dashboard['year63'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['nara_num'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['nara_parish'] ;?> ตำบล  <?php echo $o_manage_parish['nara_district'] ;?> อำเภอ <?php echo $o_manage_parish['nara_moo'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
               </div>
            </div>
            <!-- /.col -->
            <!-- /.col -->
           <div class="col-md-3 col-sm-6 col-12">
               <div class="row">
                  <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #ffc107; color: #fff">
                        <span class="info-box-icon" style="color: #fff"><i class="far fa-address-card"></i></span>
                        <div class="info-box-content" style="color: #fff">
                           <span class="info-box-text">ยะลา</span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['yala_num'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                           <?php echo $o_manage_parish['yala_parish'] ;?> ตำบล  <?php echo $o_manage_parish['yala_district'] ;?> อำเภอ <?php echo $o_manage_parish['yala_moo'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #cb9800; color: #fff">
                        <div class="info-box-content" style="color: #fff">
                           <span class="info-box-text">ปี <?php echo $o_manage_dashboard['year62'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['yala_num62'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['yala_parish62'] ;?> ตำบล  <?php echo $o_manage_parish['yala_district62'] ;?> อำเภอ <?php echo $o_manage_parish['yala_moo62'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #f2b600; color: #fff">
                        <div class="info-box-content" style="color: #fff">
                           <span class="info-box-text">ปี <?php echo $o_manage_dashboard['year63'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['yala_num'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['yala_parish'] ;?> ตำบล  <?php echo $o_manage_parish['yala_district'] ;?> อำเภอ <?php echo $o_manage_parish['yala_moo'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
               <div class="row">
                  <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #7f8991; color: #fff">
                        <span class="info-box-icon"><i class="far fa-address-card"></i></span>
                        <div class="info-box-content">
                           <span class="info-box-text">ปัตตานี</span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['pat_num'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                           <?php echo $o_manage_parish['pat_parish'] ;?> ตำบล  <?php echo $o_manage_parish['pat_district'] ;?> อำเภอ <?php echo $o_manage_parish['pat_moo'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #636b72; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">ปี <?php echo $o_manage_dashboard['year62'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['pat_num62'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['pat_parish62'] ;?> ตำบล  <?php echo $o_manage_parish['pat_district62'] ;?> อำเภอ <?php echo $o_manage_parish['pat_moo62'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #757f88; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">ปี <?php echo $o_manage_dashboard['year63'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['pat_num'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['pat_parish'] ;?> ตำบล  <?php echo $o_manage_parish['pat_district'] ;?> อำเภอ <?php echo $o_manage_parish['pat_moo'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
               </div>
            </div>
          </div> 
          <!-- ----------------------------/รายงาน---------------------------- -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ข้อมูลกลุ่ม OTOP</h3>
              </div>
                <?php if (!$this->session->userdata('login') == '') { ?>
                  <div class="card-header">
                    <div class="row">
                      <div class="col-sm-2">
                        <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_add"); ?>'">+ เพิ่มรายชื่อกลุ่ม</button>
                      </div>
                      <div class="col-sm-2">

                        <?php if ($this->session->userdata('otop_search_year')) {
                          $session_year = $this->session->userdata('otop_search_year');
                        }else{
                          foreach ($manage_year['cal'] as $cal) {
                            $session_year = $cal->o_row_budget;
                          }
                        }
                        $new_year = $session_year-1;
                        ?>
                        <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_rate/".$new_year); ?>'">ประเมินกลุ่มปี <?php echo $new_year; ?></button>
                      </div>

                    </div>
                  </div>
                <?php }else{
                  
                } ?>
              <!-- ---------------------------------ค้นหา------------------------- -->
              <div class="card-header">
                <form action="<?php echo site_url("Otop_c/Manage_otop_c/otop_search/"); ?>" method="post"enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_year" style="width: 100%;">
                           <!-- <?php foreach ($manage_year['cal'] as $cal) { ?>
                            <option value="<?php echo $cal->o_row_budget; ?>" selected="selected"><?php echo $cal->o_row_budget; ?></option>
                          <?php } ?> -->

                          <?php if ($this->session->userdata('otop_search_year')) {
                            $session_year = $this->session->userdata('otop_search_year'); ?>
                            <option value="<?php echo $session_year; ?>" selected="selected"><?php echo $session_year; ?></option>
                            <option value="">ทุกปีงบประมาณ</option>
                          <?php }else{ ?> 
                            <?php foreach ($manage_year['cal'] as $cal) { ?>
                              <option value="<?php echo $cal->o_row_budget; ?>" selected="selected"><?php echo $cal->o_row_budget; ?></option>
                            <?php } ?>
                          <?php } ?>
                          <?php foreach ($manage_year['year'] as $year) { ?>
                            <option value="<?php echo $year->o_row_budget; ?>" ><?php echo $year->o_row_budget; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_pro" style="width: 100%;">
                          <?php if ($this->session->userdata('otop_search_pro')) { 
                            $session_pro = $this->session->userdata('otop_search_pro'); ?>
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
                    <th style="width: 5%">ลำดับ</th>
                    <th style="width: 10%">ชื่อกลุ่ม</th>
                    <th style="width: 15%">ที่อยู่</th>
                    <th style="width: 10%">ดำเนินงาน</th>
                    <th style="width: 10%">ผลิตภัณฑ์</th>
                    <th style="width: 9%">รายได้ต่อเดือน</th>
                    <th style="width: 7%">เบอร์โทร</th>
                    <th style="width: 6%">นำทาง</th>
                    <?php if (!$this->session->userdata('login') == '') { ?>
                      <th style="width: 10%">จัดการ</th>
                    <?php }else{

                    } ?>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $o = 0;
                    foreach ($otop as $otop_data) {
                      if ($otop_data->o_s_status == '0') {
                        $o ++;
                        $o_group_name = $otop_data->o_group_name;
                        $num_o_name = iconv_substr($o_group_name,40,41,'UTF-8');
                        if (!$num_o_name) {
                          $new_o_name = $o_group_name;
                        }else{
                          $new_name = iconv_substr($o_group_name,0,40,'UTF-8');
                          $new_o_name = $new_name."...";
                        }

                        // $o_operation = $otop_data->o_operation;
                        // $num_o_name = iconv_substr($o_operation,40,41,'UTF-8');
                        // if (!$num_o_name) {
                        //   $new_o_operation = $o_operation;
                        // }else{
                        //   $new_name = iconv_substr($o_operation,0,40,'UTF-8');
                        //   $new_o_operation = $new_name."...";
                        // }
                        ?>

                        <tr>
                          <td><?php echo $o; ?></td>
                          <td title="<?php echo $o_group_name; ?>"><?php echo $new_o_name; ?></td>
                          <td>บ้านเลขที่ <?php echo $otop_data->o_house_number; ?> บ้าน.<?php echo $otop_data->o_village; ?> ม.<?php echo $otop_data->o_swine; ?> ต.<?php echo $otop_data->o_parish; ?> อ.<?php echo $otop_data->o_district; ?> จ.<?php echo $otop_data->name_th; ?></td>
                          <td title='<?php foreach ($off_selecgoalANDpro['s_goal'] as $s_goal ) {
                                        if ($otop_data->o_s_otop == $s_goal->o_s_g_id_otop) {
                                          if ($s_goal->o_s_g_row_budget == $otop_data->o_s_row_budget) {
                                            ?> - <?php echo $s_goal->o_g_name;
                                          }
                                        }
                                      } ?>'>
                            <?php foreach ($off_selecgoalANDpro['s_goal'] as $s_goal ) {
                              if ($otop_data->o_s_otop == $s_goal->o_s_g_id_otop) {
                                if ($s_goal->o_s_g_row_budget == $otop_data->o_s_row_budget) {
                                  $o_operation = $s_goal->o_g_name;
                                  $num_o_name = iconv_substr($o_operation,15,16,'UTF-8');
                                  if (!$num_o_name) {
                                    $new_o_operation = $o_operation;
                                  }else{
                                    $new_name = iconv_substr($o_operation,0,15,'UTF-8');
                                    $new_o_operation = $new_name."...";
                                  }
                                  ?> - <?php echo $new_o_operation;?> <br> <?php
                                }
                              }
                              ?>
                            <?php } ?>
                          </td>
                          <td><?php echo $otop_data->o_product; ?></td>
                          <!-- <td title="<?php foreach ($off_selecgoalANDpro['s_pro'] as $s_pro ) {
                                        if ($otop_data->o_s_otop == $s_pro->o_s_p_id_otop) {
                                          if ($s_pro->o_s_p_row_budget == $otop_data->o_s_row_budget) {
                                            ?> - <?php echo $s_pro->o_p_name;
                                          }
                                        }
                                      } ?>">
                            <?php foreach ($off_selecgoalANDpro['s_pro'] as $s_pro ) {
                              if ($otop_data->o_s_otop == $s_pro->o_s_p_id_otop) {
                                if ($s_pro->o_s_p_row_budget == $otop_data->o_s_row_budget) {
                                  $o_operation = $s_pro->o_p_name;
                                  $num_o_name = iconv_substr($o_operation,15,16,'UTF-8');
                                  if (!$num_o_name) {
                                    $new_o_operation = $o_operation;
                                  }else{
                                    $new_name = iconv_substr($o_operation,0,15,'UTF-8');
                                    $new_o_operation = $new_name."...";
                                  }
                                  ?> - <?php echo $new_o_operation;?> <br> <?php
                                }
                              }
                              ?>
                            <?php } ?>
                          </td> -->
                          <?php if ($otop_data->o_monthly_income == '' OR $otop_data->o_monthly_income == '0') { ?>
                            <td title=""></td>
                          <?php }else if ($otop_data->o_to_monthly_income == '' OR $otop_data->o_to_monthly_income == '0') { ?>
                            <td title="<?php echo $otop_data->o_monthly_income; ?>"><?php echo $otop_data->o_monthly_income; ?></td>
                          <?php }else{ ?>
                            <td title="<?php echo $otop_data->o_monthly_income; ?> - <?php echo $otop_data->o_to_monthly_income; ?>"><?php echo $otop_data->o_monthly_income; ?> - <?php echo $otop_data->o_to_monthly_income; ?></td>
                          <?php } ?>
                          
                          <td><?php echo $otop_data->o_tel; ?></td>
                          


                          <?php if (!$this->session->userdata('login') == '') { ?>
                            <td>
                              <?php if ($otop_data->o_latitude != "" && $otop_data->o_latitude != "-") { ?>
                                <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='http://www.google.com/maps/place/<?php echo $otop_data->o_latitude; ?>,<?php echo $otop_data->o_longitude; ?>'">นำทาง</button>
                              <?php }else{ ?>
                                <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_location/".$otop_data->o_id); ?>'">ปักหมุด</button>
                              <?php } ?>
                            </td>
                            <td>
                              <div class="row">
                                <?php $row_status = 0; 
                                  foreach ($otop as $otop1) {
                                    if ($otop1->o_s_status == '1') {
                                      if ($otop1->o_s_otop == $otop_data->o_s_otop) {
                                        if ($row_status == '0') {?>
                                          <div class="col-sm-4">
                                              <button type="button" class="btn btn-block btn-danger btn-xs" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_detail/".$otop_data->o_s_id); ?>'">ดูติดตาม</button>
                                          </div>
                                        <?php $row_status ++;
                                        }
                                      }
                                    }
                                  }
                                  if ($row_status == '0') { ?>
                                    <div class="col-sm-4">
                                      <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_trace/".$otop_data->o_s_id); ?>'">ติดตาม</button>
                                    </div>
                                <?php } ?>
                                
                                <div class="col-sm-4">
                                  <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_edit/".$otop_data->o_id); ?>'"><i class="fas fa-edit"></i></button>
                                </div>
                                <div class="col-sm-4">
                                  <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_detail/".$otop_data->o_s_id); ?>'"><i class="far fa-eye"></i></button>
                                </div>
                              </div>
                            </td>
                          <?php }else{?>
                            <td>
                              <?php if ($otop_data->o_latitude != "" && $otop_data->o_latitude != "-") { ?>
                                <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='http://www.google.com/maps/place/<?php echo $otop_data->o_latitude; ?>,<?php echo $otop_data->o_longitude; ?>'">นำทาง</button>
                              <?php }else{ ?>
                                <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='#'">ไม่มีข้อมูลนำทาง</button>
                              <?php } ?>
                            </td>
                          <?php }
                      }
                    } ?>
                      </tr>
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
