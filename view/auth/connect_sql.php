<?php
    $conn = new mysqli('localhost','root','','social');
    if($conn->connect_error){
        echo $conn->connect_error;  
    }
?>
