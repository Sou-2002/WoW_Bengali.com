<?php      
    $a = "localhost";  
    $b = "root";  
    $pass = '';  
    $dn = "food";  
      
    $con = mysqli_connect($a, $b, $pass, $dn); 
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?> 