
<div class="modal" id="myModal_8">
<div class="modal-dialog">
    <div class="modal-content">
    <form action="<?php echo site_url("Japo_c/Manage_japo_c/insert_deal/".$j_id); ?>" method="post"enctype="multipart/form-data">
    
        <div class="modal-header">
        <h4 class="modal-title">บันทึกประวัติการช่วยเหลือ</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <div class="row" style="margin-top: 10px;">
        </div>
        
        <input type="hidden" class=" form-control" name="j_s_h_id" value="<?php echo $j_id; ?>">
        <input hidden="hidden" name="j_s_occupation" value="8">
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-3">
            <p>จำนวนไก่ตัวผู้ : </p>
            </div>
            <div class="col-md-5">
            <input type="text" class=" form-control" name="j_s_receive" value="1">
            </div> 
            <div  class="col-md-3" style="margin-top: 10px;">&nbsp;&nbsp; ตัว</div>
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-3">
            <p>จำนวนไก่ตัวเมีย : </p>
            </div>
            <div class="col-md-5">
                <input type="text" class=" form-control" name="j_s_receive_empty" value="4">
            </div> 
            <div  class="col-md-3" style="margin-top: 10px;">&nbsp;&nbsp; ตัว</div>
        </div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-3" >
            <p>หมายเหตุ : </p>
            </div>
            <div class="col-md-8">
            <textarea class="form-control" name="j_s_annotation" rows="4" id="comment"></textarea>
            </div>
        </div>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">บันทึก</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;  </button>
        </div>
    </form>
    </div>
</div>
</div>