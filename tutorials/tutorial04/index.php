<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 5</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <form action="result.php" method="POST">
            <div class="row mt-3">
                <div class="form-group col-xl-3 col-sm-12">
                    <label for="price">Price: </label>
                    <input type="text" class="form-control" name="price">
                </div>
                <div class="form-group col-xl-3 col-sm-12">
                    <label for="price">Rate of Interest: </label>
                    <input type="text" class="form-control" name="ri">
                </div>
                <div class="form-group col-xl-3 col-sm-12">
                    <label for="price">Number of Year: </label>
                    <input type="text" class="form-control" name="year">
                </div>
                <div class="col-xl-3 col-sm-12">
                    <button type="submit" class="btn btn-primary mt-4">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>