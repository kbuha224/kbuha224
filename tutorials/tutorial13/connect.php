<?php
	$db = new mysqli('localhost','root','','mcal132_cie2');
	
	if($db->connect_error){
		echo $db->connect_error;
	}
    else {
            echo 'Connection Sucssfully';
    }
?>