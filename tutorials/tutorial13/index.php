<?php
  require 'Connect.php';
?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="js/jquery.min.js"></script>

  <script>
      $(document).ready(function(){
        $()
      }
    </script>
	<style>
</style>
</head>
<body>
<?php include("nav.php"); ?>

     
	

    <table class="table table-hover">
  <thead>
    <tr>
    <th>Book ID</th>
				<th>Book Title</th>
				<th>Author</th>
				<th>price</th>
				<th>Stock</th>
				<!-- <th>Created</th> -->
				<th>Action</th>
    </tr>
  </thead>
  <tbody>
      <div class="text-success">
                   <?php
                      if(isset($_SESSION['message']) && $_SESSION['message'] != "")
                      {
                          echo $_SESSION['message'];
                          unset($_SESSION['message']);
                      }
                  ?>
              </div> 
   <?php
   $sql = "";
   $searchstr = isset($_POST['searchstr'])?$_POST['searchstr']:"";
   
   if($searchstr != "")
   {
     $sql = "select * from books where title like '%$searchstr%' or  author like '%$searchstr%' or price like '%$searchstr%' or stock like '%$searchstr%' ";
   }
   else
   {
         $sql = "select * from books";
   }
          $result = $db->query($sql);
                  if($result->num_rows){
                  while($row = $result->fetch_assoc())
                  { 
        
     
    
    ?>

<tr class="table-active">
                  
                  <td><?= $row['id']; ?></td>
                  <td><?= $row['title']; ?></td>
                  <td><?= $row['author']; ?></td>
                  <td><?= $row['price']; ?></td>
                  <td><?= $row['stock']; ?></td>

                  <td><a href='form.php?id=<?=$row['id'];?>'>Edit</a> 
                  <a href='delete.php?id=<?=$row['id'];?>'>Delete</a> 

                  </td>
                  </tr> 
                 
                <?php 
                      } 
                    
                    }
                ?>
  </tbody>
</table>
</body>
</html>