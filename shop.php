<?php

    
        if(!isset($_GET["id"]))
        {
                echo "<script>window.location.href='shoppages.php';</script>";
        }
        include("config.php");
        $result=mysqli_query($con,"select * from shop_master where id=".$_GET["id"].";");
        $data=mysqli_fetch_row($result);
        $result=mysqli_query($con,"select photo_path from shop_photo where shop_id=".$_GET["id"]."");
        

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Photography Site</title>
        <meta name = "viewport" content = "width=device-width, intial-scale=1.0">
        <link rel="stylesheet" href="css/shoppage.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!-- header -->
        <header class = "header" style="    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(images/header.jpg) center/cover no-repeat;">
            <div class = "nav-section">
                <div class = "brand-and-navBtn">
                    <span class = "brand-name">
                        <?php echo $data[2];?>
                    </span>
                    <span class = "navBtn flex">
                        <i class = "fas fa-bars"></i>
                    </span>
                </div>

                <nav class = "top-nav">
                    <ul>
                        <li><a href = "index.php" class = "active">Home</a></li>
                        <li><a href = "#gallary">Gallery</a></li>
                        <li><a href = "#contact">Contact</a></li>
                    </ul>
                </nav>
                <span class = "search-icon">
                    <i class = "fas fa-search"></i>
                </span>
            </div>

            <div class = "container about">
                <div class = "about-content">
                    <div class = "about-img flex">
                        <img src = "<?php echo "backend/".$data[5];?>" alt = "<?php echo "Logo for".$data[2];?>">
                    </div>
                    <h2><?php  echo $data[2];?></h2>
                    <h3><?php 
                        if($data[12]==1)
                        {
                            echo "Indoor shoots || ";
                        }
                        else if($data[12]==2)
                        {
                            echo "Outdoor shoots || ";
                        }
                        else if($data[12]==3)
                        {
                            echo "Shoot Anywere || ";
                        }
                        echo $data[13];
                    
                    ?></h3>
                    <blockquote>
                      <?php echo $data[4];?>
                    </blockquote>
                    
                </div>

                <div class = "social-icons">
                    <ul>
                        <li>
                            <a href = "<?php echo $data[8];?>"><i class = "fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href = "<?php echo $data[7];?>"><i class = "fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href = "<?php echo $data[9];?>"><i class = "fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- end of header -->

        <section class = "section-two">
            <div class = "container">
                <h2>SOME BEAUTIFUL PHOTOS CAPTURED BY US</h2>
                <span>BEST PHOTOS</span>
            
            </div>
            <section class = "section-three" id="gallary">
                <div class = "container">
                    <div class = "gallery">
                        <?php
                                while($photo=mysqli_fetch_row($result))
                                {
                                    echo "
                                    <a href = 'backend/".$photo[0]."'>
                                        <div class = 'single-img'>
                                            <img src = 'backend/".$photo[0]."' alt = 'sample photo'>
                                            <div class = 'single-img-content'>
                                                <h3>Beautiful Work</h3>
                                            </div>
                                        </div>
                                    </a>";
                                }

                        ?>
                    </div>
                </div>
            </section>
            <?php

                            $result=mysqli_query($con,"select * from user_master where id=".$data[1]."");
                            $userdata=mysqli_fetch_row($result);

            ?>
            <section class = "section-five" id="contact">
                <div class = "container">
                    <div class = "contact-top">
                        <h3>CONTACT ME</h3>
                        
                    </div>
    
                    <div class = "contact-middle">
                        <div>
                            <span class = "contact-icon">
                                <i class = "fas fa-map-signs"></i>
                            </span>
                            <span>Address</span>
                            <p>
                           <?php  echo $data[3];?>
                            </p>
                        </div>
    
                        <div>
                            <span class = "contact-icon">
                                <i class = "fas fa-phone"></i>
                            </span>
                            <span>Contact Number</span>
                            <p><?php echo $userdata[3];?></p>
                        </div>
    
                        <div>
                            <span class = "contact-icon">
                                <i class = "fas fa-paper-plane"></i>
                            </span>
                            <span>Email Address</span>
                            <p><?php  echo $userdata[4];?></p>
                        </div>
    
                        
                    </div>
    
                    <div class = "contact-bottom">
                        <form class = "form" action="requestshop.php" method="post">
                            <input type = "text" name="clientname" required placeholder="Your Name">
                            <input type = "email" name="clientemail" required placeholder="Your Email">
                            <input type = "text" name="clientphone" required placeholder="Your Phone number">
                            
                            <input type = "text" name="userid" required placeholder="Your Phone number" value="<?php echo $data[1];?>" hidden>
                            <input type = "text" name="shopid" required placeholder="Your Phone number" value="<?php echo $data[0]; ?>" hidden>
                            
                            <input type = "text" name="clientsubject" required placeholder="Subject">
                            <textarea rows = "9" name="clientmsg" required placeholder="Message"></textarea>
                            <input type = "submit" name="submitbtn" class = "btn" value = "Send Message">
                        </form>
    
                        <!-- Map -->
                        <div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.9925523753723!2d75.32443821463612!3d19.8825363866303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb9815a369bc63%3A0x78954593c865235a!2sBaiju&#39;s%20Studio!5e0!3m2!1sen!2sin!4v1652590607067!5m2!1sen!2sin" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div>
                </div>
            </section>
        </section>


        <footer class = "footer">
            <div class = "footer-container container">
                <div>
                    <h2><?php echo $data[2];?></h2>
                    <p>Copyright</p>
                </div>
                
            </div>
            <p>&copy; Copyright </p>

        </footer>
        

        <script src="script.js"></script>
    </body>
</html>