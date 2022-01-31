<?php 
session_start();
require "connect.php";
	 
    $firstname = isset($_POST['firstname'])?$_POST['firstname']:"";
    $lastname = isset($_POST['lastname'])?$_POST['lastname']:"";
    $email = isset($_POST['email'])?$_POST['email']:"";
    $password = isset($_POST['password'])?$_POST['password']:"";
    $enrollment = isset($_POST['enrollmentno'])?$_POST['enrollmentno']:"";
    //echo $firstname,$lastname," ",$email,$password,$enrollment;

    $sql = "insert into users (firstname,lastname,email,password,enrollment) values ('$firstname','$lastname','$email','$password','$enrollment')";
     
    if($db->query($sql)){
        $_SESSION['message']="Record Inserted Successfully.";
        
    } else {
        $_SESSION['message'] = "Insertion Failed";
    }
    header("location:index.php");  
?>
