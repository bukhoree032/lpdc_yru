
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-6">
                        <div class="row">
                           <!-- <div class="col-sm-3"><button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='chicken_house.html'" style="width: 100%">< ย้อนกลับ</button>
                           </div> -->
                           <div class="col-sm-2">
                               <a type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 100%" href=javascript:history.back(1)>< ย้อนกลับ</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-sm-6">
                     </div>
                  </div>
               </div>
               <!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="container-fluid">
                  <!-- ----------------------------/รายงาน---------------------------- -->
                  <div class="card">
                     <div class="card-header">
                        <h3 class="card-title">ติดตาม (นายรุสดี ลานง)</h3>
                     </div>
                     <!-- ---------------------------------แจก------------------------- -->
                     <div class="card-header">
                        <div class="row">
                           <div class="col-sm-2">
                              <div class="evaluate">
                                 <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#myModal" style="width: 100%">+ ติดตาม</button>
                              </div>
                              <div class="evaluate1">
                                 <button type="button" class="btn btn-block bg-gradient-primary btn-sm" onclick="window.location='trace_phone.html'" style="width: 100%">+ ติดตาม</button>
                              </div>
                           </div>
                           <!-- ------------------------model------------------------ -->
                           <div class="modal" id="myModal">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                       <h4 class="modal-title">ติดตาม</h4>
                                       <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                       <form action="trace_detail_buy.html" method="POST">
                                          <div class="row">
                                             <div class="col-md-12">
                                                ประเมิน<br>
                                                <input type="radio" id="male" name="gender" value="male">
                                                ผ่าน<br>
                                                <input type="radio" id="female" name="gender" value="female">
                                                ไม่ผ่าน<br><br>
                                             </div>
                                             <div class="col-md-6">
                                                จำนวนไก่ทั้งหมด<br>
                                                <input class="form-control" type="text" name="gender" >
                                             </div>
                                             <div class="col-md-6">
                                                จำนวนไก่ที่รอด<br>
                                                <input class="form-control" type="text" name="gender" >
                                             </div>
                                          </div>
                                          <br>
                                          <div class="form-group" style="margin-top: 1%">
                                             <p>หมายเหตุ</p>
                                             <div class="row">
                                                <div class="col-md-12">
                                                   <textarea class="form-control" rows="4" id="comment"></textarea>
                                                </div>
                                                <div class="col-md-2">
                                                   <br>
                                                   <button type="button" class="btn btn-primary">บันทึก</button>
                                                </div>
                                             </div>
                                          </div>
                                       </form>
                                    </div>
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- ------------------------/model------------------------ -->
                           <div class="col-sm-2" >
                              <div class="r_dee_br">
                                 <br>
                              </div>
                              <button type="button" class="btn btn-block bg-gradient-primary btn-sm"  onclick="window.location='trace_detail_buy.html'" style="width: 100%">ประวัติการซื้อ</button>
                           </div>
                        </div>
                        <!-- <button type="button" class="btn btn-block bg-gradient-primary btn-sm" style="width: 10%">import</button> -->
                     </div>
                     <!-- --------------------------------/แจก------------------------- -->
                     <!-- /.card-header -->
                     <div class="card-body">
                        <!-- ---------------------------- sch---------------------- -->
                        <div class="row">
                           <div class="col-sm-2">
                              <select class="form-control select2bs4" style="width: 100%;">
                                 <option selected="selected">-- เลือกครั้งที่แจก --</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                              </select>
                           </div>
                           <div class="col-sm-1">
                              <button type="button" class="btn btn-block bg-gradient-primary btn-sm" data-toggle="modal" data-target="#modal-default" style="width: 100%">ค้นหา</button>
                           </div>
                           <!-- <div class="col-sm-4"></div> -->
                        </div>
                        <br>
                        <!-- ---------------------------/ sch---------------------- -->
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <!-- <th style="width: 7%">รอบที่แจก</th> -->
                                 <th style="width: 7%">รอบที่ติดตาม</th>
                                 <th style="width: 7%">จำนวนที่ได้รับ</th>
                                 <th style="width: 7%">จำนวนที่เหลือ</th>
                                 <th style="width: 6%">จำนวนที่เพิ่ม</th>
                                 <th style="width: 3%">รวม</th>
                                 <th style="width: 3%">หมายเหตุ</th>
                                 <th style="width: 2%">ซื้อ</th>
                                 <th style="width: 2%">แก้ไข</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <!-- <td>รอบ 1</td> -->
                                 <td>ติดตาม 1</td>
                                 <td>5</td>
                                 <td>3</td>
                                 <td>6</td>
                                 <td>3</td>
                                 <td>
                                    <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='trace_detail.html'"  style="width: 70%"><i class="far fa-eye"></i></button>
                                 </td>
                                 <td>
                                    <div class="evaluate1">
                                       <button type="button" class="btn btn-block btn-primary btn-xs" style="width: 70%" onclick="window.location='bee_buy_phone.html'"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                    <div class="evaluate">
                                       <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#myModal1"  style="width: 70%"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                    <!-- ------------------------model------------------------ -->
                                    <div class="modal" id="myModal1">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <!-- Modal Header -->
                                             <div class="modal-header">
                                                <h4 class="modal-title">ซื้อ</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             </div>
                                             <!-- Modal body -->
                                             <div class="modal-body">
                                                <form action="trace_detail_buy.html" method="get">
                                                   <div class="row">
                                                      <div class="col-md-5">
                                                         วันที่ : 22/06/2563 <br><br>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         จำนวนไก่ที่ซื้อ :<br>
                                                         <input class="form-control" type="text" name="gender" >
                                                      </div>
                                                      <div class="col-md-6">
                                                         น้ำหนัก :<br>
                                                         <input class="form-control" type="text" name="gender" >
                                                      </div>
                                                      <div class="col-md-6">
                                                         จำนวนเงิน :<br>
                                                         <input class="form-control" type="text" name="gender" >
                                                      </div>
                                                   </div>
                                                      
                                                   <div class="form-group" style="">
                                                      <br>
                                                      หมายเหตุ<br>
                                                      <div class="row">
                                                         <div class="col-md-12">
                                                            <textarea class="form-control" rows="4" id="comment"></textarea>
                                                         </div>
                                                         <div class="col-md-2">
                                                            <br>
                                                            <button type="button" class="btn btn-primary" onclick="window.location='trace_detail_buy.html'">บันทึก</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </form>
                                             </div>
                                             <!-- Modal footer -->
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- ------------------------/model------------------------ -->
                                 </td>
                                 <td>
                                    <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='trace_edit.html'"><i class="fas fa-edit"></i></button>
                                 </td>
                              </tr>
                              <tr>
                                 <!-- <td>รอบ 1</td> -->
                                 <td>ติดตาม 2</td>
                                 <td>5</td>
                                 <td>5</td>
                                 <td>6</td>
                                 <td>3</td>
                                 <td>
                                    <button type="button" class="btn btn-block btn-primary btn-xs" onclick="window.location='trace_detail.html'" style="width: 70%"><i class="far fa-eye"></i></button>
                                 </td>
                                 <td>
                                    <div class="evaluate1">
                                       <button type="button" class="btn btn-block btn-primary btn-xs" style="width: 70%" onclick="window.location='bee_buy_phone.html'"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                    <div class="evaluate">
                                       <button type="button" class="btn btn-block btn-primary btn-xs" data-toggle="modal" data-target="#myModal2"  style="width: 70%"><i class="fas fa-shopping-cart"></i></button>
                                    </div>
                                    <!-- ------------------------model------------------------ -->
                                    <div class="modal" id="myModal2">
                                       <div class="modal-dialog">
                                          <div class="modal-content">
                                             <!-- Modal Header -->
                                             <div class="modal-header">
                                                <h4 class="modal-title">ซื้อ</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             </div>
                                             <!-- Modal body -->
                                             <div class="modal-body">
                                                <form action="trace_detail_buy.html" method="get">
                                                   <div class="row">
                                                      <div class="col-md-5">
                                                         วันที่ : 22/06/2563 <br><br>
                                                      </div>
                                                   </div>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         จำนวนไก่ที่ซื้อ :<br>
                                                         <input class="form-control" type="text" name="gender" >
                                                      </div>
                                                      <div class="col-md-6">
                                                         น้ำหนัก :<br>
                                                         <input class="form-control" type="text" name="gender" >
                                                      </div>
                                                      <div class="col-md-6">
                                                         จำนวนเงิน :<br>
                                                         <input class="form-control" type="text" name="gender" >
                                                      </div>
                                                   </div>
                                                      
                                                   <div class="form-group" style="">
                                                      <br>
                                                      หมายเหตุ<br>
                                                      <div class="row">
                                                         <div class="col-md-12">
                                                            <textarea class="form-control" rows="4" id="comment"></textarea>
                                                         </div>
                                                         <div class="col-md-2">
                                                            <br>
                                                            <button type="button" class="btn btn-primary" onclick="window.location='trace_detail_buy.html'">บันทึก</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </form>
                                             </div>
                                             <!-- Modal footer -->
                                             <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- ------------------------/model------------------------ -->
                                 </td>
                                 <td>
                                    <button type="button" class="btn btn-block btn-success btn-xs" onclick="window.location='trace_edit.html'"><i class="fas fa-edit"></i></button>
                                 </td>
                              </tr>
                              </tfoot>
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
      <script src="../../../plugins/jquery/jquery.min.js"></script>
      <!-- Bootstrap 4 -->
      <script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- DataTables -->
      <script src="../../../plugins/datatables/jquery.dataTables.min.js"></script>
      <script src="../../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
      <script src="../../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
      <script src="../../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../../../dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="../../../dist/js/demo.js"></script>
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