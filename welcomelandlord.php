
<?php
 include 'controllers/landlordcontroller.php';

?>
<?php
// redirect user to login page if they're not logged in
if (empty($_SESSION['lanid'])) {
    header('location: landlordlogin.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PROPERTIES</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
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
.footer{
  background:#708090;

}
.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(0.1rem, 1fr));
    gap:1.5rem;
  
}

.footer .box-container .box h3{
    padding:.5rem 0;
    font-size: 2.0rem;
    color:var(--black);
    font-weight:bold;
}

.footer .box-container .box a{
    display: block;
    padding:.2rem 0;
    font-size: 2.0rem;
    color:var(--light-color);
}

.footer .box-container .box a:hover{
    color:var(--green);
    text-decoration: underline;
}

.footer .credit{
    text-align: center;
    border-top: .1rem solid rgba(0,0,0,.1);
    font-size: 1.0rem;
    color:var(--black);
    padding:.5rem;
    padding-top: 1.5rem;
    margin-top: 1.5rem;
   
}

.footer .credit span{
    color:var(--green);
}
.heading{
  text-align: center;
}
	</style>
</head>
<body>
<ul class=navi>
        <li class=nav><a  href="welcomelandlord.php">Home</a></li>
        <li class=nav><a href="landlordprofile.php">Profile</a></li>
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
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['type'] ?>">
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['type']);
          ?>
        </div>
        <?php endif;?>
       
         <?php if (!$_SESSION['verified']): ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            You need to verify your email address!
            Sign into your email account and click
            on the verification link we just emailed you
            at
            <strong><?php echo $_SESSION['email']; ?></strong>
          </div>
        <?php else: ?>
          <h4>Welcome, <?php echo $_SESSION['username']; ?> to Enyumba</h4>
	<h1 class="page-header text-center"> YOUR PROPERTIES</h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New</a>
				
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>Type</th>
						<th>Location</th>
						<th>Address</th>
            <th>Rooms</th>
            <th>Price</th>
            <th>Contact</th>
            
            <th>FloorSize</th>
            <th>Description</th>
            <th>Image</th>
           
						<th>Action</th>
					</thead>
					<tbody>
						<?php
							include_once('config/db.php');
              $currentUser = $_SESSION['lanid'];
							$sql = "SELECT * FROM houses where lanid=$currentUser";
             

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['houseid']."</td>
									<td>".$row['type']."</td>
									<td>".$row['location']."</td>
									<td>".$row['address']."</td>
                  <td>".$row['rooms']."</td>
                  <td>".$row['price']."</td>
                  <td>".$row['landlordphone']."</td>
                  <td>".$row['floorsize']."</td>
                  <td>".$row['description']."</td>
                  <td><img src='public/houses/".$row['image']."' width='200px' height='200px'></td>
                  
                  
                  

       
									<td>
										<a href='#edit_".$row['houseid']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
										<a href='#delete_".$row['houseid']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
							

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
        <?php endif;?>
</body>

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3>locations</h3>
        <a href="#">rongai</a>
        <a href="#">ngong</a>
        <a href="#">kiserian</a>
        <a href="#">langata</a>
        <a href="#">madaraka</a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="#">reivew</a>
        
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#">+254 701 625 154</a>
        <a href="#">0703182555</a>
        <a href="#">sharondichu@gmail.com</a>
        <a href="#">mercy@gmail.com</a>
        <a href="#">Kiserian, kajiado - 400104</a>
    </div>

    <div class="box">
        <h3>follow us</h3>
        <a href="#">facebook</a>
        <a href="#">twitter</a>
        <a href="#">instagram</a>
        <a href="#">linkedin</a>
    </div>

</div>

<div class="credit"> copyright @ 2021 by <span>Sharon and Mercy</span> </div>

</section>
<style>
.PP{
	text-align: center;
}
</style>
</html>