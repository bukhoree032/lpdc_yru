<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script> 
<script type="text/javascript">
	$(window).load(function(){
		document.getElementById("aaa").submit();
	});
</script>

<?php if($this->session->flashdata('manage_success')) {
	$this->session->set_flashdata('manage_success','ลงทะเบียนสำเร็จ');
}?>


<?php if($this->session->flashdata('ubi_honey')) { ?>
	<form name="aaa" id="aaa" method="post" action="<?php echo site_url("Otop_c/Otop_ubi_c/ubi_honey_trace/".$oid) ?>" enctype="multipart/form-data">
	
	</form>
<?php }?>

<?php if($this->session->flashdata('ubi_mush')) { ?>
	<form name="aaa" id="aaa" method="post" action="<?php echo site_url("Otop_c/Otop_ubi_c/ubi_trace/".$oid) ?>" enctype="multipart/form-data">
	
	</form>
<?php }?>

<?php if($this->session->flashdata('ubi_checken')) { ?>
	<form name="aaa" id="aaa" method="post" action="<?php echo site_url("Otop_c/Otop_ubi_c/ubi_checken_trace/".$oid) ?>" enctype="multipart/form-data">
	
	</form>
<?php }?>
