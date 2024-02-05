<?php
include("without_login.php");
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-body">

    <?php
    include("greetings.php")
        ?>
    <div class="container  p-3 my-3 bg-dark text-white" data-aos="zoom-out" data-aos-duration="1000" style="opacity: 0.8;">
        <?php
        include("nav.php")
            ?>
        <div class=" table-responsive">
            <a href='user_registration.php' class='btn btn-info '>Add new Customer</a>
            <br><br>

            <table class="table border table-dark ">
                <thead class="font-weight-bold card-header">
                    <td>
                        <h5>Customer Id</h5>
                    </td>
                    <td>
                        <h5>Customer Name</h5>
                    </td>
                    <td>
                        <h5>Mobile Number</h5>
                    </td>
                    <td>
                        <h5>Customer Email</h5>
                    </td>
                    <td>
                        <h5>Vehicle Id</h5>
                    </td>
                    <td>
                        <h5>OEM Id</h5>
                    </td>
                    <td>
                        <h5>Vehicle details</h5>
                    </td>

                </thead>
                <tbody id="myTable">
                    <?php
                    include("../config.php");

                    
                        $uid = $_SESSION["uid"];
                        $q = "select * from customer where OEM_id='$uid'";
                        $run = mysqli_query($con, $q);
                        if ($num = mysqli_num_rows($run) > 0) {
                            while ($result = mysqli_fetch_assoc($run)) {
                                echo "  
                                      <tr class='data'>   
                                           <td>" . $result['customer_id'] . "</td>  
                                           <td>" . $result['customer_name'] . "</td>  
                                           <td>" . $result['customer_contact_number'] . "</td>  
                                           <td>" . $result['customer_email'] . "</td>  
                                           <td>" . $result['vehicle_id'] . "</td>  
                                           <td>" . $result['OEM_id'] . "</td>  
                                           <td><a href='show_process.php?id=" . $result['vehicle_id'] . "' class='btn btn-info'>Show  Details</a></td>  
                                      </tr>  
                                  ";
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