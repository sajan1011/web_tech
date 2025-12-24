<?php
require "database.php";

if (!empty($_POST)) {

    $name = $phone = $email = $password = "";

    if (isset($_POST["full_name"]) && !empty($_POST["full_name"])) {
        $name = $_POST["full_name"];
    } else {
        echo "Please enter your name";
        exit;
    }

    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users(name, phone, email, password) 
              VALUES ('$name', '$phone', '$email', '$password')";

    $res = mysqli_query($db_connection, $query);

    if ($res) {
        echo "registration successful";
    } else {
        echo "error on registration";
    }

} else { -
    header("Location: register.php");
}
?>
