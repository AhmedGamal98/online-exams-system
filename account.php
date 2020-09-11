<?php
require 'includes/log_in.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style3.css">
</head>
<body>
	<div class="header">
		<p class="head">Online Examinations System</p>
	</div>
	<div class="navigation">
		<ul>
			<li><a class="nav1" href="" target="_blanck">Edit your account</a></li>
			
			<li><a class="nav1" href="contact.html" target="_blanck">Contact to Admin</a></li>
		</ul>
	</div>
	<div class="left">
		<?php
		$i="img1";
		//$r="images/"
		echo"
		<img class='".$i."' src='images/".$_SESSION['u_img']."'>
		<br>";
		 info();
		  ?>
		<hr><br>
		<label class="p">My Accounts : </label><br><br>
		<ul>
			<li><img class="img3" src="images/facebook.png"><a class="nav2" href="www.facebook.com" target="_blanck">FaceBook</a></li><br><br>
			<li><img class="img2" src="images/insta.jpeg"><a class="nav2" href="www.instagram.com" target="_blanck">Instagram</a></li><br><br>
			<li><img class="img2" src="images/gmail.jpeg"><a class="nav2" href="www.gmail.com" target="_blanck">Gmail </a></li><br><br>
			<li><img class="img2" src="images/twitter.jpeg"><a class="nav2" href="www.twitter.com" target="_blanck">Twitter</a></li><br>
		</ul>
		<br><br><hr><br>
		<label class="p">Courses : </label>
		<br>
		<label class="nav3">HTML</label><br>
		<label class="nav3">CSS </label><br>
		<label class="nav3">JavaScript</label><br>
		<label class="nav3">JQuery</label><br>
		<label class="nav3">PHP</label><br>
		<label class="nav3">SQL</label>
		<br>
		
		</div>
		<div class="con">
		<p>* Your first tearm Courses : </p>
		<ul>
			<li><a class="nav4" href="exam.php" target="_blanck">MAth(3)</a></li>
			<li><a class="nav4" href="exam.php" target="_blanck">Data Structure</a></li>
			<li><a class="nav4" href="exam.php" target="_blanck">IS</a></li>
			<li><a class="nav4" href="exam.php" target="_blanck">STATICS</a></li>
		</ul>
		<hr>
		<p>* Your second tearm Courses : </p>
		<ul>
			<li><a class="nav4" href="exam.php" target="_blanck">Math(4)</a></li>
			<li><a class="nav4" href="exam.php" target="_blanck">OR</a></li>
			<li><a class="nav4" href="exam.php" target="_blanck">File Structure</a></li>
			<li><a class="nav4" href="exam.php" target="_blanck">OOP using JAVA</a></li>
		</ul>
		<hr>
		<p>* Your Schedules: </p>
		<table>
			<tr>
				<td>Course</td>
				<td>MAth(1)</td>
				<td>Physics</td>
				<td>Electronics</td>
				<td>Cs</td>
				<td>Math(2)</td>
				<td>Waves</td>
				<td>Is</td>
			</tr>
			<tr>
				<td>Time</td>
				<td>10:1</td>
				<td>9:11</td>
				<td>8:10</td>
				<td>9:12</td>
				<td>12:2</td>
				<td>1:3</td>
				<td>12:1</td>
			</tr>
			<tr>
				<td>Instructors</td>
				<td>Dr/Mina</td>
				<td>Dr/Taqwa</td>
				<td>Dr/Shimaa</td>
				<td>Dr/Asmaa</td>
				<td>Dr/Hamada</td>
				<td>Dr/Rehab</td>
				<td>Dr/Nahed</td>
			</tr>
			<tr>
				<td>Hall</td>
				<td>A2</td>
				<td>A3</td>
				<td>B1</td>
				<td>C3</td>
				<td>D1</td>
				<td>D2</td>
				<td>C1</td>
			</tr>
		</table>
	</div>
	<dir class="footer">
		<p>Copyright &copy; 2018 All Right Reserved To GBG &reg; Team</p>
	</dir>
</body>
</html>