<?php
	if ($_POST['action']=='fetch_user')
	{
		$query=mysqli_query($con,"SELECT * FROM user WHERE user_id!='".$_SESSION["id"]."' ORDER BY user_id DESC");
		$statement->execute($query);
		$result=$statement->fetchAll();
		foreach ($result as $row)
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
			$output.='<div class="row">
			<div class="col-md-4">
				'.$profile_picture.'
			</div>
			<div class="col-md-8" >
			<h4><b>@'.$row["username"].'</b></h4>

			'.make_follow_button($con,$row["user_id"],$_SESSION["id"]).'
			<span class="label label_success">'.$row["follower_number"].' Followlers</span>
			</div>
			</div>
			<hr/>
			';
		}
	}
	echo $output;

	function make_follow_button($con,$sender_id,$reciever_id)
	{
		$query="SELECT * FROM  followers WHERE sender_id='"..$sender_id"' AND reciever_id='"..$reciever_id"' ";
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
		return $output;
	}

?>