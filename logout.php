<?php
session_destroy();

unset($_SESSION['lanid']);
unset($_SESSION['image']);
unset($_SESSION['tenantid']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['verify']);
header("location: index.php");
?>