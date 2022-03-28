<?php 
include("includes/database.php");
?>
<?php
		include("includes/database.php");
			if (isset($_POST['liked'])) {
				$postid=$_POST['post_id'];
				$user_id=$_POST['user_id'];
							$query=mysqli_query($con,"SELECT * FROM post where user_id=7");
							$row=mysqli_fetch_array($query);
							$n=$row['likes'];

							mysqli_query($con,"UPDATE post  SET likes=$n+1 WHERE post_id=7");
							mysqli_query($con,"INSERT INTO likes(user_id,post_id) VALUES($user_id,$post_id)");
							exit();
			}

				if (isset($_POST['unliked'])) {
				$postid=$_POST['post_id'];
							$query=mysqli_query($con,"SELECT * FROM post where user_id=7");
							$row=mysqli_fetch_array($query);
							$n=$row['likes'];

							mysqli_query($con,"DELETE FROM likes  WHERE post_id=$post_id AND user_id=user_id");
							mysqli_query($con,"UPDATE post SET likes=$n-1 WHERE post_id=$post_id");
							exit();
			}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <scrip>
	<script src="jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script  src="likebar.js"></script>
	<link rel="stylesheet" type="text/css" href="like.css"/>
			<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
			 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	

<?php 
include("includes/database.php");
?>
	<div class="content">
		<?php

			$query=mysqli_query($con,"SELECT * FROM post");
			while ($row=mysqli_fetch_array($query)){?>

				<div class="post">  
						<?php echo $row['content']; ?> <br>

						<?php
						include("includes/database.php");
						//determine user already like
							$result=mysqli_query($con,"SELECT * FROM likes WHERE user_id=7 AND post_id=".$row['post_id']."") or die(mysqli_error());
							if (mysqli_num_rows($result)==1) { ?>
								<!--user_id already like post-->
								<span><a href="" class="unlike fa fas-thumsup" id="<?php echo $row['like_id']?>">unlike</a></span>

								<?php
									 } else { ?>
										<!--user has not yet like post-->
										<span><a href="" class="like fa fas-thum-sup" id="<?php echo $row['like_id']?>">like</a></span>
							<?php } ?> 
							<span><?php echo $row['likes']; ?></span>


				</div>
				
		<?php 
				}
		?>
		
	</div>
	
</body>
</html>