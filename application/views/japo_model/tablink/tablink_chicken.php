<script>
  $(function () {
    $("#example_chicken").DataTable({
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
<table id="example_chicken" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th style="width: 3%">ลำดับ</th>
            <!-- <th style="width: 6%">ช่วยเหลือ</th> -->
            <th style="width: 4%">ผลการติดตาม</th>
            <th style="width: 8%">ไก่ที่รอด</th>
            <th style="width: 7%">ไก่ที่ตาย</th>
            <th style="width: 6%">จำนวนไก่ที่ขาย</th>
            <th style="width: 3%">น้ำหนัก</th>
            <!-- <th style="width: 3%">ระยะเวลา/เดือน</th> -->
            <th style="width: 6%">จำนวนเงินที่ขาย</th>
            <th style="width: 3%">หมายเหตุ</th>
            <!-- <th style="width: 2%">ซื้อ</th> -->
            <!-- <th style="width: 5%">ภาพรวม</th> -->
            <th style="width: 5%">แก้ไข</th>
        </tr>
    </thead>
    <tbody>
        <?php $row_h = '1' ?>
        <?php foreach ($trace['quer_trace'] as $key => $value) { ?>
            <?php if($value['j_t_occupation'] == '8'){ ?>
                <tr>
                    <td><?php echo $row_h++ ?></td>
                    <td>ครั้งที่ <?php echo $value['j_t_trace'] ?></td>
                    <td><?php echo $value['j_t_survive'] ?> ตัว / <?php echo $value['j_t_survive_female'] ?> ตัว</td>
                    <td><?php echo $value['j_t_not_survive'] ?> ตัว / <?php echo $value['j_t_not_survive_female'] ?> ตัว</td>
                    <td><?php echo $value['j_t_popular'] ?> ตัว</td>
                    <td><?php echo $value['j_t_weight'] ?> </td>
                    <!-- <td><?php echo $value['j_t_period'] ?></td> -->
                    <td><?php echo $value['j_t_buy'] ?> บาท</td>
                    <td><?php echo $value['j_t_annotition'] ?></td>
                    <td>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#myModal_trace_edit_<?php echo $value['j_t_occupation'] ?>_<?php echo $value['j_t_id'] ?>" style="width: 100%"><i class="fas fa-edit"></i></button>
                            </div>
                            <div class="col-sm-6">
                              <form action="<?php echo site_url("Japo_c/Manage_japo_c/japo_trace_delete/".$value['j_t_id']); ?>" method="post"enctype="multipart/form-data">
                                <button type="submit" class="btn btn-block btn-danger btn-xs"><i class="fas fa-prescription-bottle"></i></button>
                                <input type="" hidden="hidden" name="j_t_h_id" value="<?php echo $value['j_t_h_id']; ?>">
                              </form>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        <?php }  ?>
    </tbody>
</table>