<?php
        // include("server.php");

        $query="SELECT * FROM category";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        echo "<li><i class=\"fa fa-balance-scale\">Products</i>
        <ul>";
		while ($row = mysqli_fetch_assoc($result)) {
			$cat_id = $row['cat_id'];
			$cat_name = $row['cat_name'];
			echo "<li><a href=\"products.php?catid=".$cat_id."\">".$cat_name."</a>";
        }
        echo "</ul></li>";


?>