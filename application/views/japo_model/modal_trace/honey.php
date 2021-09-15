<form action="<?php echo site_url("Japo_c/Manage_japo_c/insert_trace/".$j_id); ?>" method="post"enctype="multipart/form-data">  
<div class="modal" id="myModal_trace_9">
    <div class="modal-dialog">
    <div class="modal-content">
    
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">ติดตามผึ้ง</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->                  
        <div class="modal-body">
            
        <input type="hidden" name="j_t_h_id" value="<?php echo $j_id; ?>">
        <input type="hidden" name="j_t_occupation" value="9">
        <div class="row" style="margin-top: 10px;">
            <!-- <div class="col-sm-6">
                ช่วยเหลือ :<br>
                <select class="select2bs4 form-control" name="j_t_share" style="width: 100%;">
                    <option selected="selected" value="">-- ช่วยเหลือครั้งที่ --</option>
                    <?php for($x = 1; $x <= 10; $x++) { ?>
                        <option value="<?php echo $x; ?>">ช่วยเหลือครั้งที่ <?php echo $x; ?></option>
                    <?php } ?>
                </select>
            </div> -->
            <div class="col-sm-12">
                รอบที่ติดตาม :<br>
                <select class="select2bs4 form-control" name="j_t_trace" style="width: 100%;">
                    <option selected="selected" value="">-- ติดตามครั้งที่ --</option>
                    <?php for($x = 1; $x <= 10; $x++) { ?>
                        <option value="<?php echo $x; ?>">ติดตามครั้งที่ <?php echo $x; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <br>
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-6">
            มีกี่รัง :<br>
            <input class="form-control" type="text" name="j_t_survive" >
            </div>
            <div class="col-sm-6">
            เสียกี่รัง :<br>
            <input class="form-control" type="text" name="j_t_not_survive" >
            </div>
        </div>
        <br>
            <b class="modal-title">ประวัติการขาย</b>
        <br>
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-6">
            จำนวนรังผึ้งที่เก็บ :<br>
            <input class="form-control" type="text" name="j_t_popular" >
            </div>
            <div class="col-sm-6">
            จำนวนเงิน :<br>
            <input class="form-control" type="text" name="j_t_buy" >
            </div>
        </div>
        
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-6">
            จำนวน CC :<br>
            <input class="form-control" type="text" name="j_t_weight" >
            </div>
            <div class="col-sm-6">
            ระยะเวลา :<br>
            <input class="form-control" type="text" name="j_t_period">
            </div>
        </div>
        <div class="form-group" style="margin-top: 1%">
            หมายเหตุ :
            <div class="row">
            <div class="col-md-12">
                <textarea class="form-control" name="j_t_annotition" rows="4"></textarea>
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