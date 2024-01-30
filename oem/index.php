<?php
include("without_login.php")
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

    <div data-aos="zoom-out" data-aos-duration="1000">
        <?php
        include("greetings.php")
            ?>
    </div>
    <div class="container  p-3 my-3 bg-dark text-white op" data-aos="zoom-out" data-aos-duration="1000" style="opacity: 0.8;">
        <?php
        include("nav.php")
            ?>
        <div class=" table-responsive">
            <a href='add_product.php' class='btn btn-info '>Add new product</a>
            <table class="table border table-dark mt-4">
                <thead class="font-weight-bold card-header">
                    <td>
                        <h5>Product Id</h5>
                    </td>
                    <td>
                        <h5>Product Name</h5>
                    </td>
                    <td>
                        <h5>Model Name</h5>
                    </td>
                    <td>
                        <h5>OEM Id</h5>
                    </td>
                    <td>
                        <h5>OEM Name</h5>
                    </td>
                    <td>
                        <h5>Delete Product</h5>
                    </td>

                </thead>
                <tbody id="myTable">
                    <?php
                    include("../config.php");

                    if (isset($_GET['search'])) {
                        $filtervalues = $_GET['search'];

                        $uid = $_SESSION["uid"];
                        $q = "select * from product where OEM_id='$uid'";
                        $r = mysqli_query($con, $q);
                        while ($n = mysqli_fetch_array($r)) {

                            echo "<tr>";
                            echo "<td>" . $n[0] . "</td>";
                            echo "<td>" . $n[1] . "</td>";
                            echo "<td>" . $n[2] . "</td>";
                            echo "<td>" . $n[3] . "</td>";
                        }

                        ?>

                        <?php
                        echo "</tr>";
                    } else {
                        $uid = $_SESSION["uid"];
                        $q = "select * from product where OEM_id='$uid'";
                        $run = mysqli_query($con, $q);
                        if ($num = mysqli_num_rows($run) > 0) {
                            while ($result = mysqli_fetch_assoc($run)) {
                                echo "  
                                      <tr class='data'>   
                                           <td>" . $result['product_id'] . "</td>  
                                           <td>" . $result['product_name'] . "</td>
                                           <td>" . $result['model_name'] . "</td>   
                                           <td>" . $result['OEM_id'] . "</td>  
                                           <td>" . $result['OEM_name'] . "</td> 
                                           <td><a href='delete_product.php?id=" . $result['product_id'] . "' class='btn btn-danger'>Delete Product</a></td>  
                                      </tr>  
                                  ";
                            }
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