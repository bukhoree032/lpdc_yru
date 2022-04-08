
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
                           <?php echo $o_manage_parish['all_parish'] ;?> ตำบล <?php echo $o_manage_parish['all_district'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #17a2b8; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">ปี <?php echo $o_manage_dashboard['year62'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['all_num62'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['all_parish62'] ;?> ตำบล  <?php echo $o_manage_parish['all_district62'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                  <div class="col-md-6 col-sm-6 col-12 evaluate">
                     <div class="info-box" style="background-color: #19b1c9; color: #fff">
                        <div class="info-box-content">
                           <span class="info-box-text">ปี <?php echo $o_manage_dashboard['year63'] ;?></span>
                           <span class="info-box-number"><?php echo $o_manage_dashboard['all_num63'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['all_parish63'] ;?> ตำบล  <?php echo $o_manage_parish['all_district63'] ;?> อำเภอ
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
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
                           <?php echo $o_manage_parish['nara_parish'] ;?> ตำบล  <?php echo $o_manage_parish['nara_district'] ;?> อำเภอ
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
                           <?php echo $o_manage_parish['nara_parish62'] ;?> ตำบล  <?php echo $o_manage_parish['nara_district62'] ;?> อำเภอ
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
                           <span class="info-box-number"><?php echo $o_manage_dashboard['nara_num63'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['nara_parish63'] ;?> ตำบล  <?php echo $o_manage_parish['nara_district63'] ;?> อำเภอ
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
                           <?php echo $o_manage_parish['yala_parish'] ;?> ตำบล  <?php echo $o_manage_parish['yala_district'] ;?> อำเภอ
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
                           <?php echo $o_manage_parish['yala_parish62'] ;?> ตำบล  <?php echo $o_manage_parish['yala_district62'] ;?> อำเภอ
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
                           <span class="info-box-number"><?php echo $o_manage_dashboard['yala_num63'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['yala_parish63'] ;?> ตำบล  <?php echo $o_manage_parish['yala_district63'] ;?> อำเภอ
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
                           <?php echo $o_manage_parish['pat_parish'] ;?> ตำบล  <?php echo $o_manage_parish['pat_district'] ;?> อำเภอ
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
                           <?php echo $o_manage_parish['pat_parish62'] ;?> ตำบล  <?php echo $o_manage_parish['pat_district62'] ;?> อำเภอ
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
                           <span class="info-box-number"><?php echo $o_manage_dashboard['pat_num63'] ;?> กลุ่ม</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description" >
                           <?php echo $o_manage_parish['pat_parish63'] ;?> ตำบล  <?php echo $o_manage_parish['pat_district63'] ;?> อำเภอ
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
            <?php if ($this->session->userdata('otop_search_year')) {
              $session_year = $this->session->userdata('otop_search_year');
            }else{
              foreach ($manage_year['cal'] as $cal) {
                $session_year = $cal->o_row_budget;
              }
            }
            $new_year = $session_year-1;
            ?>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ประเมินกลุ่ม OTOP ปี <?php echo $new_year ?></h3>
              </div>
                <div class="card-header">
                  <div class="row">
                    <!-- <div class="col-sm-2">
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/"); ?>'">< ยอนกลับ</button>
                    </div> -->
                    <div class="col-sm-2">
                        <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
                    </div>
                  </div>
                </div>
              <!-- ---------------------------------ค้นหา------------------------- -->
              <div class="card-header">
                <form action="<?php echo site_url("Otop_c/Manage_otop_c/otop_search/"); ?>" method="post"enctype="multipart/form-data">
                  <div class="row">
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
                    <!-- <th style="width: 9%">รายได้ต่อเดือน</th> -->
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
                    foreach ($otop_rate as $otop_data) {
                      // if ($otop_data->o_s_status == '1') {
                        $o ++;
                        $o_group_name = $otop_data->o_group_name;
                        $num_o_name = iconv_substr($o_group_name,40,41,'UTF-8');
                        if (!$num_o_name) {
                          $new_o_name = $o_group_name;
                        }else{
                          $new_name = iconv_substr($o_group_name,0,40,'UTF-8');
                          $new_o_name = $new_name."...";
                        }
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
                          <td title="<?php foreach ($off_selecgoalANDpro['s_pro'] as $s_pro ) {
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
                                  $num_o_name = iconv_substr($o_operation,17,18,'UTF-8');
                                  if (!$num_o_name) {
                                    $new_o_operation = $o_operation;
                                  }else{
                                    $new_name = iconv_substr($o_operation,0,17,'UTF-8');
                                    $new_o_operation = $new_name."...";
                                  }
                                  ?> - <?php echo $new_o_operation;?> <br> <?php
                                }
                              }
                              ?>
                            <?php } ?>
                          </td>
                          <!-- <td title="<?php echo $otop_data->o_monthly_income; ?>"><?php echo $otop_data->o_monthly_income; ?></td> -->
                          <td><?php echo $otop_data->o_tel; ?></td>
                          <td>
                            <?php if ($otop_data->o_latitude != "" && $otop_data->o_latitude != "-") { ?>
                              <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='http://www.google.com/maps/place/<?php echo $otop_data->o_latitude; ?>,<?php echo $otop_data->o_longitude; ?>'">นำทาง</button>
                            <?php }else{ ?>
                              <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_location/".$otop_data->o_id); ?>'">ปักหมุด</button>
                            <?php } ?>
                          </td>
                          <?php if (!$this->session->userdata('login') == '') { ?>
                            <td>
                              <div class="row">
                                <div class="col-sm-6">
                                  <button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#modal-default<?php echo $otop_data->o_s_id ?>">ประเมิน</button>
                                </div>
                                <!-- ------------------------model------------------------ -->

                                <form action="<?php echo site_url("Otop_c/Manage_otop_c/otop_insert_rate/".$otop_data->o_s_id); ?>" method="post"enctype="multipart/form-data">
                                  <div class="modal fade" id="modal-default<?php echo $otop_data->o_s_id ?>">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">ประเมินกลุ่ม</h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="col-sm-12" style="margin-top: 10px">
                                            <label>พัฒนาต่อในปีงบประมาน</label>
                                            <div class="row">
                                              <div class="col-sm-3">
                                                <select class="form-control" name="year">
                                                  <?php $date_time = $session_year;?>
                                                  <option value="<?php echo $date_time ?>" selected="selected"><?php echo $date_time ?></option>
                                                  <option value="<?php echo $date_time + '1' ?>"><?php echo $date_time + '1' ?></option>
                                                  <option value="<?php echo $date_time + '0' ?>"><?php echo $date_time + '0' ?></option>
                                                  <option value="<?php echo $date_time + '-1' ?>"><?php echo $date_time + '-1' ?></option>
                                                  <option value="<?php echo $date_time + '-2' ?>"><?php echo $date_time + '-2' ?></option>
                                                </select>
                                              </div>
                                              <div class="col-sm-4">
                                                <div class="" style="margin-top: 10px">
                                                
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12" style="margin-top: 10px">
                                            <div class="form-group">
                                              <label>การดำเนินงาน</label>
                                              <select class="select2" multiple="multiple" name="goal[]" data-placeholder="เลือกการดำเนินงาน" style="width: 100%;">
                                                <?php foreach ($goalANDpro["goal"] as $goal) { ?>
                                                  <option value="<?php echo $goal->o_g_id; ?>"><?php echo $goal->o_g_name; ?></option> 
                                                <?php } ?>
                                              </select>
                                            </div>
                                            <!-- /.form-group -->
                                            <div class="form-group">
                                              <label>ผลิตภัณฑ์</label>
                                              <select class="select2" multiple="multiple" name="product[]" data-placeholder="เลือกผลิตภัณฑ์" style="width: 100%;">
                                                <?php foreach ($goalANDpro["pro"] as $pro) { ?>
                                                  <option value="<?php echo $pro->o_p_id; ?>"><?php echo $pro->o_p_name; ?></option> 
                                                <?php } ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">

                                          <div class="col-md-12">
                                              <button type="submit" class="btn btn-primary" >บันทึก</button>
                                              <button type="button" class="btn btn-danger"data-dismiss="modal">ภายหลัง</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                                <!-- ------------------------/model------------------------ -->
                                <div class="col-sm-6">
                                  <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Otop_c/Manage_otop_c/otop_rate_detail/".$otop_data->o_s_id); ?>'"><i class="far fa-eye"></i></button>
                                </div>
                              </div>
                            </td>
                          <?php }else{
                          }
                      }
                    // } ?>
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
<script src="<?php echo base_url('/lpdc_admin/') ?>plugins/select2/js/select2.full.min.js"></script>
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
</script>ง
<script>
         $('.extra-fields-customer').click(function() {
         $('.customer_records').clone().appendTo('.customer_records_dynamic');
         $('.customer_records_dynamic .customer_records').addClass('single remove');
         $('.single .extra-fields-customer').remove();
         $('.single').append('<a href="#" class="remove-field btn-remove-customer">ลบ</a>');
         $('.customer_records_dynamic > .single').attr("class", "remove");
         
         $('.customer_records_dynamic input').each(function() {
           var count = 0;
           var fieldname = $(this).attr("name");
           $(this).attr('name', fieldname + count);
           count++;
         });
         
         });
         
         $(document).on('click', '.remove-field', function(e) {
         $(this).parent('.remove').remove();
         e.preventDefault();
         });
      </script>
      <script>
         $('.extra-fields-customer1').click(function() {
         $('.customer_records1').clone().appendTo('.customer_records_dynamic1');
         $('.customer_records_dynamic1 .customer_records1').addClass('single remove1');
         $('.single .extra-fields-customer1').remove();
         $('.single').append('<a href="#" class="remove-field btn-remove-customer">ลบ</a>');
         $('.customer_records_dynamic1 > .single').attr("class", "remove");
         
         $('.customer_records_dynamic1 input').each(function() {
           var count = 0;
           var fieldname = $(this).attr("name");
           $(this).attr('name', fieldname + count);
           count++;
         });
         
         });
         
         $(document).on('click', '.remove-field', function(e) {
         $(this).parent('.remove').remove();
         e.preventDefault();
         });
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
