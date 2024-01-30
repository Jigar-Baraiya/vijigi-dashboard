<?php


include("config.php");
if (isset($_POST["submit"])) {
    $oem_name = $_POST['name'];
    $oem_mobile = $_POST['mobile'];
    $oem_email = $_POST["email"];
    $discription = $_POST["disc"];

    if (empty($oem_name) || empty($oem_mobile) || empty($oem_email) || empty($discription)) {
        echo "<script type='text/javascript'>alert('Fields can not be empty')</script>";
    } else {
        $q = "Insert into request (oem_name,oem_contact_number,oem_email,discription) values('$oem_name','$oem_mobile','$oem_email','$discription')";
        $run = mysqli_query($con, $q);
        header("location:index.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="logo.css">
	<link rel="stylesheet" href="aos.css">
    <script src="aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-body">

    <div class="container p-3 my-3 ">
        <a href="https://www.vijigi.com/" target="_blank"><img class="logo-image" src="vijigi_logo.png" data-aos="zoom-out" data-aos-duration="1000"></a>
    </div>
    <div class="container  p-3 my-3 bg-dark text-white" data-aos="fade-up" data-aos-duration="1000" style="opacity: 0.8;">


        <h1>Contact Us</h1>
        <form class="form" method="post" action="request.php">



            <div class="form-group">
                <label for="mobile" class="form-label mt-4">Your Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="mobile" class="form-label mt-4">Mobile number</label>
                <input type="text" class="form-control" id="mobile" name="mobile">
            </div>

            <div class="form-group">
                <label for="email" class="form-label mt-4">Email address</label>
                <input type="email" class="form-control " id="email" name="email">
            </div>

            <div class="form-group">
                <label for="disc" class="form-label mt-4">Discription</label>
                <input type="text" class="form-control" id="disc" name="disc">
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-primary mt-4" value="Submit" name="submit"><br>
                <a class="btn btn-primary mt-4" href="index.php">Back</a>
            </div>

        </form>
    </div>
    <script>
        AOS.init();
    </script>
</body>

</html>