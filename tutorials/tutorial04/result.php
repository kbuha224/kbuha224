<?php
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    $p = $_REQUEST['price'];
    $r = $_REQUEST['ri'];
    $n = $_REQUEST['year'];

    echo $p;
    echo $r;
    echo $n;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-sm-12">
                <?php
                    $i = ($p*$r*$n)/100;
                    echo "Simple Interest is: ".$i;
                ?>
            </div>
        </div>
    </div>
</body>
</html>