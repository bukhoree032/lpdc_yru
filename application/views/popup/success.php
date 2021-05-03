
 <script src="<?php echo base_url('/lpdc_admin/') ?>sweetalert.min.js"></script>
<?php if($this->session->flashdata('manage_success')) {?> 
  <!-- ------------------ modal ------------------- -->
  <!-- The Modal -->
  <div class="modal" id="manage_success">
    <script type="text/javascript">
	  swal("", "บันทึกข้อมูลเรียบร้อย !!", "success");
	</script>
  </div>	
  <!-- ----------------- /modal ------------------- -->
<?php } ?>

