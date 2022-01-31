<?php
session_start();
require "db.php";

$id = isset($_GET['id'])?$_GET['id']:"";
if($id == "")
{
    header("location:index.php");
}
$sql = "delete from student where id=$id";
$db->query($sql);
$_SESSION['status'] = "Record Deleted";
header("location:index.php");
?>