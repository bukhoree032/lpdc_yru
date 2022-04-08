
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
                     <div class="info-box" style="background-color: #26cae4; color: #fff; cursor: pointer;"  onClick="window.location='<?php echo site_url("Household_c/Manage_c/dashbordMoo/"); ?>';">
                      <span class="info-box-icon"><?php echo $manage_dashboard['all_num'] ;?></span>
                      <div class="info-box-content">
                        <span class="info-box-text">ครัวเรือนยากจนทั้งหมด ปี <?php echo $manage_dashboard['year63'] ;?></span>
                        <span class="info-box-number"><?php echo $manage_dashboard['all_num'] ;?> ครัวเรือน</span>
                        <div class="progress">
                          <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                              <?php echo $manage_dashboard['all_parish'] ;?> ตำบล  <?php echo $manage_dashboard['all_district'] ;?> อำเภอ <?php echo $manage_dashboard['all_moo'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                   <!-- /.info-box -->
                </div>
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #26cae4; color: #fff; cursor: pointer;"  onClick="window.location='<?php echo site_url("Household_c/Manage_c/dashbordMoo/"); ?>';">
                      <span class="info-box-icon"><?php echo $manage_dashboard['all_num62'] ;?></i></span>
                      <div class="info-box-content">
                        <span class="info-box-text">ครัวเรือนยากจนทั้งหมด ปี <?php echo $manage_dashboard['year62'] ;?></span>
                        <span class="info-box-number"><?php echo $manage_dashboard['all_num62'] ;?> ครัวเรือน</span>
                        <div class="progress">
                          <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                              <?php echo $manage_dashboard['all_parish62'] ;?> ตำบล  <?php echo $manage_dashboard['all_district62'] ;?> อำเภอ <?php echo $manage_dashboard['all_moo62'] ;?> หมู่บ้าน
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
                     <div class="info-box" style="background-color: #3ad05c; color: #fff; cursor: pointer;"  onClick="window.location='<?php echo site_url("Household_c/Manage_c/dashbordMoo/"); ?>';">
                      <span class="info-box-icon"><?php echo $manage_dashboard['nara_num'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">นราธิวาส ปี <?php echo $manage_dashboard['year63'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['nara_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                              <?php echo $manage_dashboard['nara_parish'] ;?> ตำบล  <?php echo $manage_dashboard['nara_district'] ;?> อำเภอ  <?php echo $manage_dashboard['nara_moo'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                </div>
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #3ad05c; color: #fff; cursor: pointer;"  onClick="window.location='<?php echo site_url("Household_c/Manage_c/dashbordMoo/"); ?>';">
                      <span class="info-box-icon"><?php echo $manage_dashboard['nara_num62'] ;?></i></span>
                      <div class="info-box-content">
                         <span class="info-box-text">นราธิวาส ปี <?php echo $manage_dashboard['year62'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['nara_num62'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                              <?php echo $manage_dashboard['nara_parish62'] ;?> ตำบล  <?php echo $manage_dashboard['nara_district62'] ;?> อำเภอ <?php echo $manage_dashboard['nara_moo62'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                </div>
             </div>
             <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
             <div class="row">
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #ffc107; color: #fff; cursor: pointer;"  onClick="window.location='<?php echo site_url("Household_c/Manage_c/dashbordMoo/"); ?>';">
                      <span class="info-box-icon" style="color: #fff"><?php echo $manage_dashboard['yala_num'] ;?></span>
                      <div class="info-box-content" style="color: #fff">
                         <span class="info-box-text">ยะลา ปี <?php echo $manage_dashboard['year63'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['yala_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                              <?php echo $manage_dashboard['yala_parish'] ;?> ตำบล  <?php echo $manage_dashboard['yala_district'] ;?> อำเภอ <?php echo $manage_dashboard['yala_moo'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                </div>
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #ffc107; color: #fff; cursor: pointer;"  onClick="window.location='<?php echo site_url("Household_c/Manage_c/dashbordMoo/"); ?>';">
                      <span class="info-box-icon" style="color: #fff"><?php echo $manage_dashboard['yala_num62'] ;?></span>
                      <div class="info-box-content" style="color: #fff">
                         <span class="info-box-text">ยะลา ปี <?php echo $manage_dashboard['year62'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['yala_num62'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                              <?php echo $manage_dashboard['yala_parish62'] ;?> ตำบล  <?php echo $manage_dashboard['yala_district62'] ;?> อำเภอ <?php echo $manage_dashboard['yala_moo62'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                </div>
             </div>
             <!-- /.info-box -->
          </div>
          <div class="col-md-3 col-sm-6 col-12">
             <div class="row">
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #7f8991; color: #fff; cursor: pointer;"  onClick="window.location='<?php echo site_url("Household_c/Manage_c/dashbordMoo/"); ?>';">
                      <span class="info-box-icon"><?php echo $manage_dashboard['pat_num'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">ปัตตานี ปี <?php echo $manage_dashboard['year63'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['pat_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                              <?php echo $manage_dashboard['pat_parish'] ;?> ตำบล  <?php echo $manage_dashboard['pat_district'] ;?> อำเภอ <?php echo $manage_dashboard['pat_moo'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                </div>
                <div class="col-md-12 col-sm-6 col-12">
                  <div class="info-box" style="background-color: #7f8991; color: #fff; cursor: pointer;"  onClick="window.location='<?php echo site_url("Household_c/Manage_c/dashbordMoo/"); ?>';">
                      <span class="info-box-icon"><?php echo $manage_dashboard['pat_num62'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">ปัตตานี ปี <?php echo $manage_dashboard['year62'] ;?></span>
                         <span class="info-box-number"><?php echo $manage_dashboard['pat_num62'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                              <?php echo $manage_dashboard['pat_parish62'] ;?> ตำบล  <?php echo $manage_dashboard['pat_district62'] ;?> อำเภอ <?php echo $manage_dashboard['pat_moo62'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                </div>
             </div>
             <!-- /.info-box -->
          </div>
        </div> 
        <!-- ----------------------------/รายงาน---------------------------- -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">รายชื่อครัวเรือนยากจน</h3>
              </div>
              <?php if (!$this->session->userdata('login') == '') { ?>
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-2">
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-default" style="width: 100%">+ import</button>
                    </div>
                    <!-- ------------------------model------------------------ -->
                    <div class="modal fade" id="modal-default">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">นำเข้าข้อมูลครัวเรือน (เฉพาะไฟล์ Excel)</h4>                    
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          
                          <!-- <form action="<?php echo site_url("Household_c/Manage_c/househole_excell/"); ?>" method="post" enctype="multipart/form-data">
                            Upload excel file : 
                            <input name="test" type="text">

                            <input id="file-input" name="excell" type="file">
                            <button type="submit">asd</button>
                          </form> -->
                          <form action="<?php echo site_url("Household_c/Manage_c/househole_excell/"); ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                              <div class="row">
                                <div class="col-sm-12">
                                  <label>ข้อมูลครัวเรือน</label>
                                  <div class="row">
                                    <div class="col-sm-8">
                                      <input type="file" name="excell" class="form-control"  >
                                    </div>
                                    <div class="col-sm-4">
                                      <div class="" style="margin-top: 10px">
                                      ไฟล์ Excel
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                              <button type="submit" class="btn btn-primary">บันทึก</button>
                            </div>
                          </form>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- ------------------------/model------------------------ -->
                    <div class="col-sm-2">
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" onclick="window.location='<?php echo site_url("Household_c/Manage_c/househole_add"); ?>'">+ เพิ่มสมาชิก</button>
                    </div>
                    <div class="col-sm-8">
                      <button type="button" class="btn btn-block bg-gradient-danger btn-sm" style="width: 15%;float: right;" onclick="window.location='<?php echo site_url("Household_c/Manage_c/househole_data_bin/"); ?>'"><i class="fas fa-prescription-bottle"></i> ถังขยะ</button>
                    </div>

                    <!-- <div class="col-sm-4"></div> -->
                  </div>
                  <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
                </div>
              <?php }else{
                
              } ?>
              
              <!-- ---------------------------------ค้นหา------------------------- -->
              <form action="<?php echo site_url("Household_c/Manage_c/househole_search/"); ?>" method="post"enctype="multipart/form-data">
                <div class="card-header">
                  <div class="row">
                    <div class="col-sm-2">
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
                      <button type="submit" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%">ค้นหา</button>
                    </div>
                    
                    <!-- <div class="col-sm-4"></div> -->
                  </div>
                  <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
                </div>
              </form>
              <!-- --------------------------------/ค้นหา------------------------- -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th style="width: 6%">ลำดับ</th>
                      <th style="width: 15%">ชื่อ-สกุล</th>
                      <th style="width: 25%">ที่อยู่</th>
                      <th style="width: 12%">ความพร้อม</th>
                      <th style="width: 8%">เบอร์โทร</th>
                      <th style="width: 8%">รายได้</th>
                      <?php if (!$this->session->userdata('login') == '') { ?>
                      <th style="width: 9%">ประเมิณ</th>
                        <th style="width: 11%">จัดการ</th>
                      <?php }else{

                      } ?>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                    $i = "1";
                    foreach ($househole as $hous) { ?>
                    <tr>
                      <td><?php echo $i ++; ?></td>
                      <td><?php echo $hous->h_title; ?><?php echo $hous->h_name; ?> <?php echo $hous->h_surname; ?></td>
                      <td>บ้านเลขที่ <?php echo $hous->h_house_number; ?> ม.<?php echo $hous->h_swine; ?> ต.<?php echo $hous->h_parish; ?> อ.<?php echo $hous->h_district; ?> จ.<?php echo $hous->h_parish; ?></td>
                      <td><?php echo $hous->ac_initials; ?></td>
                      <td><?php echo $hous->h_tel; ?></td>
                      <td><?php echo $hous->h_revenue; ?></td>

                      <?php if (!$this->session->userdata('login') == '') { ?>
                        <td>
                          <div class="">
                            <center><button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#myModal<?php echo $hous->h_id; ?>" style="width: 100%">ประเมิน</button></center>
                          </div>
                        </td>
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
                              <form action="<?php echo site_url("Household_c/Manage_c/eva_update/"); ?>" method="post"enctype="multipart/form-data">
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
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <!-- ----------------- /modal ------------------- -->
                        <td>
                          <div class="row">
                            <div class="col-sm-4">
                               <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='<?php echo site_url("Household_c/Manage_c/househole/".$hous->h_id); ?>'"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="col-sm-4">
                              <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='<?php echo site_url("Household_c/Manage_c/househole_edit/".$hous->h_id); ?>'"><i class="fas fa-edit"></i></button>
                            </div>
                            <div class="col-sm-4">
                              <button type="button" class="btn btn-block btn-danger btn-xs" onclick="window.location='<?php echo site_url("Household_c/Manage_c/househole_bin/".$hous->h_id); ?>'"><i class="fas fa-prescription-bottle"></i></button>
                            </div>
                          </div>
                        </td>
                      <?php }else{

                      } ?>
                    </tr>
                  <?php } ?>
                 
                  </tbody>
                </table>
              </div>
              
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th >ลำดับ</th>
                      <th >รหัส</th>
                      <th >ปี</th>
                      <th >ชื่อ-สกุล</th>
                      <th >เพศ</th>
                      <th >อายุ</th>
                      <th >รายได้</th>
                      <th >การศึกษา</th>
                      <th >ตำบล</th>
                      <th >อำเภอ</th>
                      <th >จังหวัด</th>
                      <th >ส่งเสริมอาชีพ</th>
                      <th >รายได้เพิ่ม</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php 
                    $i = "1";
                    foreach ($excell as $hous) { ?>
                    <tr>
                      <td><?php echo $i ++; ?></td>
                      <td><?php echo $hous->h_id; ?></td>
                      <td><?php echo $hous->h_row_budget; ?></td>
                      <td><?php echo $hous->h_title; ?><?php echo $hous->h_name; ?> <?php echo $hous->h_surname; ?></td>
                      <td><?php echo $hous->h_gender; ?></td>
                      <td><?php echo $hous->h_age; ?></td>
                      <td><?php echo $hous->h_revenue; ?></td>
                      <td><?php echo $hous->h_education; ?></td>
                      <td><?php echo $hous->h_parish; ?></td>
                      <td><?php echo $hous->h_district; ?></td>
                      <td><?php echo $hous->h_province; ?></td>
                      <td><?php echo $hous->ac_initials; ?></td>
                      <td><?php echo $hous->h_shop_buy; ?></td>
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
