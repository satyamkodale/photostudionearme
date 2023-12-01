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
        <a class="active" href="index.php">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="shoppages.php">shop</a>
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

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our Services</span>
                    <h3>Wedding Photoshoot</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="#" class="btn">VIEW</a>
                </div>
                <div class="image">
                    <img src="images/circlewed.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our Services</span>
                    <h3>Portrait Shoot</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="#" class="btn">VIEW</a>
                </div>
                <div class="image">
                    <img src="images/circleportrait.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>Our Services</span>
                    <h3>Event Shoot</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="#" class="btn">VIEW </a>
                </div>
                <div class="image">
                    <img src="images/circleevent.png" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- dishes section starts  -->

<section class="dishes" id="dishes">

    <h3 class="sub-heading"> our services </h3>
    <h1 class="heading">BEST SORTED STUDIOS FOR YOU </h1>

    <div class="box-container">

    <?php
        $result=mysqli_query($con,"
        select id,shop_name,shop_logo from photoshop.shop_master;");
        $i=1;
        while($data=mysqli_fetch_row($result))
        {
            echo "<div class='box'>
            <a href='#' class='fas fa-heart'></a>
            <a href='#' class='fas fa-eye'></a>
            <img src='backend/".$data[2]."' alt='".$data[1]." logo image'>
            <h3>".$data[1]."</h3>
            <div class='stars'>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star-half-alt'></i>
            </div>
            <a href='shop.php?id=".$data[0]."' class='btn' id='add".$i."'>view shops</a>
        </div>
";
                if($i==8)
                {
                    break;
                }
            $i++;
        }
    ?>

    </div>

</section>



<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="pw.gif" alt="">
        </div>

        <div class="content">
            <h3>best service in the city</h3>

            <p>We Provide Best Sevice In Auarangabad & help you to find Perfect Person For your Job</p>
            <div class="icons-container">
                
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="shop" id="shop">

    <h3 class="sub-heading"> our shop </h3>
    <h1 class="heading"> Highly Rated Studios </h1>

    <div class="box-container">

<?php

        $result=mysqli_query($con,"
        select id,shop_name,shop_address,shop_logo from photoshop.shop_master LIMIT 8 ;
        ");

        while($data=mysqli_fetch_row($result))
        {
            echo "
            <div class='box'>
                <div class='image'>
                    <img src='backend/".$data[3]."' alt='".$data[1]." logo image'>
                    <a href='#' class=fas fa-heart'></a>
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
                    <p>".$data[2]." </p>
                    <a href='shop.php?id=".$data[0]."' class='btn'>view shop</a>
                    <span class='price'>$12.99</span>
                </div>
            </div>
        
        ";
            
        }


?>

        <div class="box">
         
            <div>
               <div class="image">
               
                <h1><a href="shop.php" class="fas fa-arrow-circle-right"></a></h1>
            </div>
                <h1>more shops</h1>
            </div>
        </div>







    </div>

</section>


<section class="review" id="review">

    <h3 class="sub-heading"> customer's review </h3>
    <h1 class="heading"> what they say </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <P>review</P>            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <P>review</P>            </div>

            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>

            <P>review</P>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <P>review</P>            </div>

        </div>

    </div>
    
</section>


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

<!-- footer section ends -->

<!-- loader part  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>





















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->


<script>
        let url1="sortedshop.html"
        
        document.getElementById("add1").onclick=function(){
            window.location.replace(url1);}

        document.getElementById("add2").onclick=function(){
            window.location.replace(url1);}

        document.getElementById("add3").onclick=function(){
            window.location.replace(url1);}

        document.getElementById("add4").onclick=function(){
            window.location.replace(url1);}


        document.getElementById("add5").onclick=function(){
            window.location.replace(url1);}

        document.getElementById("add6").onclick=function(){
            window.location.replace(url1);}

        document.getElementById("add7").onclick=function(){
            window.location.replace(url1);}

        document.getElementById("add8").onclick=function(){
            window.location.replace(url1);}
 
        
     </script>




<script src="js/script.js"></script>

</body>
</html>