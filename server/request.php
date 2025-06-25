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
    $user->insert_id;

    if ($result) {
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user->insert_id];
        header("location: /Discuss_Project");
    } else {
        echo "User Not Registered";
    }
} elseif (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id = "";

    $query = "select * from users where email='$email' and password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        foreach ($result as $row) {

            $username = $row['Username'];
            $user_id = $row['id'];
        }

        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user_id];
        header("location: /Discuss_Project");
    } else {
        echo "User Not Registered";
    }
} elseif (isset($_GET['logout'])) {
    session_destroy();
    header("location: /Discuss_Project");
} elseif (isset($_POST['ask'])) {
    $title = $_POST['title'];
    $description = $_POST['desc'];
    $category_id = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];

    $question = $conn->prepare("Insert Into `questions`
    (`id`,`title`,`description`,`category_id`,`user_id`) VALUES
    (Null, '$title','$description','$category_id','$user_id');");
    $result = $question->execute();
    $question->insert_id;

    if ($result) {
        header("location: /Discuss_Project");
    } else {
        echo "Questions is added to website";
    }
} elseif (isset($_POST['answer'])) {
    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION["user"]["user_id"];

    $query = $conn->prepare("Insert into `answers`
    (`id`,`answer`,`question_id`,`user_id`) VALUES
    (Null, '$answer','$question_id','$user_id');");
    $result = $query->execute();
    if ($result) {
        header("location: /Discuss_Project?q-id=$question_id");
    } else {
        echo "Answer is not Submitted";
    }
} elseif (isset($_GET["delete"])) {
    $qid = $_GET['delete'];
    $query = $conn->prepare("delete from questions where id='$qid'");
    $result = $query->execute();
    if ($result) {
        header("Location:/Discuss_Project");
    } else {
        echo "Question is not Deleted";
    }
}
