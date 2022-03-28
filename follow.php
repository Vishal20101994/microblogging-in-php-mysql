<?php
	include("includes/database.php");
	include ('session.php');

	if (isset($_GET['sender_id'])) {
		$sender_id=$_GET['sender_id'];
	}
	
		$query=	mysqli_query($con," INSERT INTO follow(sender_id,reciever_id) VALUES ('$sender_id','$id') ") or die (mysqli_error());

		if ($query) {
			$sub_query=mysqli_query($con,"UPDATE user SET follower_number=follower_number + 1 WHERE user_id='$sender_id' ");
			echo "<script>window.open('home.php','_self')</script>";
		}




	
	
?>