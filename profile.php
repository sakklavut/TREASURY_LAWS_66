<?php include('comtop.php'); ?>
<?php include('header.php'); ?>

 <section class="bg_profile"> 
     <div class="container">
          <div class="row">
               <div class="col-xl-12 p-2 text-right">
                    <a href="index.php"><img src="icon/circle-arrow-left-solid.svg" alt=""></a> 
               </div>
          </div>


          <div class="row">
               <div class="col-xl-4 col-md-12 col-sm-12 col-12 ">
                  <div class="row">
                              <div class="col-xl-12">
                                   <div class="row">
                                        <div class="col-12">
                                             <img class="rounded-circle img_profile" src="image/profile/profile.jpg" alt="">
                                        </div>
									</div>
								  <div class="row">
											<div class="col-12">
												 <h4 class="text_profile">วสุรัตน์ คนหาญ</h4>
											</div>
								  </div>
								  <div class="row">
											<div class="col-12">
												 <div class="d-flex">
													  <div class="m-1">
														   <img src="image/profile/Businessman.svg" alt="">
													  </div>
													  <div class="m-1">
														   <h4>นักวิชาการคอมพิวเตอร์</h4>
													  </div>
												 </div>
											</div>
								  </div>
								  <div class="row">
											<div class="col-12">
												 <div class="d-flex">
													  <div class="m-1">
														   <img src="image/profile/Business.svg" alt="">
													  </div>
													  <div class="m-1">
														   <h4>กรมธนารักษ์</h4>
													  </div>
												 </div>
											</div>
								  </div>
								  <div class="row">
											<div class="col-12">
												 <div class="d-flex">
													  <div class="m-1">
														   <img src="image/profile/Email.svg" alt="">
													  </div>
													  <div class="m-1">
														   <h4>kh.wasurat@gmail.com</h4>
													  </div>
												 </div>
											</div>
								  </div>
								  <div class="row">
											<div class="col-12">
												 <div class="d-flex">
													  <div class="m-1">
														   <img src="image/profile/Phone.svg" alt="">
													  </div>
													  <div class="m-1">
														   <h4>083-xxx-xxxx</h4>
													  </div>
												 </div>
											</div>
								  </div>
									<div class="row">
											<div class="col-12">
												 <button type="submit" class="btn btn_search box_btn" data-bs-toggle="modal" data-bs-target="#edit_profile" title="แก้ไขข้อมูลส่วนตัว">แก้ไขข้อมูลส่วนตัว</button>
											</div>
									</div>
							</div>
						</div>
					</div>
               <div class="col-xl-8  col-md-12 col-sm-12 col-12">
                    <div class="row mt-3">
                         <div class="col-xl-12">
                              <div class="row margin_tab_content">
                                   <div class="d-flex justify-content-between">
                                        <div>
                                             <nav>
                                                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                       <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"  aria-selected="true">
                                                             <div class="d-flex">
                                                                 <div class="m-1">
                                                                       <img src="image/book/icon_dtal_book.svg" alt="">
                                                                 </div>
                                                                 <div class="m-1">
                                                                      <h4>รายการยืมปัจจุบัน</h4>
                                                                 </div>
                                                             </div>
                                                       </button>
                                                       <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab"   aria-selected="false">
                                                            <div class="d-flex">
                                                                 <div class="m-1">
                                                                       <img src="icon/icon_cloke.svg" alt="">
                                                                 </div>
                                                                 <div class="m-1">
                                                                      <h4>ประวัติ</h4>
                                                                 </div>
                                                             </div>
                                                       </button>
                                                  </div>
                                             </nav>
                                        </div>
                                        <div class="d-flex">
                                             <div class="m-1">
                                                  <img src="icon/icon_red.svg" alt="">
                                             </div>
                                             <div class="m-1">
                                                  เลยกำหนด
                                             </div>
                                             <div class="m-1">
                                                  <img src="icon/icon_org.svg" alt="">
                                             </div>
                                             <div class="m-1">
                                                  จอง
                                             </div>
                                             <div class="m-1">
                                                  <img src="icon/icon_bule.svg" alt="">
                                             </div>
                                             <div class="m-1">
                                                   ยืม
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="tab-content" id="nav-tabContent">
                                   <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                                        <div class="row">
                                             <div class="col-xl-12">
                                                  <div class="table-responsive">
                                                       <table class="table  table-hover">
                                                            <thead class="bg_table">
                                                                 <tr>
                                                                      <th scope="col">ลำดับ</th>
                                                                      <th scope="col">วันที่ยืม</th>
                                                                      <th scope="col">วันที่กำหนดส่ง</th>
                                                                      <th scope="col">เลขเรียกหนังสือ</th>
                                                                      <th scope="col" class="widit_tabe">ชื่อหนังสือ</th>
                                                                      <th scope="col">สถานะ</th>
                                                                      <th scope="col" colspan="2">ค่าปรับ</th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <tr>
                                                                      <th scope="row">1</th>
                                                                      <td>20 ก.พ. 66</td>
                                                                      <td>
                                                                           26 ก.พ. 66
                                                                      </td>
                                                                      <td>
                                                                           W21 จ683ธก 2565 C2
                                                                      </td>
                                                                      <td>
                                                                           <u class="text_name_book"> Gray's anatomy </u>
                                                                      </td>
                                                                      <td>
                                                                           
                                                                           <p class="already">  จองแล้ว</p>
                                                                      </td>
                                                                      <td>
                                                                           ไม่มี
                                                                      </td>
                                                                      <td>
                                                                           <u class="text_name_book"> ยืมต่อ  </u>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th scope="row">2</th>
                                                                      <td>17 ก.พ. 66</td>
                                                                      <td>
                                                                           22 ก.พ. 66
                                                                      </td>
                                                                      <td>
                                                                           W21 จ683ธก 2565 C2
                                                                      </td>
                                                                      <td>
                                                                                <u class="text_name_book">  medical microbiology </u>
                                                                      </td>
                                                                      <td>
                                                                           <p class="borrowing"> กำลังยืม</p>
                                                                      </td>
                                                                      <td>
                                                                           ไม่มี
                                                                      </td>
                                                                      <td>
                                                                           <u class="text_name_book"> ยืมต่อ  </u>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th scope="row">3</th>
                                                                      <td>10 ก.พ. 66</td>
                                                                      <td>
                                                                           16 ก.พ. 66
                                                                      </td>
                                                                      <td>
                                                                           พ 15 018598 2561
                                                                      </td>
                                                                      <td>
                                                                      <u class="text_name_book">   การทดสอบความแม่นยำของการ ตรวจวัดดัชนีการตกผลึกแคลเซี่ยมออกซาเลต  </u>        
                                                                      </td>
                                                                      <td>
                                                                           <p class="past">  เลยกำหนด     </p>             
                                                                      </td>
                                                                      <td>
                                                                           10 -
                                                                      </td>
                                                                      <td>
                                                                           <u class="text_name_book"> ยืมต่อ  </u>
                                                                      </td>
                                                                 </tr>
                                                            </tbody>
                                                       </table>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                                        <div class="table-responsive">
                                             <table class="table  table-hover">
                                                       <thead class="bg_table">
                                                            <tr>
                                                                 <th scope="col">ลำดับ</th>
                                                                 <th scope="col">วันที่ยืม</th>
                                                                 <th scope="col">วันที่กำหนดส่ง</th>
                                                                 <th scope="col">เลขเรียกหนังสือ</th>
                                                                 <th scope="col" class="widit_tabe">ชื่อหนังสือ</th>
                                                                 <th scope="col" colspan="3">สถานะ</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <th scope="row">1</th>
                                                                 <td>20 ก.พ. 66</td>
                                                                 <td>
                                                                      26 ก.พ. 66
                                                                 </td>
                                                                 <td>
                                                                       W21 จ683ธก 2565 C2
                                                                 </td>
                                                                 <td>
                                                                       <u class="text_name_book"> Gray's anatomy </u>
                                                                 </td>
                                                                 <td>
                                                                      หลุดจอง
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <th scope="row">2</th>
                                                                 <td>17 ก.พ. 66</td>
                                                                 <td>
                                                                       22 ก.พ. 66
                                                                 </td>
                                                                 <td>
                                                                       W21 จ683ธก 2565 C2
                                                                 </td>
                                                                 <td>
                                                                           <u class="text_name_book">  medical microbiology </u>
                                                                 </td>
                                                                 <td>
                                                                      คืนแล้ว
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <th scope="row">3</th>
                                                                 <td>10 ก.พ. 66</td>
                                                                 <td>
                                                                       16 ก.พ. 66
                                                                 </td>
                                                                 <td>
                                                                       พ 15 018598 2561
                                                                 </td>
                                                                 <td>
                                                                 <u class="text_name_book">   การทดสอบความแม่นยำของการ ตรวจวัดดัชนีการตกผลึกแคลเซี่ยมออกซาเลต  </u>        
                                                                 </td>
                                                                 <td>
                                                                      คืนแล้ว
                                                                 </td>
                                                            </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section> 

<!-- Modal -->
<div class="modal fade" id="edit_profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text_edit_profile" id="exampleModalLabel">แก้ไขข้อมูลส่วนตัว</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div>
               <div class="input-group has-validation mb-1">
                    <span class="input-group-text" id="inputGroupPrepend">
                              <img src="image/profile/Email.svg" alt="">
                    </span>
                    <input type="email" class="form-control pass-swap" placeholder="e-mail">
                      <span class="input-group-text input-group-append" id="inputGroupPrepend">
                              <img src="icon/edit.svg" alt="">
                      </span>
                </div>
                <div class="input-group has-validation mb-1">
                    <span class="input-group-text" id="inputGroupPrepend">
                          <img src="image/profile/Phone.svg" alt="">
                    </span>
                    <input type="text" class="form-control pass-swap" placeholder="xxx-xxx-xxxx">
                      <span class="input-group-text input-group-append" id="inputGroupPrepend">
                         <img src="icon/edit.svg" alt="">
                      </span>
                </div>
                <div class="input-group has-validation mb-1">
                    <span class="input-group-text" id="inputGroupPrepend">
                        <img src="icon/login_pro.svg" alt="">
                    </span>
                    <input type="password" class="form-control pass-swap" placeholder="กรอกเปลี่ยนรหัสผ่าน">
                      <span class="input-group-text input-group-append" id="inputGroupPrepend">
                              <i class="fa fa-eye icon_eye_pro"></i>
                      </span>
                </div>
          </div>
      </div>
      <div class="modal-footer">
           <button type="button" class="btn btn-primary btn_save">บันทึกข้อมูล</button>
        <button type="button" class="btn btn-secondary btu_cancel" data-bs-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</div>



<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>