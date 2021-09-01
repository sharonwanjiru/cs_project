<?php 
 require_once("config/db.php");
 $query="select * from tenants";
 $res=mysqli_query($conn,$query);
 ?>
 <!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />-->
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<!--<link rel="stylesheet" href="bootstrap/css/bootstrap-utilities.css">-->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
<title>View Records</title>
</head><br><br><br>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                <table class="table table-bordered">
                <table class="table table-bordered">
                    <tr>
                        <td>Tenant Id</td>
                        <td>Tenant Username</td>
                        <td>Tenant Email</td>
                        <td>Tenant Password</td>
                        <td>Edit</td>
                        <td>Delete</td>

                    </tr>
                    <?php
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $tenantid = $row['tenantid'];
                        $username = $row['username'];
                       $email = $row['email'];
                      $password = $row['password'];

                     ?>  
                     <tr>
                         <td><?php echo $tenantid?></td>
                         <td><?php echo $username?></td>
                         <td><?php echo $email?></td>
                         <td><?php echo $password?></td>
                         <td><a href="tenantedit.php?GetID=<?php echo $tenantid?>">Edit</a></td>
                         <td><a href="tenantdelete.php?Del=<?php echo $tenantid?>">Delete</a></td>
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