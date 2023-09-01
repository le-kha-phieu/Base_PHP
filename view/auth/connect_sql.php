<?php
    $conn = new mysqli('localhost','root','','db_social');
    if($conn->connect_error){
        echo $conn->connect_error;  
    }
?>
