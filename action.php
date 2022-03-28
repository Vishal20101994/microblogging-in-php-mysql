												

												<!--<?php	$query=mysqli_query($con,"SELECT * FROM  follow WHERE sender_id='".$row['user_id']."' AND receiver_id='".$_SESSION["id"]."' ") or die(mysqli_error());
																$total_row=mysqli_num_rows($query);

																
															 if ($total_row>0)
																	{ ?>
																					
															<button type="button" name="follow_button" class="btnd btn btn-warning action_button" data-action="unfollow" data-sender_id='".$sender_id."'>Following</button>

														<?php }else { ?>

														      	<button type="button" name="follow_button" class="btn btn-warning action_button" data-action="unfollow" data-sender_id='".$sender_id."'><i class="glyphicon glyphicon-plus"></i> Follow</button>
														      	<?php } ?>-->





<?php
include("includes/database.php");
if ($_POST['action']=='fetch_user')
{

		$query=mysqli_query($con,"SELECT * FROM user WHERE user_id !='".$_SESSION["id"]."' ORDER BY user_id DESC");
		foreach ($query as $row)
		{
			$profile_picture='';
			if ($row['profile_picture']!='')
			{
				$profile_picture='<img src="image/'.$row["profile_picture"].'" class="img-thumbnail img_responsive" />';
			}
			else
			{
				$profile_picture='<img src="image/user.png" class="img-thumbnail img_responsive" />';

			}
			echo $output.='<div class="row">
			<div class="col-md-4">
				'.$profile_picture.'
			</div>
			<div class="col-md-8" >
			<h4><b>@'.$row["username"].'</b></h4>

			'.make_follow_button($con,$row["user_id"],$_SESSION["id"]).'
			<span class="label label_success">'.$row["follow_number"].' Followlers</span>
			</div>
			</div>	
			<hr/>
			';
		}
		
		function make_follow_button($con,$sender_id,$reciever_id)
	{
		$query="SELECT * FROM  follow WHERE sender_id='".$sender_id."' AND reciever_id='".$reciever_id."' ";
		$statement=$con->prepare($query);
		$statement->execute();
		$total_row=$statement->rowcount();
		if ($total_row>0)
		{
			$output='<button type="button" name="follow_button" class="btn btn-warning action_button" data-action="unfollow" data-sender_id="'.$sender_id.'">Following</button>';
		}
		else
		{
			$output='<button type="button" name="follow_button" class="btn btn-warning action_button" data-action="unfollow" data-sender_id="'.$sender_id.'"><i class="glyphicon glyphicon-plus"</i> Follow</button>';

		}
	}
}

	

?>



