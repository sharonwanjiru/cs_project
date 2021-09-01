<?php
require_once("config/db.php");
if(isset($_GET['Del']))
{
    $lanid = $_GET['Del'];
    $query = "delete from landlords where lanid ='".$lanid."'";
    $result =mysqli_query($conn,$query);
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