<?php
include("without_login.php");

include("../config.php");
if (isset($_POST["submit"])) {
    $customer_name = $_POST['name'];
    $customer_mobile = $_POST['mobile'];
    $email = $_POST["email"];
    $veh_id = $_POST["v_id"];
    $oem_id = $_SESSION["uid"];

    if (empty($customer_id) || empty($customer_name) || empty($customer_mobile) || empty($email) || empty($veh_id)) {
        echo "<script type='text/javascript'>alert('Fields can not be empty!')</script>";
    } else {
        $q = "Insert into customer (customer_id,customer_name,customer_contact_number,customer_email,vehicle_id,OEM_id) values('$customer_id','$customer_name','$customer_mobile','$email', '$veh_id','$oem_id')";
        $run = mysqli_query($con, $q);
        // $re = $con->query($q);
        header("location:customer.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h1>Register Customer</h1>
        <form class="form" method="post" action="user_registration.php">


            <div class="form-group">
                <label for="mobile" class="form-label mt-4">Customer name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="mobile" class="form-label mt-4">Mobile number</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
            </div>

            <div class="form-group">
                <label for="mobile" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control " id="email" name="email">
            </div>

            <div class="form-group">
                <label for="v_id" class="form-label mt-4">Vehicle Id</label>
                <input type="text" class="form-control" id="v_id" name="v_id">
            </div>

            <div class="form-group">
                <label for="o_id" class="form-label mt-4">Oem Id</label>
                <input type="text" class="form-control" id="o_id" name="o_id" value="<?php echo $_SESSION["uid"]; ?>"
                    disabled>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary mt-4" value="Submit" name="submit">
            </div>

        </form>
    </div>
    <script>
        AOS.init();
    </script>
</body>

</html>