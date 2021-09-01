<?php
require_once("config/db.php");
$lanid = $_GET['GetID'];
$query = "select * from landlords where lanid='".$lanid."'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
    $lanid = $row['lanid'];
    $username = $row['username'];
   $email = $row['email'];
  //$password = $row['password'];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Landlord Update Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h3 class="bg-success text-white text-center py-3">Landlord Update Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="landlordupdate.php?ID=<?php echo $lanid?>" method="post">
                            <input type="text" class="form-control mb-2" placeholder="User Name" name="name" value="<?php echo $username?>">
                            <input type="text" class="form-control mb-2" placeholder="User Email" name="email" value="<?php echo $email?>">
                           <!-- <input type="text" class="form-control mb-2" placeholder="User Password" name="password" value="<?php echo $password ?>">-->
                            <button class="btn btn-primary" name="lanupdate">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
