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
<div class="container ">
     <div class="row">
          <div class="col-10">
               <div class="d-flex">
                    <div class="box_icon_search">
                         <img src="icon/magnifying-glass-solid.svg" class="icon_search_results_w" title="ค้นหา" alt="">
                    </div>
                    <div class="box_search_results">
                         <h4 class="search_results">การค้นหาขั้นสูง</h4>
                    </div>
               </div>
          </div>
          <div class="col-2 ">
               <button type="submit" class="btn btn_en shadow-sm" onclick="EN()"> 
                    <b class="text_EN">EN</b>
               </button>
          </div>
     </div>
    <hr class="hr_search">
</div>

<div class="container">
     <div class="row">
          <div class="col-sm-2">
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
          <div class="col-sm-6">
               <input class="form-control advance_me" type="text" >
          </div>
          <div class="col-sm-2">
               <select class="form-select mb-2" aria-label="Default select example">
                    <option selected id="and">และ</option>
                    <option value="1">หรือ</option>
                    <option value="2">ไม่ใช่</option>
               </select>
          </div>
          <div class="col-sm-2">
               <button class="btn btn_add mb-3 saveBtn"> 
                    <img src="icon/plus-solid_add_advace.svg" class="icon_more" alt="">
               </button>
          </div>
     </div>
</div>




<!-- <div class="container">
     <div class="btn_en_add">
                <button class="btn btn_add mb-3 saveBtn"> 
                          <img src="icon/plus-solid_add_advace.svg" class="icon_more" alt="">
               </button>
     </div>
     <form action="">
          <div class="form_top">
               
               <div class="me_form">
                    <div class="d-flex">
                         <select class="form-select mb-2" aria-label="Default select example">
                              <label for=""  class="name_title" id="title">ชื่อเรื่อง</label>
                                   <option selected  id="title">ชื่อเรื่อง</option>
                                   <option value="1" id="number_book">เลขทะเบียนหนังสือ</option>
                                   <option value="2" id="I1">ISBN</option>
                                   <option value="4" id="publisher">สำนักพิมพ์</option>
                                   <option value="5" id="author_name">ชื่อผู้แต่ง</option>
                                   <option value="6" id="heading">หัวเรื่อง</option>
                                   <option value="7" id="year">ปีที่เพิมพ์</option>
                              </select>
                         </div>
                    </div>
               <div class="me_form">
                    <input class="form-control advance_me" type="text" >
               </div>
               <div class="me_form">
                    <div class="d-flex">
                              <select class="form-select mb-2" aria-label="Default select example">
                                        <option selected id="and">และ</option>
                                        <option value="1">หรือ</option>
                                        <option value="2">ไม่ใช่</option>
                              </select>
                    </div>
               </div>
          </div>
          
          <div class="form_top" style="display: none" id="myDIV0">
               <div class="me_form">
                    <div class="d-flex">
                         <select class="form-select mb-2" aria-label="Default select example">
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
                    </div>
               <div class="me_form">
                    <input class="form-control advance_me" type="text" >
               </div>
               <div class="me_form">
                    <div class="d-flex">
                              <select class="form-select mb-2" aria-label="Default select example">
                                        <option selected>หรือ</option>
                                        <option value="1">และ</option>
                                        <option value="2">ไม่ใช่</option>
                              </select>
                    </div>
               </div>
          </div>
          <div class="form_top" style="display: none" id="myDIV1">
               <div class="me_form">
                    <div class="d-flex">
                         <select class="form-select mb-2" aria-label="Default select example">
                              <label for="" class="name_title" id="title">ชื่อเรื่อง</label>
                                   <option selected>ชื่อเรื่อง</option>
                                   <option value="1">เลขทะเบียนหนังสือ</option>
                                   <option value="2">ISBN</option>
                                   <option value="3">สำนักพิมพ์</option>
                                   <option value="3">ชื่อผู้แต่ง</option>
                                   <option value="3">หัวเรื่อง</option>
                                   <option value="3">ปีที่เพิมพ์</option>
                              </select>
                         </div>
                    </div>
               <div class="me_form">
                    <input class="form-control advance_me" type="text" >
               </div>
               <div class="me_form">
                    <div class="d-flex">
                              <select class="form-select mb-2" aria-label="Default select example">
                                        <option selected>ไม่ใช่</option>
                                        <option value="1">หรือ</option>
                                        <option value="2">ไม่ใช่</option>
                              </select>
                    </div>
               </div>
          </div>


     


          <div class="form_bm">
                    <div class="d-flex me_form">
                         <label for="" class="name_title" id="location"> สถานที่</label> 
                              <select class="form-select mb-2 advance_me_location " aria-label="Default select example">
                                   <option selected></option>
                                   <option value="1">หรือ</option>
                                   <option value="2">ไม่ใช่</option>
                              </select>
                    </div>
                    <div class="d-flex me_form">
                         <label for="" class="name_title" id="language">ภาษา</label> 
                              <select class="form-select mb-2 advace_me_language" aria-label="Default select example">
                                   <option selected></option>
                                   <option value="1">หรือ</option>
                                   <option value="2">ไม่ใช่</option>
                              </select>
                    </div>
                    <div class="me_form">
                         <button type="submit" class="btn btn_search but-h advace_me_search" title="ค้นหา">
                              ค้นหา
                         </button> 
                    </div>
          </div>
     </form>
</div>
<div class="container">
    <div class="row">
          <div class="col-6 col-sm-3">
                <div>
                    <img class="cover_new" src="image/book/book_1.svg" alt="">
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
          <div class="col-6 col-sm-3">
                <div>
                    <img class="cover_new" src="image/book/book_2.svg" alt="">
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
          <div class="col-6 col-sm-3">
                <div>
                    <img class="cover_new" src="image/book/book_2.svg" alt="">
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
          <div class="col-6 col-sm-3">
                <div>
                    <img class="cover_new" src="image/book/book_2.svg" alt="">
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
    <div class="row">
          <div class="col-6 col-sm-3">
                <div>
                    <img class="cover_new" src="image/book/book_3.svg" alt="">
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
          <div class="col-6 col-sm-3">
                <div>
                    <img class="cover_new" src="image/book/book_4.svg" alt="">
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
          <div class="col-6 col-sm-3">
                <div>
                    <img class="cover_new" src="image/book/book_4.svg" alt="">
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
          <div class="col-6 col-sm-3">
                <div>
                    <img class="cover_new" src="image/book/book_4.svg" alt="">
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
</div> -->
<div class="container d-flex justify-content-center">
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

<script>
btns = document.getElementsByClassName("saveBtn");
btns[0].addEventListener('click', function() {
  for (var i = 0; i <= 2; i++) {
    var id = 'myDIV' + i;
    var element = document.getElementById(id);
    var setting = (element) ? element.style.display : '';

    if (setting == 'none') {
      element.style.display = 'flex';
      break;
    }
  }
})

</script>

<script>

const a1=document.getElementById('location');
const a2=document.getElementById('language');
const a3=document.getElementById('title');
const a4=document.getElementById('number_book');

const b1=document.getElementByid('and');

function EN(){
     a1.innerText="location";
     a2.innerText="language";
     a3.innerText="title";
     a4.innerText="book number";


     b1.innerText="location";
}
</script>

