<?php
    session_start();
    // echo print_r($_POST);

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    if($username == "admin@gmail.com" && $password == "admin"){
        $_SESSION["user"] = $username;
        header("Location: index.php");
    }
    else{
        header("Location: login.php");
    }
?>