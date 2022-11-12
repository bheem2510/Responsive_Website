<?php      
    $host = "localhost:3308";  
    $user = "root";  
    $password = '';  
    $db_name = "bheem";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  
authenticat