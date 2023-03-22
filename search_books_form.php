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