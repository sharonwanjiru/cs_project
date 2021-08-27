
<?php include 'controllers/landlordcontroller.php';

?>
<?php
// redirect user to login page if they're not logged in
if (empty($_SESSION['lanid'])) {
    header('location: landlordlogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
 <link rel="stylesheet" href="main.css">
  <title>Nyumba</title>
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
        <li class=nav><a href="propertyadd.php">Addhouse</a></li>
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
    <div class="row">
      
        <!-- Display messages -->
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['type'] ?>">
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['type']);
          ?>
        </div>
        <?php endif;?>
        <h4>Welcome, <?php echo $_SESSION['username']; ?> to Enyumba</h4>
      
        <h2> Property List</h2>
        
        <table class="table table-hover">
      <thead>
    <tr>
      <th scope="col">Location</th>
      <th scope="col">bedrooms</th>
      <th scope="col">parking</th>
      <th scope="col">Kitchen</th>
      <th scope="col">bathroom</th>
      <th scope="col">address</th>
      <th scope="col">Extra Rooms</th>
      <th scope="col">Price</th>
      <th scope="col">Landlordphone</th>     
    </tr>
  </thead>
  <tbody>  
     
    <?php 
    require_once("config/db.php");

    $currentUser = $_SESSION['lanid'];
    $query = "SELECT * FROM houses WHERE lanid ='$currentUser'";
    //$query="SELECT * FROM houses";
    $read=$conn->query($query);
    while ($row=$read->fetch_assoc()){?>
    <tr class="table-primary">
      <td><?php echo $row['location']; ?></td>
      <td><?php echo $row['bedrooms']; ?></td>
      <td><?php echo $row['parking']; ?></td>
      <td><?php echo $row['Kitchen']; ?></td>
      <td><?php echo $row['bathroom']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['extrarooms']; ?></td>
      <td><?php echo $row['price']; ?></td>
      <td><?php echo $row['landlordphone']; ?></td>
      <td><button class="btn btn-success">Update</button></td>
		  <td><button class="btn btn-danger">Delete</button></td>
      <td><button class="btn btn-danger">Disable</button></td>
      
    </tr>
  
    <?php } ?>
  </tbody>
</table>

        <!--
         <?php echo $_SESSION['image']; ?>
        <img src="public/landlordprof/<?php echo $_SESSION['image']; ?>" alt="" 
                width="100px" height="100px">-->
        <!--for unactivated accounts -->
        <?php if (!$_SESSION['verified']): ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            You need to verify your email address!
            Sign into your email account and click
            on the verification link we just emailed you
            at
            <strong><?php echo $_SESSION['email']; ?></strong>
          </div>
        <?php else: ?>
          <!--for unactivated ens here 
           <button class="btn btn-lg btn-primary btn-block">Activated</button -->
        <?php endif;?>
     
    </div>
  </div>
</body>
</html>