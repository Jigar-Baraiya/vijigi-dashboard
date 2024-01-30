<?php
session_start();
include("../config.php");
if (isset($_POST["submit"])) {
    $product_id = $_POST['p_id'];
    $product_name = $_POST['products'];
    $model_name = $_POST['m_name'];
    $oem_id = $_SESSION["uid"];
    $oem_name = $_SESSION["name"];

    if (empty($product_id) || empty($product_name) || empty($oem_id) || empty($oem_name) || empty($oem_id)) {
        echo "<script type='text/javascript'>alert('fields can not be empty.')</script>";
    } else {

        $q = "Insert into product (product_id,product_name,model_name,OEM_id, OEM_name) values('$product_id','$product_name','$model_name','$oem_id', '$oem_name')";
        $run = mysqli_query($con, $q);
        header("location:index.php");
    }
}

session_abort();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-body">

    <?php
    session_start();
    include("greetings.php")
        ?>
    <div class="container  p-3 my-3 bg-dark text-white" data-aos="zoom-out" data-aos-duration="1000" style="opacity: 0.8;">

        <?php
        include("nav.php")
            ?>
        <h1>Add Product</h1>
        <form class="form" method="post" action="add_product.php">

            <div class="form-group">
                <label for="p_id" class="form-label mt-4">Product Id</label>
                <input type="text" class="form-control" id="p_id" name="p_id">
            </div>

            <div class="form-group">
                <label for="p_name" class="form-label mt-4">Product name</label>
                <select name="products" class="form-control ">
                    <option value="">Select</option>
                    <option value="CAR">Car</option>
                    <option value="BMS">BMS</option>
                    <option value="MCU">MCU</option>
                </select>
            </div>

            <div class="form-group">
                <label for="m_name" class="form-label mt-4">Model Name</label>
                <input type="text" class="form-control" id="m_name" name="m_name">
            </div>

            <div class="form-group">
                <label for="o_id" class="form-label mt-4">Oem Id</label>
                <input type="text" class="form-control" id="o_id" name="o_id" value="<?php echo $_SESSION["uid"]; ?>"
                    disabled>
            </div>

            <div class="form-group">
                <label for="o_name" class="form-label mt-4">OEM name</label>
                <input type="email" class="form-control" id="o_name" name="o_name"
                    value="<?php echo $_SESSION["name"]; ?>" disabled>
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