<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="h1 mb-3 mt-3 text-center">
        Login Form
    </h1>
    <div class="container">
        <form action="validateuser.php" method="POST" enctype="multipart/form-data" class="offset-2">
            <div class="row  mb-3">
				<div class="col-lg-3">
                    <label for="Email" class="form-label"> Email: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="email" name="username"/>
            	</div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-3">
                    <label for="Email" class="form-label"> Enter Password: </label>
                </div>
                <div class="col-lg-6">
                    <input class="form-control" type="password" name="password"/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-3 text-center">
                    <button type="submit" class="btn btn-primary col-lg-4" name="login"> Login </button>
                </div>
                <!-- <div class="col-lg-4 mt-3 text-center text-decoration-none">
                    <a href="registration.php"> Become a member...</a>
                </div> -->
            </div>
        </form>
    </div>
</body>
</html>