<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="js/form-validation.js"></script> -->

</head>
<body>
    <h1 class="h1 mb-3 mt-3 text-center">
        Registration Form
    </h1>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data" class="offset-2" name="registration">
            <div class="row mb-3">
				<div class="col-lg-3">
                    <label for="Name" class="form-label"> Name: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="text" name="name"  />
            	</div>
            </div>
            <div class="row mb-3">
				<div class="col-lg-3">
                    <label for="Email" class="form-label"> Email: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="email" name="emailid"  />
            	</div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="Email" class="form-label"> Enter Password: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="password" name="password"  />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="Email" class="form-label"> Re Password: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="password" name="re-password"  />
                </div>
            </div>
            <!-- <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="Email" class="form-label"> Repeat Password : </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="password" name="password"/>
                </div>
            </div> -->
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="Email" class="form-label"> Enter Age: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="text" name="age"  />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="Email" class="form-label"> Date of Birth: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="date" name="dob"  />
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="city" class="form-label"> City: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="text" name="city"  />
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label for="state" class="form-label"> State: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="text" name="state"  /> <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <label for="country" class="form-label"> Country: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="text" name="country"  /> <br>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="exampleFormControlSelect1">Example select</label>
                </div>
                <div class="col-lg-6">
                    <select class="form-control" id="exampleFormControlSelect1"  >
                        <option>Student</option>
                        <option>Faculty</option>
                        <option>Clerk</option>
                        <option>HOD</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="Email" class="form-label"> Upload Profle Picture: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="file" name="image"/>
                </div>
            </div>
            <!-- <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="Email" class="form-label"> Enter Description: </label>
                </div>
                <div class="col-lg-6">
                    <textarea class="form-control" name="note"></textarea>
                </div>
            </div> -->
            <div class="row mb-3">
                <div class="col-lg-4 mt-3 text-center">
                    <button type="submit" class="btn btn-primary col-lg-4" name="register"> Register </button>
                </div>
                <div class="col-lg-4 mt-3 text-center text-decoration-none">
                    <a href="login.html"> Already a member...</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    // $path="images/";
    
    // if(isset($_FILES['image'])){
    //     $image = $_REQUEST["image"];
    //     move_uploaded_file($_FILES['image']['tmp_name'],$path.$image);
    // }
?>

<?php  
    error_reporting(0);
    if(isset($_REQUEST["register"])){

        $target_path = "images/"; 
        $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        
        if($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif'){
            $target_path = $target_path.basename( $_FILES['image']['name']);   
            
            if ($_FILES["image"]["size"] > 2048){
                echo "<script> alert('Image size must be less than 2MB.') </script>";
            }
            else{
                if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)){  
                    echo "<script> alert('Image uploaded successfully!') </script>";  
                } else{
                    echo "<script> alert('Sorry, Image not uploaded, please try again!') </script>";  
                }  
            }
            
        }
        else{
            echo "<script> alert('Sorry, Image type supports only JPG, JPEG, PNG and GIF!!!') </script>";
        }
    }
?>