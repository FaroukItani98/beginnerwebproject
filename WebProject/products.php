
<?php
    
    include("server.php");

    $productquery="SELECT * FROM products WHERE p_cat=".$_GET["catid"];
    $productresult = mysqli_query($connection, $productquery) or die(mysqli_error($connection));
    
  
       include("header.php");
       echo "<div class=\"products\">";
                 while($row = mysqli_fetch_assoc($productresult)) {
                    $p_id = $row['p_id'];
                    $p_name = $row['p_name'];
                    echo "<div><img class=\"custom-img\" src=\"Gamepics/".$p_name.".jpg\"><br><a href=\"games.php?pid=".$p_id."\">".$p_name."</a></div>";
                } 
        echo "</div>";
            
?>