<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discuss</title>
    <?php include('/Php/www/Discuss_Project/client/commonFiles.php'); ?>
</head>

<body>
    <?php
    include('/Php/www/Discuss_Project/client/header.php');

    if (isset($_GET['signup'])) {
        include('./client/signup.php');
    }elseif (isset($_GET['login'])) {
        include('./client/login.php');
    }

    ?>




</body>

</html>