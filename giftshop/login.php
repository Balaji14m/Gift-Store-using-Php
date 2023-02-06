<?php
session_start();
include('logincheck.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <title>GiftStore</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      <!-- Chrome, Firefox OS and Opera -->
      <meta name="theme-color" content="#2196F3">
      <!-- Windows Phone -->
      <meta name="msapplication-navbutton-color" content="#2196F3">
      <!-- iOS Safari -->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
      <!-- FONTS      -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
      <!-- Font Awesome Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Materialized CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <!-- CSS -->
      <link rel="stylesheet" href="css/go_to.css">

      <link rel="stylesheet" href="css/style1.css">

      <style>
      body{
        background-image: url("images/space1.jpg");
        background-repeat:no-repeat;
        background-size: cover;
      }
      .container{
        opacity:0.6;
      }
      button:hover{
        background-color: red;

      }
        .slider_adjust{
          width:100%;
          height:100%;
          position: absolute; 
          z-index: -1;
          left:0;
          margin-top:0px;
        }
        .abc{
          color:red;
          margin-left:10px;
        }
      </style>
   </head>
   
   <body>
      <!--navigation bar-->
      <div class="row navbar-fixed">
         <nav >
            <div class="nav-wrappers">
               <a href="#" class="brand-logo"> <b>VIMAL'S</b> Giftery shop</a>
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
               <ul id="categories1" class="dropdown-content" databeloworigin="true"><!--for dropdown contents who has data activates as categories1 on desktop navigation bar-->
                  <li><a href="category1.php" class="dropdown_link">Kids</a></li>
                  <li><a href="category3.php" class="dropdown_link">Home Decor</a></li>
                  <li><a href="category4.php" class="dropdown_link">Men Accessories</a></li>
                  <li><a href="category5.php" class="dropdown_link">Stationary Items</a></li>

               </ul>
               <ul id="categories2" class="dropdown-content" databeloworigin="true"><!--for dropdown contents who has data activates as categories2 on mobile sidenav-->
               <li><a href="category1.php" class="dropdown_link">Kids</a></li>
                  <li><a href="category3.php" class="dropdown_link">Home Decor</a></li>
                  <li><a href="category4.php" class="dropdown_link">Men Accessories</a></li>
                  <li><a href="category5.php" class="dropdown_link">Stationary Items</a></li>

               </ul>

               <ul id="nav-mobile" class="right hide-on-med-and-down"><!--for desktop-->
                <form action="search.php" method="POST"><!--for search function-->
                  <?php
                    if(isset($_SESSION['userid'])){//navigation bar for user who has logged in 
                    ?>
                          <li><a href="index.php" class="navlink">Home</a></li>
                          <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                          
                          <li><a href="contactus.php" class="navlink">Contact Us</a></li>
                          <li><a class="dropdown-button" data-beloworigin="true" href="#!" data-activates="dropdown2"><?php echo $_SESSION['userid']?><i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li>
                  <ul id="dropdown2" class="dropdown-content dropdown_link">
                    <li><a href="logout.php">Logout</a></li>
                  </ul>

                  <?php
                  }
                  else{//navigation bar for non logged in user
                  ?>
                  <li><a href="index.php" class="navlink">Home</a></li>
                  <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                  <li><a href="contactus.php" class="navlink">Contact Us</a></li>
                  <li><a href="signup.php" class="navlink">Sign Up</a></li>
                  <li><a href="shopping_cart.php" class="navlink"><i class="material-icons">shopping_cart</i></a></li>
                  <!-- <li><input type="text" name="search" placeholder="search"></li> -->

                  <?php
                      }
                  ?> 
                </form> 
               </ul>
               <ul class="side-nav" id="mobile-demo"><!--for mobiles-->
                <li><a href="index.php" class="side_logo left-align">GiftStore</a></li>
                <hr>
                <li><a href="index.php" class="side_nav">Home</a></li>
                <li><a href="#" class="dropdown-trigger navlink" data-activates="categories2">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="aboutus.php" class="side_nav">About Us</a></li>
                <li><a href="contactus.php" class="side_nav">Contact Us</a></li>
                <li><a href="signup.php" class="side_nav">SignUp</a></li>
            </ul>
            </div>
         </nav>
      </div>
      <!--login form-->
      <div  style="margin-top:-20px;height:100vh;">
        <div class="container">
          <div class="row">
            <div class="col s12 m12 l12">
              <div class="card blue-grey lighten-4" style="margin:0;margin-top:20px;">
                <div class="card-content black-text">
                  <div class="card-title center-align"><h3 style="font-weight: bold"><span class="blue-text">L</span>ogin</h3></div>
                    <div class="row">
                      <form class="col s12" action="login.php" method="post">
                        <div class="row signupcardpadding">
                          <div class="input-field col s12 m12 l12 blue-grey.darken-3">
                            <i class="material-icons prefix">account_circle</i>
                            <input type="text" name="username" class="validate"><span class="abc"><?php echo $unerror;?></span>
                            <label for="username" class="blue-grey.darken-3">Username</label>
                          </div>
                        </div>
                        <div class="row signupcardpadding">
                          <div class="input col s12 m12 l12">
                            <i class="material-icons prefix">fingerprint</i>
                            <input name="pwd" type="password" class="validate"><span class="abc"><?php echo $passerror;?></span>
                            <label for="pwd">Password</label>
                          </div>
                        </div>
                        <div class="row center-align signupcardpadding">
                          <div class="col s12 m12 l12">
                            <button type="submit" class="waves-effect waves-light btn black white-text" name="submit" style="border-radius: 10px; font-weight:bold;">Submit
                            </button>
                            <h5 style="font-weight: bold">Don't Have An Account ? <a href="signup.html" class="loginlink">SignUp</a></h5>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- Page Footer -->
      <div class="row footer" >
         <footer class="page-footer black white-text">
            <div class="row center-align">
                <div class="col s12 m12 l12">
                  <h4><a href="index.php" class="footerlogo">GiftStore</a></h4>
                  <!-- <p class="white-text">Information will be provided soon.</p> -->
                </div>
            </div>
            <div class="row center-align">
              <div class="col s12 m12 l12">
                <a href="#" class="link"> Developed By Prasanth</a>
              </div>
            </div>
             <div class="row center-align">
                <div class="col s12 m12 l12">
                  <a href="index.php" class="link">Home<span class="white-text"> |</span></a> 
                  <a href="contactus.html" class="link">Contact Us<span class="white-text"></span></a> 
                </div>
              </div> 
              <br><br>
            
         </footer>
      </div>
     
   </body>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
      <!-- <script src="js/jquery.validate.min.js"></script>
      <script src="js/additional-methods.min.js"></script>
      <script src="js/init.js"></script> -->
      <script>
        //Slider
        $(document).ready(function(){
          $('.slider').slider();
        });
         //Dropdown Trigger
         $(document).ready(function(){
            $('.dropdown-trigger').dropdown({
               belowOrigin:true
            });
         });
         $(document).ready(function(){
            $('#go-top').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
          });
        });
         //Go Top 
            var pxShow = 100; // height on which the button will show
            var fadeInTime = 400; // how slow/fast you want the button to show
            var fadeOutTime = 400; // how slow/fast you want the button to hide

            // Show or hide the sticky footer button
            jQuery(window).scroll(function() {

               if (jQuery(window).scrollTop() >= pxShow) {
                  jQuery("#go-top").fadeIn(fadeInTime);
               } else {
                  jQuery("#go-top").fadeOut(fadeOutTime);
               }

           });
      </script>
</html>