<!DOCTYPE html>
<html>

<head>
    <title>Reply</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../logo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="bg-body">
    <?php
    session_start();
    include("greetings.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $name = $_GET['name'];

    }

    ?>
    <div class="container  p-3 my-3 bg-dark text-white" data-aos="fade-up" data-aos-duration="1000" style="opacity: 0.8;">
        <h1>Reply</h1>

        <form method="post" action="send-mail.php" class="form">
            <div class="form-group">
                <label for="name" class="form-label mt-4">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label mt-4">email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $id; ?>" required>
            </div>

            <div class="form-group">
                <label for="subject" class="form-label mt-4">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject"
                    value="About your request to Vijigi Energy..!" required>
            </div>

            <div class="form-group">
                <label for="message" class="form-label mt-4">Message</label>
                <textarea name="message" class="form-control" id="message" required></textarea>
            </div>

            <br>

            <button class="btn btn-primary">Send</button>

            <a href="requests.php" class="btn btn-info">Back</a>
        </form>
    </div>
</body>

</html>