<?php
include_once "config/db.php";
session_start();

if(isset($_POST['submit'])){
	$search_value = $_POST['search'];
	$price = $_POST['price'];
	$type = $_POST['type'];
  

	if(empty($search_value) or empty($price)  or empty($type)){
		header ("Location: in.php");
	}

	if($price == 1){
		$q = "select * from houses where (type LIKE '%$search_value%' or location LIKE '%$search_value%' or address LIKE '%$search_value%' or rooms LIKE '%$search_value%') and (type = '$type') and (price >= 0 and price <= 10000)";
	}
	elseif($price == 2){
		$q = "select * from houses where (type LIKE '%$search_value%' or location LIKE '%$search_value%' or address LIKE '%$search_value%' or rooms LIKE '%$search_value%') and (type = '$type') and (price >= 10000 and price <= 20000)";
	}

	elseif($price == 3){
		$q = "select * from houses where (type LIKE '%$search_value%' or location LIKE '%$search_value%' or address LIKE '%$search_value%' or rooms LIKE '%$search_value%') and (type = '$type')  and (price >= 20000 and price <= 40000)";
	}

	elseif($price == 4){
		$q = "select * from houses where (type LIKE '%$search_value%' or location LIKE '%$search_value%' or address LIKE '%$search_value%' or rooms LIKE '%$search_value%') and (type = '$type')  and (price >= 40000)";
	}

	$result = mysqli_query($conn, $q);
	if(!$result){
		echo "Error Found!!";
	}

}

else {header ("Location: in.php"); }

?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/buysalerent.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Search Result - Real Estate Management System</title>
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


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" style="background-color: #0BE0FD">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>

          </div>
        </div>

    </div>
<!-- #Header Starts -->
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


</div><!-- banner -->
<div class="inside-banner">
  <div class="container">
    <h2>Search Result:</h2>
</div>
</div>

<!-- banner -->


<div class="container">
<div class="properties-listing spacer">

<div class="row">
<div class="col-lg-3 col-sm-4 ">

  <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
  <form action="search.php" method="post" name="search">
    <input type="text" class="form-control" name="search" placeholder="Search of Properties">
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
          <button name="submit" class="btn btn-dark">Find Now</button>
</form>
  </div>






</div>

<div class="col-lg-9 col-sm-8">
<div class="sortby clearfix">
<div class="pull-left result">Showing: Search Result </div>
  <div class="pull-right">
  </div>

</div>
<div class="row">

     <!-- properties -->
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
      <div class="col-lg-4 col-sm-6">
      <div class="properties">
        <div class="image-holder"><img src="public/houses/<?php echo $image; ?>" class="img-responsive" alt="properties">
  
        </div>
        <h4><a href="property-detail.php?houseid=<?php echo $houseid; ?>"><?php echo $type;  ?></a></h4>
        <p class="price">Price: $<?php echo $price; ?></p>
        <p class="price">Location: <?php echo $location; ?></p>
        <p class="price">Rooms: <?php echo $rooms; ?></p>
        
        <a class="btn btn-dark" href="property-detail.php?houseid=<?php echo $houseid; ?>">View Details</a>
      </div>
      </div>
      <?php } ?>
      <!-- properties -->


</div>
</div>
</div>
</div>
</div>




<div style="background-color:  #333">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="tenantindex.php">Home</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
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
<span class="glyphicon glyphicon-map-marker"></span>Nairobi<br>
<span class="glyphicon glyphicon-envelope"></span>sharondichu@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> +2547016265154/p>
            </div>
        </div>
<p class="copyright">Copyright 2021. All rights reserved. </p>


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

<!-- Mirrored from thebootstrapthemes.com/live/thebootstrapthemes-realestate/buysalerent.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Apr 2017 02:45:10 GMT -->
</html>
