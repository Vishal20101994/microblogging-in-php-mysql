<style>
	.pagination a{
		color:black;
		float;left;
		padding:8px 16px;
		transition: background-color .3s;
		height: 40px;
		width: 100%;
		background-color: #a8c0cc;
		color: black;
		font-weight: 600;
		font-style: Arial,sans-serif;

	}

	.pagination a:hover:not(.active){
		background-color: $ddd;
	}

</style>

<?php
include("includes/database.php");
	$query=mysqli_query($con,"select * from post") or die(mysqli_error());

	$total_posts=mysqli_num_rows($query);

	$total_pages=ceil($total_posts / $per_page);

	echo "
			<center>
			<div class='pagination'>
			<a  href='home.php?page1'>First page</a>
		";
		for ($i=1; $i<=$total_pages; $i++) {
			echo "<a href='home.php?pages=$i'>$i</a>";
		}

		echo "<a href='home.php?page=$total_pages'>Last page</a></div>";
?>