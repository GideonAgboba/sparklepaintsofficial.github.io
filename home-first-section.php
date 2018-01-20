<div class="container-fluid green-body cont1" style="width: 100% !important;height: 100% !important;">
          <div class="p-0 container-fluid col-lg-12" style="margin: :px !important;padding: 0px !important;">
            <div class="row" style="width: 100% !important;height: 100% !important;">
              <div class="col-lg-8 " style="width: 100% !important;height: 100% !important;">
                <script type="text/javascript">
                  // When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
                </script>
                <style type="text/css">
                  /* carousel */
#quote-carousel 
{
  padding: 0 10px 30px 10px;
  margin-top: 30px;
}

/* Control buttons  */
#quote-carousel .carousel-control
{
  background: none;
  color: #222;
  font-size: 2.3em;
  text-shadow: none;
  margin-top: 30px;
}
/* Previous button  */
#quote-carousel .carousel-control.left 
{
  left: -12px;
}
/* Next button  */
#quote-carousel .carousel-control.right 
{
  right: -12px !important;
}
/* Changes the position of the indicators */
#quote-carousel .carousel-indicators 
{
  right: 50%;
  top: auto;
  bottom: 0px;
  margin-right: -19px;
}
/* Changes the color of the indicators */
#quote-carousel .carousel-indicators li 
{
  background: #c0c0c0;
}
#quote-carousel .carousel-indicators .active 
{
  background: #333333;
}
#quote-carousel img
{
  width: 250px;
  height: 100px
}
/* End carousel */

.item blockquote {
    border-left: none; 
    margin: 0;
}

.item blockquote img {
    margin-bottom: 10px;
}

.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}



/**
  MEDIA QUERIES
*/

/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) { 
    #quote-carousel 
    {
      margin-bottom: 0;
      padding: 0 40px 30px 40px;
    }
    
}

/* Small devices (tablets, up to 768px) */
@media (max-width: 768px) { 
    
    /* Make the indicators larger for easier clicking with fingers/thumb on mobile */
    
    #quote-carousel .carousel-indicators {
        bottom: -20px !important;  
    }
    #quote-carousel .carousel-indicators li {
        display: inline-block;
        margin: 0px 5px;
        width: 15px;
        height: 15px;
    }
    #quote-carousel .carousel-indicators li.active {
        margin: 0px 5px;
        width: 20px;
        height: 20px;
    }
}
                </style>
              <head>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>

<div class="container">
  <div class="row">
  </div>
  <div class='row'>
    <div>
      <div class="carousel slide" data-ride="carousel" id="quote-carousel">
        <!-- Bottom Carousel Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
          <li data-target="#quote-carousel" data-slide-to="1"></li>
          <li data-target="#quote-carousel" data-slide-to="2"></li>
        </ol>
        
        <!-- Carousel Slides / Quotes -->
        <div class="carousel-inner">
        
          <!-- Quote 1 -->
          <div class="item active">
            <blockquote>
              <div class="row">
                <div class="white-text text-center" style="font-size: 40px;">
                  <q style="padding-top: 10em !important;">We offer qualitity products and services</q>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 2 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/mijustin/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
          <!-- Quote 3 -->
          <div class="item">
            <blockquote>
              <div class="row">
                <div class="col-sm-3 text-center">
                  <img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/keizgoesboom/128.jpg" style="width: 100px;height:100px;">
                </div>
                <div class="col-sm-9">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                  <small>Someone famous</small>
                </div>
              </div>
            </blockquote>
          </div>
        </div>
        
        <!-- Carousel Buttons Next/Prev -->
        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
      </div>                          
    </div>
  </div>
</div>
      <!-- <div id="main-container">
        <div id="images-wrapper">
          <figure class="image-wrapper active">
            <img src="imgs/bg1.jpg" alt="Cat1">
          </figure>
          <figure class="image-wrapper">
            <img src="imgs/bg2.jpg" alt="Cat 2">
          </figure>
          <figure class="image-wrapper">
            <img src="imgs/bg1.jpg" alt="Cat 3">
          </figure>
          <figure class="image-wrapper">
            <img src="imgs/int3.jpg" alt="Cat 4">
          </figure>
          <figure class="image-wrapper">
            <img src="imgs/all.jpg" alt="Cat 5">
          </figure>
          <figure class="image-wrapper">
            <img src="imgs/db.jpg" alt="Cat 6">
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

      </div> -->
              </div>
              <div class="container col-lg-4">
                <h4 class="white-text text-center">Quick Purchase</h4>
                <hr class="container">

                <div class="container-fluid">
                  <div class="card">
                  <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="imgs/all.jpg">
                  </div>
                  <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Click Order to make purchase: <i class="material-icons right">more_vert</i></span>
                    <p class="green-font text-center">This section is for users who want to make payments on delivery...</p>
                    <a href="quick-order.html" class="mt-2 container-fluid btn green-body white-text"  data-toggle="modal" data-target="#details-6" onclick="">Order</a>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Quick purchase:<i class="material-icons right">close</i></span>
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