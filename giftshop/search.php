<?php
session_start();
$conn=mysqli_connect("localhost","root","","giftstore");
$count=0;
?>
<!doctype html>
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
		.gradient{
			background:linear-gradient(to right,black,grey);
			margin-top:-20px;
		}
		.card_color{
			background-color: #ffab91;
		}
		.card_font{
			font-size: 17px;
		}
    .card-title1{
      font-size: 18px;
    }
		.card_button{
			font-size: 15px;
			border-radius: 10px;
			margin-left: 40%;
			font-size: 20px;
			background-color: white;
			border:2px solid black;
			transition: 0.5s;
			padding:5px 20px 5px 20px; 
		}
		.card_button:hover{
			background-color: black;
			color:white;
			transition: 0.5s;
		}
		.text-danger{
			color:black;
			text-align:left;
		}
		h5{
			display:inline;
			padding-left: 20px;
		}
      </style>
   </head>
   
   <body>
   	<!--navigation bar-->
      <div class="row navbar-fixed">
         <nav >
            <div class="nav-wrapper">
               <a href="#" class="brand-logo"> <b>VIMAL'S</b> Giftery shop</a>
               <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
               <ul id="categories1" class="dropdown-content" databeloworigin="true"><!--for dropdown contents who has data activates as categories1 on desktop navigation bar-->
                  <li><a href="category1.php" class="dropdown_link">Kids</a></li>
                  <li><a href="category3.php" class="dropdown_link">Home Decor</a></li>
                  <li><a href="category4.php" class="dropdown_link">Men Accessories</a></li>
                  <li><a href="category5.php" class="dropdown_link">Jewellery</a></li>

               </ul>
               <ul id="categories2" class="dropdown-content" databeloworigin="true"><!--for dropdown contents who has data activates as categories2 on mobile sidenav-->
                  <li><a href="category1.php" class="dropdown_link">Kids</a></li>
                  <li><a href="category2.php" class="dropdown_link">PhoneCase</a></li>
                  <li><a href="category3.php" class="dropdown_link">Home Decor</a></li>
                  <li><a href="category4.php" class="dropdown_link">Watches</a></li>
                  <li><a href="category5.php" class="dropdown_link">Jewellery</a></li>
                  <li><a href="category6.php" class="dropdown_link">Soft Toys</a></li>
                  <li><a href="category7.php" class="dropdown_link">Crockery</a></li>
                  <li><a href="category8.php" class="dropdown_link">Wallet</a></li>

               </ul>

               <ul id="nav-mobile" class="right hide-on-med-and-down"><!--for desktop-->
                <form action="search.php" method="POST"><!--for search function-->
                  <?php
                    if(isset($_SESSION['userid'])){//navigation bar for user who has logged in 
                    ?>
                          <li><a href="index.php" class="navlink">Home</a></li>
                          <li><a href="#" class="dropdown-trigger navlink" data-activates="categories1">Categories<i class="material-icons right">arrow_drop_down</i></a></li>
                          <li><a href="aboutus.php" class="navlink">About Us</a></li>
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
                  <li><a href="aboutus.php" class="navlink">About Us</a></li>
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
    <!--displaying category from database-->
    <div class="gradient">
    	<?php
    	$searchq=$_POST["search"];//ge the content typed in search bar
      $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
      $query="select * from homedecor where name like '%$searchq%' 
         union all
         select * from product_kids where name like '%$searchq%' 
         union all
         select * from phonecasse where name like '%$searchq%' 
         union all
         select * from watch where name like '%$searchq%' 
         union all
         select * from jewellery where name like '%$searchq%' 
         union all
         select * from softtoys where name like '%$searchq%' 
         union all
         select * from crockery where name like '%$searchq%' 
         union all
         select * from wallet where name like '%$searchq%'";
    	$result=mysqli_query($conn, $query);
    	if(mysqli_num_rows($result)>0)
    	{
    		while($row=mysqli_fetch_array($result))
    		{
    			if($count==0)
	  			{
	  			?>
	  			<div class="row">
	  			<?php
	  			}
	  			$count=$count+1;
    	?>
    		 <div class="col s12 l3">   
    		    <form method="post" action="shopping_cart.php?action=add&id=<?php echo $row["id"];?>"><!--send data to-->
    	          <div class="card small">
    	          	<div class="card-image waves-effect waves-block waves-light">
	    				      <img class="activator responsive-img" src="images/<?php echo $row["category"];?>/<?php echo $row["img"];?>"/><br/>
	    			      </div>
	    			      <div class="card-content card_color black-text">
        	    				<span class="card-title activator grey-text text-darken-4"><?php echo $row["name"];?><i class="material-icons right">more_vert</i></span>
        	    				<h5 class="text-danger">RS <?php echo $row["price"];?></h5>
        	    				<span class="card_font"><input type="submit" class="card_button" value="Add To Cart" name="add_to_cart"</span>
        	    				<input type="hidden" name="hidden_name" value="<?php echo $row["name"];?>"/><!--for future use-->
        	    				<input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>"/>
        	    				<input type="hidden" name="hidden_img_id" value="<?php echo $row["img"];?>"/>
        	    				<input type="hidden" name="hidden_category" value="kids"><!--or value=row["category"]-->
        	    				<input type="hidden" name="item_quantity" value="1">
    			        </div>
    			        <div class="card-reveal">
        							<span class="card-title grey-text text-darken-4">Kids Table<i class="material-icons right">close</i></span>
        							<p>Here is some more information about this product that is only revealed once clicked on.</p>
					        </div>
    			      </div>
    		    </form>
    		  </div>
    		<?php
	  			if($count==4)
	  			{
	  				$count=0;
	  		?>
	  	</div>
    	<?php
    		    }
    		    }
    	}
    	?>
    </div>
    <div id="go-top" style="display: none;">
         <a title="Back to Top" href="#"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
      </div>
     <!-- Page Footer -->
      <div class="row" style="margin-top:-20px">
         <footer class="page-footer black white-text">
            <div class="row center-align">
                <div class="col s12 m12 l12">
                  <h4><a href="index.php" class="footerlogo">GiftStore</a></h4>
                  <!-- <p class="white-text">Information will be provided soon.</p> -->
                </div>
            </div>
             <div class="row center-align">
                <div class="col s12 m12 l12">
                    <a href="index.php" class="link">Home<span class="white-text"> |</span></a> 
                    <a href="aboutus.html" class="link">About Us<span class="white-text"> |</span></a> 
                     <a href="contactus.html" class="link">Contact Us<span class="white-text"> |</span></a> 
                  </div>
              </div> 
              <div class="row center-align">
               <div id="social">
                  <a class="facebookBtn smGlobalBtn" href="#!"></a>
                  <a class="googleplusBtn smGlobalBtn" href="#!"></a>
               </div>
              </div>
              <div class="row center-align marginReduce footer-copyright" style="margin-bottom:-20px;">
               <div id="footertext" class="col s12 m12 l12">
                  &copy 2018 Copyright Text .All Rights reserved.
               </div>
            </div>
         </footer>
      </div>

	</body>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script><script src="js/jquery.validate.min.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/init.js"></script>
	<script type="text/javascript">
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
	</script>
</html>
