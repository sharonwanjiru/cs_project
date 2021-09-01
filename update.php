<?php
require_once("config/db.php");
if(isset($_POST['update']))
{
    $tenantid=$_GET['ID'];
    $username=$_POST['name'];
    $email=$_POST['email'];

    $query="update tenants set username='".$username."',email='".$email."'where tenantid='".$tenantid."'";
    $result = mysqli_query($conn,$query);

if($result)
{
    header("location:tenantview.php");
}
else
{
    echo 'please check your query';
}
}
else
{
header("location:tenantview.php");
}
?>