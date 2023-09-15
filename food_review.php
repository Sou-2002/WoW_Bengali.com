<?php
include('food_connection.php');
include('food_allhead.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>www.LocationWOWBengali.com</title>
    <link rel="stylesheet" href="head_design.css">
    <style>
        body{
            background-image: url("photos/wow_bengali.png");
            background-size: cover;
        }
        .com{
            margin-top: -5px;
            text-align:center;
            margin-left: 600px;
            background:lime;
            color:black;
            margin-block-start:5px;
            padding:5px;
            inline-size:300px;
            border-radius:50px;
        }

        .com h4{
            margin-top: 1px;
            margin-bottom: -15px;
        }
        
        .com p{
            margin-top: 12px;
            margin-bottom: 15px;
        }

    </style>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="cname" placeholder="name" style="inline-size: 300px; block-size: 45px;
        padding: 0 20px;  border-radius: 5px;  margin: 50px 0 0 600px; border: 2px solid DodgerBlue;" required><br><br>
        
        <input type="text" name="com" placeholder="comment" style="inline-size: 300px; block-size: 80px;
        padding: 0 20px;  border-radius: 5px;  margin:10px 0 0 600px; border: 2px solid DodgerBlue;" required><br><br>

        <input type="submit" name="post" value="POST" style="background:#036AFF; font-size: 15px; font-family: Segoe UI Semibold; 
        border-radius: 5px; color:white; border:white; padding: 5px 10px; cursor: pointer; margin:-150px 0 0 720px;"><br><br>  
    </form>
    <div class='com'>
    <?php
            
            $sql="SELECT * FROM food_comment";
            $res=mysqli_query($con, $sql);
            if(mysqli_num_rows($res)>0){
            
                while($row=mysqli_fetch_assoc($res)){
                    echo "<h4>";
                    echo $row['cname'];
                    echo "</h4>";
                    echo "<p>";
                    echo $row['com'];
                    echo "</p>";
                }
            }
            
            if(isset($_REQUEST['post'])){
                $name=$_REQUEST['cname'];
                $com=$_REQUEST['com'];
                $sql1="INSERT INTO food_comment (cname,com) VALUES ('$name','$com')";
                if(mysqli_query($con, $sql1)){
                    echo "<h4>";
                    echo $name;
                    echo "</h4>";
                    echo "<p>";
                    echo $com;
                    echo "</p>";
                }
            }
        ?>
    </div>    

</body>
</html>
