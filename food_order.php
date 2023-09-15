<?php
include("food_connection.php");
session_start();

if(isset($_REQUEST['confirm'])){
    $name=$_REQUEST['r_name'];
    $email=$_SESSION['email'];
    $order1=$_REQUEST['order1'];
    $qt1=$_REQUEST['quantity1'];
    $order2=$_REQUEST['order2'];
    $qt2=$_REQUEST['quantity2'];
    $addresss=$_REQUEST['addresss'];
    $phone=$_REQUEST['phone'];

    $sql="SELECT items, price FROM menu WHERE items like '$order1'";
    $res=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($res);

    $sql1="SELECT items, price FROM menu WHERE items like '$order2'";
    $res1=mysqli_query($con, $sql1);
    $row1=mysqli_fetch_assoc($res1);

    if(mysqli_num_rows($res)==1 and mysqli_num_rows($res1)==1){

        if($_REQUEST['quantity1']<=0 or $_REQUEST['quantity2']=='' or $_REQUEST['quantity2']<=0){
            echo "<script>alert('Please select correct quantity')</script>";
            echo "<script>location.href='food_order.php'</script>";  
        }
          
        else{
            $price=($qt1*$row['price']) + ($qt2*$row1['price']);
            $sql2="INSERT INTO order_food (r_name, email, order1, quantity1, order2, quantity2, addresss, phone, price)
            VALUES('$name','$email','$order1', '$qt1', '$order2', '$qt2', '$addresss', '$phone', '$price')";      
            
            if(mysqli_query($con, $sql2)){
                echo "<script>alert('Hurray! Order Placed')</script>";
                echo "<script>location.href='food_cost.php'</script>";   
            }
        }
    }
    elseif(mysqli_num_rows($res)==1 and $_REQUEST['order2']==''){
        if($_REQUEST['quantity1']<=0){
            echo "<script>alert('Please select correct quantity')</script>";
            echo "<script>location.href='food_order.php'</script>";  
        }
       
        $price=$qt1*$row['price'];
        $sql2="INSERT INTO order_food (r_name, email, order1, quantity1, order2, quantity2, addresss, phone, price)
        VALUES('$name','$email','$order1', '$qt1', '$order2', '$qt2', '$addresss', '$phone', '$price')";

        if(mysqli_query($con, $sql2)){
            echo "<script>alert('Hurray! Order Placed')</script>";
            echo "<script>location.href='food_cost.php'</script>";  
        }
    }
   
    else{
        echo "<script>alert('Item not available')</script>";
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
    form{
        margin:130px 570px;
        background-color:black;
        padding:25px 25px; 
        border-radius:20px;
        color:white;
        opacity: 0.9;
    }
</style>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">

Name <input type="text" name="r_name" placeholder="enter name"
style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
border-radius: 5px; border: 1px solid #03FF1A" required><br><br>

Email <input type="email" name="email" placeholder="enter email" value="<?php if(isset($_SESSION['email'])) { echo $_SESSION['email'];}?>"
style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
border-radius: 5px; border: 1px solid #03FF1A" required><br><br>

Order1 <input type="text" name="order1" placeholder="enter order1"
style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
border-radius: 5px; border: 1px solid #03FF1A" required>
<p style="margin:5px 0 0 52px">Note* Order 1 is mandatory</p><br>

Quantity1 <input type="number" name="quantity1" placeholder="enter order1 quantity"
style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
border-radius: 5px; border: 1px solid #03FF1A" required><br><br>

Order2 <input type="text" name="order2" placeholder="enter order2"
style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
border-radius: 5px; border: 1px solid #03FF1A"><br><br>

Quantity2 <input type="number" name="quantity2" placeholder="enter order2 quantity"
style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
border-radius: 5px; border: 1px solid #03FF1A"><br><br>

Address <input type="text" name="addresss" placeholder="enter address"
style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
border-radius: 5px; border: 1px solid #03FF1A" required><br><br>

Phone <input type="number" name="phone" placeholder="enter phone"
style="inline-size: 180px; block-size: 15px; padding: 10px 20px; 
border-radius: 5px; border: 1px solid #03FF1A" required><br><br>

<input type="submit" name="confirm" value="Confirm" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin:0 115px;">

</form>
</body>
</html>