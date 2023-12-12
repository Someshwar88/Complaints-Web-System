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
	background-repeat: no-repeat;
	background-blend-mode: saturation;
}
 img{
 	position: absolute;
 	top:35%;
 	left:40%;
 	height:400px;
 	width:auto;

 }
 label{
 	color:white;
 	position: absolute;
 	top:20%;
 	left:48%;
 	font-size: 35px;

 }
 .id{
 	color:white;
 	
 	top:27%;
 	left:33%;
 	font-size: 30px;

 }
 a{
   position: absolute;
  top:100%;
   left:46%;
   font-size: 30px;
   

 }
 a:hover{
 	color:black;
 	background-color: white;
 }

</style>
</head>
<body>
	<header>
		<div>
	<img src="https://websites.sportstg.com/pics/00/03/04/21/3042188_1_M.jpg">
	 <label>Thank you.......!</label>
	 <label class="id"><?php 
            
            session_start();
            $uniqid=$_SESSION['uniqid'];

            echo "your complaint registration id ".$uniqid;

            ?>
        </label>
        </div>
        <div>

       <a href="login.php">Click here to login</a>
   </div>


	 </header>



	</body>
	</html>
