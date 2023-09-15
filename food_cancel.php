<?php
include("food_connection.php");
session_start();
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
        echo "No Order to Cancel";
        echo "</p>";
    }

    if(isset($_REQUEST['order_cancel'])){
        $sql="DELETE FROM order_food WHERE email='".$_SESSION['email']."'";
        if(mysqli_query($con, $sql)){
        echo "<script>alert('Alas! Order Cancel')</script>";
        echo "<script>location.href='food_offerings.php'</script>";
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
</style>
</head>
<body>

<form action="" method="POST">
    <input type="submit" name="order_cancel" value="Cancel" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
    border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin: 9px -9px 0 -2px">
</form>

<form action="food_offerings.php" method="POST">
    <input type="submit" value="Menu" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
    border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin: -180px -9px 0 -2px">
</form>

</body>
</html>
