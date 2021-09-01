<?php 
 require_once("config/db.php");
 $stmt="select * from landlords";
 $result = mysqli_query($conn,$stmt);
 //$query="select * from tenants";
 //$res=mysqli_query($conn,$query);
 ?>



<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<title>View Records</title>
</head><br><br><br>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                <table class="table table-bordered">
                    <tr>
                        <td>Landlord Id</td>
                        <td>Landlord Username</td>
                        <td>Landlord Email</td>
                      <!--  <td>Landlord Password</td>-->
                        <td>Edit</td>
                        <td>Delete</td>
                    </tr>
                    <?php
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $lanid = $row['lanid'];
                        $username = $row['username'];
                      $email = $row['email'];
                    //  $password = $row['password'];
                     ?>  
                     <tr>
                         <td><?php echo $lanid?></td>
                         <td><?php echo $username?></td>
                         <td><?php echo $email?></td>
                         <td><a href="landedit.php ?GetID=<?php echo $lanid?>">Edit</a></td>
                         <td><a href="landdelete.php?Del=<?php echo $lanid?>">Delete</a></td>

                     </tr>
                     <?php
                    }
                   ?>
                </table>



                </div>
            </div>
        </div>
    </div>
    
</body>
    </html>