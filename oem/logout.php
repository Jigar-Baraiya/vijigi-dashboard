<?php
session_start();
session_destroy();
unset($_SESSION['email']);
unset($_SESSION['password']);
// echo"<script>alert('you will be loggedd out!');</script>";
header("location: ../index.php")
?>