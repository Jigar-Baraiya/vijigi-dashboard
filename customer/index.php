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

            <table class="table border table-dark ">
                <thead class="font-weight-bold card-header">
                    <td>
                        <h5>Customer Id</h5>
                    </td>
                    <td>
                        <h5>Registered Name</h5>
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

                    if (isset($_GET['search'])) {
                        $filtervalues = $_GET['search'];

                        $uid = $_SESSION["uid"];
                        $q = "select * from customer where OEM_id='$uid' and concat(customer_name,customer_email) like '%$filtervalues%'";
                        $r = mysqli_query($con, $q);
                        $re = $con->query($q);
                        $res = $re->fetch_object();
                        if (mysqli_num_rows($r) == 0) {
                            echo "<tr>";
                            echo "<td colspan='6' align='center'>" . "NO RECORDS FOUND" . "</td>";
                            echo "</tr>";
                        } else {
                            while ($n = mysqli_fetch_array($r)) {

                                echo "<tr>";
                                echo "<td>" . $n[0] . "</td>";
                                echo "<td>" . $n[1] . "</td>";
                                echo "<td>" . $n[2] . "</td>";
                                echo "<td>" . $n[3] . "</td>";
                                echo "<td>" . $n[4] . "</td>";
                                echo "<td>" . $n[5] . "</td>";
                                echo "<td>" . "<a href='show_car_detail.php' class='btn btn-info'>Get car details</a>" . "</td>";
                            }
                        }
                        ?>

                        <?php
                        echo "</tr>";
                    } else {
                        $uid = $_SESSION["uid"];
                        $q = "select * from customer where customer_id='$uid'";
                        $run = mysqli_query($con, $q);
                        if ($num = mysqli_num_rows($run) > 0) {
                            while ($result = mysqli_fetch_assoc($run)) {
                                echo "<tr>";
                                echo "<td>" . $result['customer_id'] . "</td>";
                                echo "<td>" . $result['customer_name'] . "</td>";
                                echo "<td>" . $result['vehicle_id'] . "</td>";
                                echo "<td>" . $result['OEM_id'] . "</td>";
                                echo "<td>" ?><a
                                    href="show_process.php?id=<?php echo $result['vehicle_id']; ?>" class='btn btn-info'>Show
                                    Details</a>
                                <a href="change_owner.php?veh_id=<?php echo $result['vehicle_id']; ?>&oem_id=<?php echo $result['OEM_id']; ?>"
                                    class='btn btn-danger' style='left: 50px; position:relative;'>Change Owner</a>
                                <?php echo "</td>";
                                echo "<tr>";

                            }
                        } else {
                            echo $uid . "no such records";
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