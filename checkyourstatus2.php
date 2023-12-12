<?php
// Initialize the session
session_start();
$success="";
$error="";

require "config.php";

 

if(isset($_POST['submit']))
{
	


 $uniqid=$_POST['uniqid'];

 
 $sql = "SELECT `status` FROM `user3` WHERE `uniqid`='$uniqid'";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  if($row = $result->fetch_assoc()) {
    $success= "status: " . $row["status"]. " " ;
  }
} else {
  $error= "Record not found";
}
$conn->close();

 






	
}

?> 








<html>
<head>
	<title>userlogin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		*{
			margin: 30%,0%;
			padding: 0px;
			
		}
    header{
    	background-image:url(https://t4.ftcdn.net/jpg/01/87/66/55/240_F_187665572_GCvLoJflSXWVEbhuexo5XDT01ers6VvC.jpg);
    
    	 background-size: cover;
    background-position: center;
    background-attachment: fixed;
    
	height:100vh;
	background-repeat: no-repeat;
	background-blend-mode: saturation;




}
.navbar{
	display: flex;
	padding-top: 8px;


	box-sizing: border-box;
	background-color: black;


	border: 5px;
	border-color:#24532;

	justify-content: flex-end;
	
	

}
.navbar li{
	display: inline-block;
	
	color:white;
	font-family: monospace;
	border-style:ridge;
	font-weight: 100;
	font-size:16px;
	
	border-color: lightgray;
	transition:0.3;
    padding: 5px 20px;
   
    margin-left: 20px;
    transition: 0.3s;
    margin-right: 20px;
    text-decoration: none;

}
.navbar li:hover{
	background-color:white ;
	color:black;



}
.logo{
	height: 50px;
	width: auto;
	margin-right:auto;
	cursor: pointer;


}
h1{
	font-size: 30px;
	color:white;

}



.title{
	
	
	color: white;
	position: absolute;
	top: 50%;
	left: 30%;
	
	transform: translate(-50%,-50%);
	font-family: serif;



	

}
.application{
	box-sizing: border-box;
	
	border-radius: 24px;
	 position: absolute;
			
	padding:20px 40px;
	margin-top: 10%;
    width:auto;
	height: auto;
	color:white;
    background-color: #0009;
    left: 30%;
    top: 20%;
	
	

}
.application input{
			width: 100%;
			margin-bottom: 8px;
			margin-top: 10px;
			
		}
.application input[type="text"],input[type="password"],input[type="email"],input[type="submit"]
		{
			border:none;
			border-bottom: 1px solid white;

			border-radius: 10px;
			
			outline: none;
			height: 40px;
			width: 280px;
			color:black;
			font-size: 18px;
		}

		.subtitle{
		
		text-align:center;
		background-color: skyblue;
		background-blend-mode: hard-light;
		box-sizing: border-box;
		font-size: 18px;
		border-radius: 7px;
		height: 30px;
		width: 100%;
	}

	.success{
		color:green;
		font-size: 18px;
	}
	.error{
		color:red;
		font-size: 18px;
	}
</style>
</head>
<body>
	<header>
	<div class="navbar">
			 <img src="https://www.colourbox.com/preview/27518111-stop-woman-abuse.jpg" class="logo" >
			 <div class="title">
			<h1>STOP WOMEN ABUSE</h1>
		</div>
		<div>
			<ul>
				<li><a href="index.html">home</a></li>
				<li><a href="regi.php">register</a></li>
				<li><a href="adminlogin.php">Admin</a></li>
				<li ><a href="login.php">login</a></li>
				<li><a href="aboutus.html">aboutus</a></li>
			</ul>
			
			
		</div>
	</div>
   
   




	<form method="POST" align="center">
		<div class="application">
			<div class="subtitle">
				<h2>Check Complaint Status</h2>
			</div>


		<input type="text" name="uniqid" placeholder="  enter your uniqid">
		<br>
		<input type="submit" value="submit" name="submit" class="submit">
		<br>
		<span class="success"><?php echo $success ?></span>
		<span class="error"><?php echo $error ?></span>

    

    </form>
  </div>
	
			
			
	

			
	

         




	</header>

</body>
</html>