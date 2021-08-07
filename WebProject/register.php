<?php

include("server.php");
session_start();
//This is for countries
$country_query = "SELECT c_id,nicename FROM country";
$country_result = mysqli_query($connection, $country_query);
$countries = array();
while($row = mysqli_fetch_assoc($country_result)){
    array_push($countries, $row);
}

//This is for genders
$gender_query= "SELECT g_id,g_name FROM gender";
$gender_result = mysqli_query($connection,$gender_query);
$genders=array();
while($row = mysqli_fetch_assoc($gender_result)){
    array_push($genders, $row);
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
                    <li><a href="login.php"><i class="fa fa-check">Profile</i></a></li>
                    <li class="clicked"><a href="register.php"><i class="fa fa-user">Register</i></a></li>
                    <div class="custom-right"><form name="s" method="post" action="search.php">
                        <input type="search" placeholder="Search for a product" id="search" name="search"><button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </ul>
            </nav>
        </header>
<br/><br/><br/><br/><br/><br/>
        <table class="form">
            <form action="register.php" name="register_form" method="post">
            
            <tr>
                <td><input name="username" type="text" id="name" placeholder="Username" size=30 required></td>
            </tr>

            <tr>
                <td><input name="email" type="email" id="mail" placeholder="Email" size=30 required></td>
            </tr>

            <tr>
                <td><input name="password" type="password" id="pass" placeholder="Password" size=30 required></td>
            </tr>

            <tr>
                <td><input name="chckpass" type="password" id="cnfrm" placeholder="Confirm Password" size=30 required></td>
            </tr>
            <tr>
                <td>
                    <div id="error" class="error"></div>
                </td>
            </tr>
            <tr>
                <td>Country</td>
            </tr>
            <tr>
                <td>
                    <select id="user_country" name="user_country" data-minimum-results-for-search="Infinity" required>
                                <option data-display="Select Country">Select Country</option>
                                <?php 
                                foreach($countries as $country){
                                    echo '<option value="' . $country['c_id'] . '">' . $country['nicename'] . '</option>';
                                }
                                
                                ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Gender</td>
            </tr>
            <tr>
                <td>
                    <?php

                    foreach($genders as $gender){
                        echo '<input type="radio" name="gender" value="'.$gender["g_id"].'" id="'.$gender["g_id"].'">';
                        echo '<label for="'.$gender["g_id"].'">'.$gender["g_name"].'</label>';
                    }

                    ?>
                <!-- <input type="radio" name="gender" id="male" value="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label> -->
                </td>
            </tr>
            
            <tr>
                <td>Date of birth</td>
            </tr>
            <tr>
                <td>
                <input type="date" name="dob" id="date" value="date">
                </td>
            </tr>

            <tr>
                <td><input type="checkbox" value="chk" value="agree" id="agree" name="agree" required/>
                <label for="agree">I agree to the <a href="terms.php" target="_blank">terms and conditions</a></label></td>
            </tr>

            <tr>
                <td><button type="submit" name="register" onclick="confirm()" value="Reigster">Register</button><button type="reset" value="Reset">Reset</button></td>
                <td></td>
            </tr>

            <tr>
                <td>Already registered? <a href="login.php">Login</a></td>
            </tr>
        </form>
            
        </table>
        <script src="js/pass.js"></script>
    </body>
</html>