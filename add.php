<?php
	session_start();
	include_once('config/db.php');

	if(isset($_POST['add'])){
		$lanid= $_SESSION['lanid'] ;
		$type = $_POST['type'];
		$location = $_POST['location'];
		$address = $_POST['address'];
		$rooms = $_POST['rooms'];
		$price = $_POST['price'];
		$landlordphone = $_POST['landlordphone'];
		$description = $_POST['description'];
		
		$target_dir ="public/houses/";
		$target_file=$target_dir . basename($_FILES["images"]["name"]);
		$tmp_file=$_FILES["images"]["name"];
		move_uploaded_file($_FILES["images"]["tmp_name"],$target_file);
		


		$sql = "INSERT INTO houses (lanid,type, location, address,rooms,price,landlordphone,description,image) VALUES ('$lanid','$type', '$location', '$address','$rooms', '$price', '$landlordphone','$description', '$tmp_file')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'House added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: welcomelandlord.php');
?>