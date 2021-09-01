<?php
include_once "config/db.php";
session_start();

$query = "select * from houses";
$result = mysqli_query($conn, $query);

if(!$result){
	echo "Error Found!!!";
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Enyumba System</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="assets/jquery-1.9.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

<script src='assets/google_analytics_auto.js'></script></head>
<style>
		.height10{
			height:15px;
		}
		.mtop10{
			margin-top:15px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
    .navi {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.nav {
  float: left;
}

.nav a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.nav a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: red;
}
.rounded-corners {
  border-radius: 160px;
  overflow: hidden;
}

	</style>

<body>
  <ul class=navi>
        <li class=nav><a  href="tenantindex.php">Home</a></li>
        <li class=nav><a  href="review.php">Review</a></li>
        <li class=nav><a href="tenantprofile.php">Profile</a></li>
        <li class= nav><a href="logout.php">Logout</a></li>
 <?php
        if (empty($_SESSION['image'])) {
          ?>
          <li class=nav style="float:right"> <img class="rounded-corners" src="public/landlordprof/nophoto.jpg" alt="" 
                width="50px" height="50px"></li>
          <?php  
      }
      else
      {
        ?>
        <li class=nav style="float:right"> <img class="rounded-corners" src="public/landlordprof/<?php echo $_SESSION['image']; ?>" alt="" 
                width="50px" height="50px"></li>
                <?php
                }
                ?>
                
  </ul>


<div class="container">


</div>
<div class="">


            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              <h2><a href="#">Affordable housing on rent</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Madaraka</p>
              <p>A home that is peaceful , its peaceful for the mind..</p>
              <cite>Ksh 20,000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2"></div>
              <h2><a href="#">Affordable housing for rent</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Rongai</p>
              <p>You deserve apeaceful home.</p>
              <cite>Ksh 20000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3"></div>
              <h2><a href="#">Affordable housing right here!</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kibera</p>
              <p>Lets live in the comforts of our homes.</p>
              <cite>ksh 20000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4"></div>
              <h2><a href="#">Lets live in harmony</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span>Kiserin</p>
              <p>We all deserve the best homes.</p>
              <cite>ksh 20000</cite>
              </blockquote>
            </div>
          </div>

          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5"></div>
              <h2><a href="#">woooow lets all live happil with enyumba!</a></h2>
              <blockquote>
              <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kibera</p>
              <p>Let us live all together!</p>
              <cite>ksh 20000</cite>
              </blockquote>
            </div>
          </div>
        </div><!-- /sl-slider -->



        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>

      </div><!-- /slider-wrapper -->
</div>



<div class="banner-search">
  <div class="container">
    <!-- banner -->
    <h3>Houses</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
        <form action="search.php" method="post">
          <input name="search" type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
          <div class="col-lg-7">
              <select name="price" class="form-control">
                <option>Price</option>
                <option value="1">0 - 10000</option>
                <option value="2">10000 - 20000</option>
                <option value="3">20000 - 40000</option>
                <option value="4">40000 - above</option>
              </select>
            </div>
          </div>
        
          <div class="row">
          <div class="col-lg-12">
              <select name="type" class="form-control">
                <option>Property Type</option>
                <option value="apartment">apartment</option>
                <option value="estate">estate</option>
                <option value="storey">storeybuilding</option>
                <option value="bungalow">bungalow</option>
              </select>
              </div>
          </div>
              <button name="submit" class="btn btn-success"  onclick="window.location.href='buysalerent.html'">Find Now</button>
              </form>
            
              </div>
          </div>


        </div>
       
      </div>
    </div>
  </div>
</div>
<!-- banner -->
<div class="container">
  <div class="properties-listing spacer"> <a href="tenantindex.php" class="pull-right viewall">View All Listing</a>
    <h2>Featured Properties</h2>
    <div id="owl-example" class="owl-carousel">



      <?php
	  	while($property_result = mysqli_fetch_assoc($result)){
			$houseid = $property_result['houseid'];
			$type = $property_result['type'];
			$location = $property_result['location'];
			$address = $property_result['address'];
			$rooms = $property_result['rooms'];
			$price = $property_result['price'];
			$landlordphone = $property_result['landlordphone'];
			$description = $property_result['description'];
			$image = $property_result['image'];

	  ?>
      <div class="properties">
        <div class="image-holder"><img src="public/houses/<?php echo $image; ?>" class="img-responsive" alt="properties">
         
        </div>
        <h4><a href="property-detail.php?id=<?php echo $houseid; ?>"><?php echo $type;  ?></a></h4>
        <p class="price">Price: Ksh<?php echo $price; ?></p>
        <p class="price">Delivery Type: <?php echo $location; ?></p>
        <p class="price">Rooms: <?php echo $rooms; ?></p>
        
        <a class="btn btn-dark" href="property-detail.php?houseid=<?php echo $houseid; ?>">View Details</a>
      </div>

      <?php } ?>

    </div>
  </div>
 
</div>



<div style="background-color:  #333">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Home</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.html">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.html">Contact</a></li>
              </ul>
            </div>


            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>IT SOURCECODE</b><br>
<span class="glyphicon glyphicon-map-marker"></span>Rongai<br>
<span class="glyphicon glyphicon-envelope"></span>sharondichu@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> +254701625154</p>
            </div>
        </div>
<p class="copyright">Copyright 2021. All rights reserved.	</p>


</div></div>




<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join today and get updated with all the properties deal happening around.</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='register.html'">Join Now</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->



</body>

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:43:16 GMT -->
</html>
