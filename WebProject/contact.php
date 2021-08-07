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
                    <li><a href="home.php"><i class="fa fa-home">Home</i></a></li>
                    <?php include("categories.php"); ?>
                    <li class="clicked"><a href="contact.php"><i class="fa fa-envelope">Contact Us</i></a></li>
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
        <table class="form">
            <form method="POST">
                <tr>
                    <td>
                        <input type="text" placeholder="Enter your username" id="un" name="vn" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" placeholder="Enter your Email" id="mail" name="mail" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <textarea id="cntct" name="cntct" rows="7" cols="40" placeholder="Write your comment here" required ></textarea>
                    </td>
                </tr>
                <tr>
                    <td><?php if(isset($_POST['sbm'])){
                                    echo "<p class=\"color-red\">Your feedback has been submitted</p>";
                                }?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" id="sbm" name="sbm">Submit</button>
                    </td>

                </tr>
                <tr>
                    <td>
                        <button type="reset" id="rst" name="rst">Reset</button>
                    </td>
                </tr>
            </form>
        </table>
        
        <footer></footer>
    </body>
</html>