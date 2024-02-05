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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
</head>

<body class="bg-body">
    <div data-aos="zoom-out" data-aos-duration="1000">
    <?php
    include("greetings.php")
        ?>
        </div>
    <div class="container p-3 my-3 bg-dark text-white op" data-aos="zoom-out" data-aos-duration="1000" style="opacity: 0.8;" >
    <div class="bg-dark">
            <?php
            include("nav.php")
                ?>

            <input class="d-flex  me-sm-2" type="text" placeholder="Search" name="search" id="getName">
        </div>
        <div class=" table-responsive mt-2 ">

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
                    

                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script>
        AOS.init();
    </script>
    <script>
        $(document).ready(function () {
            $('#getName').on("keyup", function () {
                var getName = $(this).val();
                $.ajax({
                    method: 'POST',
                    url: 'usersearch.php',
                    data: { name: getName },
                    success: function (response) {
                        $("#myTable").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>