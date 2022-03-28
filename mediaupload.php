<!DOCTYPE html>
<html>
<head>

	<title></title>
	<script src="jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script  src="bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="postbox-toolbar-area.css">
	<style type="text/css">
	body {font-family: Arial, Helvetica, sans-serif;}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
 /* padding-top: 100px;  Location of the box */
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: hidden; /* Enable scroll if needed */
  background-color: #999999;
  opacity: 1;

}

/* Modal Content */
.modal-content {
  background-color: #f1f1f1;
  border: 0px solid #f1f1f1;
  width: 610px;
  height: 310px;
  margin: 100px 300px auto;
  overflow: hidden;
  background-color: white;
  border-radius: 20px;

}

.comment-modal-content{
  width: 590px;
  height: auto;
  margin-top: 45px;
  margin-left: 5px;
  margin-right: 5px;
  overflow: hidden;
  position: absolute;
  background-color: white;

}

.close {
  color: #aaaaaa;
  float: left;
  font-size: 30px;
  font-weight: bold;
  width: 100%;
  height:40px;
  overflow: hidden;
  background-color: white;
  border-bottom: 1px solid #6f7173;

}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

		
	</style>
</head>
<body>
		<div class="postbox-toolbar-button" id="media-icon">
			<img src="media-icon.svg">
		</div>

<div id="m1" class="modal">

  <!-- Modal content -->
  	 <div class="modal-content">

  		<div class="close"> &nbsp; &times;</div>
   			<div class="comment-modal-content ">
   				<input type="file" name="image">
  			</div>
	</div>

</div>



<!-- The Modal -->


	<script type="text/javascript" src="mediaupload.js"></script>
</body>
</html>