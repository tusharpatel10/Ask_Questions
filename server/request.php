<?php

session_start();

include("../common/db.php");

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user = $conn->prepare("Insert Into `users`
    (`id`,`username`,`email`,`password`,`address`) VALUES
    (Null, '$username','$email','$password','$address');");

    $result = $user->execute();

    if ($result) {
        $_SESSION["user"] = ["username" => $username, "email" => $email];
        header("location: /Discuss_Project");
    } else {
        echo "User Not Registered";
    }
} elseif (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";

    $query = "select * from users where email='$email' and password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        foreach ($result as $row) {
            $username = $row['Username'];
        }
        $_SESSION["user"] = ["username" => $username, "email" => $email];
        header("location: /Discuss_Project");
    } else {
        echo "User Not Registered";
    }
} elseif (isset($_GET['logout'])) {
    session_destroy();
    header("location: /Discuss_Project");
}
