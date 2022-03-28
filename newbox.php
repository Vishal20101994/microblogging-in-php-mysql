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
<div class="postbox-toolbar-button" id="myBtn">
<img src="comment.svg">
<button style="display: none;"></button>
</div>



<!-- The Modal -->

   			<div class="comment-modal-content " id="model">
   				
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
	  			<script type="text/javascript" src="newbox.js"></script>

</body>
</html>

