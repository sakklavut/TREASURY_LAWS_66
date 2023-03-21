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
          <a class="nav-link" href="#"title="หนังสือทั้งหมด" >หนังสือทั้งหมด</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="แนะนำหนังสือ/สอบถาม" >แนะนำหนังสือ/สอบถาม</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" title="ติดต่อเรา">ติดต่อเรา</a>
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
               <button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="icon/user-solid.svg" title="ข้อมูลส่วนตัว" alt="">
               </button>
          </div>
      </div>
    </div>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content shadow-lg p-4  bg-white rounded">
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
              <div class="col-xl-12 text-center mt-1">
                     <a href=""><p class="forgot_password m-0" >? ลืมรหัสผ่าน</p></a>
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
                 <button type="submit" class="btn btn_login"><a href="#"> เข้าสุ่ระบบ </a></button>
              </div>
          </div>
      </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content shadow-lg p-4  bg-white rounded">
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
              <div class="col-xl-12 text-center mt-1">
                     <a href=""><p class="forgot_password m-0">? ลืมรหัสผ่าน</p></a>
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
              <div class="col-xl-12 text-center"></div>
                 <button type="submit" class="btn btn_login"><a href="#"> เข้าสุ่ระบบ </a></button>
              </div>
          </div>
          <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>

      </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
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