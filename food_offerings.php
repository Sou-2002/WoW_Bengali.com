<?php
include('food_connection.php');
include('food_header.php');

session_start();

if(isset($_SESSION['islogin']))
{
   $email=$_SESSION['email'];
}
else{
    echo '<script>location.href="food_login.php"</script>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>FoodOfferings</title>
    <style>
        body{
            background-image: url("photos/wow_bengali.png");
            background-size: cover;
        }
    </style>
</head>
<body>

    <!---paratha-->
    <!---left-->
    <h1 style="text-align: center; color:#04ABF9; font-family: script typeface; margin-top: 15px">Welcome To WOW Benagli There's What We Have for You</h1><br><br>
    
    <h2 style="color:black; background-color: white; width: 200px; text-align: left; border-radius: 5px;">
        Roti ₹4
    </h2>
    <p align="left">
    <img src="https://www.masalaherb.com/wp-content/uploads/2021/06/Indian-Roti-Flatbread-gog-1-500x375.jpg" 
    width="200" height="200" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 200px; text-align: left; border-radius: 5px;">
        Plain Paratha ₹8
    </h2>
    <p align="left">
    <img src="https://cdn2.foodviva.com/static-content/food-images/roti-paratha-recipes/paratha-recipe/paratha-recipe.jpg" 
    width="200" height="200" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 200px; text-align: left; border-radius: 5px;">
        Puri ₹6
    </h2>
    <p align="left">
    <img src="https://i.ytimg.com/vi/p69YDhbe23Y/maxresdefault.jpg" 
    width="200" height="200" ><br><br>
    </p>

    <h2 style="color:black; background-color: white; width: 200px; text-align: left; border-radius: 5px;">
        Plain Naan ₹50
    </h2>
    <p align="left">
    <img src="https://cdn.mos.cms.futurecdn.net/z9yrzoMFd7hcFnvjzNjv5P.jpg" 
    width="200" height="200" ><br><br>
    </p>

    <h2 style="color:black; background-color: white; width: 200px; text-align: left; border-radius: 5px;">
        Butter Nun ₹60
    </h2>
    <p align="left">
    <img src="https://nishkitchen.com/wp-content/uploads/2012/01/TANDOORI-NAAN-1B-480x480.jpg" 
    width="200" height="200" ><br><br>
    </p>

    <h2 style="color:black; background-color: white; width: 200px; text-align: left; border-radius: 5px;">
        Tandoori Roti ₹20
    </h2>
    <p align="left">
    <img src="https://khana.behindtalkies.com/wp-content/uploads/sites/13/2023/02/tandoori-naan-indian-tandoori-roti-flat-bread-served-plate-isolated_466689-91701.jpg" 
    width="200" height="200" ><br><br>
    </p>
   
    <h2 style="color:black; background-color: white; width: 200px; text-align: left; border-radius: 5px;">
        Mirchi Paratha ₹20
    </h2>
    <p align="left">
    <img src="https://t2p.fra1.digitaloceanspaces.com/16535544036582opu5.jpeg" 
    width="200" height="200" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 200px; text-align: left; border-radius: 5px;">
        Lachha paratha ₹15
    </h2>
    <p align="left">
    <img src="https://spicearoma.in/wp-content/uploads/2023/06/Lachha-Paratha.webp" 
    width="200" height="200" ><br><br>
    </p>

    <!---rice--->
    <!---300--->
    

    <h2 style="color:black; background-color: white; width: 200px; text-align:center; margin: -2050px 0 0px 320px; border-radius: 5px;">
        Plain Rice ₹30
    </h2>
    <p style="margin-left: 320px">
    <img src="https://img-global.cpcdn.com/recipes/fc71039c5929ed20/1200x630cq70/photo.jpg" 
    width="200" height="195" ><br><br>
    </p>

    <h2 style="color:black; background-color: white; width: 200px; text-align:center; margin-left: 320px; border-radius: 5px;">
        Jeera Rice ₹80
    </h2>
    <p style="margin-left: 320px">
    <img src="https://www.ifoodlounge.com/cdn/shop/products/jeerarice_grande.jpg?v=1463082474" 
    width="200" height="204" ><br><br>
    </p>

    <h2 style="color:black; background-color: white; width: 200px; text-align:center; margin-left: 320px; border-radius: 5px;">
        Veg Fried Rice ₹100
    </h2>
    <p style="margin-left: 320px">
    <img src="https://www.pavaniskitchen.com/wp-content/uploads/2022/05/veg-fried-rice-recipe.jpg" 
    width="200" height="170" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 200px; text-align:center; margin-left: 320px; border-radius: 5px;">
        Chicken Fried Rice ₹150
    </h2>
    <p style="margin-left: 320px">
    <img src="https://i.ytimg.com/vi/OTCjqFGV-H4/maxresdefault.jpg" 
    width="200" height="173" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 200px; text-align:center; margin-left: 320px; border-radius: 5px;">
        Mutton Fried Rice ₹190
    </h2>
    <p style="margin-left: 320px">
    <img src="https://bucketbiryani.com/wp-content/uploads/2020/02/Mutton_fried-rice.jpg" 
    width="200" height="173" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 200px; text-align:center; margin-left: 320px; border-radius: 5px;">
        Egg Fried Rice ₹90
    </h2>
    <p style="margin-left: 320px">
    <img src="https://redhousespice.com/wp-content/uploads/2021/10/Chinese-egg-fried-rice-in-a-bowl-scaled.jpg" 
    width="200" height="200" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 200px; text-align:center; margin-left: 320px; border-radius: 5px;">
        Prawn Fried Rice ₹110
    </h2>
    <p style="margin-left: 320px">
    <img src="https://vaya.in/recipes/wp-content/uploads/2018/06/Prawn-Fried-Rice.jpg" 
    width="210" height="200" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 211px; text-align:center; margin-left: 320px; border-radius: 5px;">
        Schezwan Fried Rice ₹130
    </h2>
    <p style="margin-left: 320px">
    <img src="https://b.zmtcdn.com/data/dish_photos/286/71cc5b4eee199c8cf0b8d75cf90ba286.jpg" 
    width="210" height="202" ><br><br>
    </p>
    
    <!--600-->

    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin: -2050px 0 0 645px; border-radius: 5px;">
        Chicken Biryani ₹130
    </h2>
    <p style="margin-left: 645px">
    <img src="https://vismaifood.com/storage/app/uploads/public/e12/7b7/127/thumb__700_0_0_0_auto.jpg" 
    width="210" height="170" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center;  margin-left: 645px; border-radius: 5px;">
        Mutton Biryani ₹170
    </h2>
    <p style="margin-left: 645px">
    <img src="https://static.toiimg.com/thumb/52568357.cms?width=1200&height=900" 
    width="210" height="178" ><br><br>
    </p>

    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 645px; border-radius: 5px;">
        Egg Biryani ₹110
    </h2>
    <p style="margin-left: 645px">
    <img src="https://blissfulbitesbytay.com/wp-content/uploads/2020/09/Egg-biryani-500x375.jpg" 
    width="210" height="205" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 645px; border-radius: 5px;">
        Prawn Biryani ₹120
    </h2>
    <p style="margin-left: 645px">
    <img src="https://yellowchilis.com/wp-content/uploads/2021/01/prawn-biryani-recipe-shrim-biryani-in-one-pot-eral-biriyani-500x375.jpg" 
    width="210" height="195" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 645px; border-radius: 5px;">
        Paneer Biryani ₹140
    </h2>
    <p style="margin-left: 645px">
    <img src="https://revi.b-cdn.net/wp-content/uploads/2017/01/paneer-biryani-1.jpg" 
    width="210" height="195" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 645px; border-radius: 5px;">
        Lemon Rice ₹100
    </h2>
    <p style="margin-left: 645px">
    <img src="https://static.toiimg.com/thumb/53870704.cms?width=1200&height=900" 
    width="210" height="200" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 645px; border-radius: 5px;">
        Polao ₹140
    </h2>
    <p style="margin-left: 645px">
    <img src="https://uploads-ssl.webflow.com/5c481361c604e53624138c2f/5c5fc7482279344521d4b960_polao-website-thumbnail-_slxmmv.png" 
    width="210" height="227" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 645px; border-radius: 5px;">
        Ghee Rice ₹100
    </h2>
    <p style="margin-left: 645px">
    <img src="https://static.toiimg.com/thumb/54673082.cms?width=1200&height=900" 
    width="210" height="228" ><br><br>
    </p>

    <!--chicken-->
    <!--900-->
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin: -2050px 0 0 975px; border-radius: 5px;">
        Spicy Chicken ₹130(5p)
    </h2>
    <p style="margin-left: 975px">
    <img src="https://www.allrecipes.com/thmb/G361svSE02k83dIxL7Q_Qh1jLSE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/6644380-spicy-korean-fried-chicken-with-gochujang-sauce-Diana71-4x3-1-b0b6731e6303446d8a7339dee1bbfe69.jpg" 
    width="210" height="172" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 975px; border-radius: 5px;">
        Dry Chilli Chicken ₹140(8p)
    </h2>
    <p style="margin-left: 975px">
    <img src="https://pupswithchopsticks.com/wp-content/uploads/chilli-chicken-thumbnail.jpg" 
    width="210" height="177" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 975px; border-radius: 5px;">
        Gravy Chilli Chicken ₹130(8p)
    </h2>
    <p style="margin-left: 975px">
    <img src="https://i0.wp.com/indiandesirasoi.in/wp-content/uploads/2023/04/desi-style-chicken-chilli-recipe.jpg?fit=1024%2C576&ssl=1" 
    width="210" height="177" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 975px; border-radius: 5px;">
        Chicken Curry ₹140(6p)
    </h2>
    <p style="margin-left: 975px">
    <img src="https://spiceeats.com/wp-content/uploads/2020/02/Mild-Chicken-Curry.jpg" 
    width="210" height="170" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 975px; border-radius: 5px;">
        Chicken Bharta ₹120
    </h2>
    <p style="margin-left: 975px">
    <img src="https://i.ytimg.com/vi/_GqW705idV8/maxresdefault.jpg" 
    width="210" height="167" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 975px; border-radius: 5px;">
        Kadai Chicken ₹180(8p)
    </h2>
    <p style="margin-left: 975px">
    <img src="https://recipes.timesofindia.com/thumb/53523514.cms?width=1200&height=900" 
    width="210" height="172" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 975px; border-radius: 5px;">
        Murgh Musallam ₹300
    </h2>
    <p style="margin-left: 975px">
    <img src="https://static.toiimg.com/photo/76152715.cms" 
    width="210" height="199" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align:center; margin-left: 975px; border-radius: 5px;">
       Chicken Tikka Masala ₹200(8p)
    </h2>
    <p style="margin-left: 975px">
    <img src="https://nishkitchen.com/wp-content/uploads/2016/06/chicken-tikka-masala-5-B-480x360.jpg" 
    width="210" height="202" ><br><br>
    </p>

    <!--1310-->
    
    <h2 style="color:black; background-color: white; width: 210px; text-align: right; margin: -2050px 0 0 1300.2px; border-radius: 5px;">
       Butter Chicken ₹190(8p)
    </h2>
    <p style="margin-left: 1300.2px">
    <img src="https://www.allrecipes.com/thmb/gS3yT_9t9TxTUpQHYq0wZK1k0cc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/5830864-makhani-chicken-indian-butter-chicken-MotherSarah-1x1-1-b2c237f4a9d243899dd082de108a65fe.jpg" 
    width="210" height="172" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align: right; margin-left: 1300.2px; border-radius: 5px;">
       Tandoori Chicken ₹180
    </h2>
    <p style="margin-left: 1300.2px">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Tandoori_chicken_laccha_piyaz1_%2836886283595%29.jpg/1200px-Tandoori_chicken_laccha_piyaz1_%2836886283595%29.jpg" 
    width="210" height="178" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align: right; margin-left: 1300.2px; border-radius: 5px;">
       Mutton Curry ₹220(4p)
    </h2>
    <p style="margin-left: 1300.2px">
    <img src="https://flavoursofmykitchen.com/wp-content/uploads/2022/05/MG_1948-1-scaled.jpeg" 
    width="210" height="178" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align: right; margin-left: 1300.2px; border-radius: 5px;">
       Mutton Kosa ₹200(4p)
    </h2>
    <p style="margin-left: 1300.2px">
    <img src="https://eisamay.com/thumb/88237834/mutton-kosha-recipe-88237834.jpg?imgsize=95464&width=1200&height=900&resizemode=75" 
    width="210" height="170" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align: right; margin-left: 1300.2px; border-radius: 5px;">
       Egg Curry ₹90(2p)
    </h2>
    <p style="margin-left: 1300.2px">
    <img src="https://www.dokan.co.in/wp-content/uploads/2020/11/name-73-1.jpg" 
    width="210" height="193" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align: right; margin-left: 1300.2px; border-radius: 5px;">
       Chilli Panner ₹210(5p)
    </h2>
    <p style="margin-left: 1300.2px">
    <img src="https://www.yummytummyaarthi.com/wp-content/uploads/2014/09/1-27.jpg" 
    width="210" height="170" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align: right; margin-left: 1300.2px; border-radius: 5px;">
       Panner Butter Masala ₹230(5p)
    </h2>
    <p style="margin-left: 1300.2px">
    <img src="https://madscookhouse.com/wp-content/uploads/2020/10/Paneer-Butter-Masala-Nut-Free-500x375.jpg" 
    width="210" height="200" ><br><br>
    </p>
    
    <h2 style="color:black; background-color: white; width: 210px; text-align: right; margin-left: 1300.2px; border-radius: 5px;">
       Panner Tikka ₹180(3p)
    </h2>
    <p style="margin-left: 1300.2px">
    <img src="https://static.toiimg.com/thumb/87150329.cms?imgsize=105508&width=800&height=800" 
    width="210" height="200" ><br><br>
    </p>

    
</body>
</html>