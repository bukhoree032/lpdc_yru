
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
              <div class="row">
                <div class="col-11">
                  <div class="alert alert-teal alert-dismissible bg-teal ">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-exclamation-triangle"></i> สัญลักษณ์</h5>
                    <i class="far fa-calendar-check"></i> ผ่านการประเมิน , <i class="far fa-calendar-times"></i> ไม่ผ่านการประเมิน , <i class="far fa-calendar"></i> ยังไม่ประเมิน
                  </div>
                </div>
              </div>
            <!-- --------------------------รายงาน------------------------ -->
            <div class="row">
              
              <div class="col-md-3 col-sm-6 col-12">
                 <div class="row">
                    <div class="col-md-12 col-sm-6 col-12">
                       <div class="info-box" style="background-color: #3ad05c; color: #fff">
                          <span class="info-box-icon"><i class="far fa-address-book"></i></span>
                          <div class="info-box-content">
                             <span class="info-box-text">นักศึกษาทั้งหมด</span>
                             <span class="info-box-number"><?php echo $e_dashboard['all_num'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <span class="progress-description" style="font-size: 13px; width: 100%">
                             C1 <?php echo $e_dashboard['all_c1'] ;?> คน / B2 <?php echo $e_dashboard['all_b2'] ;?> คน / B1 <?php echo $e_dashboard['all_b1'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['all_a2'] ;?> คน / A1 <?php echo $e_dashboard['all_a1'] ;?> คน

                             </span>
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #28a745; color: #fff">
                          <div class="info-box-content" style="width: 100%">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year62'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['all_num62'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['all_c1_62'] ;?> คน / B2 <?php echo $e_dashboard['all_b2_62'] ;?> คน / B1 <?php echo $e_dashboard['all_b1_62'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['all_a2_62'] ;?> คน / A1 <?php echo $e_dashboard['all_a1_62'] ;?> คน
                             </span> -->
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #2cb74c; color: #fff">
                          <div class="info-box-content">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year63'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['all_num63'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['all_c1_63'] ;?> คน / B2 <?php echo $e_dashboard['all_b2_63'] ;?> คน / B1 <?php echo $e_dashboard['all_b1_63'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['all_a2_63'] ;?> คน / A1 <?php echo $e_dashboard['all_a1_63'] ;?> คน
                             </span> -->
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                 </div>
              </div>
              <!-- /.col -->
             <div class="col-md-2 col-sm-6 col-12">
                 <div class="row">
                    <div class="col-md-12 col-sm-6 col-12">
                       <div class="info-box" style="background-color: #26cae4; color: #fff">
                          <span class="info-box-icon" style="width: 20%"><i class="far fa-address-card"></i></span>
                          <div class="info-box-content" >
                             <span class="info-box-text">คณะครุศาสตร์</span>
                             <span class="info-box-number"><?php echo $e_dashboard['edu_num'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <span class="progress-description" style="font-size: 13px; width: 100%">
                             C1 <?php echo $e_dashboard['edu_c1'] ;?> คน / B2 <?php echo $e_dashboard['edu_b2'] ;?> คน / B1 <?php echo $e_dashboard['edu_b1'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['edu_a2'] ;?> คน / A1 <?php echo $e_dashboard['edu_a1'] ;?> คน
                             </span>
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #17a2b8; color: #fff">
                          <div class="info-box-content" style="width: 100%">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year62'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['edu_num62'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['edu_c1_62'] ;?> คน / B2 <?php echo $e_dashboard['edu_b2_62'] ;?> คน / B1 <?php echo $e_dashboard['edu_b1_62'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['edu_a2_62'] ;?> คน / A1 <?php echo $e_dashboard['edu_a1_62'] ;?> คน
                             </span> -->
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #19b1c9; color: #fff">
                          <div class="info-box-content">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year63'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['edu_num63'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['edu_c1_63'] ;?> คน / B2 <?php echo $e_dashboard['edu_b2_63'] ;?> คน / B1 <?php echo $e_dashboard['edu_b1_63'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['edu_a2_63'] ;?> คน / A1 <?php echo $e_dashboard['edu_a1_63'] ;?> คน
                             </span> -->
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                 </div>
              </div>
              <!-- /.col -->
              <!-- /.col -->
             <div class="col-md-2 col-sm-6 col-12">
                 <div class="row">
                    <div class="col-md-12 col-sm-6 col-12">
                       <div class="info-box" style="background-color: #ff6c00; color: #fff">
                          <span class="info-box-icon" style="color: #fff; width: 20%"><i class="far fa-address-card"></i></span>
                          <div class="info-box-content" style="color: #fff; width: 80%">
                             <span class="info-box-text">คณะมนุษยศาสตร์และสังคมศาสตร์</span>
                             <span class="info-box-number"><?php echo $e_dashboard['h_num'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <span class="progress-description" style="font-size: 13px; width: 100%">
                             C1 <?php echo $e_dashboard['h_c1'] ;?> คน / B2 <?php echo $e_dashboard['h_b2'] ;?> คน / B1 <?php echo $e_dashboard['h_b1'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['h_a2'] ;?> คน / A1 <?php echo $e_dashboard['h_a1'] ;?> คน
                             </span>
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #ff5c00; color: #fff">
                          <div class="info-box-content" style="color: #fff">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year62'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['h_num62'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['h_c1_62'] ;?> คน / B2 <?php echo $e_dashboard['h_b2_62'] ;?> คน / B1 <?php echo $e_dashboard['h_b1_62'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['h_a2_62'] ;?> คน / A1 <?php echo $e_dashboard['h_a1_62'] ;?> คน
                             </span> -->
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #ff7c00; color: #fff">
                          <div class="info-box-content" style="color: #fff">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year63'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['h_num63'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['h_c1_63'] ;?> คน / B2 <?php echo $e_dashboard['h_b2_63'] ;?> คน / B1 <?php echo $e_dashboard['h_b1_63'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['h_a2_63'] ;?> คน / A1 <?php echo $e_dashboard['h_a1_63'] ;?> คน
                             </span> -->
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                 </div>
              </div>
              <div class="col-md-2 col-sm-6 col-12">
                 <div class="row">
                    <div class="col-md-12 col-sm-6 col-12">
                       <div class="info-box" style="background-color: #ffc107; color: #fff">
                          <span class="info-box-icon" style="width: 20%"><i class="far fa-address-card"></i></span>
                          <div class="info-box-content" style="color: #fff; width: 80%">
                             <span class="info-box-text">วิทยาศาสตร์เทคโนโลยีและการเกษตร</span>
                             <span class="info-box-number"><?php echo $e_dashboard['s_num'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <span class="progress-description" style="font-size: 13px; width: 100%">
                             C1 <?php echo $e_dashboard['s_c1'] ;?> คน / B2 <?php echo $e_dashboard['s_b2'] ;?> คน / B1 <?php echo $e_dashboard['s_b1'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['s_a2'] ;?> คน / A1 <?php echo $e_dashboard['s_a1'] ;?> คน
                             </span>
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #cb9800; color: #fff">
                          <div class="info-box-content">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year62'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['s_num62'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['s_c1_62'] ;?> คน / B2 <?php echo $e_dashboard['s_b2_62'] ;?> คน / B1 <?php echo $e_dashboard['s_b1_62'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['s_a2_62'] ;?> คน / A1 <?php echo $e_dashboard['s_a1_62'] ;?> คน
                             </span> -->
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #f2b600; color: #fff">
                          <div class="info-box-content">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year63'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['s_num63'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['s_c1_63'] ;?> คน / B2 <?php echo $e_dashboard['s_b2_63'] ;?> คน / B1 <?php echo $e_dashboard['s_b1_63'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['s_a2_63'] ;?> คน / A1 <?php echo $e_dashboard['s_a1_63'] ;?> คน
                             </span> -->
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                 </div>
              </div>
              <div class="col-md-2 col-sm-6 col-12">
                 <div class="row">
                    <div class="col-md-12 col-sm-6 col-12">
                       <div class="info-box" style="background-color: #a141d0; color: #fff">
                          <span class="info-box-icon" style="width: 20%"><i class="far fa-address-card"></i></span>
                          <div class="info-box-content" style="color: #fff; width: 80%">
                             <span class="info-box-text">คณะวิทยาการจัดการ</span>
                             <span class="info-box-number"><?php echo $e_dashboard['s_num'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <span class="progress-description" style="font-size: 13px; width: 100%">
                             C1 <?php echo $e_dashboard['s_c1'] ;?> คน / B2 <?php echo $e_dashboard['s_b2'] ;?> คน / B1 <?php echo $e_dashboard['s_b1'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['s_a2'] ;?> คน / A1 <?php echo $e_dashboard['s_a1'] ;?> คน
                             </span>
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #8d2ebc; color: #fff">
                          <div class="info-box-content">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year62'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['s_num62'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['s_c1_62'] ;?> คน / B2 <?php echo $e_dashboard['s_b2_62'] ;?> คน / B1 <?php echo $e_dashboard['s_b1_62'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['s_a2_62'] ;?> คน / A1 <?php echo $e_dashboard['s_a1_62'] ;?> คน
                             </span> -->
                          </div>
                          <!-- /.info-box-content -->
                       </div>
                       <!-- /.info-box -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-12 evaluate">
                       <div class="info-box" style="background-color: #a951d4; color: #fff">
                          <div class="info-box-content">
                             <span class="info-box-text">ปี <?php echo $e_dashboard['year63'] ;?></span>
                             <span class="info-box-number"><?php echo $e_dashboard['s_num63'] ;?> คน</span>
                             <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                             </div>
                             <!-- <span class="progress-description" >
                             C1 <?php echo $e_dashboard['s_c1_63'] ;?> คน / B2 <?php echo $e_dashboard['s_b2_63'] ;?> คน / B1 <?php echo $e_dashboard['s_b1_63'] ;?> คน
                             <br>
                             A2 <?php echo $e_dashboard['s_a2_63'] ;?> คน / A1 <?php echo $e_dashboard['s_a1_63'] ;?> คน
                             </span> -->
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
                  <h3 class="card-title">รายชื่อภาษาอังกฤษ</h3>
              </div>
              <!-- <div class="card-header"> -->
                <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
              <!-- </div> -->
              <!-- ---------------------------------ค้นหา------------------------- -->
              <div class="card-header">
                <form action="<?php echo site_url("Englis_c/Englis_c/eng_search/"); ?>" method="post"enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_year" style="width: 100%;">
                          <?php if ($this->session->userdata('eng_search_year')) {
                            $session_year = $this->session->userdata('eng_search_year'); ?>
                            <option value="<?php echo $session_year; ?>" selected="selected"><?php echo $session_year; ?></option>
                            <option value="">ทุกปีงบประมาณ</option>
                          <?php }else{ ?> 
                            <?php foreach ($manage_year['cal'] as $cal) { ?>
                              <option value="<?php echo $cal->e_row_budget; ?>" selected="selected"><?php echo $cal->e_row_budget; ?></option>
                            <?php } ?>
                          <?php } ?>
                          <?php foreach ($manage_year['year'] as $year) { ?>
                            <option value="<?php echo $year->e_row_budget; ?>" ><?php echo $year->e_row_budget; ?></option>
                          <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="s_pro" style="width: 100%;">
                          <?php if ($this->session->userdata('eng_search_pro')) { 
                            $session_pro = $this->session->userdata('eng_search_pro'); ?>
                              <?php foreach ($eng_corps['corps'] as $corps) { 
                                if ($session_pro == $corps->corps_id) {?>
                                  <option value="<?php echo $corps->corps_id; ?>"><?php echo $corps->corp_name; ?></option>
                                  <option value="">ทุกคณะ</option>
                                <?php }
                              } ?>
                          <?php }else{ ?>
                           <option value="" selected="selected">-- คณะ --</option>
                          <?php } ?>
                          <?php foreach ($eng_corps['corps'] as $corps) { ?>
                            <option value="<?php echo $corps->corps_id; ?>"><?php echo $corps->corp_name; ?></option>
                          <?php } ?>
                        </select>
                    </div>

                    
                    <div class="col-sm-1">
                      <button type="submit" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-default" style="width: 100%">ค้นหา</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- --------------------------------/ค้นหา------------------------- -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 4%">ลำดับ</th>
                    <th style="width: 12%">ชื่อ-สกุล</th>
                    <th style="width: 15%">คณะ</th>
                    <th style="width: 12%">หลักสูตร</th>
                    <th style="width: 12%">สาขา</th>
                    <th style="width: 6%">คะแนนสอบ</th>
                    <th style="width: 5%">CEFR</th>
                    <!-- <th style="width: 7%">นำทาง</th> -->
                    <?php if (!$this->session->userdata('login') == '') { ?>
                      <!-- <th style="width: 7%">จัดการ</th> -->
                    <?php }else{

                    } ?>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $i = "1" ;  
                    foreach ($eng as $eng) { ?>
                      <tr>
                        <td><?php echo $i ++; ?></td>
                        <td><?php echo $eng->e_title; ?><?php echo $eng->e_name; ?> <?php echo $eng->e_surname; ?></td>
                        <td><?php echo $eng->corp_name; ?></td> 
                        <td><?php echo $eng->course_name; ?></td>
                        <td><?php echo $eng->branch_name; ?></td>
                        <td><?php echo $eng->e_score; ?></td>
                        <td><?php echo $eng->e_CEFR; ?></td>
                       <!--  <td>
                          <?php if ($onet->on_latitude) { ?>
                            <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='http://www.google.com/maps/place/<?php echo $onet->on_latitude; ?>,<?php echo $onet->on_longitude; ?>'">นำทาง</button>
                          <?php }else{ ?>
                            <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='#'">ไม่มีข้อมูลนำทาง</button>
                          <?php } ?>
                          
                        </td> -->
                        <?php if (!$this->session->userdata('login') == '') { ?>
                          <!-- <td>
                            <div class="col-sm-12">
                              <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='<?php echo site_url("Englis_c/Englis_c/eng_edit/".$eng->e_id); ?>'"><i class="fas fa-edit"></i></button>
                            </div>
                          </td> -->
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
