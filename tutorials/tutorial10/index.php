<?php
require 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <?php
    $sql = "select * from student";
    $result = $db->query($sql);
    ?>
    <table>
        <ul>
            <?php
            while ($row = $result->fetch_assoc()) {
                //print_r($row);

            ?>
                <li style="font-size: 24px; color:blue">
                <?=$row['Name'];?>
                <?= $row['Name']." 's Marks: ".$row['Marks']; ?>
                </li>
            <?php
            }
            ?>
        </ul>
    </table>


</body>
</html>