<?php 
session_start();
 ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />


<div class="container" style="margin-top: 50px;">
<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
		
	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="pass.php">
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