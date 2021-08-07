<?php
	 include("server.php");
	
	// if(!isset($_SESSION["username"])){
	// 	header("Location:index.php");
	// }
	
	$query="SELECT p_id FROM products WHERE p_name like '%".$_POST["search"]."%'";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	while ($row = mysqli_fetch_assoc($result)) {
		$pid = $row['p_id'];
		
		header("location:games.php?pid=$pid");
		// if($img!="")echo "<img src='dbpics/".$img."' width='150'>";
		// echo "<h2>".$title."</h2>";
		// echo "<h5>".$date."</h5>";
		// echo "<h4>".$content."</h4>";
	}
?>


