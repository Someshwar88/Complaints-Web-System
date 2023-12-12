<?php
// Initialize the session

require "config.php";
$error=$success="";
 
// Define variables and initialize with empty values
if(isset($_POST['submit']))
{

	$email=$_POST['username'];
	$password=$_POST['password'];
	if(empty($email)&&empty($password))
	{
		$error="fill the all the fields";

	}
	if($email=='admin'&&$password=='admin123'){
		$success="your successfully logined";
           
        header('location:adminview.php');
	
         }
        else
        {
	        $error= 'email and password wrong';
	        


	        
        }

}

?> 










<!DOCTYPE html>
<html>
<head>
	<title>homepage</title>
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
.active{
	background-color: white;
	color:black;
	transition: 0.5s;

}
.title{
	
	
	color: white;
	position: absolute;
	top: 50%;
	left: 30%;
	
	transform: translate(-50%,-50%);
	font-family: serif;



	

}
h1{
	font-size: 30px;
}
.application{
	box-sizing: border-box;
	
	border-radius: 24px;
	 position: absolute;
	 color:black;
			
	padding:20px 40px;
	margin-top: 10%;
    width:auto;
	height: auto;
	
    background-color: #0009;
    left: 30%;
    top: 50%;

	
	

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
			
			font-size: 18px;
		}
	.subtitle{
		
		text-align:center;
		background-color: skyblue;
		background-blend-mode: hard-light;
		box-sizing: border-box;
		font-size: 20px;
		border-radius: 10px;
		height: 40px;
		width: 100%;
	}
	.submit{
		box-sizing: border-box;
		box-decoration-break: clone;
		background-color: blue;
		padding: 0px 15px;


	}
	.error{
		color: red;
		font-size: 16px;
	}
	.success{
		color:green;
		font-size: 10px;
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
				<li class="active"><a href="adminlogin.php">Admin</a></li>
				<li  ><a href="login.php">login</a></li>
				<li><a href="aboutus.html">aboutus</a></li>
			</ul>
			
			
		</div>
		
		<div class="application">
			<div class="subtitle">
				<h2> ADMIN LOGIN</h2>
			</div>
			<form method="POST">
			<input type="text" name="username" placeholder="enter your email id" required><br>
			<input type="password" name="password" placeholder="enter your new password" required><br>
			
			<input type="submit" name="submit" vlaue="submit" class="submit">
			

  			</form>
  			
		 	
          

<span class="error"><?php  echo $error;  ?></span>
			<p class="success"><?php echo $success; ?></p>


		</div>

		
		


	</header>

</body>
</html>