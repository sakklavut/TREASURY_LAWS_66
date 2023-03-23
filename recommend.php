<?php include('comtop.php'); ?>
<?php include('header.php'); ?>




<section class="bg_top_Other">
     <div class="container">
          <div class="row">
               <div class="col-xl-12 p-2 text-right">
                    <a href="index.php"><img src="icon/circle-arrow-left-solid.svg" alt=""></a>
               </div>
          </div>


          <h2 class="txt-white text-center pt-5">แนะนำหนังสือและสอบถาม</h2>

     </div>
     </div>
</section>

<div class="container pt-5 pb-5 px-3">
     <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-12"></div>
          <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">

               <select class="form-select" aria-label="Default select example">
                    <option selected disabled>หัวข้อที่ท่านอยากแนะนำ</option>
                    <option value="1">แนะนำหนังสือ</option>
                    <option value="2">สอบถามเพิ่มเติม</option>

               </select>

               <div class="mb-0">
                    <div class="pt-3">
                         <textarea class="form-control pt-2" placeholder="แสดงความคิดเห็นที่นี่" id="floatingTextarea2" style="height: 150px"></textarea>
                    </div>
               </div>
               <div class="row">
                    <div class="col-xl-12">
                         <button type="button" class="btn btn-primary but_recommend">ส่งความคิดเห็น</button>
                    </div>
               </div>
               
          </div>
          <div class="col-xl-3 col-lg-3 col-md-2 col-sm-12 col-12"></div>
     </div>

</div>




<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>