
    <style type="text/css">
      @media screen and (min-width: 1024px) {
        .nav-img-mobile{
          display: none !important;
        }
        .login-mobile{
          display: none !important;
        }
      }
       @media screen and (max-width: 1024px) {
        .nav-img-mobile{
          display: inline !important;
        }
        .login-mobile{
          display: inline !important;
        }
      }
    </style>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css'>
<div class="container-fluid bg-white white" style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(imgs/bg2.jpg);background-size: cover; background-attachment: fixed !important;">
  <div class="row pb-5">
    <div class="col-lg-7 pt-5 text-center text-white">
      
<style>
html {
  height: 100%;
  box-sizing: border-box;
  -webkit-tap-highlight-color: transparent;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body,
h1, h2, h3, h4, h5, h6,
p, blockquote, pre,
dl, dd, ol, ul,
form, fieldset, legend,
figure,
table, th, td, caption,
hr {
  margin: 0;
  padding: 0;
}

/**
 * Core: Base
 * --------------------------------------------------
 */
body {
  position: relative;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  padding: 2vw;
  position: relative;
  background: transparent;
  background-size: cover;
  font-size: 14px;
  line-height: 20px;
  color: #434A54;
  text-rendering: optimizeSpeed;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
}

.lazyload,
.lazyloading {
  opacity: 0;
}

.lazyloaded {
  opacity: 1;
  -webkit-transition: opacity 300ms;
  transition: opacity 300ms;
}

/**
 * Component: `browser`
 * -----------------------------------------------------------------------------
 */
.c-browser {
  position: relative;
  border-radius: 6px 6px 0 0;
  overflow: hidden;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(imgs/bg2.jpg) !important;
}

/**
 * Component: `bar`
 * -----------------------------------------------------------------------------
 */
.c-bar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding: 5px;
  height: 8% !important;
}
.c-bar--top {
  background-color: #25A187;
  z-index: 1;
}
.c-bar--bottom {
  background-color: #F5F7FA;
  border-bottom: 1px solid #E6E9ED;
  z-index: 2;
}

/**
 * Component: `controls`
 * -----------------------------------------------------------------------------
 */
.c-controls {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  margin: 0;
  padding: 0;
  list-style: none;
}

/**
 * Component: `control`
 * -----------------------------------------------------------------------------
 */
.c-control {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
  font: 0/0 '';
  color: transparent;
  width: 12px;
  height: 12px;
  margin: 0 5px;
  border-radius: 50%;
  border: 1px solid transparent;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  cursor: pointer;
}
.c-control--close {
  border-color: #DA4453;
  background-color: #ED5565;
}
.c-control--close:hover {
  background-color: #DA4453;
}
.c-control--min {
  border-color: #F6BB42;
  background-color: #FFCE54;
}
.c-control--min:hover {
  background-color: #F6BB42;
}
.c-control--max {
  border-color: #8CC152;
  background-color: #A0D468;
}
.c-control--max:hover {
  background-color: #8CC152;
}

/**
 * Component: `tabs`
 * -----------------------------------------------------------------------------
 */
.c-tabs {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  -ms-flex-item-align: end;
      align-self: flex-end;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
  -webkit-box-pack: start;
      -ms-flex-pack: start;
          justify-content: flex-start;
  margin: 0 5px;
  padding: 0;
  list-style: none;
}

/**
 * Component: `tab`
 * -----------------------------------------------------------------------------
 */
.c-tab {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(imgs/bg2.jpg);background-size: 110em;
  height: 25px;
  padding: 0 5px;
  border-radius: 3px 3px 0 0;
  color: #fff;
  max-width: 10vw;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  cursor: pointer;
}
.c-tab:not(:last-child) {
  margin-right: 5px;
}
.c-tab:hover:not(.is-active) {
  background-color: #E6E9ED;
}
.c-tab.is-active {
  background-color: #F5F7FA;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}
.c-tab__favicon {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
}
.c-tab__title {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  max-width: 100%;
  font-size: 12px;
  padding-right: 8px !important;
  margin-left: 5px;
  color: #fff;
}

/**
 * Component: `mode`
 * -----------------------------------------------------------------------------
 */
.c-mode {
  -ms-flex-item-align: center;
      align-self: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 25px;
  height: 25px;
  border-radius: 3px;
  color: #AAB2BD;
  border: 1px solid #AAB2BD;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  cursor: pointer;
}
.c-mode:hover {
  color: #CCD1D9;
  border-color: #CCD1D9;
}
.c-mode .fa {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
}

/**
 * Component: `menu`
 * -----------------------------------------------------------------------------
 */
.c-menu {
  -ms-flex-item-align: center;
      align-self: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 25px;
  height: 25px;
  border-radius: 3px;
  color: #656D78;
  border: 1px solid transparent;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  cursor: pointer;
}
.c-menu:hover {
  background-color: #fff;
  border-color: #CCD1D9;
}
.c-menu .fa {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
}

/**
 * Component: `navigation`
 * -----------------------------------------------------------------------------
 */
.c-navigation {
  -ms-flex-item-align: center;
      align-self: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  width: 25px;
  height: 25px;
  border-radius: 3px;
  color: #656D78;
  border: 1px solid transparent;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  cursor: pointer;
}
.c-navigation:hover {
  background-color: #fff;
  border-color: #CCD1D9;
}
.c-navigation .fa {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
}

/**
 * Component: `address`
 * -----------------------------------------------------------------------------
 */
.c-address {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  -ms-flex-item-align: center;
      align-self: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row nowrap;
      flex-flow: row nowrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  height: 25px;
  background-color: #fff;
  border-radius: 3px;
  padding: 0 5px;
  margin: 0 5px;
  border: 1px solid #CCD1D9;
}
.c-address__connection {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
  color: #A0D468;
}
.c-address__url {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
  border: none;
  background-color: transparent;
  padding: 0;
  margin: 0;
  outline: 0;
  color: #656D78;
}
.c-address__bookmark {
  -ms-flex-item-align: center;
      -ms-grid-row-align: center;
      align-self: center;
  color: #656D78;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  cursor: pointer;
}
.c-address__bookmark:hover {
  color: #F6BB42;
}

/**
 * Component: `frames`
 * -----------------------------------------------------------------------------
 */
.c-frames {
  position: relative;
  height: 80vh;
  background-color: #fff;
}

/**
 * Component: `frame`
 * -----------------------------------------------------------------------------
 */
.c-frame {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(imgs/bg2.jpg);background-size: 110em;
  border: 0;
}
.c-frame--default {
  background: transparent;
  background-size: cover;
}
.c-frame--default:before {
  content: "Welcome!";
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  color: #000;
  font-size: 72px;
  line-height: 72px;
  font-weight: 100;
}
.c-frame.is-active {
  display: block;
}

#style-1::-webkit-scrollbar
{
  width: 12px;
  background-color: #F5F5F5;
}
::-webkit-scrollbar {
    width: 12px;
}
 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
</style></head><body>

<section class="c-browser" id="style-1">
  <div class="c-bar c-bar--top justify-content-end my-auto d-flex center">
    <ul class="tabs tabs-transparent">
      <li class="tab left">
          <img class="nav-link nav-img-mobile" src="imgs/Sparkel-logo.png" width="200px" height="70px" style="margin-top: -10px !important;">
      </li>
      <li class="tab login-mobile right text-white row" style="font-size: 20px;">
        <?php 
              if (isset($_COOKIE['ss'])) {
              echo "<strong class='mt-3 mr-2'>Logged in as: "  .$_COOKIE['ss'] ." <i class='fa fa-user'></i></strong>";
              }else{
                echo "<strong class='mt-3 mr-2'>Logged in as: Guest <i class='fa fa-user-o'></i> </strong>";
              }
        ?>
      </li>
    </ul>
  </div>
  <div class="c-frames" style="background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)"  id="style-1" src="login/index.php" >
    <iframe class="" src="<?php if(isset($_COOKIE['ss'])){ echo 'login/profile.php'; }else{ echo 'login/index.php'; } ?>" style="border: none; width: 100%;height: 100%; background: linear-gradient( rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8) ), url(imgs/bg2.jpg);background-size: 110em; zoom: 50% !important;"></iframe>
  </div>
</section>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/lazysizes/1.3.1/lazysizes.min.js'></script>
<script >;(function() {

  'use strict';

  var $url = $('.js-url');
  var $tab = $('.js-tab');
  var $frame = $('.js-frame');

  $url.on('click', function() {
    $(this).select();
  });

  $url.on('keydown', function(event) {

    if (event.keyCode !== 13) return;

    var $currentTab = $tab.filter(function() {
      return $(this).hasClass('is-active');
    });

    var $currentFrame = $frame.filter(function() {
      return $(this).hasClass('is-active');
    });
    
    var id = $currentFrame.data('frame');
    
    if (id === 0) { 
      $currentFrame.replaceWith('<iframe class="c-frame js-frame is-active" data-frame="0" src="https://www.youtube.com"></iframe>');
    } else {
      $currentFrame.attr('src', 'https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1');
    }

    $url.val('https://www.youtube.com/embed/dQw4w9WgXcQ');

    $currentTab.find('.c-tab__title').text('Rick Astley - Never Gonna Give You Up');
    $currentTab.find('.c-tab__favicon .fa').removeClass('fa-codepen').addClass('fa-youtube-play');
  });

  $(document).on('click', '.js-tab', function() {

    var id = $(this).data('frame');

    var $currentTab = $tab.filter(function() {
      return $(this).data('frame') === id;
    });

    var $currentFrame = $frame.filter(function() {
      return $(this).data('frame') === id;
    });

    var url = $currentFrame.attr('data-src');

    $url.val(url);

    $tab.removeClass('is-active');
    $frame.removeClass('is-active');

    $currentTab.addClass('is-active');
    $currentFrame.addClass('is-active');
  });

})();

//# sourceURL=pen.js
</script>
      <!-- <div id="demo-page container-fluid">
    <div id="main-container">
    <!-- <div id="main-container" class="vertical-version">
      <div id="images-wrapper">
        <figure class="image-wrapper active">
          <blockquote>
                <h4><i class="fa fa-quote-left fa-1x"></i> We offer quality products and sevices</h4>
          </blockquote> 
        </figure>
        <figure class="image-wrapper">
          <blockquote>
                <h4><i class="fa fa-quote-left fa-1x"></i> We offer quality products and sevices</h4>
          </blockquote> 
        </figure>
        <figure class="image-wrapper">
          <blockquote>
                <h4><i class="fa fa-quote-left fa-1x"></i> We offer quality products and sevices</h4>
          </blockquote> 
        </figure>
        <figure class="image-wrapper">
          <blockquote>
                <h4><i class="fa fa-quote-left fa-1x"></i> We offer quality products and sevices</h4>
          </blockquote> 
        </figure>
        <figure class="image-wrapper">
          <blockquote>
                <h4><i class="fa fa-quote-left fa-1x"></i> We offer quality products and sevices</h4>
          </blockquote> 
        </figure>
        <figure class="image-wrapper">
          <blockquote>
                <h4><i class="fa fa-quote-left fa-1x"></i> We offer quality products and sevices</h4>
          </blockquote> 
        </figure>
      </div>

      <div class="controls-wrapper">
        <div class="controls">

          <div id="circular-line">
            <svg width="38px" height="38px" viewBox="0 0 38 38" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <circle id="circular-line-path" stroke-width="4" cx="19" cy="19" r="17"></circle>
              </g>
            </svg>
          </div>

          <div class="straight-line"></div>

          <div class="dot active"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
        </div>
      </div>

    </div>

  </div>

  <style type="text/css">
    /*reset*/
* {
  padding: 0;
  margin: 0;
}
/*
:root {
  --dotBase: 14px;
  --activeColorBase: #9251AC;
  --lineColor: #F6A4EB;
}*/

#demo-page {
  display: flex;
  height: 100vh;
  width: 100% !important;
  text-align: center;
}

#main-container {
  align-self: center;
  margin: 0 auto;
  position: relative;
  perspective: 750px;
}

#main-container.vertical-version .controls-wrapper {
  display: inline-block;
  position: absolute;
  right: -60px;
  top: 50%;
  transform: rotate(90deg) scaleY(-1) translateX(50%);
  transform-origin: right;
}

#main-container.vertical-version #images-wrapper {
  margin: 0 auto;
}

#images-wrapper {
  width: 900px !important;
  height: 400px;
  margin: 0 auto 50px !important;
  position: relative;
}
.image-wrapper h4{
  font-size: 50px;
  font-family: sans-serif;
  font-weight: lighter;
  position: absolute;
  top: 40%;
  left: 30%;
  right: 0%;
  transform: translate(-30%,-40%);
}
.image-wrapper i{
  font-size: 60px !important;
}

#images-wrapper.origin-left .image-wrapper {
  transform-origin: right;
}

#images-wrapper.origin-right .image-wrapper {
  transform-origin: left;
}

.image-wrapper {
  position: absolute !important;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 3px;
  opacity: 0;
}

.image-wrapper.active {
  opacity: 1;
}

.image-wrapper img {
  width: 100%;
  height: 100%;
  border-radius: 3px;
}

.controls-wrapper {
  display: inline-block;
}

.controls {
  display: flex;
  justify-content: center;
  position: relative;
}

.controls.disabled .dot {
  pointer-events: none;
}

#circular-line {
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
  transform: rotate(90deg);
}

#circular-line.flip {
  transform: rotate(90deg) scaleY(-1);
}

#circular-line-path {
  stroke-dasharray: 106;
  stroke-dashoffset: 0;
  stroke-linejoin: round;
  stroke-linecap: round;
  stroke: #25A187;
}

.straight-line {
  position: absolute;
  left: 0;
  right: 0;
  width: 100%;
  bottom: 0;
  height: 4px;
  background: #25A187;
  border-radius: 3px;
  transform-origin: left;
  transform: scaleX(0);
}

svg {
  display: block;
}

.dot {
  width: 14px;
  height: 14px;
  background: #fff;
  border-radius: 50%;
  margin: 12px;
  cursor: pointer;
  transform: scale(.85);
  transition: .3s all ease;
}

.dot.active {
  background: #25A187;
  transform: scale(1.1);
}
  </style>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
  <script src="interaction.js"></script> -->
    </div>
    <div class="col-lg-5">
      
              <div class="container col-lg-12">
                <h4 class="white-text text-center">Quick Purchase</h4>
                <hr class="container">

                <div class="container-fluid">
                  <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="imgs/all.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Click Order to make quick purchase: <i class="fa fa-angle-up right text-muted"></i></span>
                    <p class="green-font text-center">This section is for users who want to make payments on delivery...</p>
                    <a href="quick-order.html" class="mt-2 container-fluid btn green-body white-text"  data-toggle="modal" data-target="#details-6" onclick="">Order</a>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Quick purchase:<i class="fa fa-close right text-muted"></i></span>
                    <p class="text-center green-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
                </div>

                
              </div>
    </div>
  </div>
</div>







<!-- Benefits
    ================================================== -->
<section class="service-sec" id="benefits">
  <div class="container-fluid pl-2 pr-2">
    <div class="row">
        <div class="col-md-12">
            <div class="heading">
      <h2 class="text-center green-font">4 steps to checkout <i class="fa fa-handshake-o" style="font-size: 40px;margin-top: 5px;"></i></h2>
      <hr class="container-fluid">
    </div>
        </div>
      <div class="col-md-12">
        <div class="row">
            <div class="col-md-3 text-center service-block"> <i class="fa fa-globe" aria-hidden="true"></i>
          <h3>Visit us</h3>
          <p>Visit our website from any device and any location</p>
        </div>
        <div class="col-md-3 text-center service-block"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
          <h3>Make purchases</h3>
          <p>Check our catalogue and store to purchase items</p>
        </div>
        <div class="col-md-3 text-center service-block"> <i class="fa fa-money" aria-hidden="true"></i>
          <h3>Make payments</h3>
          <p>Online payment services which was provided for users to make easy payments of items bought </p>
        </div>
        <div class="col-md-3 text-center service-block"> <i class="fa fa-bus" aria-hidden="true"></i>
          <h3>Delivery</h3>
          <p>Items would be delivered to our customers with a delivery charge depending on their locations</p>
        </div>
        </div>
      </div>
    </div>
    <!-- /.row --> 
  </div>
</section>

<style type="text/css">
  
.service-sec .heading {
  float: left;
  width: 100%;
  margin-bottom: 70px;
  text-align:center;
}
.service-sec h2 {
  display: block;
  text-transform: capitalize;
  font-weight: 600;
  color: #25A187;
  font-size: 32px;
}
.service-sec h2 small {
  color: #222;
  display: block;
  font-size: 22px;
  margin-bottom: 18px;
}
.service-sec i {
  border-radius: 2px;
  font-size: 80px;
  padding: 12px 0;
  width: 80px;
  color: #25A187;
  margin-bottom: 20px
}
.service-sec h3 {
  font-size: 23px;
  font-weight: 600;
}
.service-sec p {
  line-height: 22px;
  margin-top: 13px;
  padding: 0 21px;
  font-size: 20px;
}
.service-sec .service-block {
  margin-top: 10px !important;
}

</style>