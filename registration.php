<?php
require 'includes/db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style2.css">
</head>
<body>
	<form action="includes/regist.php" method="POST"  >
	<fieldset>
	<legend>Personla information</legend>
	<label>User Name : </label>
	<input type="text" name="user_name">
	<label>E-Mail : </label>
	<input type="text" name="e-mail">
	<label>Password : </label>
	<input type="password" name="password">
	<label>your ID : </label>
	<input type="text" name="ID">
	
	</fieldset>
	<fieldset>
		<legend>contact</legend>
		<label>Address : </label>
		<input type="text" name="address" >
		<label>Phone : </label>
		<input type="text" name="phone">
		<label>your profile picture : </label>
		<input type="file" name="pic" required="required">
		</fieldset>
		<fieldset>
			<legend>Your level</legend>
			<label>Choose your level:</label>
			<p>if you choose student</p>
			
			<input class="f" type="radio" name="le" value="1">Level one <br>
			<input class="f" type="radio" name="le" value="2">Level two<br>
			<input class="f" type="radio" name="le" value="3">Level three<br>
			<input class="f" type="radio" name="le" value="4">Level four<br>
			<br>
			<input class="botton" type="submit" name="Registration">
			<input class="botton" type="RESET" name="Clear!">
			
		</fieldset>
	</form>
	</body>
</html>