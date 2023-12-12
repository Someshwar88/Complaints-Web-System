<?php
session_start();
include 'config.php';
$welcome="";
$success=$error="";
$user=$_SESSION['username'];

$welcome='hi, Welcome.........'.$user.':)!!!!';

if(isset($_POST['submit'])){
	$complaint=$_POST['complaint'];
	if(!empty($complaint)){
		$uniqid=rand();
      $_SESSION['uniqid']=$uniqid;
      $status='under prcocess';
	$sql="INSERT INTO user3(`name`,`complaint`,`uniqid`,`status`) VALUES (?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->bind_param("ssss",$user,$complaint,$uniqid,$status);
	$stmt->execute();
	$stmt->close();
    
    header('location:uniqid.php');
	$success="your complaint is registered";
  }
  else
  	{
  		$error="Write your complaint";
  	}




}










?>




<!DOCTYPE html>
<html>
<head>
	<title>user complaint</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			
		}
    header{
    	
    background-image:url(https://t4.ftcdn.net/jpg/01/87/66/55/240_F_187665572_GCvLoJflSXWVEbhuexo5XDT01ers6VvC.jpg);
    
    
    	 background-size: cover;
    background-position: center;
    background-attachment: fixed;
    
	height:auto;
	width:auto;
	background-repeat: no-repeat;
	background-blend-mode: saturation;
}

	.a{
		box-sizing: border-box;
		height: 500px;
		width:1000px;
		margin-top: 25px;



	}

	h1{
       

       padding-top: 30px;
       text-align: center;
       font-size: 30px;
       color:white;
       text-decoration: underline;





	}
	.submit{
		margin-left: 77%;
		padding: 5px 30px;

	}
	.welcome
	{
		color:white;
		font-size: 20px;
		margin-left: 10%;
		



	}
	.success{
		color: white;
		font-size: 16px;
		margin-left: 15%;



	}
	.button{
		width:120px;
		box-sizing: border-box;
		border: 2px solid white;
		background-color: white;
		font-size: 16px;

		padding: 5px 30px;
		margin-left: 250px;
		border-radius: 10px;
	}
	.button:hover{
		color:white;
		background-color: black;
	}
	.error{
		color:red;
		font-size: 16px;
	}
	textarea{
		margin-top: 2%;
		margin-left: 3%;
	}
	
</style>



</head>
<body>
	<header>

        <form method="post">
        	<h1>USER COMPLAINT</h1>


        	<span class="welcome"><?php echo $welcome; ?></span><br>
        	<br>

        	<span class="success"><?php echo $success; ?></span>
        	<span class="error"><?php echo $error; ?></span>


        
		
		<textarea name="complaint" rows="25" cols="150" placeholder="Write your complaint here"></textarea><br>
		


		<button class="button"> <a href="checkyourstatus.php">Back</a></button>
		 <input type="submit" name="submit">

	</form>

		


		
	</header>

</body>
</html>