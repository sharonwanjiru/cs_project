<?php
require_once 'lansendemails.php';
session_start();
$username = "";
$email = "";

$errors = [];

$conn = new mysqli('localhost', 'root', '', 'cs_project');

// SIGN UP USER
if (isset($_POST['signup-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
        echo "<script>alert('Password did not match.');</script>";
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM landlords WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
        echo "<script>alert('Email already exists in out database.');</script>";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO landlords SET username=?, email=?, token=?, password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ssss', $username, $email, $token, $password);
        $result = $stmt->execute();

        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();

            // TO DO: send verification email to user
            sendVerificationEmail($email, $token);
               
            $_SESSION['lanid'] = $user_lanid;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You are registered check email!';
            $_SESSION['type'] = 'alert-success';
            echo "<script>alert('Successfully registered.');</script>";
            header('location: landlordlogin.php');

        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}

// LOGIN
if (isset($_POST['login-btn'])) {
    if (empty($_POST['email'])) {
        $errors['email'] = ' email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    //$username = $_POST['username'];
     $email = $_POST['email'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM landlords WHERE email=? OR username=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $email, $password);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) { // if password matches
                $stmt->close();

                $_SESSION['lanid'] = $user['lanid'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
                $_SESSION['image'] = isset($user['image']) ? $user['image'] : null;
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: welcomelandlord.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "Wrong username / password";
            }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}