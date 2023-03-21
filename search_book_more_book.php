<div class="container">
     <div class="row">
          <div class="col-xl-12 p-2 text-right">
                <a href="index.php"><img src="icon/circle-arrow-left-solid.svg" alt=""></a> 
          </div>
     </div>
     <div class="row">
          <div class="col-xl-12 text-center">
                <h1 class="text_search">ค้นหาหนังสือ</h1>
          </div>
     </div>
     <div class="row">
          <div class="col-12 col-sm-3">
                <select class="form-select form_title" aria-label="Default select example">
                    <label for="" class="name_title">ชื่อเรื่อง</label>
                         <option selected>ชื่อเรื่อง</option>
                         <option value="1">เลขทะเบียนหนังสือ</option>
                         <option value="2">ISBN</option>
                         <option value="3">สำนักพิมพ์</option>
                         <option value="3">ชื่อผู้แต่ง</option>
                         <option value="3">หัวเรื่อง</option>
                         <option value="3">ปีที่เพิมพ์</option>
               </select>
          </div>
          <div class="col-12 col-sm-5">
               <div class="row">
                    <div class="col-12">
                         <div class="input-group has-validation form_search">
                              <span class="input-group-text">
                                   <img src="icon/magnifying-glass-solid.svg" alt="">
                              </span>
                              <input type="text" class="form-control shadow-sm" id="inputsearch" placeholder="ค้นหาหนังสือที่น่าสนใจ" aria-describedby="inputGroupPrepend" srequired>
                              <div class="invalid-feedback"></div>
                         </div>
                    </div>
               </div>
               <div class="row">
                    <div class="col-4">
                         <button type="submit" class="btn btn_tag mb-1">หนังมือใหม่</button>
                    </div>
                    <div class="col-4">
                         <button type="submit" class="btn btn_tag mb-1">หนังสื่อยอดนิยม 10 อันดับ</button>
                    </div>
                    <div class="col-4">
                          <button type="submit" class="btn btn_tag mb-1">ภาพกิจกรรม</button>
                    </div>
               </div>
          </div>
          <div class="col-12 col-sm-4">
               <div class="row">
                    <div class="col-sm-6">
                          <a href="search_sub.php"><button type="submit" class="btn btn_search box_btn" title="ค้นหา">ค้นหา</button> </a>
                    </div>  
                    <div class="col-sm-6">
                          <a href="advance_search.php"><button type="submit" class="btn btn_advanced box_btn" title="ค้นหาขั้นสูง">ค้นหาขั้นสูง</button> </a>
                    </div>  
               </div>
          </div>
     </div>
</div>

<div class="container mt-5">
     <div class="row d-flex align-items-start">
          <div class="col-xl-3 col-5">
              <div class="row">
                    <div class="col-xl-12">
                         <h4 class="tyde_book">ประเภทหนังสือ</h4>    
                    </div>
              </div>
              <div class="row border_right">
                    <div class="col-xl-12">
                         <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <button class="nav-link but_more_book active"  data-bs-toggle="pill" data-bs-target="#tab_1" type="button"  aria-selected="true">
                                   <div class="row">
                                        <div class="box_all_more_book">
                                             <div class="box_icon_more_book">
                                                   <img src="icon_more_book/test.svg" alt="">
                                             </div>
                                             <div class="po_tyde_book">
                                                  <p class="po_tyde_book">000-สารสนเทศและเบ็ดเตล็ด</p>
                                             </div>
                                        </div>
                                   </div>
                              </button>
                              <button class="nav-link but_more_book"  data-bs-toggle="pill" data-bs-target="#tab_2" type="button" role="tab"  aria-selected="false">
                                   <div class="row">
                                        <div class="box_all_more_book">
                                             <div class="box_icon_more_book">
                                                   <img src="icon_more_book/Group 796.svg" alt="">
                                             </div>
                                             <div class="po_tyde_book">
                                                  <p class="po_tyde_book">100-ปรัชญาและจิตวิทยา</p>
                                             </div>
                                        </div>
                                   </div>
                              </button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_3" type="button" role="tab"  aria-selected="false">3</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_4" type="button" role="tab"  aria-selected="false">4</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_5" type="button" role="tab"  aria-selected="false">5</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_6" type="button" role="tab"  aria-selected="false">6</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_7" type="button" role="tab"  aria-selected="false">7</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_8" type="button" role="tab"  aria-selected="false">8</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_9" type="button" role="tab"  aria-selected="false">9</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_10" type="button" role="tab"  aria-selected="false">10</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_11" type="button" role="tab"  aria-selected="false">11</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_12" type="button" role="tab"  aria-selected="false">12</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_13" type="button" role="tab"  aria-selected="false">13</button>
                              <button class="nav-link"  data-bs-toggle="pill" data-bs-target="#tab_14" type="button" role="tab"  aria-selected="false">14</button>
                          </div>    
                    </div>
              </div>
          </div>
          <div class="col-xl-9 col-7">
               <div class="row">
                    <div class="col-xl-12">
                         <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="tab_1" role="tabpanel" tabindex="0">
                                   <div class="row">
                                        <div class="col-xl-4 col-12">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4 col-12">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4 col-12">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row d-none d-sm-block">
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row d-none d-sm-block">
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="container d-flex justify-content-center mt-3 d-none d-sm-block">
                                        <div class="row">
                                             <nav aria-label="Page navigation example">
                                                  <ul class="pagination">
                                                       <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                       <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                       <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                  </ul>
                                             </nav>
                                        </div>
                                   </div>
                              </div>
                              <div class="tab-pane fade" id="tab_2" role="tabpanel"  tabindex="0">
                                   <div class="row">
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row d-none d-sm-block">
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row d-none d-sm-block">
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-xl-4">
                                             <div>
                                                  <img  class="cover_new" src="image/book/book_2.svg" alt="">
                                                  <div class="d-flex justify-content-end box_view">
                                                       <div class="me-2"> 
                                                            <img src="icon/icon_eye_book.svg" alt="">
                                                       </div>
                                                       <div>
                                                             <p class="view">25</p>
                                                        </div>
                                                  </div>
                                                  <div>
                                                       <div>
                                                            <a href="http://" target="_blank" title="Lorem Ipsum is simply dummy text">
                                                                 <p class="text_haeader_card">Lorem Ipsum is simply dummy text</p>
                                                            </a>  
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="container d-flex justify-content-center mt-3 d-none d-sm-block">
                                        <div class="row">
                                             <nav aria-label="Page navigation example">
                                                  <ul class="pagination">
                                                       <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                       <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                       <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                  </ul>
                                             </nav>
                                        </div>
                                   </div>
                              </div>

                              <div class="tab-pane fade" id="tab_3" role="tabpanel"  tabindex="0">..3.</div>
                              <div class="tab-pane fade" id="tab_4" role="tabpanel"  tabindex="0">.4..</div>
                              <div class="tab-pane fade" id="tab_5" role="tabpanel"  tabindex="0">.5..</div>
                              <div class="tab-pane fade" id="tab_6" role="tabpanel"  tabindex="0">.6..</div>
                              <div class="tab-pane fade" id="tab_7" role="tabpanel"  tabindex="0">.7..</div>
                              <div class="tab-pane fade" id="tab_8" role="tabpanel"  tabindex="0">.8..</div>
                              <div class="tab-pane fade" id="tab_9" role="tabpanel"  tabindex="0">.9..</div>
                              <div class="tab-pane fade" id="tab_10" role="tabpanel"  tabindex="0">.10..</div>
                              <div class="tab-pane fade" id="tab_11" role="tabpanel"  tabindex="0">.11..</div>
                              <div class="tab-pane fade" id="tab_12" role="tabpanel"  tabindex="0">.12..</div>
                              <div class="tab-pane fade" id="tab_13" role="tabpanel"  tabindex="0">.13..</div>
                              <div class="tab-pane fade" id="tab_14" role="tabpanel"  tabindex="0">.14..</div>
                         </div>
                    </div>
               </div> 
          </div>
     </div>
</div>
