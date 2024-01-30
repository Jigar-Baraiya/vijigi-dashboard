<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greetings</title>
    <link rel="stylesheet" href="../aos.css">
    <script src="../aos.js"></script>
</head>

<body>
    <div class="container p-3 my-3 text-white">
        <a href="https://www.vijigi.com/" target="_blank"><img class="logo-image" src="../vijigi_logo.png" alt=""
                ></a>
        <?php
        echo "<h3 class=' my-3'> Hello..!   " . $_SESSION["name"] . "</h3>";
        ?>
    </div>
    <script>
        AOS.init();
    </script>
</body>

</html>