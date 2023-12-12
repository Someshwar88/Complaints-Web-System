<?php
session_start();
$error="";
if(isset($_POST['verify'])){
	$email=$_POST['user'];
	if(!empty($email))
	{

	
	
	$_SESSION['username']=$email;


	header('location:resetpassword.php');
}
else
{
	$error='enter the email id';
}

}




?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot passowrd</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
	
	*{
		margin:0;
		padding:0;
		font-family: monospace;


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
	width: 100%;
	



	
	

}
.navbar li{
	display: block;
	float: left;
	
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
.title1{
	
	
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
	label{
		color: red;
	text-decoration: underline;
	}
	
.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
h2{
	color:white;
	padding-top: 20%;
	
	
	font-size: 25px;
}		
.box input{
			width: 20%;
			
		}
		.box input[type="text"]
		{
			border:none;
			border-bottom: 1px solid white;
			background-color: transparent;
			outline: none;
			height: 40px;
			color: white;
			font-size: 16px;
		}

.submit{
			border-radius: 10px;
			border-color: #0009;

		}
		.submit:hover{
			background-color: rgba(10,12,15,0.3);
			color:red;


		}
		.error{
			color:red;
			font-size: 16px;
		}
		.aa{
		color:lightblue;
		font-size: 16px;
		border:2px solid white;
		padding: 2px 3px;
		border-radius: 8px;
		background-color: white;


	}
	.aa:hover{
		color:white;
		background-color: black;

	}
		
		


</style>









</head>
<body><center><header>
	<div class="navbar">
			 <img src="https://www.colourbox.com/preview/27518111-stop-woman-abuse.jpg" class="logo" >
			 <div class="title1">
			<h1>STOP WOMEN ABUSE</h1>
		</div>
			<ul>
				<li ><a href="index.html">home</a></li>
				
				<li><a href="regi.php">register</a></li>
				<li><a href="adminlogin.php">Admin</a></li>
				<li><a href="login.php">login</a></li>
				<li><a href="aboutus.html">aboutus</a></li>
			</ul>
			
			
		</div>

	<h2>forgot password</h2>
	<form method="POST" align="center">
		<div class="box">
  <label>email</label> :<input  class="b" type="text" name="user" placeholder="example@gmail.com" required>
  </div><br>
	
	<input  type="submit" name="verify" value="verifycode" class="submit"><br><br>
	
<label class="aa">
  <a href="login.php">Back</a><br>
</label><br>
	<span class="error"><?php echo $error;?></span>

</form>
</center>
</header>

</body>
</html>

