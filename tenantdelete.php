<?php
require_once("config/db.php");
if(isset($_GET['Del']))
{
    $tenantid = $_GET['Del'];
    $query = "delete from tenants where tenantid ='".$tenantid."'";
    $result =mysqli_query($conn,$query);
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