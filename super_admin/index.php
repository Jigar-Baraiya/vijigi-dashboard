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
    <div class="container p-3 my-3 bg-dark text-white op" data-aos="zoom-out" data-aos-duration="1000" style="opacity: 0.8;" >
        <?php
        include("nav.php")
            ?>
        <div class=" table-responsive">

            <table class="table border table-dark ">
                <thead class="font-weight-bold card-header">
                    <td>
                        <h5>User Id </h5>
                    </td>
                    <td>
                        <h5>User Name</h5>
                    </td>
                    <td>
                        <h5>User Mobile</h5>
                    </td>
                    <td>
                        <h5>User Emai</h5>
                    </td>
                    <td>
                        <h5>User Role</h5>
                    </td>

                </thead>
                <tbody id="myTable">
                    <?php
                    include("../config.php");

                    if (isset($_GET['search'])) {
                        $filtervalues = $_GET['search'];

                        $q = "select * from users where concat(user_name,user_email) like '%$filtervalues%'";
                        $r = mysqli_query($con, $q);
                        while ($n = mysqli_fetch_array($r)) {

                            echo "<tr>";
                            echo "<td>" . $n[0] . "</td>";
                            echo "<td>" . $n[1] . "</td>";
                            echo "<td>" . $n[2] . "</td>";
                            echo "<td>" . $n[3] . "</td>";
                            echo "<td>" . $n[4] . "</td>";
                        }

                        ?>

                        <?php
                        echo "</tr>";
                    } else {
                        $q = "select * from users";
                        $r = mysqli_query($con, $q);
                        while ($n = mysqli_fetch_array($r)) {

                            echo "<tr>";
                            echo "<td>" . $n[0] . "</td>";
                            echo "<td>" . $n[1] . "</td>";
                            echo "<td>" . $n[2] . "</td>";
                            echo "<td>" . $n[3] . "</td>";
                            echo "<td>" . $n[4] . "</td>";
                        }
                        echo "</tr>";
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