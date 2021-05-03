<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> 


  <?php  
    if($this->session->flashdata('false_trace')) {
  ?> 
    <script type="text/javascript">
      $(window).load(function(){
        $('#myModal_false_trace').modal('show');
      });
    </script>

  <?php } ?>

<div class="modal" id="myModal_false_trace">
  <div class="modal-dialog">
    <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <!-- <h4 class="modal-title">แจกผึ้งครั่งที่ <?php echo $honey->h_sh_id; ?></h4> -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="text-center">
          <br>
          <?php
               echo "ไม่มีประวัติการแจกหรือติดตาม";
          ?>
          <br><br>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;</button>
        </div>
    </div>
  </div>
</div>




<div class="modal fade" id="myModal_false_trace" role="dialog">
    <div class="modal-dialog">
      <!-- เนือหาของ Modal ทั้งหมด -->
      <div class="modal-content"> 
        <!-- ส่วนหัวของ Modal -->
        <div class="modal-header">
          <!-- ปุ่มกดปิด (X) ตรงส่วนหัวของ Modal -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
          <div class="text-center">
          <img style="width: 85px;" src="">
          </div>
        </div>
        <!-- ส่วนเนื้อหาของ Modal -->
        <div class="modal-body">
          <div class="text-center">
            
          </div>
          <br>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">&nbsp;&nbsp; ปิด &nbsp;&nbsp;</button>
          </div>
        </div>
      </div>
    </div>
</div>