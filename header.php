<nav class="navbar navbar-expand-lg bg_menu">
  <div class="container">
     <div class="area_logo">
          <div class="d-flex">
               <div class="box_logo">
                  <a href="index.php"> 
                      <img class="logo" src="image/logo.png" alt=""> 
                  </a>
               </div>
               <div class="box_text_logo">
                    <span class="text-white text_logo">ห้องสมุดกรมธนารักษ์ <br> E-Library</span>
               </div>
          </div>
     </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu_text_color">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#" title="โครงสร้างห้องสมุด">โครงสร้างห้องสมุด</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="more_book.php"title="หนังสือทั้งหมด" >หนังสือทั้งหมด</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recommend.php" title="แนะนำหนังสือ/สอบถาม" >แนะนำหนังสือ/สอบถาม</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" title="ติดต่อเรา">ติดต่อเรา</a>
        </li>
      </ul>

      <div class="d-flex">
          <div class="m-1">
            <a href="search_sub.php">
               <button type="button" class="btn btn-white">
                    <img src="icon/magnifying-glass-solid.svg" title="ค้นหา" alt="">
               </button>
            </a>
          </div>
          <div class="m-1">
               <button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#login">
                    <img src="icon/user-solid.svg" title="ข้อมูลส่วนตัว" alt="">
               </button>
          </div>
      </div>
    </div>
  </div>
</nav>




<!-- Modal login -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
         <div class="row">
              <div class="col-xl-12 text-center">
                  <h1 class="h_login">ห้องสมุด<br>กรมธนารักษ์</h1>
              </div>
         </div>
         <div class="row">
             <div class="col-xl-12">
                <div class="input-group has-validation mb-1">
                    <span class="input-group-text" id="inputGroupPrepend">
                      <img src="icon/Vector.svg" alt="">
                    </span>
                       <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                </div>
              </div>
         </div>
         <div class="row">
            <div class="col-xl-12">
                <div class="input-group has-validation mb-1">
                    <span class="input-group-text" id="inputGroupPrepend">
                        <img src="icon/login.svg" alt="">
                    </span>
                    <input type="password" class="form-control pass-swap" placeholder="Password">
                      <span class="input-group-text input-group-append" id="inputGroupPrepend">
                              <i class="fa fa-eye icon_eye"></i>
                      </span>
                </div>
              </div>
         </div>
         <div class="row">
            <div class="col-xl-12 col-xl-12 text-center mt-1">
                     <p class="forgot_password m-0" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >? ลืมรหัสผ่าน</p>
            </div>
         </div>
         <div class="row">
              <div class="col-xl-12">
                 <div class="form-check check_login">
                  <input class="form-check-input pass-swap" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        ยอมรับข้อปฏิบัติตามเงื่อนไข
                    </label>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-xl-12 text-center">
                 <button type="submit" class="btn btn_login"><a href="profile.php"> เข้าสุ่ระบบ </a></button>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>







<!-- Modal รีเซตรหัสผ่าน -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text_edit_profile" id="staticBackdropLabel">รีเซตรหัสผ่าน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-xl-12">
                <div class="input-group has-validation mb-1">
                      <span class="input-group-text" id="inputGroupPrepend">
                                <img src="image/profile/Email.svg" alt="">
                      </span>
                      <input type="email" class="form-control pass-swap" placeholder="e-mail">
                  </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn_save">ยืนยัน</button>
        <button type="button" class="btn btn-secondary btu_cancel" data-bs-dismiss="modal">ยกเลิก</button>
      </div>
    </div>
  </div>
</div>






<script type="text/javascript">
$(function(){
     // กรณีใช้ร่วมกับ bootstrap และ fontawesome 
     $(document.body).on("click","[class*='fa-eye']",function(){
         $(this).toggleClass("fa-eye-slash fa-eye");  
         let ele = $(this).closest(".input-group-append").siblings(".pass-swap");
         let swap_attr = (ele.attr("type")=="password")?"text":"password";
         ele.attr("type",swap_attr);         
     });     
});
</script>