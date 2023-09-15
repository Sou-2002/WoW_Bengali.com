<?php
include("food_connection.php");
session_start();

if(isset($_REQUEST['myorder'])){
    $email=$_SESSION['email'];
    $sql="SELECT * FROM order_food WHERE email='".$email."'";
    $res=mysqli_query($con, $sql);
    if(mysqli_num_rows($res)>0){
        echo "<h1 style='text-align:center'>";
        echo "Your Order";
        echo "</h1>";
        echo'<table border="2">';
        echo"<thead>";
        echo"<tr>";
        echo"<th>Name</th>";
        echo"<th>Email</th>";
        echo"<th>1st Order</th>";
        echo"<th>2nd Order</th>";
        echo"<th>Address</th>";
        echo"<th>Phone No</th>";
        echo"<th>Amount Payable</th>";
        echo"</tr>";
        echo"<thead>";
        echo"<tbody>";
        while($row=mysqli_fetch_assoc($res)){
            echo"<tr>";
            echo"<td>".$row['r_name']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td>".$row['order1']."</td>";
            echo"<td>".$row['order2']."</td>";
            echo"<td>".$row['addresss']."</td>";
            echo"<td>".$row['phone']."</td>";
            echo"<td style='text-align:right;'>".$row['price']."</td>";
        }
        echo"</tbody>";
        echo"</table>";
        echo"</tr>";
    }
    else{
        echo "<p style='margin: 70px 0 0 600px; font-style:Times Roman; font-size: 50px'>";
        echo "No Order Yet";
        echo "</p>";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.FoodOrder.com</title>
    <style>
    body{
        background-image: url("photos/wow_bengali.png");
        background-size: cover;
    }
    form{
        margin:200px 570px;
        background-color:black;
        padding:25px 25px; 
        border-radius:20px;
        color:white;
        opacity: 0.9;
    }
</style>
</head>

