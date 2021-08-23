<?php
session_start();
// Report all PHP errors
error_reporting(E_ALL);

if(isset($_POST['update'])){

        include('config/db.php');

         $userNewName  =    $_POST['updateUserName'];
         $userNewEmail =    $_POST['userEmail'];
        // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
         $userImage    =   $_FILES['userImage'];

        if(!empty($userNewName) && !empty($userNewEmail)){

            
            
            $imageName = $userImage ['name'];
            $fileType  = $userImage['type'];
            $fileSize  = $userImage['size'];
            $fileTmpName = $userImage['tmp_name'];
            $fileError = $userImage['error'];

            $fileImageData = explode('/',$fileType);
            $fileExtension = $fileImageData[count($fileImageData)-1];

            
            if($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg'){
                //Process Image
                
                if($fileSize < 5000000){
                    //var_dump(basename($imageName));

                    $fileNewName = "public/landlordprof/".$imageName;
                    
                    $uploaded = move_uploaded_file($fileTmpName,$fileNewName);
                    
                    if($uploaded){
                        $loggedInUser = $_SESSION['username'];
                        
                        $sql = "UPDATE landlords SET username = '$userNewName', email ='$userNewEmail', image='$imageName' WHERE username = '$loggedInUser'";

                        $results = mysqli_query($conn,$sql);

                        header('Location: landlordprofile.php?success=userUpdated');
                    exit;
                    }


                }else{
                    header('Location: landlordprofile.php?error=invalidFileSize');
                    exit;
                }
                exit;
            }else{
                header('Location: landlordprofile.php?error=invalidFileType');
                exit;
            }

        }else{
            header('Location: landlordprofile.php?error=emptyNameAndEmail');
            exit;
        }
        



}

?>