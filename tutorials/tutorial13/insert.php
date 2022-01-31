<?php
session_start();
require 'connect.php';
$id = isset($_POST['id'])?$_POST['id']:""; 
$title = isset($_POST['title'])?$_POST['title']:"";
$author = isset($_POST['author'])?$_POST['author']:"";
$price = isset($_POST['price'])?$_POST['price']:"";
$stock = isset($_POST['stock'])?$_POST['stock']:"";
 
echo $id;
if($id == "")
{
$sql = "insert into books(title,author,price,stock)values('$title','$author',$price,$stock)";
echo $sql;
}
else
{
    $sql = "update books set title = '$title',author = '$author',price = '$price',stock = '$stock'where id = $id";
    echo $sql;
}
if($db->query($sql)){
    $_SESSION['message'] = ($id == "")?"Record Inserted Successfully.":"Record Updated Successfully";
    
} 
else {
    $_SESSION['message'] = "Insertion Failed";
}
header("location:index.php");  
 

?>