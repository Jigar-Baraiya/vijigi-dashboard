<?php
    include("../config.php");

    $name = $_POST['name'];

    $sql = "select * from oem where OEM_name like '%$name%'";
    $query = mysqli_query($con,$sql);
    $data='';
    while($row = mysqli_fetch_assoc($query))
    {
        $data .= "<tr><td>".$row['OEM_id']."</td><td>".$row['OEM_name']."</td></tr>";
    }
    echo $data;
?>