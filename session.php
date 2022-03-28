<?php
include("includes/database.php");
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (!isset($_SESSION['id'])){
	session_start();
header('location:index.php');
}
$id = $_SESSION['id'];
$query=mysqli_query ($con,"SELECT * FROM user WHERE user_id ='$id'") or die(mysqli_error());
$row=mysqli_fetch_array($query);
$cover_picture=$row['cover_picture'];
$profile_picture=$row['profile_picture'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];
$email=$row['email'];
?>