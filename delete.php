<?php
	session_start();
	include_once('config/db.php');

	if(isset($_GET['houseid'])){
		$sql = "DELETE FROM houses WHERE houseid = '".$_GET['houseid']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Property deleted successfully';
		}
		
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: welcomelandlord.php');
?>