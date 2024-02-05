<?php
    include("../config.php");

    $name = $_POST['name'];

    $sql = "select * from customer where customer_name like '%$name%'";
    $query = mysqli_query($con,$sql);
    $data='';
    while($row = mysqli_fetch_assoc($query))
    {
        $data .= 
        "<tr><td>".$row['customer_id']."</td><td>".$row['customer_name']."</td><td>".$row['customer_contact_number']."</td><td>".$row['customer_email']."</td><td>".$row['vehicle_id']."</td></tr>";
    }
    echo $data;
?>