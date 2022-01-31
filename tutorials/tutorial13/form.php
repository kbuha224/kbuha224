<?php 
session_start();
require "connect.php";
$id= "";
$title = "";
$author = "";
$price = "";
$stock = "";


$id = isset($_GET['id'])?$_GET['id']:"";
//echo $id;
if($id != "") {
    
$sql = "select * from books where id=".$id;
$result = $db->query($sql);
if($row = $result->fetch_assoc()) {
        $id = isset($_GET['id'])?$_GET['id']:"";
        /* echo $id; */
        $title = isset($row['title'])?$row['title']:"";
        $author = isset($row['author'])?$row['author']:"";
        $price = isset($row['price'])?$row['price']:"";
        $stock = isset($row['stock'])?$row['stock']:"";
       
    //print_r($result);  
    }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Client Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<?php include("nav.php"); ?>
		<div class="container">
		<br>
		<h2>Book Management</h2>
			<form action="insert.php" method="post">
			<input type="hidden" name="id" value="<?= $id ?>">
				<div class="form-group">
					<label for="title">Book Title</label>
					<input type="text" class="form-control" value="<?= $title ?>" name="title" id="titl" placeholder="Enter Book Title" >
				</div>
				<div class="form-group">
					<label for="author">Book Author</label>
					<input type="text" class="form-control" value="<?= $author ?>" id="lastname" placeholder="Enter Book Author" name="author">
				</div>
				<div class="form-group">
					<label for="price">Book Price</label>
					<input type="text" class="form-control"value="<?= $price ?>" id="price" name="price" placeholder="Enter Book Price" >
				</div>
				<div class="form-group">
					<label for="stock">Book Stock</label>
					<input type="text" class="form-control"value="<?= $stock ?>" id="stock" placeholder="Enter Book Stock" name="stock">
				</div>

				<button  class="btn btn-primary" onClick="history.back()">Cancel</button>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</body>
</html>
