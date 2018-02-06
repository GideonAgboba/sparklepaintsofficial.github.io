
  <nav class="navbar-extended green-body fixed-top" style="overflow:hidden;">
    <div class="nav-content home-navbar-sec2">
      <ul class="tabs tabs-transparent">
        <li class="tab">
          <img class="nav-link nav-img-desktop" src="imgs/Sparkel-logo.png" width="200px" height="70px" style="margin-top: -10px !important;">
        </li>
        <li class="tab">
          <a href="#test1" class="nav-link active white-text"><i class="fa fa-home"></i> Home</a>
        </li>
        <li class="tab">
          <a class="nav-link white-text" href="#test2"><i class="fa fa-flask"></i> Color chart</a>
        </li>
        <li class="tab">
          <a href="#test3" class="nav-link white-text"><i class="fa fa-archive"></i> Store</a>
        </li>
        <li class="tab"><a href="#test4" class="nav-link white-text fa-2x"><i class="fa fa-shopping-cart"></i> Checkout</a></li>
        <li class="text-white tab login-desktop right row" style="font-size: 20px;">
        <?php 
              if (isset($_COOKIE['ss'])) {
              echo "<strong class='mt-43 mr-2'>Logged in as:  <i class='fa fa-user'></i> "  .$_COOKIE['ss'] ." </strong><form method='POST' action='logout.php' class='form-group right mr-3 mt-1'><button type='submit' class='btn bg-danger mr-3' name='clear_cookie'>LogOut</button></form>";
              }else{
                echo "<strong class='mt-3 mr-2'>Logged in as  </i> Guest <i class='fa fa-user-o'></i> </strong><form method='POST' action='index-login.php' class='form-group right mr-3 mt-1'><button class='btn bg-primary mr-3' name='clear_cookie'>LogIn</button></form>";
              }
        ?>
      </li>
      </ul>
    
    </div>
    </nav>
   

    <style type="text/css">
      @media screen and (max-width: 1024px) {
        .nav-img-desktop{
          display: none !important;
        }
        .login-desktop{
          display: none !important;
        }
      }
       @media screen and (min-width: 1024px) {
        .nav-img-desktop{
          display: inline !important;
        }
        .login-desktop{
          display: inline !important;
        }
      }
    </style>



    