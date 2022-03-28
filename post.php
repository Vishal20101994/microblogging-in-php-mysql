<?php
	include('includes/database.php');
	include('session.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										echo "<script>alert('Error while uploading?')</script>";
										echo "<script>window.open('home.php','_self')</script>";
									}else{
										if($size > 10000000) //conditions for the file
										{
										echo "<script>alert('Format is not allowed or file size is too big!')</script>";
										echo "<script>window.open('home.php','_self')</script>";
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location="upload/" . $_FILES["image"]["name"];
									$user=$_SESSION['id'];
									$content=$_POST['content'];
									$time=date("Y-m-d").' '.date("H:i:s",STRTOTIME(date('h:i:sa')));
									if(strlen($content) > 250) //conditions for the file
										{
										echo "<script>alert('Please use 250 or less than 250 words!')</script>";
										}else{
									
									$update=mysqli_query($con," INSERT INTO post (user_id,post_image,content,created)
									VALUES ('$id','$location','$content','$time') ") or die (mysqli_error());
									echo "<script>window.open('home.php','_self')</script>";
									}

									}
										//header('location:home.php');
									
									
									}
							}
?>