<?php

include("server.php");
session_start();
$username=$_SESSION['username'];
// $query="SELECT * FROM users where u_username='$username'";
// $result=mysqli_query($connection,$query);
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
$countryquery="SELECT nicename FROM country,users where users.u_username=\"$username\" and users.u_country=country.c_id";
$countryresult=mysqli_query($connection,$countryquery);
$country=mysqli_fetch_assoc($countryresult);

$genderquery="SELECT g_name FROM gender,users where users.u_username=\"$username\" and users.u_gender=gender.g_id";
$genderresult=mysqli_query($connection,$genderquery);
$gender=mysqli_fetch_assoc($genderresult);

$dobquery="SELECT u_dob FROM users where users.u_username=\"$username\"";
$dobresult=mysqli_query($connection,$dobquery);
$dob=mysqli_fetch_assoc($dobresult);
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
                    <li><a href="home.php"><i class="fa fa-home">Home</i></a></li>
                    <?php include("categories.php"); ?>
                    <li><a href="contact.php"><i class="fa fa-envelope">Contact Us</i></a></li>
                    <li class="clicked"><a href="login.php"><i class="fa fa-check">Profile</i></a></li>
                    <li><a href="register.php"><i class="fa fa-user">Register</i></a></li>
                    <div class="custom-right"><form name="s" method="post" action="search.php">
                        <input type="search" placeholder="Search for a product" id="search" name="search"><button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </ul>
            </nav>
        </header>
        <br/><br/><br/>
        <div class="mynewprofile">
            <div class="div-left">
                <!-- Pic -->
                <img src="pics/profile-icon.png"></img>
            </div>

            <div class="div-middle">
                <!-- Text -->
                <p class="custom-p">Username<br><?php echo $username; ?></p>
                
                <p class="custom-p">Country<br><?php foreach($country as $c){
                                echo $c;
                        } ?></p>
                
                <p class="custom-p">Gender<br><?php foreach($gender as $g){
                                echo $g;
                        } ?> </p>
                
                <p class="custom-p">Date of birth<br><?php foreach($dob as $d){
                                echo $d;
                        } ?></p>

            </div>

            <div class="div-right">
                <form action="" method="post">
                <button type="submit" name="logout" value="logout">Logout</button>
                </form>
            </div>

        </div>



    </body> 
         
</html>