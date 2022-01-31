<?php 
    $db = new mysqli('localhost','root','','mydb');
        if($db->connect_errno){
            echo $db->connect_error;
        }
        else
        {
            //echo "Connection Successfully Done.";
            //exit;
        }    
?>    