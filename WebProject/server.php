<?php
    $hostname  ="localhost";
    $hostuser  ="root";
    $hostpass  ="";
    $db        ="project";
    $connection= new mysqli($hostname , $hostuser , $hostpass , $db);
    if($connection->connect_error){
        die("Connection failed: " . $connection->connect_error); // Detecting the error of connection to the database
    }
    echo '<script>console.log("Connected to Database Successfully")</script>'; // Detection if connection was made successfully


    // Input in db
    if(isset($_POST['register'])){
        $username= mysqli_real_escape_string($connection,$_POST['username']);
        $email= mysqli_real_escape_string($connection,$_POST['email']);
        $password= mysqli_real_escape_string($connection,$_POST['password']);
        $cpassword= mysqli_real_escape_string($connection,$_POST['chckpass']);
        $country= mysqli_real_escape_string($connection,$_POST['user_country']);
        $gender= mysqli_real_escape_string($connection,$_POST['gender']);
        $dob= mysqli_real_escape_string($connection,$_POST['dob']);

        $checkuser="SELECT * FROM users where u_username='$username'";
        $checkresult1=mysqli_query($connection,$checkuser);

        $checkemail="SELECT * FROM users where u_email='$email'";
        $checkresult2=mysqli_query($connection,$checkemail);
        // echo "<script>alert('$gender')</script>";
        if(mysqli_num_rows($checkresult1)==1){
            echo "<script>alert('Username already registered')</script>";

        }
        else if(mysqli_num_rows($checkresult2)==1){
            echo "<script>alert('Email already registered')</script>";

        }
        else{
            $query="INSERT INTO users(u_username,u_email,u_password,u_country,u_gender,u_dob) VALUES ('$username','$email','$password','$country','$gender','$dob')";
            $result= mysqli_query($connection,$query);

            if($result){
                // echo "<script>alert('Account created!')</script>";
                header('location:home.php');
            }
            else{
                die(mysqli_error($connection));
            }
        }
    
        

    }

    if(isset($_POST['login'])){
        $username= mysqli_real_escape_string($connection,$_POST['username']);
        $password= mysqli_real_escape_string($connection,$_POST['password']);
        // echo "<script>alert('$username')</script>";
        $checkquery="SELECT * FROM users where u_username='$username' and u_password='$password'";
        $checkresult=mysqli_query($connection,$checkquery);

        if(mysqli_num_rows($checkresult)==1){
            session_start();
            $_SESSION['username']=$username;
            header('location:profile.php');
        }
        else{
            echo "<script>alert('Wrong username or password')</script>";
            // header('location:login.php');
        }

    }


    if(isset($_POST['logout'])){
        session_start();
        unset($_SESSION['username']);
        session_destroy();
        header('location:login.php');
    }

?>