<!--<?php 
	/*include("includes/database.php");

	  if(isset($_POST['submit'])){ 
	   
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $name=$_POST['name']; 
	  //connect  to the database 
	  //-query  the database table 
	  $sql="SELECT  * FROM user WHERE firstname LIKE '%" . $name .  "%' OR lastname LIKE '%" . $name ."%'"; 
	  //-run  the query against the mysql query function 
	  $result=mysqli_query($con,$sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysqli_fetch_array($result)){ 
	          $FirstName  =$row['firstname']; 
	          $LastName=$row['lastname']; 
	          $ID=$row['user_id']; 
	  //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " " . $LastName .  "</a></li>\n"; 
	  echo "</ul>"; 
	  } 
	  } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 
	  
	  } 
	  } */
	?> -->



	<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }

}
 
} 

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="homestyle.css"/>
		<link rel="stylesheet" type="text/css" href="navbar.css">
		<link rel="stylesheet" type="text/css" href="rightnavbar.css"/>
		<link rel="stylesheet" type="text/css" href="profile_navbar.css"/>
		<link rel="stylesheet" type="text/css" href="followers-box.css"/>
		<link rel="stylesheet" type="text/css" href="post-box.css">
		<link rel="stylesheet" type="text/css" href="postbox-toolbar-area.css">
		<link rel="stylesheet" type="text/css" href="postbox-message-input-area.css">
		<link rel="stylesheet" type="text/css" href="posts-content-bar.css">
		<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="comment-box.css">
		<link rel="stylesheet" type="text/css" href="right-content.css">
		<link rel="stylesheet" type="text/css" href="fontawesome.min.css">
		<script src="app.js"></script>
		<script src="jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script  src="bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="all.css">


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

				<!--followers box-->
				<div class="followers-box">
					
					<div class="followers-box-user-info-wrapper">
						<div class="followers-box-user-icon-wrapper row">
							<div class="col-md-6">
								<div class="followers-box-user-icon">
									<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
								</div>
							</div>

								<div class="followers-box-user-name col-md-6">
									<a href="timeline.php" title="<?php echo $username ?>">
										
										<p class="user-text-name"><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></p>
										<p class="user-name">@<?php echo $username ?></p>

									</a>

									
									
								</div>
						</div>
						<div class="followers-box-toolbar row">

							<div class="col-md-4">
								<span class="post-toolbar-title">Posts</span>
								<span class="post-toolbar-count">3</span>
							</div>
							<div class="col-md-4">
								<span class="post-toolbar-title">Followings</span>
								<span class="post-toolbar-count">2</span>
							</div>
							<div class="col-md-4">
								<span class="post-toolbar-title">Followers</span>
								<span class="post-toolbar-count"><?php echo $row['follower_number'];?></span>
							</div>
						</div>

					</div>
					<div class="followers-box-banner">
						<a href="updatecover.php" title="Change Cover Photo"><img src="<?php echo $row['cover_picture'] ?>"></a>
					</div>
				</div>

				<!--followers end-->

			</div>



			<div class="middle" >
				
				
					<div class="postbox_post_title_area">
							<div class="col-lg-12"><b>Find people and explore</b></div> 
					</div>				
				

<?php
	include("includes/database.php");
				if(isset($_POST['submit'])){ 
	   
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $name=$_POST['name'];


			$query=mysqli_query($con,"SELECT  * FROM user WHERE firstname LIKE '%" . $name .  "%' OR lastname LIKE '%" . $name ."%' OR username LIKE '%" . $name ."%'") or die(mysqli_error());
			while($row=mysqli_fetch_array($query)){
				$searchname= $row['firstname']." ".$row['lastname'];
				$profile_picture = $row['profile_picture'];
				$user_id = $row['user_id'];
				$gender=$row['gender'];
				$username=$row['username'];
?>
				

				<!--status bpx start-->

				
					<div class="status-box-area-wrapper">
						<div class="postbox-status-user-icon-col col-md-12">

							<div class="postbox-status-user-icon">
								<?php
												 $profile_picture = '';
												if ($row['profile_picture']	 != '') { ?>
													<a href="use-profile.php<?php echo '?user_id='.$user_id; ?>" ><img src="<?php echo $row['profile_picture'] ?>"></a>
													
												<?php } 
												else {?>
													<a href="user-profile.php<?php echo '?user_id='.$user_id; ?>" ><img src="image/user.png"></a>
								<?php } ?>
								
							</div>

							<div class="postbox-status-user-name col-md-12">
										<a href="user-profile.php<?php echo '?user_id='.$user_id; ?> ?>" title="<?php echo $username ?>">
											
											<p class="status-main-name"><b><?php echo $searchname ?></b></p>
										</a>
											<p class="status-small-name">@<?php echo $username ?> . </p>
										
											<p class="status-small-name"><?php echo $gender ?></p>
										
										
							</div>
						</div>

					</div>
				<?php } ?>

		</div>
	<?php } 
	}?>	
	



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


	</body>
</html>