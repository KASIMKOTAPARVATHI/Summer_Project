<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>home</title>
    <!-- swiper css link-->
    <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- custom css file link-->
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <!-- header section starts-->
 <section class="header">
    <a href="home.php" class="logo">travel</a>
    <nav class="navbar">
        <a href="home.php" >Home</a>
        <a href="about.php" >About</a>
        <a href="package.php" >Package</a>
        <a href="book.php">Book</a>   
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
 </section>
 <!-- header section ends-->
 <!--home section starts-->
 <section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(homeslide-1.jpg) no-repeat">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Travel Around the world</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(homeslide-2.jpg) no-repeat; background-size:100%;">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Discover the new place</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background:url(homeslide-3.jpg) no-repeat">
                <div class="content">
                    <span>Explore,Discover,Travel</span>
                    <h3>Make your tour worth while</h3>
                    <a href="package.php" class="btn">Discover More</a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
 </section>
 <!--home section ends-->
 <!--services section starts-->
 <section class="services">
    <h1 class="heading-title">Our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="adventure.png" alt="" width="100px" height="100px">
            <h3>Adventure</h3>
        </div>
        <div class="box">
            <img src="world-wide.png" alt="" width="100px" height="100px">
            <h3>Tour guide</h3>
        </div>
        <div class="box">
            <img src="hiking.png" alt="" width="100px" height="100px">
            <h3>Trekking</h3>
        </div>
        <div class="box">
            <img src="bonfire.png" alt="" width="100px" height="100px">
            <h3>Camp fire</h3>
        </div>
        <div class="box">
            <img src="offroad.png" alt="" width="100px" height="100px">
            <h3>Off road</h3>
        </div>
        <div class="box">
            <img src="camping.png" alt="" width="100px" height="100px">
            <h3>Camping</h3>
        </div>
    </div>
 </section>
 <!--services section ends-->
 <!--home about section starts-->
 <section class="home-about">
    <div class="image">
        <img src="about-img.jpg" alt="" width="50%">
    </div>
    <div class="content">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi praesentium tenetur eius nobis repellendus, ratione commodi eligendi odit deleniti, illo consequatur perspiciatis dolorem facere deserunt ab dicta quod magnam odio!</p>
        <a href="about.php" class="btn">Read More</a>
    </div>
 </section>
  <!--home about section ends-->
  <!--home package section ends-->
 <section class="home-packages">
    <h1 class="heading-title">our packages</h1>
    <div class="box-container">
        <div class="box">
            <div  class="image">
                <img src="package-img1.jpg" alt="" width="50%">
            </div>
            <div class="content">
                <h3>Adventure and Tour</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <div  class="image">
                <img src="package-img2.avif" alt="" width="50%">
            </div>
            <div class="content">
                <h3>Adventure and Tour</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box">
            <div  class="image">
                <img src="package-img3.jpg" alt="" width="50%">
            </div>
            <div class="content">
                <h3>Adventure and Tour</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
                <a href="book.php" class="btn">Book Now</a>
            </div>
        </div>
    </div>
    <div class="load-more" ><a href="package.php" class="btn">Load More</a></div>
 </section>
  <!--home package section ends--> 
<!--home offer section starts--> 
<section class="home-offer">
    <div class="content">
        <h3>Upto 50% off</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus debitis alias amet cumque architecto error perspiciatis!</p>
        <a href="book.php" class="btn">Book Now</a>
    </div>
</section>
<!--home offer section ends--> 
 <!-- footer section starts-->
 <section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="home.php" ><i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php" ><i class="fas fa-angle-right"></i>About</a>
            <a href="package.php" ><i class="fas fa-angle-right"></i>Package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>  
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#" ><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#" ><i class="fas fa-angle-right"></i>about us</a>
            <a href="#" ><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#" ><i class="fas fa-angle-right"></i>Terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#" ><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#" ><i class="fas fa-phone"></i> +111-222-333</a>
            <a href="#" ><i class="fas fa-envelope"></i>parvathi47@gmail.com</a>
            <a href="#" ><i class="fas fa-map"></i>AndhraPradesh, India - 400104</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#" ><i class="fab fa-facebook-f"></i>facebook</a>
            <a href="#" ><i class="fab fa-twitter"></i>twitter</a>
            <a href="#" ><i class="fab fa-instagram"></i>instagram</a>
            <a href="#" ><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
    </div>
    <div class="credit">created by<span> Miss Parvathi Kasimkota</span>| All rights reserved!</div>
 </section>
 <!-- footer section ends-->
 



    <!-- swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- custom js file link -->
    <script src="script.js"></script>
</body>
</html>
