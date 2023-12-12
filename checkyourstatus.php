
<!DOCTYPE html>
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
.a {
	position: absolute;
	left:35%;
	margin-top: 50px;
	background-color: gray;
	
	color:white;
	box-sizing: border-box;
	border-radius: 20px;
	font-size: 30px;
	border:2px solid white;
	padding: 2px 5px;
}
.b{
	position: absolute;
	margin-top: 100px;
	border-radius: 20px;

	left:30%;
	border: 2px solid white;		
	
   background-color: gray;
	
	color:white;
	font-size: 30px;
	padding: 3px 5px;

}
.a:hover{
	background-color: black;
	color:white;
}
.b:hover{
	background-color: black;
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
	
			
			<a href="usercomplaint.php" class="a">WRITE YOUR COMPLAINT </a><br>

			<a href="checkyourstatus2.php" class="b">CHECK YOUR COMPALINT STATUS</a><br>
		
	

			
	

         




	</header>

</body>
</html>