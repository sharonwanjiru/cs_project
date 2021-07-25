<?php
    session_start();
    include('config/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <style>
.navi {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

.nav {
  float: left;
}

.nav a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.nav a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: red;
}
.rounded-image {
  border-radius: 160px;
  overflow: hidden;
}
</style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<ul class=navi>
        <li class=nav><a  href="#home">Home</a></li>
        <li class=nav><a href="landlordprofile.php">Profile</a></li>
        <li class= nav><a href="logout.php">Logout</a></li>
        <li class=nav style="float:right"> <img class="rounded-image" src="public/landlordprof/<?php echo $_SESSION['image']; ?>" alt="" 
                width="50px" height="50px"></li>
        </ul>

    <div align="center">
       <hr>
            <h3>Update Landlord Information</h3>
       <hr>
        <div class="row">
            <div class="col-md-6 offset-3">
                <?php
                if($_GET['success']){
                    if($_GET['success'] == 'userUpdated'){
                        ?>
                        <small class="alert alert-success"> User updated Successfully</small>
                        <hr>
                        <?php
                    }
                }


                if(isset($_GET['error'])){
                    if($_GET['error'] == 'emptyNameAndEmail'){
                        ?>
                        <small class="alert alert-danger"> Name and email is required</small>
                        <hr>
                        <?php
                    }else if($_GET['error'] == 'invalidFileType'){
                        ?>
                        <small class="alert alert-danger"> Invalid file type, Only Images allowed.</small>
                        <hr>
                        <?php
                    }else if($_GET['error'] == 'invalidFileSize'){
                        ?>
                        <small class="alert alert-danger"> Maximum 5mb Image size allowed.</small>
                        <hr>
                        <?php
                    }
                }
                ?>
                <form action="controllers/landlordprofileupdate.php"
                      method="POST"
                      enctype="multipart/form-data"
                >
                    <?php
                        $currentUser = $_SESSION['username'];
                        $sql = "SELECT * FROM landlords WHERE username ='$currentUser'";

                        $gotResuslts = mysqli_query($conn,$sql);

                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)){
                                    //print_r($row['user_name']);
                                    ?>
                                        <div class="form-group">
                                            <input type="text" name="updateUserName" class="form-control" value="<?php echo $row['username']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="userEmail" class="form-control" value="<?php echo $row['email']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="userImage" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="update"  class="btn btn-info" value="Update">
                                        </div>
                                    <?php
                                }
                            }
                        }


                    ?>
                
                </form>
            </div>
            
        </div>


    </div>
    
</body>
</html>