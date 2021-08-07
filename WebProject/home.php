<?php
session_start();
include("server.php");
?>


<!DOCTYPE html>
<html>
    <head>
        
        <title>Mystic Dawn</title>
        <link rel="icon" href="pics/logo.png">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
  
    </head>

    <body>
        <header>
            <div class="custom-left"><img src="pics/logo.png"/></div>
            <nav>
                <br/>
                <ul>
                    <li class="clicked"><a href="home.php"><i class="fa fa-home">Home</i></a></li>
                    <?php include("categories.php"); ?>
                    <li><a href="contact.php"><i class="fa fa-envelope">Contact Us</i></a></li>
                    <li><a href="login.php"><i class="fa fa-check">Profile</i></a></li>
                    <li><a href="register.php"><i class="fa fa-user">Register</i></a></li>
                    <div class="custom-right"><form name="s" method="post" action="search.php">
                        <input type="search" placeholder="Search for a product" id="search" name="search"><button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </ul>
            </nav>
        </header>
        <br/><br/><br/><br/><br/><br/>
        <!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="Gamepics/Dota2.jpg" style="width:100%">
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="Gamepics/GTAV.jpg" style="width:100%">
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="Gamepics/outlast.jpg" style="width:100%">
    </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
  <br/>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
        

        <div class="custom-div">
            <div><h1>Featured</h1></div>
            <div class="featured">
                <img src="Gamepics/Dota2.jpg" class="customimg"></div>
            <div class="featured">
                <img src="Gamepics/Rainbow 6 Siege.jpg" class="customimg"></div>
            <div class="featured">
                <img src="Gamepics/payday2.jpg" class="customimg"></div>
            <div class="featured">
                <img src="Gamepics/outlast.jpg" class="customimg"></div>
            <div class="featured">
                <img src="Gamepics/GTAV.jpg" class="customimg"></div>
            <div class="featured">
                <img src="Gamepics/Warframe.jpg" class="customimg"></div>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/><h1 class="color-white" align="center"><p>About us</p></h1>
        <div><p class="terms">This website was made in 2020 with the user's prespective in mind. We keep it simple and clear so you can navigate in this site.<br/>
            This website was made to let the user search for the game he like and purchase it or know more about it.</p>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>  

        
        <div class="mapouter"><div class="gmap_canvas featured"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=beirut&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/mapv2/">123movies</a></div><style>.mapouter{position:relative;text-align:center;height:500px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
        <footer></footer>
        <script src="js/javascript.js"></script>
    </body>
</html>