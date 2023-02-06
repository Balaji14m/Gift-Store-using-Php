<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
      <title>GiftStore</title>
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
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
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
         h1,h2,h3,h4,h5,h6,p{
            font-family: 'Poppins', sans-serif;
         }
        .imghome{
         background-image: url(./images/gifthome.jpg);
         background-size: cover;
         
        }
        .about{
          border-radius:10px;
            background-color: rgb(255 255 255 / 84%);
          }
      h3,h5{
        font-weight:bold;
        color:black;
        margin:5%;
      }
      .anime-start-1 {
      opacity: 0;
      transform: translate3d(-100px, 0, 0);
      transition:2.5s;
      }
      .anime-end-1 {
      opacity: 1;
      transform: translate3d(0,0,0);
     }
    .anime-start-2 {
      opacity: 0;
      transform: translate3d(-100px, 0, 0);
      transition:2.1s;
    }
    .anime-end-2 {
      opacity: 1;
      transform: translate3d(0,0,0);
    }
    .anime-start-3 {
      opacity: 0;
      transform: translate3d(-100px, 0, 0);
      transition:1.7s;
    }
    .anime-end-3 {
      opacity: 1;
      transform: translate3d(0,0,0);
    }
    .anime-start-4 {
      opacity: 0;
      transform: translate3d(-100px, 0, 0);
      transition:1.2s;
    }
    .anime-end-4{
      opacity: 1;
      transform: translate3d(0,0,0);
    }
    .card-images {
      max-height: 80%;
    overflow: hidden;
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
   
        <!--slider-->
      <div class="container">
        <div class="slider fullscreen slider_adjust imghome">
            <li >
              <!-- random image -->
              <div class="caption" >
               
                    <div style=" border-radius:10px;margin:0px 100px;background-color: rgb(255 255 255 / 84%);">
                        <center><h3 class="black-text" style="padding-top:10px ; margin-top:100px;margin-bottom:0px" >Welcome To The GiftStore!</h3>
                        <h5 class="black-text" style="padding-bottom:10px">The Giftery Shop is an independent retail business entity that deals with fengshui, <br> gifts and related products at affordable prices. We also provide free consultation for holistic services.
                      <br>
                        </h5></center>
                  </div><!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
              </div>
            </li>
          </div>

      
          <!--About-->
          
            <div class="about" style="margin-top:500px; ">
              <div style="padding:10px; ">
              <h2><center><b>About US</b></center>  </h2>
                <h5 style="font-size:20px; margin-bottom:20px;padding-bottom:20px">
                This is giftstore. Welcome to our store. Maximum opportunites are offered on our website. Kindly look at our collection and order maximum products from our site.Safe banking and product tracking is also our feature.This is giftstore. Welcome to our store. Maximum opportunites are offered on our website. Kindly look at our collection and order maximum products from our site.Safe banking and product tracking is also our feature.This is giftstore. Welcome to our store. Maximum opportunites are offered on our website. Kindly look at our collection and order maximum products from our site.Safe banking and product tracking is also our feature.This is giftstore. Welcome to our store. Maximum opportunites are offered on our website. Kindly look at our collection and order maximum products from our site.Safe banking and product tracking is also our feature.This is giftstore. Welcome to our store. Maximum opportunites are offered on our website. Kindly look at our collection and order maximum products from our site
                    </h5><br>
              <br>
              <hr>
              </div>  
              
            </div>
      
            <!--parallax-->
          
          <!--section-->
            <!--   <section class="container section" id="photo's">
                <div class="row">
                  <div class="col s12 l4">
                    <img src="images/space.jpg" class="responsive-img">
                  </div>
                  <div class="col s12 l6">
                    <h3 class="pink-text text-accent-3">Amazing Gifts</h3>
                    <p> escription goes here!!</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 l4">
                    <img src="images/space.jpg" class="responsive-img">
                  </div>
                  <div class="col s12 l6">
                    <h3 class="pink-text text-accent-3">Amazing Gifts</h3>
                    <p>Description goes here!!</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12 l4">
                    <img src="images/space.jpg" class="responsive-img">
                  </div>
                  <div class="col s12 l6">
                    <h3 class="pink-text text-accent-3">Amazing Gifts</h3>
                    <p>Description goes here!!</p>
                  </div>
                </div>
              </section> -->
              <!--parallax-->

              
              <h1> <center> <b>--GIFTS AVAILABLE--</b> </center></h1>
              <hr>
                <p style="font-size:20px;">
              This is giftstore. Welcome to our store. Maximum opportunites are offered on our website. Kindly look at our collection and order maximum products from our site.Safe banking and product tracking is also our feature.This is giftstore. Welcome to our store. Maximum 
            </p>
       </div>
    <!--parallax Container 2--> 
    <div class="row" style="margin-left: -1px; margin-top: 20px;">
      <div class="parallax-container" style="height:100%;">
        <div class="row" style="margin-top: 30px">
          <h4 class="center-align white-text">Cateogories</h4>
          <div class="col s12 m12 l3">
            <div class="card small anime-start-1" data-as="true"  data-as-animation="anime-end-1" style="opacity: 0.8;">
              <div class="card-images  waves-effect waves-block waves-light">
                <img class="activator" src="images/kids/toy.jpg">
              </div>
              <a href="category1.php">
                <div class="card-action center-align black white-text flow-text">
                 Toys
                </div>
              </a>
            </div>
          </div>
          <div class="col s12 m12 l3">
            <div class="card small anime-start-2" data-as="true"  data-as-animation="anime-end-2" style="opacity: 0.8;">
              <div class="card-images waves-effect waves-block waves-light">
                <img class="activator" src="images/homedecor/home.jpg">
              </div>
              <a href="category3.php">
                <div class="card-action center-align black white-text flow-text">
                  Home Decor
                </div>
              </a>
            </div>
          </div>
          <div class="col s12 m12 l3">
            <div class="card small anime-start-3" data-as="true"  data-as-animation="anime-end-3" style="opacity: 0.8;">
              <div class="card-images waves-effect waves-block waves-light">
                <img class="activator" src="images/men/men.avif">
              </div>
              <a href="category4.php">
                <div class="card-action center-align black white-text flow-text">
                  Men Accessories
                </div>
              </a>
            </div>
          </div>
          <div class="col s12 m12 l3">
            <div class="card small anime-start-4" data-as="true"  data-as-animation="anime-end-4" style="opacity: 0.8;">
              <div class="card-images waves-effect waves-block waves-light">
                <img class="activator" src="images/jwellary/stt.jpg">
              </div>
              <a href="category5.php">
                <div class="card-action center-align black white-text flow-text">
                  Stationary Items
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="parallax">
          <img src="images/space.jpg" class="responsive-img">

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
      <!-- Preloader -->
    
 
    
  </footer>
   </body>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
      <script src="js/jquery.validate.min.js"></script>
      <script src="js/additional-methods.min.js"></script>
      <script src="js/jquery.scrollme.js"></script><!--scroll me jquery plugin-->
      <script src="js/animate-scroll.js"></script><!--animate on scroll me jquery plugin for animation-->
      <script src="js/init.js"></script>
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

        //parallax
        $(document).ready(function(){
          $('.parallax').parallax()
        })
         //Preloader 
         $(document).ready(function() {
            $(window).load(function(){
                setTimeout(function(){
                    $('body').addClass('loaded');
                }, 1000);
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
           $(document).ready(function() {
             $('textarea#textarea2').characterCounter();
           });
      </script>
</html>