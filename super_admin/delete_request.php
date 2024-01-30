<?php   
 include '../config.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM request WHERE oem_email = '$id'";  
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:requests.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?> 