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
               <div class="col-xl-4">
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
												 <button type="submit" class="btn btn_search box_btn" title="ค้นหา">แก้ไขข้อมูลส่วนตัว</button>
											</div>
									</div>
							</div>
						</div>
					</div>
               <div class="col-xl-8">
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
                                                  <table class="table  table-hover">
                                                       <thead class="bg_table">
                                                            <tr>
                                                                 <th scope="col">ลำดับ</th>
                                                                 <th scope="col">วันที่ยืม</th>
                                                                 <th scope="col">วันที่กำหนดส่ง</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <th scope="row">1</th>
                                                                 <td>W21 จ683ธก 2565</td>
                                                                 <td>
                                                                      <p class="text_Status_green">อยู่บนชั้น</p>
                                                                 </td>
                                                                 <td>
                                                                      <button type="submit" class="btn btn_info_book"><a href="#"> จอง </a></button>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <th scope="row">2</th>
                                                                 <td>W21 จ683ธก 2565 C2</td>
                                                                 <td>
                                                                      <p class="text_Status_org"> ถูกจองแล้ว</p>
                                                                 </td>
                                                                 <td>
                                                                      <button type="submit" class="btn btn_info_book"><a href="#"> จอง </a></button>
                                                                 </td>
                                                            </tr>
                                                            <tr>
                                                                 <th scope="row">3</th>
                                                                 <td>
                                                                      W21 จ683ธก 2565 C3
                                                                 </td>
                                                                 <td>
                                                                      <p class="text_Status_bule"> ถูกยืมแล้ว</p>
                                                                 </td>
                                                                 <td>
                                                                      <button type="submit" class="btn btn_info_book"><a href="#"> จอง </a></button>
                                                                 </td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">.222..</div>
                                   <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">..333.</div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section> 




<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>