<?php

include("config.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography Service Website</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

       <link rel="stylesheet" href="css/style.css">

</head>
<body>
    

<header>

    <a href="#" class="logo"><i class="fas fa-camera"></i>Photography World.</a>

    <nav class="navbar">
        <a  href="index.php">home</a>
        <a class="active" href="shoppages.php">shop</a>
        <a href="#book">book</a>
        <a href="backend/login_form.php">login</a>
        <a href="backend/register_form.php">Register a Shop</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>

</header>

<form action="shoppages.php" id="search-form" method="get">
    <input type="search" placeholder="search here..." name="searchbar" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>

<section class="gap"></section>

<?php
        $result;
        if(isset($_GET["searchbar"]))
        {
            
        $result=mysqli_query($con,"select id,shop_name,shop_address,shop_logo,shop_open,shop_close from photoshop.shop_master where shop_name like '%".$_GET["searchbar"]."%';");

        }
        else
        {
        $result=mysqli_query($con,"select id,shop_name,shop_address,shop_logo,shop_open,shop_close from photoshop.shop_master;");
        }



        $flag=1;

        while($data=mysqli_fetch_row($result))
        {
            if($flag==1)
            {
                echo "
            
                <section class='shop' id='shop'>
                
                <div class='box-container'>
                
                     <div class='box'>
                         <div class='image'>
                             <img src='backend/".$data[3]."' alt='".$data[1]." logo image'>
                             <a href='#' class='fas fa-heart'></a>
                         </div>
                         <div class='content'>
                             <div class='stars'>
                                 <i class='fas fa-star'></i>
                                 <i class='fas fa-star'></i>
                                 <i class='fas fa-star'></i>
                                 <i class='fas fa-star'></i>
                                 <i class='fas fa-star-half-alt'></i>
                             </div>
                             <h3>".$data[1]."</h3>
                             <label>".$data[2]."</label>
                             <br>
                             <span class='time'> Time : ".$data[4]." to ".$data[5]."</span>
                             <br>
                             <a href='shop.php?id=".$data[0]."' class='btn' id='btn1'>More Info -></i></i></a>
                         </div>
                     </div>
     ";                
                $flag=2;
            }
            else
            {
                echo "
                <div class='box'>
                <div class='image'>
                    <img src='backend/".$data[3]."' alt='".$data[1]." logo image'>
                    <a href='#' class='fas fa-heart'></a>
                </div>
                <div class='content'>
                    <div class='stars'>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star'></i>
                        <i class='fas fa-star-half-alt'></i>
                    </div>
                    <h3>".$data[1]."</h3>
                    <label>".$data[2]."</label>
                    <br>
                    <span class='time'> Time : ".$data[4]." to ".$data[5]."</span>
                    <br>
                    <a href='shop.php?id=".$data[0]."' class='btn' id='btn2'>More Info -></i></i></a>
                </div>
                </div>
           
            </section>
                       ";
                       $flag=1;
            }

        }

        if($flag==2)
        {
            echo "
            <div class='box'>
            </div>
            
            </div>
           
            </section>";
            
        }




?>




<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>
on>


<section class="footer">

    <div class="box-container">


        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">reivew</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+91 8482999311</a>
            <a href="#">demo@gmail.com</a>
            
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <div class="credit"> copyright </div>

</section>



<script>
    let url1="shoppage.html"
         
         document.getElementById("btn1").onclick=function(){
             window.location.replace(url1);}
 
             document.getElementById("btn2").onclick=function(){
              window.location.replace(url1);}
 
              document.getElementById("btn3").onclick=function(){
                window.location.replace(url1);}
</script>
<script src="js/script.js"></script>

</body>
</html>