<?php
session_start();
include("../config.php");

if (isset($_POST["submit"])) {
    $customer_id = $_POST['c_id'];
    $customer_name = $_POST['name'];
    $customer_mobile = $_POST['mobile'];
    $email = $_POST["email"];
    $veh_id = $_SESSION["vehicle_id"];

    // echo $customer_id."<br/>";
    // echo $customer_name."<br/>";
    // echo $customer_mobile."<br/>";
    // echo $email."<br/>";
    // echo $veh_id."<br/>";
    $q = "update customer set  customer_id='$customer_id',customer_name='$customer_name',customer_contact_number='$customer_mobile',customer_email='$email'  where vehicle_id='$veh_id'";
    $run = mysqli_query($con, $q);
    $re = $con->query($q);
    header("location:index.php");
}

?>