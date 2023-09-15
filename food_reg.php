<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.FoodLogin.com</title>
<style>
    body{
        background-image: url("photos/wow_bengali.png");
        background-size: cover;
    }
    form{
        margin: 200px 540px;
        background-color:black;
        opacity: 0.8;
        padding:25px 25px; 
        border-radius:20px;
        color:white;
    }
</style>
</head>
<body>
    <form action="" method="POST">

        Name <input type="text" name="name" placeholder="enter full name"
        style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
        border-radius: 5px; border: 1px solid #03FF1A" required><br><br>
    
        Email <input type="email" name="email" placeholder="enter email"
        style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
        border-radius: 5px; border: 1px solid #03FF1A" required><br><br>
    
        Password <input type="password" name="pass" placeholder="enter password"
        style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
        border-radius: 5px; border: 1px solid #03FF1A" required><br><br>

        <input type="submit" name="reg" value="Save" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
        border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin:0 -2px;">

        <a style="text-decoration:none; margin: 0 7px; color: white" href="food_login.php">Login</a>


    </form>
</body>
</html>


<?php

include('food_connection.php');

if(isset($_REQUEST['reg'])){
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $pass=$_REQUEST['pass'];


    $sql="SELECT email, pass FROM food_web WHERE email='".$email."' OR pass='".$pass."'";
    $res=mysqli_query($con, $sql);

    if(mysqli_num_rows($res)==1){
        echo '<script> alert("Email or Password already registered")</script>';
        echo '<script> location.href="food_reg.php"</script>';
    }

    else{
        $sql1="INSERT INTO food_web (r_name, email, pass) 
        VALUES('$name', '$email', '$pass')";
        
        if(mysqli_query($con, $sql1)){       
            echo '<script> alert("Welcome To WOW Benagli")</script>';
            echo '<script> location.href="food_offerings.php"</script>';
        }
    }
}
?>