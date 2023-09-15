<?php
include('food_connection.php');
session_start();

if(!isset($_SESSION['islogin']))
{
    if(isset($_REQUEST['rLogin']))
    {
    $email=$_REQUEST['email'];
    $pass=$_REQUEST['pass'];
    $sql="SELECT * FROM food_web WHERE email='".$email."' AND pass='".$pass."'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)==1)
    {
    $_SESSION['islogin']=True;
    $_SESSION['email']=$row['email'];

    echo'<script>location.href="food_offerings.php"</script>';
    }
else
{
echo"<script>window.alert('Email or Password is not Valid')</script>";
}
}
}

else
{
    echo'<script>location.href="food_offerings.php"</script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.PhotoLogin.com</title>
    <style>
    body{
        background-image: url("photos/wow_bengali.png");
        background-size: cover;
    }
    form{
        margin:250px 570px;
        background-color:black;
        padding:25px 25px; 
        border-radius:20px;
        color:white;
        opacity: 0.8;
    }
</style>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">

    Email <input type="email" name="email" placeholder="enter email"
    style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
    border-radius: 5px; border: 1px solid #03FF1A" required><br><br>

    Password <input type="password" name="pass" placeholder="enter password"
    style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
    border-radius: 5px; border: 1px solid #03FF1A" required><br><br>

    <input type="submit" name="rLogin" value="Login" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
    border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin:0 -2px;">

    <a style="margin-left: 7px; color: white; text-decoration:none; font-size: 17px;" href="food_reg.php">Registration</a>

</form>
</body>
</html>