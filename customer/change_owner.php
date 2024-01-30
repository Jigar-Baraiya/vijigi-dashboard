<?php
include("without_login.php");
$v_id = $_GET['veh_id'];
$o_id = $_GET['oem_id'];
$_SESSION["vehicle_id"]=$v_id;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../logo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body style="background-image: url('../ev.jpg')">

    <?php
    include("greetings.php")
        ?>
    <div class="container  p-3 my-3 bg-dark text-white">

        <?php
        include("nav.php");


        ?>
        <h1>Register Customer</h1>
        <form class="form" method="post" action="change_owner_apply.php">

            <div class="form-group">
                <label for="mobile" class="form-label mt-4">Customer Id</label>
                <input type="text" class="form-control" id="c_id" name="c_id">
            </div>

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
                <input type="text" class="form-control" id="vehic_id" name="vehic_id" value="<?php echo $v_id ?>"
                    disabled>
            </div>

            <div class="form-group">
                <label for="o_id" class="form-label mt-4">Oem Id</label>
                <input type="text" class="form-control" id="o_id" name="o_id" value="<?php echo $o_id ?>" disabled>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary mt-4" value="Submit" name="submit">
            </div>

        </form>
    </div>
</body>

</html>