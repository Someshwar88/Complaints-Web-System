<?php

session_start();
$error=$success="";

require_once 'config.php';




if(isset($_POST['resetbtn'])){
	$email=$_SESSION['username'];

	$newpass=$_POST['newpass'];
	$verifypass=$_POST['verifypass'];
	if(!empty($newpass&&!empty($verifypass))){
	if($newpass==$verifypass)
	{
		$resetquerry="UPDATE `user` SET `password`='".$verifypass."' WHERE email='".$email."'";
		$result=mysqli_query($conn,$resetquerry);
		
		if($result){
			if(mysqli_affected_rows($conn)>0)
			{
				$success= 'password has been changed';
				




			}
			else{
				$error= ' entered gmail not found ';
			}
		}
		else
		{
			$error= 'something went wrong';
		}
	}
	else{
		$error= 'password doesnot matched';
	}
}
else
{
	$error= 'enter the password ';
}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>reset passowrd</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
	
	*{
		margin:0;
		padding:0;
		font-family:monospace;
		

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
		color: white;
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
			width:65px;
			padding: 5px;

		}
		.submit:hover{
			background-color: rgba(10,12,15,0.3);
			color:red;

}
	
		.link{
			color: red;
			text-decoration: underline;
			font-size: 20px;
		}
		.error{
			color:red;
			font-size: 16px;
		}
		.success{
			color:green;
			font-size:18px;

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
<body><center>
	<header>

     <div class="navbar">
			 <img src="https://www.colourbox.com/preview/27518111-stop-woman-abuse.jpg" class="logo" >
			 <div class="title1">
			<h1>STOP WOMEN ABUSE</h1>
		</div>
			<ul>
				<li ><a href="index.html">home</a></li>
				
				<li class="active"><a href="regi.php">register</a></li>
				<li><a href="adminlogin.php">Admin</a></li>
				<li><a href="login.php">login</a></li>
				<li><a href="aboutus.html">aboutus</a></li>
			</ul>
			
			
		</div>




	<form  method="POST">
		<h2>Reset password</h2>
		<div class="a">
			<div class="box">
  
  <label> new password: </label>   <input type="text" name="newpass" placeholder="enter your new  password"><br>

  <label> confirm passowrd</label>: <input type="text" name="verifypass" placeholder="retype password"><br>
</div>
   <input  class="submit" type="submit" name="resetbtn" value="reset">
</div>
<br>
<label class="aa">
  <a href="codesent.php">Back</a><br>
</label><br>

   <span class="error"><?php echo $error?></span><br>
   <span class="success"><?php echo $success?></span><br>
   <a href="login.php" class="link">click here login</a>


  





	</form>
</center>
</header>

</body>
</html>

