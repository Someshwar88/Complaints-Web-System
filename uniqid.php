<?php

session_start();
require "config.php";

	$uniqid=$_SESSION['uniqid'];


         

           
            

	






?>


<!DOCTYPE html>
<html>
<head>
	<title>Uniq id</title>
	<style type="text/css">
		




		header{
    	background-image:url(https://t4.ftcdn.net/jpg/01/87/66/55/240_F_187665572_GCvLoJflSXWVEbhuexo5XDT01ers6VvC.jpg);
    
    	 background-size: cover;
    background-position: center;
    background-attachment: fixed;
    
	height:1000px;
	width: auto;
	background-repeat: no-repeat;
	background-blend-mode: saturation;




}
.uniq{
	font-size: 30px;
	color: #800081;
	text-align: center;

}
.uni{
	font-size: 30px;
	color: blue;
	text-decoration: underline;

	text-align: center;

}
.img{
	height: 400px;
	width: auto;
	margin-top: 100px;







	}
	


	</style>

</head>
<body>
	<div>
		<header>
			
<center>

			<img src="https://cdn.pixabay.com/photo/2019/02/19/19/45/thumbs-up-4007573_960_720.png"   class="img">
			<p class="uniq">Your Reference code :
			<span class ="uni">   <?php echo $uniqid ?> </span>
		 <br>
		  Save this Reference id.It is user for further info</p>
		  <br>
		   <a href="login.php" class="uniq">Click here </a>

			</center>
		</header>
	</div>



</body>
</html>