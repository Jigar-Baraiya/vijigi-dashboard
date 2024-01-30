<?php
include("without_login.php");
include("../config.php");
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../logo.css">
    <link rel="stylesheet" href="../aos.css">
    <script src="../aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-body">

    <?php
    include("greetings.php")
        ?>
    <div class="container w-100  p-3 my-3 bg-dark text-white op" data-aos="zoom-out" data-aos-duration="1000" style="opacity: 0.8;">
        <?php
        include("nav.php")
            ?>
        <div class=" table-responsive">
        
            <table class="table border table-dark ">
                <thead class="font-weight-bold card-header">
                    <td>
                        <h5>Name</h5>
                    </td>
                    <td>
                        <h5>Mobile</h5>
                    </td>
                    <td>
                        <h5>Email</h5>
                    </td>
                    <td>
                        <h5>Discription</h5>
                    </td>
                    <td>
                        <h5>Operations</h5>
                    </td>
                    

                </thead>
                <tbody id="myTable">
                    <?php
                $uid = $_SESSION["uid"];
                        $q = "select * from request";
                        $run = mysqli_query($con, $q);
                        if ($num = mysqli_num_rows($run) > 0) {
                            while ($result = mysqli_fetch_assoc($run)) {
                                 echo "<tr>" ;  
                                          echo "<td>" . $result['oem_name'] . "</td>";  
                                          echo "<td>" . $result['oem_contact_number'] . "</td>";
                                          echo "<td>" . $result['oem_email'] . "</td>";  
                                          echo "<td>" . $result['discription'] . "</td>";
                                          echo "<td>"?><a href="mail.php?id=<?php echo $result['oem_email']?>&name=<?php echo $result['oem_name']; ?>" class='btn btn-info'>Reply</a>          <a href="delete_request.php?id=<?php echo $result['oem_email']?>" class='btn btn-danger'>Delete</a>
                                        
                                          <?php echo"</td>";  
                                           echo "<tr>";  
                                  
                            }
                        }
?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
</body>

</html>