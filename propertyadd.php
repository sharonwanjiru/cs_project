
<?php
session_start();
?>
<?php
require_once("config/db.php");
$errors = [];


if (isset($_POST['submit'])){
    if (empty($_POST['location'])) {
        $errors['location'] = 'Location required';
    }
    if (empty($_POST['bedrooms'])) {
        $errors['bedrooms'] = 'Bedrooms required';
    }
    if (empty($_POST['parking'])) {
        $errors['parking'] = 'Parking required';
    }
    if (empty($_POST['kitchen'])) {
        $errors['kitchen'] = 'Kitchen required';
    }
    if (empty($_POST['bathroom'])) {
        $errors['bathroom'] = 'Bathroom';
    }
    if (empty($_POST['address'])) {
        $errors['address'] = 'Address required';
    }
    if (empty($_POST['extrarooms'])) {
        $errors['extrarooms'] = 'Extrarooms required';
    }
    if (empty($_POST['bathroom'])) {
        $errors['bathroom'] = 'Bathroom';
    }
    if (empty($_POST['price'])) {
        $errors['price'] = 'price';
    }
    if (empty($_POST['landlordphone'])) {
        $errors['landlordphone'] = 'landlordphone';
    }
    if (count($errors) === 0) {
   
	$lanid= $_SESSION['lanid'] ;
	$location = $_POST['location'];
    $bedrooms    = $_POST['bedrooms'];
    $parking= $_POST['parking'];
    $kitchen    = $_POST['kitchen'];
    $bathroom = $_POST['bathroom'];
    $address    = $_POST['address'];
    $extrarooms   =  $_POST['extrarooms'];
    $price   =  $_POST['price'];
    $landlordphone   =  $_POST['landlordphone'];

    $target_dir ="public/houses/";
    $target_file=$target_dir . basename($_FILES["images"]["name"]);
    $tmp_file=$_FILES["images"]["name"];
    move_uploaded_file($_FILES["images"]["tmp_name"],$target_file);
   // $query= "INSERT INTO houses (lanid,location,bedrooms,parking,Kitchen,bathroom,address,extrarooms,price,landlordphone,image1) VALUES()";
    $q="INSERT INTO `houses`( lanid,location, bedrooms, parking, Kitchen,bathroom,address,extrarooms,price,landlordphone,image1) VALUES ('$lanid','$location','$bedrooms','$parking','$kitchen','$bathroom','$address','$extrarooms','$price','$landlordphone','$tmp_file')";
	$insert= $conn->query($q);	
    }
 

}
  ?>
<!DOCTYPE html>
<html>

<head>
    <title>House details</title>
    <?php if (count($errors) > 0): ?>
  <div class="alert alert-danger">
    <?php foreach ($errors as $error): ?>
    <li>
      <?php echo $error; ?>
    </li>
    <?php endforeach;?>
  </div>
<?php endif;?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
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
</head>

<body>
<ul class=navi>
        <li class=nav><a  href="welcomelandlord.php">Home</a></li>
        <li class=nav><a href="landlordprofile.php">Profile</a></li>
        <li class= nav><a href="logout.php">Logout</a></li>
        <li class=nav style="float:right"> <img class="rounded-corners" src="public/landlordprof/<?php echo $_SESSION['image']; ?>" alt="" 
                width="50px" height="50px"></li>
        </ul>

    <form  id="application" action="" method="post" enctype='multipart/form-data'>
    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="location" class="col-form-label">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="location" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="bedrooms" class="col-form-label">Bedroom/s</label>
                            <input type="number" class="form-control" id="bedrooms" name="bedrooms" placeholder="bedrooms" required>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="parking"  class="col-form-label">Is parking available:</label>
                         <select name="parking" id="parking">
                         <option value="parking">Available</option>
                         <option value="parking">Unavailable</option>
                         </select>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="kitchen"  class="col-form-label">Is kitchen available:</label>
                         <select name="kitchen" id="kitchen">
                         <option value="kitchen">Available</option>
                         <option value="kitchen">Unavailable</option>
                         </select>
                        </div>

                        <div class="form-group col-md-6">
                        <label for="bathroom"  class="col-form-label">Is bathroom available:</label>
                         <select name="bathroom" id="bathroom">
                         <option value="bathroom">Available</option>
                         <option value="bathroom">Unavailable</option>
                         </select>
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="address" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="address" required>
                        </div>
                        
                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="extrarooms" class="col-form-label">Extrarooms</label>
                            <input type="number" class="form-control" id="extrarooms" name="extrarooms" placeholder="extrarooms" required>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="price" class="col-form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="price" required>
                        </div>
</div>

                        <div class="form-row">
                            
                        <div class="form-group col-md-4">
                            <label for="landlordphone" class="col-form-label">Landlordphone</label>
                            <input type="text" class="form-control" id="landlordphone" name="landlordphone" placeholder="landlordphone" required>
                        </div>
        
                        <div class="form-group col-md-4">
                            <label for="image1" class="col-form-label">Featured Images</label>
                            <input type="file" class="form-control" name="images" id="image1" >
                        </div>
                        <div class="form-group col-md-4">
                            <label for="image2" class="col-form-label">Rooms Images</label>
                            <input type="file" class="form-control" name="img[]" id="image2" multiple>
                        </div> 
</div>
                               
                    </div>
                    <p>
                       
                        <button type="submit" name="submit" class="btn btn-primary" class="button">Submit </button>
                       
                  </p>
                  
                  
    </form>
    
</body>

</html>