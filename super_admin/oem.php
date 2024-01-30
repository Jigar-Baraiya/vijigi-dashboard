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

    <?php
    include("greetings.php")
        ?>
    <div class="container  p-3 my-3 bg-dark text-white op" data-aos="zoom-out" data-aos-duration="1000" style="opacity: 0.8;">
        <?php
        include("nav.php")
            ?>
        <div class=" table-responsive">
            <table class="table border table-dark ">
                <thead class="font-weight-bold card-header">
                    <td>
                        <h5>OEM Id</h5>
                    </td>
                    <td>
                        <h5>OEM Name</h5>
                    </td>

                </thead>
                <tbody id="myTable">
                    <?php
                    include("../config.php");
                    $q = "select * from oem";
                    $r = mysqli_query($con, $q);
                    while ($n = mysqli_fetch_array($r)) {

                        echo "<tr>";
                        echo "<td>" . $n[0] . "</td>";
                        echo "<td>" . $n[1] . "</td>";
                        ?>

                        <?php
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