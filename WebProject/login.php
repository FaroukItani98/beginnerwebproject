<?php

include("server.php");
session_start();
// $username=$_SESSION['username'];
// $query="SELECT * FROM users where u_username='$username'";
// $result=mysqli_query($connection,$query);

if(isset($_SESSION['username'])){
    header('location:profile.php');
}


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
        <br/><br/><br/><br/><br/><br/>

        <div class="form"> 
            <form action="login.php" method="POST">
                <input type="text" id="username" name="username" placeholder="Username" required> <br/>
                <input type="password" name="password" placeholder="Password" required> <br/>
                <button type="submit" name="login" id="login">LOGIN</button>
                <p>Not registered? <a href="register.php">Create an account</a></p>
            </form>
        </div>
    </body>
</html>