<?php
    session_start();
    // echo print_r($_POST);

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    if($username == "vd@gmail.com" && $password == "vd23"){
        $_SESSION["user"] = $username;
        header("Location: index.php");
    }
    else{
        header("Location: login.php");
    }

    if(!empty($_POST["rememberme"])) {
        setcookie ("username", $_POST["username"], time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("password", $_POST["password"], time()+ (10 * 365 * 24 * 60 * 60));
        echo "Cookies Set Successfully";
    } else {
        setcookie("username","");
        setcookie("password","");
        echo "Cookies Not Set";
    }
?>