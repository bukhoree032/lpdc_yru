
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
                      <span class="info-box-icon"><?php echo $hold_dashboard['all_num'] ;?></span>
                      <div class="info-box-content">
                        <span class="info-box-text">ครัวเรือนยากจนทั้งหมด ปี <?php echo $hold_dashboard['year63'] ;?></span>
                        <span class="info-box-number"><?php echo $hold_dashboard['all_num'] ;?> ครัวเรือน</span>
                        <div class="progress">
                          <div class="progress-bar" style="width: 100%"></div>
                        </div>
                        <span class="progress-description">
                           <span class="progress-description" >
                              <?php echo $hold_dashboard['all_parish'] ;?> ตำบล  <?php echo $hold_dashboard['all_district'] ;?> อำเภอ  <?php echo $hold_dashboard['all_moo'] ;?> หมู่บ้าน
                           </span>
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                   <!-- /.info-box -->
                </div>
                <?php if ($hold_dashboard['all_num62']) { ?>
                  <div class="col-md-12 col-sm-6 col-12">
                       <div class="info-box" style="background-color: #26cae4; color: #fff">
                        <span class="info-box-icon"><?php echo $hold_dashboard['all_num62'] ;?></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">ครัวเรือนยากจนทั้งหมด ปี <?php echo $hold_dashboard['year62'] ;?></span>
                          <span class="info-box-number"><?php echo $hold_dashboard['all_num62'] ;?> ครัวเรือน</span>
                          <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                          </div>
                          <span class="progress-description">
                                <?php echo $hold_dashboard['all_parish62'] ;?> ตำบล  <?php echo $hold_dashboard['all_district62'] ;?> อำเภอ  <?php echo $hold_dashboard['all_moo62'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                     <!-- /.info-box -->
                  </div>
                <?php } ?>
             </div>
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
             <div class="row">
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #3ad05c; color: #fff">
                      <span class="info-box-icon"><?php echo $hold_dashboard['nara_num'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">นราธิวาส ปี <?php echo $hold_dashboard['year63'] ;?></span>
                         <span class="info-box-number"><?php echo $hold_dashboard['nara_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                              <?php echo $hold_dashboard['nara_parish'] ;?> ตำบล  <?php echo $hold_dashboard['nara_district'] ;?> อำเภอ  <?php echo $hold_dashboard['nara_moo'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                </div>
                <?php if ($hold_dashboard['all_num62']) { ?>
                  <div class="col-md-12 col-sm-6 col-12">
                       <div class="info-box" style="background-color: #3ad05c; color: #fff">
                        <span class="info-box-icon"><?php echo $hold_dashboard['nara_num62'] ;?></i></span>
                        <div class="info-box-content">
                           <span class="info-box-text">นราธิวาส ปี <?php echo $hold_dashboard['year62'] ;?></span>
                           <span class="info-box-number"><?php echo $hold_dashboard['nara_num62'] ;?> ครัวเรือน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                                <?php echo $hold_dashboard['nara_parish62'] ;?> ตำบล  <?php echo $hold_dashboard['nara_district62'] ;?> อำเภอ  <?php echo $hold_dashboard['nara_moo62'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                  </div>
                <?php } ?>
             </div>
             <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
             <div class="row">
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #ffc107; color: #fff">
                      <span class="info-box-icon" style="color: #fff"><?php echo $hold_dashboard['yala_num'] ;?></span>
                      <div class="info-box-content" style="color: #fff">
                         <span class="info-box-text">ยะลา ปี <?php echo $hold_dashboard['year63'] ;?></span>
                         <span class="info-box-number"><?php echo $hold_dashboard['yala_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                              <?php echo $hold_dashboard['yala_parish'] ;?> ตำบล  <?php echo $hold_dashboard['yala_district'] ;?> อำเภอ  <?php echo $hold_dashboard['yala_moo'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                </div>
                <?php if ($hold_dashboard['all_num62']) { ?>
                  <div class="col-md-12 col-sm-6 col-12">
                       <div class="info-box" style="background-color: #ffc107; color: #fff">
                        <span class="info-box-icon" style="color: #fff"><?php echo $hold_dashboard['yala_num62'] ;?></span>
                        <div class="info-box-content" style="color: #fff">
                           <span class="info-box-text">ยะลา ปี <?php echo $hold_dashboard['year62'] ;?></span>
                           <span class="info-box-number"><?php echo $hold_dashboard['yala_num62'] ;?> ครัวเรือน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                                <?php echo $hold_dashboard['yala_parish62'] ;?> ตำบล  <?php echo $hold_dashboard['yala_district62'] ;?> อำเภอ  <?php echo $hold_dashboard['yala_moo62'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                  </div>
                <?php } ?>
             </div>
             <!-- /.info-box -->
          </div>
          <div class="col-md-3 col-sm-6 col-12">
             <div class="row">
                <div class="col-md-12 col-sm-6 col-12">
                     <div class="info-box" style="background-color: #7f8991; color: #fff">
                      <span class="info-box-icon"><?php echo $hold_dashboard['pat_num'] ;?></span>
                      <div class="info-box-content">
                         <span class="info-box-text">ปัตตานี ปี <?php echo $hold_dashboard['year63'] ;?></span>
                         <span class="info-box-number"><?php echo $hold_dashboard['pat_num'] ;?> ครัวเรือน</span>
                         <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                         </div>
                         <span class="progress-description">
                              <?php echo $hold_dashboard['pat_parish'] ;?> ตำบล  <?php echo $hold_dashboard['pat_district'] ;?> อำเภอ  <?php echo $hold_dashboard['pat_moo'] ;?> หมู่บ้าน
                         </span>
                      </div>
                      <!-- /.info-box-content -->
                   </div>
                </div>
                <?php if ($hold_dashboard['all_num62']) { ?>
                  <div class="col-md-12 col-sm-6 col-12">
                       <div class="info-box" style="background-color: #7f8991; color: #fff">
                        <span class="info-box-icon"><?php echo $hold_dashboard['pat_num62'] ;?></span>
                        <div class="info-box-content">
                           <span class="info-box-text">ปัตตานี ปี <?php echo $hold_dashboard['year62'] ;?></span>
                           <span class="info-box-number"><?php echo $hold_dashboard['pat_num62'] ;?> ครัวเรือน</span>
                           <div class="progress">
                              <div class="progress-bar" style="width: 100%"></div>
                           </div>
                           <span class="progress-description">
                                <?php echo $hold_dashboard['pat_parish62'] ;?> ตำบล  <?php echo $hold_dashboard['pat_district62'] ;?> อำเภอ  <?php echo $hold_dashboard['pat_moo62'] ;?> หมู่บ้าน
                           </span>
                        </div>
                        <!-- /.info-box-content -->
                     </div>
                  </div>
                <?php } ?>
             </div>
             <!-- /.info-box -->
          </div>
        </div> 
        <!-- ----------------------------/รายงาน---------------------------- -->