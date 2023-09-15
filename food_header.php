<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><www class="WOWBenagli"></www>.com</title>
    <link rel="stylesheet" href="head_design.css">
    <script src="https://kit.fontawesome.com/1c0a951397.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="nvbar">
    <p style="margin-left: 15px">
    <img src="photos/wow_bengali.png" style="height: 32px; width:35px"> WOW Bengali
    </p>
<ul>
<li style="margin-left: -50px"><a href="WOW_Bengali.php"><i class="fa-solid fa-house">&nbsp;</i>Home</a></li>  

<li><a href="food_login.php"> <i class="fa-solid fa-plate-wheat">&nbsp;</i>Menu</a></li>

<li><a href="food_aboutUs.php"><i class="fa-solid fa-user">&nbsp;</i>About</a></li>

<li><a href="food_review.php"> <i class="fa-solid fa-message">&nbsp;</i>Reviews</a></li>

<form action="food_order.php" method="POST">
    <input type="submit" name="order" value="Order" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
    border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin: 9px 0 0 10px">
</form>

<form action="food_myorder.php" method="POST">
    <input type="submit" name="myorder" value="My Order" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
    border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin: 9px 0 0 15px">
</form>

<form action="food_cancel.php" method="POST">
    <input type="submit" name="cancel" value="Cancel" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
    border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin: 9px -9px 0 20px">
</form>

<form action="food_logout.php" method="POST">
    <input type="submit" name="logout" value="Logout" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
    border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin: 9px 0 0 25px">
</form>

</ul>
</div>
</body>
</html>