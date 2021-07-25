<?php
session_destroy();
unset($_SESSION['tenantid']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['verify']);
header("location: signup.php");
?>