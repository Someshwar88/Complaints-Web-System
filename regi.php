
<?php
session_start();

$firstname=$lastname=$mobile=$email=$password=$password1="";
$ferror=$lerror=$merror=$eerror=$perror=$p1error=$sucesss=$errors="";


include 'config.php';

if(isset($_POST['submit'])){
	if(empty($_POST['firstname']))
		$ferror="firstname is required";
	else
		$firstname=test($_POST['firstname']);
	if(empty($_POST['lastname']))
		$lerror="lastname is required";
	else
		$lastname=test($_POST['lastname']);
	if(empty($_POST['mobile']))
		$merror="mobile number is required";
	else
		$mobile=test($_POST['mobile']);
	if(empty(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
        $eerror = "Please enter valid email.";
    } else{
    	 $email=test($_POST['email']);
         $sql="select * from user where email='$email'";
        $res=mysqli_query($conn,$sql);
        if (mysqli_num_rows($res) > 0) {
       
        $row = mysqli_fetch_assoc($res);
        if ($email==$row['email'])
        {
            $eerror="Username already exists";
        }
     }
    }
	
	if(empty($_POST['password']))
		$perror="password is required";
	else
		$password=test($_POST['password']);
	if(empty($_POST['password1']))
		$p1error="password1 is required";
	else
		$password1=test($_POST['password1']);
	if($password!=$password1)
	{
		$p1error="password does not matched";
	}




if(empty($ferror)&&empty($lerror)&&empty($merror)&&empty($eerror)&&empty($perror)&&empty($p1error))
{

  $sql = "INSERT INTO user(email, password,mobile) VALUES (?,?,?)";
         
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_username,$param_password,$param_mobile);
            
            // Set parameters
            
            $param_username = $email;
            $param_password = $password;
            $param_mobile=$mobile; // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    else{
    	echo 'somthing wrong';
    }
    
    // Close connection
    mysqli_close($conn);         
       
     
     
 }
  	
 
 
 function test($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
    
	height:1500px;
	width:auto;
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
			
	padding:20px 40px;
	margin-top: 10%;
    width:auto;
	height: auto;
	color:white;
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
			color: black;
			font-size: 18px;
		}
	.subtitle{
		
		text-align:center;
		background-color: skyblue;
		background-blend-mode: hard-light;
		box-sizing: border-box;
		font-size: 20px;
		border-radius: 10px;
		height: 50px;
		width: 100%;
	}
	.submit{
		box-sizing: border-box;
		box-decoration-break: clone;
		background-color: blue;
		padding: 0px 15px;


	}
	.success{
		color:green;

	}
	.error{
		color: red;
	}.success
	{
		color:green;

	}
	a{
		color:blue;
		font-size: 16px;
	}
	a:hover{
		color:black;
		background-color: white;

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
			<ul>
				<li ><a href="index.html">home</a></li>
				
				<li class="active"><a href="regi.php">register</a></li>
				<li><a href="adminlogin.php">Admin</a></li>
				<li><a href="login.php">login</a></li>
				<li><a href="aboutus.html">aboutus</a></li>
			</ul>
			
			
		</div>
		
		<div class="application">
			<div class="subtitle">
				<h2>Registration</h2>
			</div>
<form method="POST">
	        <p><span class="error">* required field</span></p>
			<input type="text" name="firstname" placeholder="enter your firstname"><br>
			 <span class="error">* <?php echo $ferror;?></span><br><br>
			<input type="text" name="lastname" placeholder="enter yout lastname"><br>
			 <span class="error">* <?php echo $lerror; ?></span><br><br>
			<input type="text" name="mobile" placeholder="enter your mobile number"><br>
			 <span class="error">* <?php echo $merror;?></span><br><br>
			
			<input type="email" name="email" placeholder="enter your email id"><br>
			 <span class="error">* <?php echo $eerror;?></span><br><br>
			<input type="password" name="password" placeholder="enter your new password"><br>
			 <span class="error">* <?php echo $perror;?></span><br><br>
			<input type="password" name="password1" placeholder="enter confirm password"><br>
			 <span class="error">* <?php echo $p1error;?></span><br><br>
			<input type="submit" name="submit" vlaue="submit" class="submit">
			
			<br>

			<span class="sucesss"><?php echo $sucesss; ?></span><br>
			 <span class="error"><?php echo $errors;?></span><br>



			 Already have an account? &nbsp<a href="login.php">Sign in</a>


			
</form>
 
		 	
          




		</div>
		
		
		


	</header>

</body>
</html>