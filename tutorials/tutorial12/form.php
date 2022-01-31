<?php 
require "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8">
    <meta name="view point" content="width=device-width, initial-scale= '1'"> 
    <title>Tutorial 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
<form action="insert.php" method="post">
    <style>
        .myclass { 
           background-color: skyblue; 
           height: 800px;   
        }   
    </style>
    
    <div class = "container myclass">
    <div class="input-group justify-content-center"> <br>
    <h1><label for="welcome" class="col-form-label-lg"> Add New Record </label></h1>  </div><br>
    <br>
        <div class = "row">
            <div class="input-group justify-content-center">
            <label for="Principal" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-6">
            <input type ="text" id = "firstname" name="firstname" value="Khodidas" class="form-control"></div>
            </div>
        </div> <br>
        <div class = "row">
            <div class="input-group justify-content-center">
            <label for="Principal" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-6">
            <input type ="text" id = "lastname" name="lastname" value="Buha" class="form-control"></div>
            </div>
        </div> <br>
        <div class = "row">
            <div class="input-group justify-content-center">
            <label for="Rate" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6"> 
            <input type ="text" id = "email" name="email" value="kbuha224@rku.ac.in"  class="form-control"></div>
            </div>   
        </div> <br>
        <div class = "row">
            <div class="input-group justify-content-center">
            <label for="Rate" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6"> 
            <input type ="text" id = "password" name="password" value="kbuha224"  class="form-control"></div>
            </div>   
        </div> <br>
        <div class = "row">
            <div class="input-group justify-content-center">
            <label for="Year" class="col-sm-2 col-form-label">Enrollment</label>
            <div class="col-sm-6"> 
            <input type ="text" id = "enrollmentno" name="enrollmentno" value="21SOECA21007" class="form-control"></div>
            </div>   
        </div> <br><br> 
        <div class = "input-group justify-content-center">
        <input type="submit" value="Add" class="btn btn-primary sm" id="Add" name="Add"></div><br>
        <div class = "input-group justify-content-center">
		</form>
    </div>
</div>
</body>
</html>

