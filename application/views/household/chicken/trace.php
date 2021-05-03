
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">
              <!-- <?php $i = "0";
                foreach ($deal["hold"] as $hold) { 
                  $i ++;
                  if ($i == "1") { ?>
                    <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='<?php echo site_url("Household_c/Chicken_c/index/".$hold->h_occupation); ?>'" style="width: 100%">< ย้อนกลับ</button>
                    </div>
                  <?php }else{

                  } ?>
              <?php } ?> -->
              <div class="col-sm-3">
                    <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
                </div>
            </div>
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
        
        <!-- ----------------------------/รายงาน---------------------------- -->
            <div class="card">
              <div class="card-header">
                <?php $i = "0";
                  foreach ($deal["hold"] as $hold) { 
                    $i ++;
                    if ($i == "1") { ?>
                      <h3 class="card-title">ประวัติการติดตามไก่เบตง (<?php echo $hold->h_title; ?><?php echo $hold->h_name; ?> <?php echo $hold->h_surname; ?>)</h3>
                    <?php }else{

                    } ?>
                <?php } ?>
              </div>
              
              <!-- ---------------------------------แจก------------------------- -->
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-2">
                    <div class="">
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#myModal" style="width: 100%">+ ติดตาม</button>
                    </div>
                  </div>
                  <!-- ------------------------model------------------------ -->
                  <form action="<?php echo site_url("Household_c/Chicken_c/trace_insert/".$hid); ?>" method="post"enctype="multipart/form-data">  
                    <div class="modal" id="myModal">
                      <div class="modal-dialog">
                        <div class="modal-content">
                        
                          <!-- Modal Header -->
                          <div class="modal-header">
                              <!-- <h4 class="modal-title">ติดตามครั้งที่ <?php echo $trace_row['trace']; ?></h4> -->
                              <h4 class="modal-title">ติดตามไก่เบตง</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          
                          <!-- Modal body -->
                          <input type="" hidden="hidden" name="trace" value="<?php echo $trace_row['trace']; ?>">                      
                          <div class="modal-body"> 
                            <div class="row">
                              <div class="col-md-3">
                                ช่วยเหลือ :
                              </div>
                              <div class="col-md-5">
                                 <select class="select2bs4 form-control" name="deal" style="width: 100%;">
                                    <?php $t_rows = $trace_row['cal'] ;
                                          $t_rows --;
                                    ?>
                                    <option selected="selected" value="<?php echo $t_rows; ?>">ช่วยเหลือครั้งที่ <?php echo $t_rows; ?></option>
                                    <?php $i = "0";
                                      foreach ($deal["honey"] as $honey) {
                                        $row = $honey->c_sh_id;
                                      }
                                      if ($row >= 5) {
                                        for ($i=1; $i <= $row; $i++) { ?>
                                        <option value="<?php echo $i; ?>">ช่วยเหลือครั้งที่ <?php echo $i; ?></option>
                                        <?php } ?>
                                        <option value="<?php echo $i; ?>">ช่วยเหลือครั้งที่ <?php echo $i ; ?></option>
                                    <?php }else{ ?>
                                      <option value="1">ช่วยเหลือครั้งที่ 1</option>
                                      <option value="2">ช่วยเหลือครั้งที่ 2</option>
                                      <option value="3">ช่วยเหลือครั้งที่ 3</option>
                                      <option value="4">ช่วยเหลือครั้งที่ 4</option>
                                      <option value="5">ช่วยเหลือครั้งที่ 5</option>
                                    <?php } ?>
                                </select>
                              </div>
                            </div>

                            <div class="row" style="padding-top: 12px">
                              <div class="col-md-3">
                                รอบที่ติดตาม :
                              </div>
                              <div class="col-md-5">
                                 <select class="select2bs4 form-control" name="trace" style="width: 100%;">
                                    <option selected="selected" value="<?php echo $trace_row['trace']; ?>">ติดตามครั้งที่ <?php echo $trace_row['trace']; ?></option>
                                      <?php 
                                      foreach ($deal["trace_row"] as $tr_row) {
                                        $t_row = $tr_row->c_tr_row;
                                      }
                                      if ($t_row >= 5) {
                                        for ($i=1; $i <= $t_row; $i++) { ?>
                                          <option value="<?php echo $i; ?>">ติดตามครั้งที่ <?php echo $i; ?></option>
                                        <?php } ?>
                                        <option value="<?php echo $i; ?>">ติดตามครั้งที่ <?php echo $i ; ?></option>
                                      <?php }else{ ?>
                                      <option value="1">ติดตามครั้งที่ 1</option>
                                      <option value="2">ติดตามครั้งที่ 2</option>
                                      <option value="3">ติดตามครั้งที่ 3</option>
                                      <option value="4">ติดตามครั้งที่ 4</option>
                                      <option value="5">ติดตามครั้งที่ 5</option>
                                      <?php } ?>
                                </select>
                              </div>
                            </div>
                            <br>
                              <b class="modal-title">ไก่เบตงที่รอด</b>
                            <br>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-sm-6">
                                ตัวผู้ :<br>
                                <input class="form-control" type="text" name="gobbet_male" >
                              </div>
                              <div class="col-sm-6">
                                ตัวเมีย :<br>
                                <input class="form-control" type="text" name="gobbet_female" >
                              </div>
                            </div>

                            <br>
                              <b class="modal-title">ไก่เบตงที่ตาย</b>
                            <br>
                            <div class="row" style="margin-top: 10px;">
                              <div class="col-sm-6">
                                ตัวผู้ :<br>
                                <input class="form-control" type="text" name="dead_male" >
                              </div>
                              <div class="col-sm-6">
                                ตัวเมีย :<br>
                                <input class="form-control" type="text" name="dead_female" >
                              </div>
                            </div>
                            <div class="form-group" style="margin-top: 1%">
                              <p>หมายเหตุ :</p>
                              <div class="row">
                                <div class="col-md-12">
                                  <textarea class="form-control" name="annotation" rows="4" id="comment"></textarea>
                                </div>
                                
                              </div>
                            </div>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">บันทึก</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;  </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!-- ------------------------/model------------------------ -->
                  <div class="col-sm-2" >
                      <button type="button" class="btn btn-block bg-gradient-primary btn-sm"  onclick="window.location='<?php echo site_url("Household_c/Chicken_c/shop_chicken/".$hid); ?>'" style="width: 100%">ประวัติการซื้อ</button>
                  </div>
                </div>
                

                <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
              </div>

              <!-- --------------------------------/แจก------------------------- -->

              <!-- /.card-header -->
              <div class="card-body">
                <!-- ---------------------------- sch---------------------- -->
                <form action="<?php echo site_url("Household_c/Chicken_c/trace_search/".$hid); ?>" method="post"enctype="multipart/form-data"> 
                  <div class="row">
                    <div class="col-sm-2">
                      <select class="form-control select2bs4" name="deal" style="width: 100%;">
                        <option selected="selected" value="">-- เลือกครั้งที่แจก --</option>
                        <?php $i = "0";
                          foreach ($deal["honey"] as $honey) {
                            $row = $honey->c_sh_id;
                          }
                          if ($row >= 5) {
                            for ($i=1; $i <= $row; $i++) { ?>
                            <option value="<?php echo $i; ?>">แจกครั้งที่ <?php echo $i; ?></option>
                            <?php } ?>
                            <option value="<?php echo $i; ?>">แจกครั้งที่ <?php echo $i ; ?></option>
                        <?php }else{ ?>
                          <option value="1">แจกครั้งที่ 1</option>
                          <option value="2">แจกครั้งที่ 2</option>
                          <option value="3">แจกครั้งที่ 3</option>
                          <option value="4">แจกครั้งที่ 4</option>
                          <option value="5">แจกครั้งที่ 5</option>
                        <?php } ?>
                    </select>
                    </div>

                    
                    <div class="col-sm-1">
                      <button type="submit" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-default" style="width: 100%">ค้นหา</button>
                    </div>
                    
                    <!-- <div class="col-sm-4"></div> -->
                  </div>
                </form>
                <br>
                <!-- ---------------------------/ sch---------------------- -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th style="width: 2%">ลำดับ</th>
                    <th style="width: 8%">ช่วยเหลือ</th>
                    <th style="width: 9%">ติดตาม</th>
                    <th style="width: 9%">ได้รับไก่</th>
                    <th style="width: 7%">รอด</th>
                    <th style="width: 8%">ตาย</th>
                    <!-- <th style="width: 5%">รวม</th> -->
                    <!-- <th style="width: 11%">หมายเหตุ</th> -->
                    <th style="width: 4%">ซื้อ</th>
                    <th style="width: 6%">แก้ไข</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $o = 0;
                    foreach ($deal["trace"] as $trace ) {
                    $sum = $trace->c_tr_gobbet_female + $trace->c_tr_gobbet_male ;
                    $gobbet = $trace->c_tr_gobbet_female + $trace->c_tr_gobbet_male ;
                    $dead = $trace->c_tr_dead_female + $trace->c_tr_dead_male ;
                    $o ++; ?>
                    <tr>
                      <td><?php echo $o; ?></td>
                      <td>ครั้งที่ <?php echo $trace->c_tr_sh_id; ?></td>
                      <td>ครั้งที่ <?php echo $trace->c_tr_row; ?></td>
                      <td><?php echo $trace->c_sh_gobbet; ?> ตัว</td>
                      <td><?php echo $gobbet; ?> ตัว</td>
                      <td><?php echo $dead; ?> ตัว</td>
                      <!-- <td><?php echo $trace->c_tr_annotation; ?></td> -->
                      
                      <td>
                        <div class="">
                          <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#myModal<?php echo $trace->c_tr_row; ?>"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                      </td>
                      <!-- ------------------------model------------------------ -->
                        <div class="modal" id="myModal<?php echo $trace->c_tr_row; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">ซื้อไก่เบตง</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <div class="modal-body">
                                <form action="<?php echo site_url("Household_c/Chicken_c/shop_insert/".$hid); ?>" method="post"enctype="multipart/form-data">  
                                  <div class="row">
                                    <div class="col-md-12">
                                      <input type="text" hidden="" value="<?php echo $trace->c_tr_sh_id; ?>" name="sh_row" >
                                      <input type="text" hidden="" value="<?php echo $trace->c_tr_row; ?>" name="tr_row" >
                                      <div class="row">
                                        <div class="col-md-3">
                                          วันที่ซื้อ : 
                                        </div>
                                        <div class="col-md-5">
                                          <input type="date" class="form-control" name="time" >
                                        </div>
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-sm-3">
                                          ไก่ตัวผู้ :<br>
                                        </div>
                                        <div class="col-sm-5">
                                          <input class="form-control" type="text" name="male" >
                                        </div>&nbsp;&nbsp; ตัว
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-sm-3">
                                          ไก่ตัวเมีย :<br>
                                        </div>
                                        <div class="col-sm-5">
                                          <input class="form-control" type="text" name="female" >
                                        </div>&nbsp;&nbsp; ตัว
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-3">
                                          น้ำหนัก : 
                                        </div>
                                        <div class="col-md-5">
                                          <input type="text" class="form-control" name="weight" >
                                        </div>&nbsp;&nbsp; กรัม
                                      </div>

                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-3">
                                          จำนวนเงิน : 
                                        </div>
                                        <div class="col-md-5">
                                          <input type="text" class="form-control" name="price" >
                                        </div>&nbsp;&nbsp; บาท
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-md-3">
                                          ระยะเวลา : 
                                        </div>
                                        <div class="col-md-5">
                                          <input type="text" class="form-control" name="period" >
                                        </div>&nbsp;&nbsp; เดือน
                                      </div>
                                      <br>
                                        <b class="modal-title">จำนวนไก่ที่เหลือ</b>
                                      <br>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-sm-3">
                                          ไก่ตัวผู้ :<br>
                                        </div>
                                        <div class="col-sm-5">
                                          <input class="form-control" type="text" name="male_left" >
                                        </div>&nbsp;&nbsp; ตัว
                                      </div>
                                      <div class="row" style="margin-top: 10px;">
                                        <div class="col-sm-3">
                                          ไก่ตัวเมีย :<br>
                                        </div>
                                        <div class="col-sm-5">
                                          <input class="form-control" type="text" name="female_left" >
                                        </div>&nbsp;&nbsp; ตัว
                                      </div>
                                      <br>
                                      <div class="row">
                                        <div class="col-md-3">
                                          หมายเหตุ : 
                                        </div>
                                        <div class="col-md-8">
                                          <textarea class="form-control" rows="4" name="annotation" id="comment"></textarea>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <br>
                                  <!-- Modal footer -->
                                  <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">บันทึก</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                                  </div>
                                </form>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                      <!-- ------------------------/model------------------------ -->
                       <td>
                        <div class="row">

                          <div class="col-sm-4">
                            <form action="<?php echo site_url("Household_c/Chicken_c/trace_detail/".$hid); ?>" method="post"enctype="multipart/form-data">
                              <button type="submit" class="btn btn-block btn-primary btn-xs"><i class="far fa-eye"></i></button>
                              <input type="" hidden="hidden" name="trace" value="<?php echo $trace->c_tr_id; ?>">
                              <input type="" hidden="hidden" name="trace_s" value="<?php echo $trace->c_tr_row; ?>">
                              <input type="" hidden="hidden" name="deal" value="<?php echo $trace->c_tr_sh_id; ?>">
                            </form>
                          </div>
                          <div class="col-sm-4">
                            <button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#myModal_edit<?php echo $trace->c_tr_id; ?>"><i class="fas fa-edit"></i></button>
                          </div>
                          <div class="col-sm-4">
                            <form action="<?php echo site_url("Household_c/Chicken_c/chicken_tr_delet/".$trace->c_tr_id); ?>" method="post"enctype="multipart/form-data">
                              <button type="submit" class="btn btn-block btn-danger btn-xs"><i class="fas fa-prescription-bottle"></i></button>
                              <input type="" hidden="hidden" name="h_id" value="<?php echo $trace->c_tr_h_id; ?>">
                            </form>
                          </div>
                        </div>
                      </td>
                      <!-- ------------------------model------------------------ -->
                        <div class="modal" id="myModal_edit<?php echo $trace->c_tr_id; ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                            
                              <!-- Modal Header -->
                              <div class="modal-header">
                                  <!-- <h4 class="modal-title">ติดตามครั้งที่ <?php echo $trace_row['trace']; ?></h4> -->
                                  <h4 class="modal-title">แก้ไขการติดตามไก่เบตง <?php echo $trace->c_tr_id; ?></h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              
                              <!-- Modal body -->
                              <form action="<?php echo site_url("Household_c/Chicken_c/trace_edit/".$hid); ?>" method="post"enctype="multipart/form-data">
                                <input type="" hidden="hidden" name="trace" value="<?php echo $trace_row['trace']; ?>">  
                                <input type="" hidden="hidden" name="id" value="<?php echo $trace->c_tr_id; ?>">                     
                                <div class="modal-body"> 
                                  <div class="row">
                                    <div class="col-md-3">
                                      รอกที่แจก :
                                    </div>
                                    <div class="col-md-5">
                                       <select class="select2bs4 form-control" name="deal" style="width: 100%;">
                                          <!-- <?php $t_rows = $trace_row['cal'] ;
                                                $t_rows --;
                                          ?> -->
                                          <option selected="selected" value="<?php echo $trace->c_tr_sh_id; ?>">ช่วยเหลือครั้งที่ <?php echo $trace->c_tr_sh_id; ?></option>
                                          <?php $i = "0";
                                            foreach ($deal["honey"] as $honey) {
                                              $row = $honey->c_sh_id;
                                            }
                                            if ($row >= 5) {
                                              for ($i=1; $i <= $row; $i++) { ?>
                                              <option value="<?php echo $i; ?>">ช่วยเหลือครั้งที่ <?php echo $i; ?></option>
                                              <?php } ?>
                                              <option value="<?php echo $i; ?>">ช่วยเหลือครั้งที่ <?php echo $i ; ?></option>
                                          <?php }else{ ?>
                                            <option value="1">ช่วยเหลือครั้งที่ 1</option>
                                            <option value="2">ช่วยเหลือครั้งที่ 2</option>
                                            <option value="3">ช่วยเหลือครั้งที่ 3</option>
                                            <option value="4">ช่วยเหลือครั้งที่ 4</option>
                                            <option value="5">ช่วยเหลือครั้งที่ 5</option>
                                          <?php } ?>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="row" style="padding-top: 12px">
                                    <div class="col-md-3">
                                      รอบที่ติมตาม :
                                    </div>
                                    <div class="col-md-5">
                                       <select class="select2bs4 form-control" name="trace" style="width: 100%;">
                                          <option selected="selected" value="<?php echo $trace->c_tr_row; ?>">ติดตามครั้งที่ <?php echo $trace->c_tr_row; ?></option>
                                            <?php 
                                            foreach ($deal["trace_row"] as $tr_row) {
                                              $t_row = $tr_row->c_tr_row;
                                            }
                                            if ($t_row >= 5) {
                                              for ($i=1; $i <= $t_row; $i++) { ?>
                                                <option value="<?php echo $i; ?>">ติดตามครั้งที่ <?php echo $i; ?></option>
                                              <?php } ?>
                                              <option value="<?php echo $i; ?>">ติดตามครั้งที่ <?php echo $i ; ?></option>
                                            <?php }else{ ?>
                                            <option value="1">ติดตามครั้งที่ 1</option>
                                            <option value="2">ติดตามครั้งที่ 2</option>
                                            <option value="3">ติดตามครั้งที่ 3</option>
                                            <option value="4">ติดตามครั้งที่ 4</option>
                                            <option value="5">ติดตามครั้งที่ 5</option>
                                            <?php } ?>
                                      </select>
                                    </div>
                                  </div>
                                  <br>
                                    <b class="modal-title">ไก่เบตงที่รอด</b>
                                  <br>
                                  <div class="row" style="margin-top: 10px;">
                                    <div class="col-sm-6">
                                      ตัวผู้ :<br>
                                      <input class="form-control" type="text" value="<?php echo $trace->c_tr_gobbet_male; ?>" name="gobbet_male" >
                                    </div>
                                    <div class="col-sm-6">
                                      ตัวเมีย :<br>
                                      <input class="form-control" type="text" value="<?php echo $trace->c_tr_gobbet_female; ?>" name="gobbet_female" >
                                    </div>
                                  </div>

                                  <br>
                                    <b class="modal-title">ไก่เบตงที่ตาย</b>
                                  <br>
                                  <div class="row" style="margin-top: 10px;">
                                    <div class="col-sm-6">
                                      ตัวผู้ :<br>
                                      <input class="form-control" type="text" value="<?php echo $trace->c_tr_dead_male; ?>" name="dead_male" >
                                    </div>
                                    <div class="col-sm-6">
                                      ตัวเมีย :<br>
                                      <input class="form-control" type="text" value="<?php echo $trace->c_tr_dead_female; ?>" name="dead_female" >
                                    </div>
                                  </div>
                                  <div class="form-group" style="margin-top: 1%">
                                    <p>หมายเหตุ :</p>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <textarea class="form-control" name="annotation" rows="4" id="comment"><?php echo $trace->c_tr_annotation; ?></textarea>
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
                      <!-- ------------------------/model------------------------ -->
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
