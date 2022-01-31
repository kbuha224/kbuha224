<?php
    require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Tutorial Practise</title> 
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form.php"> Add New Record </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"> </a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">sr_no</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Enrollment</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <div class="text-success">
                  <?php
                    session_start();
                    /* $msg = isset($_SESSION['message'])?$_SESSION['message']:"No msg here";
                    echo $msg;  && $_SESSION['message'] == ""  */
                      if(isset($_SESSION['message']) && $_SESSION['message'] != "")
                      //if(isset($_SESSION['message'])?$_SESSION['message']:"");
                      {
                          echo $_SESSION['message'];
                          unset($_SESSION['message']);
                          //echo $_SESSION['message'];
                      }
                  ?>
              </div>
              <tbody>
              
                <?php
                  $sql = 'select id,concat(firstname," ",lastname) as name,lower(email) as email,upper(enrollment) as enroll from users';
                  $result = $db->query($sql);
                  if($result->num_rows){
                  while($row = $result->fetch_assoc()) {
                    //print_r($row);
                ?>
                <tr class="table-success">
                  
                  <td><?= $row['id']; ?></td>
                  <td><?= $row['name']; ?></td>
                  <td><?= $row['email']; ?></td>
                  <td><?= $row['enroll']; ?></td>
                  
                  <td><button type="submit" class="btn btn-info" id="edit" onclick="window.location.href='Edit.php'">Edit</button>
                  <button type="submit" class="btn btn-info dlt" id="delete" onclick="window.location.href='delete.php?id=<?=$row['id'];?>'">Delete</button>
                  <!-- <a href='delete.php?id=<?=$row['id'];?>'>Delete</a> -->

                  </td>
                  </tr> 
                 
                <?php 
                      } 
                    }
                ?>

                <?php 
                    /* else
                    {
                        echo "NO RECORD FOUND."     
                    } */
                ?> 
              </tbody> 
            </table>
          
</body>
</html>
