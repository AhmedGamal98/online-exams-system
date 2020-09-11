<?php
require 'db.php';

$_SESSION['name']=$_POST['user_name'];
$_SESSION['email']=$_POST['e-mail'];
$_SESSION['pass']=$_POST['password'];
$_SESSION['id']=$_POST["ID"];
$_SESSION['add']=$_POST['address'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['img']=$_POST['pic'];
$_SESSION['level']=$_POST['le'];

$name=$mysql->escape_string($_POST['user_name']);
$email=$mysql->escape_string($_POST['e-mail']);
$pass=$mysql->escape_string($_POST['password']);
$id=$mysql->escape_string($_POST['ID']);
$add=$mysql->escape_string($_POST['address']);
$phone=$mysql->escape_string($_POST['phone']);
$img=$mysql->escape_string($_POST['pic']);
$level=$mysql->escape_string($_POST['le']);

$result= $mysql->query("SELECT *FROM st_info WHERE email='$email'")or die($mysql->error());
if ($result->num_rows > 0) {
	$_SESSION['message']='user with this email already exists!';
	die;
}
else{
$sql="INSERT INTO st_info (id,name,email,password,level,phone,address,img) VALUES ('$id','$name','$email','$pass','$level','$phone','$add','$img')";
if ($mysql->query($sql)) {
	$_SESSION['logged_in']=true;
	header("location: ../home.php");
}
}
?>