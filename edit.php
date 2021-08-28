<?php
	session_start();
	include_once('config/db.php');

	if(isset($_POST['edit'])){
		$houseid = $_POST['houseid'];
		$type = $_POST['type'];
		$location = $_POST['location'];
		$address = $_POST['address'];
		$rooms = $_POST['rooms'];
		$price = $_POST['price'];
		$landlordphone=$_POST['landlordphone'];
		$description=$_POST['description'];

		$target_dir ="public/houses/";
		$target_file=$target_dir . basename($_FILES["images"]["name"]);
		$tmp_file=$_FILES["images"]["name"];
		move_uploaded_file($_FILES["images"]["tmp_name"],$target_file);
		
		
		$sql = "UPDATE houses SET  type = '$type',  location = '$location', address = '$address',rooms = '$rooms',price = '$price',landlordphone = '$landlordphone' ,description = '$description', image = '$tmp_file' WHERE houseid = '$houseid'";
		

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Houses updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating houses';
		}
	}
	else{
		$_SESSION['error'] = 'Select house to edit first';
	}

	header('location: welcomelandlord.php');

?>