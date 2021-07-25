<?php include 'controllers/landlordcontroller.php'?>
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
</style>
</head>

<body>
<ul class=navi>
        <li class=nav><a  href="#home">Home</a></li>
        <li class=nav><a href="#contact">Profile</a></li>
        <li class= nav><a href="#about">About</a></li>
        <li class=nav style="float:right"><a class="active" href="logout.php">Logout</a></li>
        </ul>

  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 home-wrapper">

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
  </div>
</body>
</html>