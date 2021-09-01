<?php
require_once("config/db.php");
if(isset($_POST['lanupdate']))
{
    $lanid=$_GET['ID'];
    $username=$_POST['name'];
    $email=$_POST['email'];

    $query="update landlords set username='".$username."',email='".$email."'where lanid='".$lanid."'";
    $result = mysqli_query($conn,$query);

if($result)
{
    header("location:adminview.php");
}
else
{
    echo 'please check your query';
}
}
else
{
header("location:adminview.php");
}
?>