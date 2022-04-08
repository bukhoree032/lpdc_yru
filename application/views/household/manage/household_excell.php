<html lang="en"><head>

  <meta charset="UTF-8">
  
<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png">
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">

<title>Simple DataTable</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css">
  
<style>
body {margin:2em;}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no">
  <a class="btn btn-success" style="float:left;margin-right:20px;" href="https://codepen.io/collection/XKgNLN/" target="_blank">Other examples on Codepen</a>
<div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="dt-buttons"><div class="dt-buttons btn-group"><a class="btn btn-default buttons-collection buttons-colvis" tabindex="0" aria-controls="example" href="#"><span>Column visibility</span></a><a class="btn btn-default buttons-copy buttons-html5" tabindex="0" aria-controls="example" href="#"><span>Copy</span></a><a class="btn btn-default buttons-csv buttons-html5" tabindex="0" aria-controls="example" href="#"><span>CSV</span></a><a class="btn btn-default buttons-excel buttons-html5" tabindex="0" aria-controls="example" href="#"><span>Excel</span></a><a class="btn btn-default buttons-pdf buttons-html5" tabindex="0" aria-controls="example" href="#"><span>PDF</span></a><a class="btn btn-default buttons-print" tabindex="0" aria-controls="example" href="#"><span>Print</span></a></div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example"></label></div></div><div class="clear"></div><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 30 entries</div><table id="example" class="table table-striped table-bordered dataTable no-footer" cellspacing="0" width="100%" aria-describedby="example_info" role="grid" style="width: 100%;">
  <thead>
    <tr role="row">
        <!-- <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order: activate to sort column descending" style="width: 189.062px;">Order</th>
        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 459.359px;">Description</th>
        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Deadline: activate to sort column ascending" style="width: 248.891px;">Deadline</th>
        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 202.875px;">Status</th>
        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 230.812px;">Amount</th> -->
        
        <th >ลำดับ</th>
        <th >รหัส</th>
        <th >ปี</th>
        <th >ชื่อ-สกุล</th>
        <th >เพศ</th>
        <th >อายุ</th>
        <th >รายได้</th>
        <th >การศึกษา</th>
        <th >ตำบล</th>
        <th >อำเภอ</th>
        <th >จังหวัด</th>
        <th >ส่งเสริมอาชีพ</th>
        <th >รายได้เพิ่ม</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $i = "1";
    foreach ($excell as $hous) { ?>
    <tr>
        <td><?php echo $i ++; ?></td>
        <td><?php echo $hous->h_id; ?></td>
        <td><?php echo $hous->h_row_budget; ?></td>
        <td><?php echo $hous->h_title; ?><?php echo $hous->h_name; ?> <?php echo $hous->h_surname; ?></td>
        <td><?php echo $hous->h_gender; ?></td>
        <td><?php echo $hous->h_age; ?></td>
        <td><?php echo $hous->h_revenue; ?></td>
        <td><?php echo $hous->h_education; ?></td>
        <td><?php echo $hous->h_parish; ?></td>
        <td><?php echo $hous->h_district; ?></td>
        <td><?php echo $hous->name_th; ?></td>
        <td><?php echo $hous->ac_initials; ?></td>
        <td><?php echo $hous->h_shop_buy; ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</div>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script id="rendered-js">
  $(document).ready(function () {
    //Only needed for the filename of export files.
    //Normally set in the title tag of your page.
    document.title = 'Simple DataTable';
    // DataTable initialisation
    $('#example').DataTable(
    {
      "dom": '<"dt-buttons"Bf><"clear">lirtp',
      "paging": true,
      "autoWidth": true,
      "buttons": [
      'colvis',
      'copyHtml5',
      'csvHtml5',
      'excelHtml5',
      'pdfHtml5',
      'print'] });
  });
</script>
</body>
</html>