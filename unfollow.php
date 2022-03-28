<?php
	include("includes/database.php");
	include ('session.php');

	if (isset($_GET['sender_id'])) {
		$sender_id=$_GET['sender_id'];

	}

			$query=mysqli_query($con,"DELETE from follow WHERE sender_id='$sender_id' AND reciever_id='$id' ") or die (mysqli_error());

			if ($query) {
			$sub_query=mysqli_query($con,"UPDATE user SET follower_number=follower_number - 1 WHERE user_id='$sender_id' ");
			echo "<script>window.open('home.php','_self')</script>";
		}

	
	
?>