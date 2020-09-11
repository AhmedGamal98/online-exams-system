<?php
require 'exam2.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reaction</title>
	<style type="text/css">
		body{
	background-color:#333;
}
.contaner,.res{
	background-color:white;
	width: 500px;
	height: 200px;
	border-radius: 20px;

	margin:  auto;
font-size: 20px;
	font-family: sans-serif;
	padding: 7px;	
}
.i{
	margin-top: 8px;
	margin-left: 10px;
	margin-right: 10px;
	display:inline-block;
	background-color:red;
	width: 80px;
	height: 60px;
	border-radius: 30px;
	position: relative;
}

img{
	position: absolute;
	width: 80px;
	height: 60px;
	border-radius: 30px;
}
img:hover{
	transform: scale3d(2 , 2 ,5)rotatey(50deg);
}
label{
	margin-top: 7px;
	margin-bottom: 10px;
}
button{
	font-size: 25px;
	margin-left: 210px;
	color: white;
	background-color: #444;
}
	</style>



</head>
<body>
<div class="res">
	<label>
		your result is:<br>
		<?php echo $_SESSION['counter'];?> 
	</label>
</div>	
<form action="account.php">
<div class="contaner">

	<label>your react of the exam:</label><br><br>
	<div class="i"><img src="images/imoj1.jpeg"></div>
	<div class="i"><img src="images/imoj3.jpeg"></div>
	<div class="i"><img src="images/imoj2.jpeg"></div>
	<div class="i"><img src="images/imoj4.png"></div>
	<br>
	<br>
	<button>OK</button>
</div>
</form>
</body>
</html>