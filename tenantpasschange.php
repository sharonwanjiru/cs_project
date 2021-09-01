<?php 
session_start();
 ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
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
<ul class=navi>
        <li class=nav><a  href="tenantindex.php">Home</a></li>
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


<div class="container" style="margin-top: 50px;">
<hr>
            <h3>Update Your Information</h3>
<hr>

<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
		
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="tenantpass.php">
				<div class="form-group">
					<label>Current password</label>
					<input type="password" class="form-control" name="current_password" placeholder="Current password">
				</div>

				<div class="form-group">
					<label>New password</label>
					<input type="password" class="form-control" name="new_password" placeholder="New password">
				</div>

				<div class="form-group">
					<label>Confirm password</label>
					<input type="password" class="form-control" name="confirm_password" placeholder="Confirm password">
				</div>

				<p>
					<input type="submit" class="btn btn-primary" name="change_password" value="Change password">
				</p>
			</form>
		</div>
	</div>
</div>