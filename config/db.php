<?php
$dbserver="localhost";
$dbuser="root";
$password="Memusi2020";
$db = "cs_project";

$conn=mysqli_connect($dbserver,$dbuser,$password,$db);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>
