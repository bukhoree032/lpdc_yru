
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="alert alert-teal alert-dismissible bg-teal ">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-exclamation-triangle"></i> สัญลักษณ์</h5>
            <i class="far fa-calendar-check"></i> ผ่านการประเมิน , <i class="far fa-calendar-times"></i> ไม่ผ่านการประเมิน , <i class="far fa-calendar"></i> ยังไม่ประเมิน
          </div>
          <!-- --------------------------รายงาน------------------------ -->
          <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
             <div class="row">
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #26cae4; color: #fff">
                      <span class="info-box-icon"><?php echo $manage_dashboard['all_num'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">ครัวเรือนยากจนทั้งหมด ปี <?php echo $manage_dashboard['year63'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['all_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                         <i class="far fa-calendar-check"></i> <?php echo $manage_dashboard['all_pass'] ;?> คน / <i class="far fa-calendar-times"></i> <?php echo $manage_dashboard['all_notpass'] ;?> คน / <i class="far fa-calendar"></i> <?php echo $manage_dashboard['all_wait'] ;?> คน 
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                   <!-- /.info-box -->
                </div>
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #26cae4; color: #fff">
                      <span class="info-box-icon"><?php echo $manage_dashboard['all_num62'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">ครัวเรือนยากจนทั้งหมด ปี <?php echo $manage_dashboard['year62'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['all_num62'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                         <i class="far fa-calendar-check"></i> <?php echo $manage_dashboard['all_pass62'] ;?> คน / <i class="far fa-calendar-times"></i> <?php echo $manage_dashboard['all_notpass62'] ;?> คน / <i class="far fa-calendar"></i> <?php echo $manage_dashboard['all_wait62'] ;?> คน 
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
                      <span class="info-box-icon"><?php echo $manage_dashboard['nara_num'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">นราธิวาส ปี <?php echo $manage_dashboard['year62'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['nara_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                         <i class="far fa-calendar-check"></i> <?php echo $manage_dashboard['nara_pass'] ;?> คน / <i class="far fa-calendar-times"></i> <?php echo $manage_dashboard['nara_notpass'] ;?> คน / <i class="far fa-calendar"></i> <?php echo $manage_dashboard['nara_wait'] ;?> คน 
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                   <!-- /.info-box -->
                </div>
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #3ad05c; color: #fff">
                      <span class="info-box-icon"><?php echo $manage_dashboard['nara_num62'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">นราธิวาส ปี <?php echo $manage_dashboard['year62'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['nara_num62'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                         <i class="far fa-calendar-check"></i> <?php echo $manage_dashboard['nara_pass62'] ;?> คน / <i class="far fa-calendar-times"></i> <?php echo $manage_dashboard['nara_notpass62'] ;?> คน / <i class="far fa-calendar"></i> <?php echo $manage_dashboard['nara_wait62'] ;?> คน 
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
                      <span class="info-box-icon" style="color: #fff"><?php echo $manage_dashboard['yala_num'] ;?></span>
                      <div class="info-box-content" style="color: #fff">
                         <span class="info-box-text">ยะลา ปี <?php echo $manage_dashboard['year63'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['yala_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                         <i class="far fa-calendar-check"></i> <?php echo $manage_dashboard['yala_pass'] ;?> คน / <i class="far fa-calendar-times"></i> <?php echo $manage_dashboard['yala_notpass'] ;?> คน / <i class="far fa-calendar"></i> <?php echo $manage_dashboard['yala_wait'] ;?> คน 
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                   <!-- /.info-box -->
                </div>
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #ffc107; color: #fff">
                      <span class="info-box-icon" style="color: #fff"><?php echo $manage_dashboard['yala_num62'] ;?></i></span>
                      <div class="info-box-content" style="color: #fff">
                         <span class="info-box-text">ยะลา ปี <?php echo $manage_dashboard['year62'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['yala_num62'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                         <i class="far fa-calendar-check"></i> <?php echo $manage_dashboard['yala_pass62'] ;?> คน / <i class="far fa-calendar-times"></i> <?php echo $manage_dashboard['yala_notpass62'] ;?> คน / <i class="far fa-calendar"></i> <?php echo $manage_dashboard['yala_wait62'] ;?> คน 
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
                      <span class="info-box-icon"><?php echo $manage_dashboard['pat_num'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">ปัตตานี ปี <?php echo $manage_dashboard['year63'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['pat_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                         <i class="far fa-calendar-check"></i> <?php echo $manage_dashboard['pat_pass'] ;?> คน / <i class="far fa-calendar-times"></i> <?php echo $manage_dashboard['pat_notpass'] ;?> คน / <i class="far fa-calendar"></i> <?php echo $manage_dashboard['pat_wait'] ;?> คน 
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                   <!-- /.info-box -->
                </div>
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #7f8991; color: #fff">
                      <span class="info-box-icon"><?php echo $manage_dashboard['pat_num62'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">ปัตตานี ปี <?php echo $manage_dashboard['year62'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['pat_num62'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                         <i class="far fa-calendar-check"></i> <?php echo $manage_dashboard['pat_pass62'] ;?> คน / <i class="far fa-calendar-times"></i> <?php echo $manage_dashboard['pat_notpass62'] ;?> คน / <i class="far fa-calendar"></i> <?php echo $manage_dashboard['pat_wait62'] ;?> คน 
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
                <h3 class="card-title">ข้อมูลครัวเรือนยากจน</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?php echo site_url("Household_c/Evaluate_c/eva_search/"); ?>" method="post"enctype="multipart/form-data">
                  <div class="card-header">
                    <div class="row">
                      <div class="col-sm-1">
                        <select class="form-control select2bs4" name="s_year" style="width: 100%;">
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
                        <!-- ------------------------model------------------------ -->
                        
                        <div class="col-sm-2">
                          <select class="form-control select2bs4" name="s_pro" style="width: 100%;">
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
                          <select class="form-control select2bs4" name="s_paris" style="width: 100%;">
                          <?php if ($this->session->userdata('househole_search_paris')) {
                            $session_paris = $this->session->userdata('househole_search_paris'); ?>
                              <?php foreach ($manage_paris as $paris) { 
                                if ($session_paris == $paris->h_parish) {?>
                                  <option value="<?php echo $paris->h_parish; ?>"><?php echo $paris->h_parish; ?></option>
                                  <option value="">ทุกตำบล</option>
                                <?php }
                              } ?>
                          <?php }else{ ?>
                           <option value="" selected="selected">-- ตำบล --</option>
                          <?php } ?>
                          <?php foreach ($manage_paris as $paris) { ?>
                            <option value="<?php echo $paris->h_parish; ?>"><?php echo $paris->h_parish; ?></option>
                          <?php } ?>
                        </select>
                        </div>

                        <div class="col-sm-2">
                          <select class="form-control select2bs4" name="s_acti" style="width: 100%;">
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
                      <div class="col-sm-1">
                        <button type="submit" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-default" style="width: 100%">ค้นหา</button>
                      </div>
                      
                      <!-- <div class="col-sm-4"></div> -->
                    </div>
                    <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
                  </div>
                </form>
                <br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 5%">ลำดับ</th>
                    <th style="width: 15%">ชื่อ-สกุล</th>
                    <th style="width: 25%">ที่อยู่</th>
                    <th style="width: 10%">ความพร้อม</th>
                    <th style="width: 10%">เบอร์โทร</th>
                    <th style="width: 7%">นำทาง</th>
                    <?php if (!$this->session->userdata('login') == '') { ?>
                      <th style="width: 7%">ประเมิณ</th>
                      <th style="width: 13%">จัดการ</th>
                    <?php }else{

                    } ?>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $i = "1" ;  
                      foreach ($househole as $hous) { ?>
                      <tr>
                        <td><?php echo $i ++; ?></td>
                        <td><?php echo $hous->h_title; ?><?php echo $hous->h_name; ?> <?php echo $hous->h_surname; ?></td>  
                        <td>บ้านเลขที่ <?php echo $hous->h_house_number; ?> ม.<?php echo $hous->h_swine; ?> ต.<?php echo $hous->h_parish; ?> อ.<?php echo $hous->h_district; ?> จ.<?php echo $hous->name_th; ?></td>

                        <td><?php echo $hous->ac_initials; ?></td>
                        <td><?php echo $hous->h_tel; ?></td>
                        <td>
                          <?php if ($hous->h_latitude) { ?>
                            <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='http://www.google.com/maps/place/<?php echo $hous->h_latitude; ?>,<?php echo $hous->h_longitude; ?>'">นำทาง</button>
                          <?php }else{ ?>
                            <button type="button" class="btn btn-block btn-danger btn-xs" onclick="window.location='#'">ไม่มีข้อมูลนำทาง</button>
                          <?php } ?>
                          
                        </td>
                        <?php if (!$this->session->userdata('login') == '') { ?>
                          <td>
                            <!-- <div class="">
                              <center><button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#myModal<?php echo $hous->h_id; ?>" style="width: 100%">ประเมิน</button></center>
                            </div> -->
                            <div class="">
                              <center><button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#exampleModalCenter<?php echo $hous->h_id; ?>" style="width: 100%">ประเมิน</button></center>
                            </div>


                            
                          </td>

                          <td>
                            <div class="row">
                              <div class="col-sm-6">
                                <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/eva_add/".$hous->h_id); ?>'">ข้อมูลเพิ่มเติม</button>
                              </div>
                              <div class="col-sm-6">
                                <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/eva_detail/".$hous->h_id); ?>'"><i class="far fa-eye"></i></button>
                              </div>
                            </div>
                          </td>


                          <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter<?php echo $hous->h_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle<?php echo $hous->h_id; ?>"aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <center>
                                      <h5 class="modal-title" id="exampleModalCenterTitle">แบบฟอร์มการประเมิน</h5>
                                    </center>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-6">
                                        <center>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-target="#myModal<?php echo $hous->h_id; ?>" style="padding-left: 50px; padding-right: 50px; ">ประเมินความพร้อม</button>
                                        </center>
                                      </div>
                                      <div class="col-md-6">
                                        <?php if ($hous->e_y_user_id == '' ) {?>
                                          <button type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/eva_h_year/".$hous->h_id); ?>'" style="padding-left: 60px; padding-right: 60px; ">ประเมินประจำปี </button>
                                        <?php }else{ ?>
                                          <button type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url("Household_c/Evaluate_c/eva_detail_year/".$hous->h_id); ?>'" style="padding-left: 60px; padding-right: 60px; ">ดูข้อมูลประเมิน</button>
                                        <?php } ?>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <br>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <!-- ------------------ modal ------------------- -->
                              <!-- The Modal -->
                              <div class="modal" id="myModal<?php echo $hous->h_id; ?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                  
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                      <h4 class="modal-title">ประเมินความเหมาะสม</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form action="<?php echo site_url("Household_c/Evaluate_c/eva_update/"); ?>" method="post"enctype="multipart/form-data">
                                      <!-- Modal body -->
                                      <div class="modal-body">
                                            <input id="" type="hidden" name="h_id" value="<?php echo $hous->h_id; ?>">
                                            <p>ประเมิน</p>
                                            <?php if ($hous->h_status_past == '1') { ?>
                                              <input type="radio" id="male" name="gender" value="1" checked> &nbsp;ผ่าน
                                              <input type="radio" id="female" name="gender" value="2" style="margin-left: 2%"> &nbsp;ไม่ผ่าน 
                                            <?php }else if ($hous->h_status_past == '2') { ?>
                                              <input type="radio" id="male" name="gender" value="1" > &nbsp;ผ่าน
                                              <input type="radio" id="female" name="gender" value="2" style="margin-left: 2%" checked> &nbsp;ไม่ผ่าน 
                                            <?php }else{ ?>
                                              <input type="radio" id="male" name="gender" value="1" > &nbsp;ผ่าน
                                              <input type="radio" id="female" name="gender" value="2" style="margin-left: 2%"> &nbsp;ไม่ผ่าน 
                                            <?php } ?>
                                            <br>
                                            <div class="form-group" style="margin-top: 1%">
                                              <p>อาชีพเสริม</p>
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <select class="form-control" name="occupation" id="sel1">
                                                    <option selected="selected" value="<?php echo $hous->ac_id; ?>"><?php echo $hous->ac_initials; ?></option>
                                                    <?php foreach ($activity_hold as $ac_hold) { ?>
                                                          <option value="<?php echo $ac_hold->ac_id; ?>"><?php echo $ac_hold->ac_initials; ?></option>
                                                    <?php } ?>
                                                  </select>
                                                </div>
                                                <div class="col-md-9"></div>
                                              </div>
                                            </div>
                                            <div class="form-group" style="margin-top: 1%">
                                              <p>เหตุผล</p>
                                              <div class="row">
                                                <div class="col-md-12">
                                                  <textarea class="form-control" name="annotition" rows="4" id="comment"><?php echo $hous->h_annotition; ?></textarea>
                                                </div>
                                                <div class="col-md-2">
                                                </div>
                                              </div>
                                            </div>
                                      </div>
                                      <!-- Modal footer -->
                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;  </button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            <!-- ----------------- /modal ------------------- -->
                        <?php }else{

                        } ?>
                        
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

<script>
var x=document.getElementById("demo");
function getLocation()
  {  if (navigator.geolocation)    {    navigator.geolocation.getCurrentPosition(showPosition);   }
  else{x.innerHTML="Geolocation is not supported by this browser.";}  }function showPosition(position)
  {  x.innerHTML="ละติจูด: " + position.coords.latitude +   "<br>ลองติจูด: " + position.coords.longitude;  
 var lat = position.coords.latitude;
 var long = position.coords.longitude;
  console.log(lat,long);

    // var name       =  lat ; 
    //         var last_name  = lon;          
    //         $.ajax({
    //           type: "POST",
    //           url: "save/save-map.php",
    //           data: {
    //             name: name, 
    //             last_name: last_name
    //           },
    //           success: function (data) {
    //             alert(asdasd);
                
    //           }
      }
 
</script>

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
