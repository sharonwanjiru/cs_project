<?php
 
     session_start();
     $conn = mysqli_connect('localhost', 'root', '', 'cs_project');
    
    // Set user ID, you must be getting it from $_SESSION
    $user_id = $_SESSION['lanid'];;
 
    // This will be called once form is submitted
    if (isset($_POST["change_password"]))
    {
 
        // Get all input fields
        $current_password = $_POST["current_password"];
        $new_password = $_POST["new_password"];
        $confirm_password = $_POST["confirm_password"];

        
        // Check if current password is correct
        $sql = "SELECT * FROM landlords WHERE lanid = '" . $user_id . "'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_object($result);
         
        if (password_verify($current_password, $row->password))
        {
            // Check if password is same
            if ($new_password == $confirm_password)
            {
                // Change password
                $sql = "UPDATE landlords SET password = '" . password_hash($new_password, PASSWORD_DEFAULT) . "' WHERE lanid = '" . $user_id . "'";
                mysqli_query($conn, $sql);
                header("Location: passchange.php?success=Your password has been changed successfully");
 
               // echo "<div class='alert alert-success'>Password has been changed.</div>";
            }
            else
            {
                header("Location: passchange.php?error=Password does not match");
               // echo "<div class='alert alert-danger'>Password does not match.</div>";
            }
        }
        else
        {
            header("Location: passchange.php?error=Incorrect password");
           // echo "<div class='alert alert-danger'>Password is not correct.</div>";
        }
    }
?>