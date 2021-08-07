
<?php
    session_start();
    include("server.php");
    
    
    $productquery="SELECT * FROM products WHERE p_id=".$_GET["pid"];
    $productresult = mysqli_query($connection, $productquery) or die(mysqli_error($connection));
    
  
       include("header.php");
                 while($row = mysqli_fetch_assoc($productresult)) {
                    $p_id = $row['p_id'];
                    $p_name = $row['p_name'];
                    $p_about = $row['p_about'];
                 }

            echo "<div class=\"games\">";
            echo "<br><img src=\"Gamepics/".$p_name.".jpg\" align=\"center\"><br/>";

            echo "<div>
                 <h3 class=\"color-white\">About this game</h3>
                 <p class=\"terms\">".$p_about."</p></div>";
                 if(!isset($_SESSION['username'])){
                    if(isset($_POST['download'])){
                        header('location:login.php');
                    }
                    
                }
                else{
                    if(isset($_POST['download'])){
                        echo "<p class=\"color-red\">Download will start soon</p>";
                        // header('location:home.php');
                    }
                }     
            echo "<form method=\"POST\">
                <button name=\"download\" type=\"submit\" class=\"custombutton\">Download</button>
            </form></div>


    </body>
</html>";
            
?>