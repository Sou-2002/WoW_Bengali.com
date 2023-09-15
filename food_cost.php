<?php
include("food_connection.php");
session_start();

$sql="SELECT price FROM order_food WHERE email='".$_SESSION['email']."'";
$res=mysqli_query($con, $sql);
if(mysqli_num_rows($res)==1){
    $row=mysqli_fetch_assoc($res);
    echo "<h1 style='text-align:center'>";
    echo "Amount to Pay ₹".$row['price'];
    echo "</h1>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.FoodPrice.com</title>
    <style>
    body{
        background-image: url("photos/wow_bengali.png");
        background-size: cover;
    }
    
</style>
</head>
<body>

<form action="food_offerings.php" method="POST">
    <input type="submit" value="Menu" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
    border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin: -60px -9px 0 -2px">
</form>

</body>
</html>