<?php
	function time_stamp($session_time) 
	{ 
	 
	//$time_difference = time() - $session_time ; 
	$time_difference = strtotime($session_time); 
				$cur_time   = time();
				$time_elapsed   = $cur_time - $time_difference;
				$seconds    = $time_elapsed ;
				$minutes    = round($time_elapsed / 60 );
				$hours      = round($time_elapsed / 3600);
				$days       = round($time_elapsed / 86400 );
				$weeks      = round($time_elapsed / 604800);
				$months     = round($time_elapsed / 2600640 );
				$years      = round($time_elapsed / 31207680 );

	if($seconds <= 60){
				    return "just now";
				}
				//Minutes
				else if($minutes <=60){
				    if($minutes==1){
				        return "one minute ago";
				    }
				    else{
				        return "$minutes minutes ago";
				    }
				}
				//Hours
				else if($hours <=24){
				    if($hours==1){
				        return "an hour ago";
				    }else{
				        return "$hours hrs ago";
				    }
				}
				//Days
				else if($days <= 7){
				    if($days==1){
				        return "yesterday";
				    }else{
				        return "$days days ago";
				    }
				}
				//Weeks
				else if($weeks <= 4.3){
				    if($weeks==1){
				        return "a week ago";
				    }else{
				        return "$weeks weeks ago";
				    }
				}
				//Months
				else if($months <=12){
				    if($months==1){
				        return "a month ago";
				    }else{
				        return "$months months ago";
				    }
				}
				//Years
				else{
				    if($years==1){
				        return "one year ago";
				    }else{
				        return "$years years ago";
				    }
				}

	 
	} 

?>
<!DOCTYPE html>
<html>
<head>


	<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="homestyle.css"/>
		<link rel="stylesheet" type="text/css" href="navbar.css">
		<link rel="stylesheet" type="text/css" href="rightnavbar.css"/>
		<link rel="stylesheet" type="text/css" href="profile_navbar.css"/>
		<link rel="stylesheet" type="text/css" href="followers-box.css"/>
		<link rel="stylesheet" type="text/css" href="post-box.css"/>
		<link rel="stylesheet" type="text/css" href="postbox-toolbar-area.css"/>
		<link rel="stylesheet" type="text/css" href="postbox-message-input-area.css"/>
		<link rel="stylesheet" type="text/css" href="posts-content-bar.css"/>
		<link rel="stylesheet" type="text/css" href="comment-box.css"/>
		<link rel="stylesheet" type="text/css" href="comments-box.css"/>		
		<link rel="stylesheet" type="text/css" href="right-content.css"/>
		<link rel="stylesheet" type="text/css" href="fontawesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="Timeline.css"/>
		<link rel="stylesheet" type="text/css" href="left-sidebar.css"/>
		<script src="app.js"></script>
		<script src="jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script  src="bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
	<?php include ('session.php');
			include("includes/function.php");
?>
<div class="wrapper">
	<div class="navbar" id="main-navbar">
		<div class="navbar-inner" id="navbar-inner">
			<div class="navbar-col1">
				<div class="navbar-button navbar-home-button">
					<a href="home.php" title="Home">
						<span class="icon icon-home">
						<img src="home.svg"/>
					</span>
					<span class="button-text">Home</span>
					</a>
						
				</div>

				<div class="navbar-button navbar-notification-button">
					<span class="icon icon-notification">
						<img src="bell.svg"/>
					</span>
					<span class="button-text">Notifications</span>
				</div>

				<div class="navbar-button navbar-messages-button">
					<a href="messages.php?user_id=New" title="Message">
						<span class="icon icon-messages">
							<img src="sms.svg"/>
						</span>
						<span class="button-text">Messages</span>
					</a>

				</div>

			</div>
			<div class="navbar-col2">
				<div class="logo"></div>
			</div>
			<div class="navbar-col3 right-navbar-section">
				<div class="profile-navbar-col1">
					<form action="search-user.php" id="searchform" method="POST">
					<div class="search-box-wrapper">
						<div class="search-container">
							<input class="search-txt" type="text" name="name" placeholder="Find people...">
						</div>
						<div class="search-button">
							<label class="file-input">
								<img src="search-icon.svg">
							</label>
							<button  class="search-btn file-input" name="submit"></button>
						</div>
					</div>
				</form>
				</div>
				<div class="profile-navbar-col2">
					<div class="user-icon">
					<?php
									 $profile_picture = '';
										if ($row['profile_picture']	 != '') { ?>
										<a href="timeline.php" title="Profile page"><img src="<?php echo $row['profile_picture']; ?>"></a>
													
											<?php } 
											else {?>
										<a href="timeline.php" title="Profile page"><img src="image/user.png"></a>
											<?php } ?>
					</div>
				</div>
				<div class="profile-navbar-col3">
					<div class="post-button">
						<a href="logout.php" title="Logout">Logout</a>
					</div>
				</div>
			</div>

		</div>
			<div class="navbar-line-wrapper" id="navbar-line-wrapper">
				<div class="navbar-line-inner">
					<div class="navbar-line-col1">
						<div class="navbar-line-button"></div>
						<div class="navbar-line-button"></div>
						<div class="navbar-line-button"></div>
					</div>
			</div>
		</div>

</div>

		<div class="mainbody" id="mainbody">
			<div class="left">
				<div class="left-bar">
					<div class="col1 ">
					<a href="home.php" title="homepage">
						<div class="icon1">
							<img src="home.svg">
						</div>
							<div class="icon1-button">
								Home
							</div>
					</a>
						
					</div>
			
					<div class="col2 ">
						<a href="messages.php?user_id=New" title="Message">
						<div class="icon1">
							<img src="sms.svg">
						</div>
							<div class="icon1-button">
								Messages
							</div>
						</a>
						
					</div>
					<div class="col3 ">
						<div class="icon1">
							<img src="bell.svg">
						</div>
							<div class="icon1-button">
								Notifications
							</div>
						
					</div>
					<div class="col4 ">

						<div class="icon1">
							<?php
							 $profile_picture = '';
								if ($row['profile_picture']	 != '') { ?>
									<a href="timeline.php" title="Profile page"><img src="<?php echo $row['profile_picture'] ?>"></a>
													
									<?php } 
										else {?>
											<a href="timeline.php" title="Profile page"><img src="image/user.png"></a>
									<?php } ?>
						</div>
							<div class="icon1-button">
								<a href="Timeline.php?<?php echo "user_id=$id"?>">Profile</a>
							</div>
						
					</div>
					<div class="col5 ">
						
							<div class="logout-button">
								<a href="logout.php" title="Logout">Logout</a>
							</div>
						
					</div>
				</div>
				

			</div>



			<div class="middle" >
				
				<div class="timeline-box-content">
					
					<div class="timeline_post_title_area">
									<div class="col-lg-12"><b><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></b></div> 
					</div>
	
					
						<div class="timeline-box">
					
							<div class="timeline-box-user-info-wrapper">
									<div class="timeline-box-user-icon-wrapper row">
										<div class="col-md-6">
											<div class="timeline-box-user-icon">
												<?php
									 $profile_picture = '';
										if ($row['profile_picture']	 != '') { ?>
										<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture']; ?>"></a>
													
											<?php } 
											else {?>
										<a href="updatephoto.php" title="Change Profile Picture"><img src="image/user.png"></a>
											<?php } ?>
											</div>
										</div>

											<div class="timeline-box-user-name col-md-6">										
													<p class="user-text-name"><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></p>
													<p class="user-name">@<?php echo $username ?></p>
												
											</div>
											

									</div>
										<div class="timeline-box-toolbar row">

											<div class="col-md-4">
												<span class="timeline-toolbar-title">Posts</span>
												<span class="timeline-toolbar-count">4</span>
											</div>
											<div class="col-md-4">
												<span class="timeline-toolbar-title">Followings</span>
												<span class="timeline-toolbar-count">1</span>
											</div>
											<div class="col-md-4">
												<span class="timeline-toolbar-title">Followers</span>
												<span class="timeline-toolbar-count"><?php echo $row['follower_number'];?></span>
											</div>
											
										</div>


							</div>
									<div class="timeline-box-banner">
									<a href="updatecover.php" title="Change Cover Photo"><img src="<?php echo $row['cover_picture'] ?>"></a>
									</div>
						</div>
							
					
						
				</div>




				<?php

				
	include("includes/database.php");
	if (isset($_GET['user_id'])) {
		$user_id=$_GET['user_id'];
	}
			$get_post=mysqli_query($con,"SELECT * from post where user_id=$_SESSION[id] ORDER BY 1 DESC LIMIT 5") or die(mysqli_error());
			while($row=mysqli_fetch_array($get_post)){
				$location = $row['post_image'];
				$content=$row['content']; 
				$post_id = $row['post_id'];
				$time=$row['created'];	
				$user_id=$row['user_id'];

				$user=mysqli_query($con,"select * from user where user_id='$user_id' ") or die(mysqli_error());

		$row_user=mysqli_fetch_array($user);

		$posted_by = $row_user['firstname']." ".$row_user['lastname'];
		$profile_picture = $row_user['profile_picture'];
		$username=$row_user['username'];

?>
				

				<!--status bpx start-->

				
					<div class="status-box-area-wrapper">
						<div class="postbox-status-user-icon-col col-md-12">

							<div class="postbox-status-user-icon">
								<?php
									 $profile_picture = '';
										if ($row_user['profile_picture']	 != '') { ?>
											<img src="<?php echo $row_user['profile_picture']; ?>">
													
											<?php } 
											else {?>
											<img src="image/user.png">
											<?php } ?>
								
							</div>

							<div class="postbox-status-user-name col-md-12">
										<a href="timeline.php" title="<?php echo $username ?>">
											
											<p class="status-main-name"><b><?php echo $posted_by ?></b></p>
											<p class="status-small-name">@<?php echo $username ?> . </p>
										</a>
											<p class="status-small-name"><?php echo $time  ?></p>

										
							</div>
						</div>

					<!--	<div class="postbox-status-content col-md-12">-->
						<div class="postbox-status-input-area">
							<div class="delete"> 
								<a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post">
									<button class="btn btn-danger" style="background: #a8c0cc; color: black; font-weight: 700; border:none;font-size: 11px;">Delete</button>
								</a>
							</div>
							<div class="postbox-status-input-area-inner" id="post_list">
								

								

								<p><?php echo $row['content']; ?></p>
								<div class="post_image">
									<img src="<?php echo $location ?>">
								</div>

							</div>
						</div>
<!--comments-->
<?php
	include("includes/database.php");
			$comment=mysqli_query($con,"SELECT * from comments where post_id='$post_id' order by post_id DESC") or die(mysqli_error());
			while($row=mysqli_fetch_array($comment)){
			$comment_id=$row['comment_id'];
			$content_comment=$row['content_comment'];
				$time=$row['created'];	
			$post_id=$row['post_id'];
			$user=$_SESSION['id'];
			
?>				<div class="comment-view-area-wrapper" id="post_list">
						<div class="comment-view-user-icon-col col-md-12">

							<div class="comment-view-user-icon">
								<?php
									 $profile_picture = '';
										if ($row['image']	 != '') { ?>
											<img src="<?php echo $row['image']; ?>">
													
											<?php } 
											else {?>
											<img src="image/user.png">
											<?php } ?>

							</div>

							<div class="comment-view-user-name col-md-12">
										<a href="timeline.php" title="<?php echo $username ?>">
											
											<p class="comment-main-name"><b><?php echo $row['name']; ?></b></p>
											<p class="comment-small-name">@<?php echo $username ?> . </p>
										</a>
											<p class="comment-small-name"><?php echo $time = time_stamp($time); ?></p>

										
							</div>
						</div>
						<div class="comment-view-input-area">
						<div class="delete-c"> 
							<a href="delete_comment.php<?php echo '?id='.$comment_id; ?>" title="Delete your comment">
								<button class="btn btn-danger" style="background: #a8c0cc; color: black; font-weight: 700; border:none;font-size: 11px;">Delete</button>
							</a>
						</div>
							<div class="comment-view-input-area-inner" id="post_list">
							
								<p><?php echo $row['content_comment']; ?></p>
							
							</div>
						</div>
				</div>


<?php
}
?>


						<!--comment form-->

            					<?php $image=mysqli_query($con,"select * from user where user_id='$id'")or die(mysqli_error());
           							   while($row=mysqli_fetch_array($image)){
           					 ?>
           			<form  method="POST" action="comment.php" enctype="multipart/form-data"> 
						<div class="comment-toolbar-area">
							
   								<div class="comment-box-area">
   									<div class="comment-user-icon">
   										<?php
									 $profile_picture = '';
										if ($row['profile_picture']	 != '') { ?>
											<img src="<?php echo $row['profile_picture']; ?>">
													
											<?php } 
											else {?>
											<img src="image/user.png">
											<?php } ?>
   					    				
   									</div>
   									<div class="comment-box-user-name">

		   									<input type="text" name="content_comment" placeholder="Write comment..." class="textinput">
		   									<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
		   									<input type="hidden" name="user_id" value="<?php echo $firstname.' '. $lastname?>">
                 							 <input type="hidden" name="image" value="<?php echo $profile_picture ?>">
		   									<input type="submit" style="display: none;" name="post_comment" value="Reply" class="small_post-button">
   									</div>
   								</div>
   							</div>

           			 </form>
         				<?php } ?>
						
					</div> 
					<?php }  ?>
			</div>	
				

		<!--</div>-->



			<div class="right">
				<div class="right-content-area">

							
							<div class="right-content-inner-area">	
								<p>Want To Follow</p>	
							</div>												
								<div class="right-bar-area">
	<?php
		global $con;
	 $query=mysqli_query($con,"SELECT * FROM user WHERE user_id != '".$_SESSION["id"]."' ORDER BY user_id DESC");
		while ($row=mysqli_fetch_array($query))
		{		$user_id=$row['user_id'];
				$userfollow = $row['firstname']." ".$row['lastname'];
				$profile_picture = $row['profile_picture'];
				$username=$row['username'];
				$gender=$row['gender'];	
				

		

	?>								<form method="POST" action="follow.php">
									<div class="user_list">
													<div class="follower-box-user-icon-wrapper row">
										<div class="col-md-6">
											<div class="follower-box-user-icon">
												<?php
												 $profile_picture = '';
												if ($row['profile_picture']	 != '') { ?>
													<a href="user-profile.php<?php echo '?user_id='.$user_id; ?>" ><img src="<?php echo $row['profile_picture'] ?>"></a>
													
												<?php } 
												else {?>
													<a href="user-profile.php<?php echo '?user_id='.$user_id; ?>" ><img src="image/user.png"></a>
												<?php } ?>


												
											</div>
										</div>

											<div class="follower-box-user-name col-md">
												<a href="user-profile.php<?php echo '?user_id='.$user_id; ?>" title="<?php echo $username ?>">
													
													<p class="users-text-name"><?php echo $userfollow ?></p>
												</a>
												<p class="users-name">@<?php echo $username ?></p>
												<?php follow_button($con,$row['user_id'],$id); ?>
												<div class="follow_badge" style="float: right;margin:10px 8px 10px 0px;">
													<span  class=" badge badge-success"><?php echo $row['follower_number']; ?> &nbsp;Followers</span>
												</div>
												
															
																									
											</div>
									</div>
																									
								</div>
								</form>
							<?php } 
							?>


							</div>
					</div>
		</div>
	</div>
	</div>

			<script src="jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
			<script  src="bootstrap.min.js"></script>
	</body>
</html>
