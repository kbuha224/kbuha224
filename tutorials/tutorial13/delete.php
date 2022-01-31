<?php
  session_start();
  require 'connect.php';
  $id=isset($_GET['id'])?$_GET['id']:"no";
  //echo $id;
  if($id == "")
  {
      header("location: index.php");
  }
  else
  {
      $sql = "delete from books where id = ".$id;
      $db->query($sql);
      $_SESSION['message'] = "Record deleted Successfully";
    
      header("location:index.php");
  }
?>