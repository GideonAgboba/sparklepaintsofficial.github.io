
  <style type="text/css">
        /* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: #25A187;
}
.loader-item{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
  </style>
<div class="se-pre-con">
  <div class="row mt-0 pl-5">
    <div class="col-lg-6">
      <h4 class="justify" style="color: #323232;">Step-one:</h4><h6 class="fa-2x" style="color: #323232;"> Login/Register</h6>
      <p class=""><i class="fa fa-edit " style="color: #323232;font-size: 10em;margin: 0 auto;float: none;"></i></p>

      <h4 class="justify" style="color: #323232;">Step-two:</h4><h6 class="fa-2x" style="color: #323232;"> Make purchase</h6>
      <p class=""><i class="fa fa-shopping-cart " style="color: #323232;font-size: 10em;margin: 0 auto;float: none;"></i></p>

      <h4 class="justify" style="color: #323232;">Step-thee:</h4><h6 class="fa-2x" style="color: #323232;"> Make payments</h6>
      <p class=""><i class="fa fa-money " style="color: #323232;font-size: 10em;margin: 0 auto;float: none;"></i></p>
    </div>
    <div class="col-lg-6">
      <img src="imgs/cload.gif">
      <p class="container-fluid fa-2x text-center" style="position: absolute;bottom: 30px;left: -40px;color: #323232;font-weight: bold;">Please wait loading dependencies...</p>
    </div>
  </div>
</div>