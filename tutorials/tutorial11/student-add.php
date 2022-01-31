<?php
session_start();
require "db.php";

// echo "<pre>";
// echo print_r($_POST);
// echo "</pre>";

$enrollment = isset($_POST['enrollment'])?$_POST['enrollment']:"";
$firstname = isset($_POST['firstname'])?$_POST['firstname']:"";
$lastname = isset($_POST['lastname'])?$_POST['lastname']:"";
$city = isset($_POST['city'])?$_POST['city']:"";

$sql = "insert into student (enrollment, firstname, lastname, city) values ('$enrollment', '$firstname', '$lastname', '$city')";

if($db->query($sql))
{
    $_SESSION['status'] = "Insertion Successful";
}
else
{
    $_SESSION['status'] = "Insertion Failed";
}
header("location:index.php");

?>