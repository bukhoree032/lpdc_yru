<form action="<?php echo site_url("Japo_c/Manage_japo_c/update_trace/".$j_t_id); ?>" method="post"enctype="multipart/form-data">  
    <div id="myModal_trace_edit_<?php echo $j_t_occupation ?>_<?php echo $j_t_id ?>" class="modal">
        <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">ติดตามไก่เบตง</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->                 
            <input type="hidden" name="j_t_h_id" value="<?php echo $j_t_h_id; ?>">   
            <input type="hidden" name="j_t_occupation" value="8">   
            <div class="modal-body">
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-12">
                รอบที่ติดตาม :<br>
                    <select class="select2bs4 form-control" name="j_t_trace" style="width: 100%;">
                        <option selected="selected" value="<?php echo $j_t_trace; ?>">ติดตามครั้งที่ <?php echo $j_t_trace; ?></option>
                        <?php for($x = 1; $x <= 10; $x++) { ?>
                            <option value="<?php echo $x; ?>">ติดตามครั้งที่ <?php echo $x; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-6">
                ไก่ตัวผู้ที่รอด :<br>
                <input class="form-control" type="text" name="j_t_survive" value="<?php echo $j_t_survive; ?>">
                </div>
                <div class="col-sm-6">
                ไก่ตัวผู้ที่ตาย :<br>
                <input class="form-control" type="text" name="j_t_not_survive" value="<?php echo $j_t_not_survive; ?>">
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-6">
                ไก่ตัวเมียที่รอด :<br>
                <input class="form-control" type="text" name="j_t_survive_female" value="<?php echo $j_t_survive_female; ?>">
                </div>
                <div class="col-sm-6">
                ไก่ตัวเมียที่ตาย :<br>
                <input class="form-control" type="text" name="j_t_not_survive_female" value="<?php echo $j_t_not_survive_female; ?>">
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-6">
                ลูกไก่ที่รอด :<br>
                <input class="form-control" type="text" name="j_t_chick" value="<?php echo $j_t_chick; ?>">
                </div>
                <div class="col-sm-6">
                ลูกไก่ที่ตาย :<br>
                <input class="form-control" type="text" name="j_t_not_chick" value="<?php echo $j_t_not_chick; ?>">
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-6">
                ไข่ไก่ที่ได้ :<br>
                <input class="form-control" type="text" name="j_t_egg" value="<?php echo $j_t_egg; ?>">
                </div>
                <div class="col-sm-6">
                ไข่ไก่ที่กิน :<br>
                <input class="form-control" type="text" name="j_t_egg_eat" value="<?php echo $j_t_egg_eat; ?>">
                </div>
            </div>
            <br>
                <b class="modal-title">ประวัติการขาย</b>
            <br>
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-6">
                จำนวนไก่ :<br>
                <input class="form-control" type="text" name="j_t_popular" value="<?php echo $j_t_popular; ?>">
                </div>
                <div class="col-sm-6">
                จำนวนเงิน :<br>
                <input class="form-control" type="text" name="j_t_buy" value="<?php echo $j_t_buy; ?>">
                </div>
            </div>
            
            <div class="row" style="margin-top: 10px;">
                <div class="col-sm-6">
                น้ำหนัก :<br>
                <input class="form-control" type="text" name="j_t_weight" value="<?php echo $j_t_weight; ?>">
                </div>
                <div class="col-sm-6">
                ระยะเวลา :<br>
                <input class="form-control" type="text" name="j_t_period" value="<?php echo $j_t_period; ?>">
                </div>
            </div>
            <div class="form-group" style="margin-top: 1%">
                หมายเหตุ :
                <div class="row">
                <div class="col-md-12">
                    <textarea class="form-control" name="j_t_annotition" rows="4"><?php echo $j_t_annotition; ?></textarea>
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