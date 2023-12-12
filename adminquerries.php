



<!DOCTYPE html>
<html>
<style type="text/css">
	
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
.back{
		color:white;
		background-color: black;

		border-radius: 10px;

	}
	.back:hover{
		background-color: white;
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
	top: 10%;
	left: 30%;
	
	transform: translate(-50%,-50%);
	font-family: serif;



	}
	h1{
	font-size: 30px;
}
	h2{
		text-align: center;
		font-size: 30px;
		text-decoration: underline;

		color: white;
	}
	table {
		margin-left: 10%;
		padding-top: 10px;
border-collapse: collapse;
width: 80%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(odd)
 {background-color: #f2f2f2}
	
</table>

</style>
<head>
	<title>adminquerries</title>
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
				<li ><a href="regi.php">register</a></li>
				<li><a href="admin.php">Admin</a></li>
				<li><a href="login.php">login</a></li>
				<li><a href="aboutus.html">aboutus</a></li>
			</ul>
			
			
		</div>
	<h2>ALL COMPLAINTS</h2>
	<table>
		<tr>
<th>Name</th>
<th>Complaint</th>

</tr>
<?php
// Initialize the session

require "config.php";
 
// Define variables and initialize with empty values

	
	$query="SELECT * FROM `user3`";
        $result = $conn->query($query);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> ". $row["name"]. " &nbsp &nbsp        </td><td> ". $row["complaint"]. " </td>";
    }
} else {
    echo "0 results";
}

       



?> 
<button><a href="adminview.php">Back</a></button>



</header>

</body>
</html>
