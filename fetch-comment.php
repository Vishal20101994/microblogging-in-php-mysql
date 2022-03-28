<?php
	include ('includes/database.php');
$comment=mysqli_query($con,"SELECT * from comments where post_id='$post_id' order by post_id DESC") or die(mysqli_error());
$result=$statement->fetchAll();
$output='';
	foreach ($comment as $row)
	{
		$output.='<div class="panel panel_default">
					<div class="panel-heading">BY <b>'.$row["name"].'</b> on <i> '.$row["created"].'</i></div>
					<div class="panel-body">'.$row["comment"].'</div>
					<div class="panel-footer" align="right">
					<button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
					</div>
					';
	}
	echo $output;
?>