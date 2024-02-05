<?php
    include("../config.php");

    $name = $_POST['name'];

    $sql = "select * from Users where user_name like '%$name%' or user_email like '%$name%' or user_role like '%$name%' or user_mobile like '%$name%'";
    $query = mysqli_query($con,$sql);
    $data='';
    while($row = mysqli_fetch_assoc($query))
    {
        $data .= "<tr><td>".$row['user_id']."</td><td>".$row['user_name']."</td><td>".$row['user_mobile']."</td><td>".$row['user_email']."</td><td>".$row['user_role']."</td></tr>";
    }
    echo $data;
?>