<?php
session_start();

$host="localhost";
$user="root";
$pass="";
$db="online_examination_system";
$con =mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect_errno($con)) echo "failed".mysqli_connect_errno($con);
if (isset($_POST['Log_in'])) {
	//print_r($_POST); 
	//$email=mysqli_escape_string($_POST['email']);
	//$pass=mysqli_escape_string($_POST['password']); 
	$email=$_POST['email'];
    $password=$_POST['password'];
	$result =mysqli_query($con,"SELECT * FROM st_info WHERE email='$email' AND password='$password'");
	$res=mysqli_num_rows($result);
	if ($res > 0) {
		if ($row = mysqli_fetch_array($result)) {
			header("location: ../account.php");
			$_SESSION['u_id']=$row['id'];
			$_SESSION['u_name']=$row['name'];
			$_SESSION['u_email']=$row['email'];
			$_SESSION['u_password']=$row['password'];
			$_SESSION['u_level']=$row['level'];
			$_SESSION['u_phone']=$row['phone'];
			$_SESSION['u_address']=$row['address'];
			$_SESSION['u_img']=$row['img'];
			
			
			
			//echo $_SESSION['u_id'];
			}
			
			}
			else{
				echo "account not found";
				die();
				
			}
		}	
		
		function info(){
			
		echo"
			
			<label>ID : ".$_SESSION['u_id']."</label><br>
		<label>Name : ".$_SESSION['u_name']."</label><br>

		
		<label>Level : ".$_SESSION['u_level']."</label><br>
		<label>Phone : ".$_SESSION['u_phone']."</label><br>
		<label>Address : ".$_SESSION['u_address']."</label><br><br>";
		}
	
?>
