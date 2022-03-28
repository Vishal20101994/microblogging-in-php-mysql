<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="comment-box.css"/>
	<script src="jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script  src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="postbox-toolbar-area.css">

</head>
<body>


<!-- Trigger/Open The Modal -->

<!--<div  id="btn">Post</div>-->

<div class="post-button " id="myBtn">
            Edit Profile
          </div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  	 <div class="modal-content">

  		<div class="close"> &nbsp; &times;</div>
   			<div class="comment-modal-content ">
   				<div class="comment-user-icon">
   					<img src="<?php echo $profile_picture ?>">
   				</div>
   					<div class="comment-box-user-name">
   						<!--<a href="timeline.php" title="<?php echo $username ?>">>-->
											
							<p class="post-user-name"><b><?php echo $posted_by ?></b></p>
							<p class="post-small-name">@<?php echo $username ?> .</p>
						<!--</a>-->
							<p class="post-small-name"><?php echo $time = time_stamp($time); ?></p>
   					</div>
              <div class="postbox-status-input-area">
              <div class="postbox-status-input-area-inner" id="post_list">
               <p><?php echo $row['content']; ?></p>
              </div>
            </div>
            <form  method="POST" action="comment.php">  
            <?php $image=mysqli_query($con,"select * from user where user_id='$id'")or die(mysqli_error());
              while($row=mysqli_fetch_array($image)){
              

              ?>
   					<div class="comment-box-area">
   						<div class="comment-user-icon">
   					    <img src="<?php echo $row['profile_picture']; ?>">
   						</div>
   							<div class="comment-box-user-name">

		   						<input type="text" name="content_comment" placeholder="Write comment..." class="textinput">
		   						<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
		   						<input type="hidden" name="user_id" value="<?php echo $firstname.' '. $lastname?>">
                  <input type="hidden" name="image" value="<?php echo $profile_picture ?>">
		   						<input type="submit" name="post_comment" value="Reply" class="small_post-button">
   							</div>
   					</div>
            </form>
          <?php } ?>
  			</div>
	</div>

</div>

  			<script type="text/javascript" src="comment-box.js"></script>

</body>
</html>