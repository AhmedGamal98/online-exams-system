<?php
include'exam2.php';
  
          
?>
  
          
<!DOCTYPE html>
<html>
<head>
	<title>Exam</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style5.css">

</head>
<body>
	<fieldset>
		<legend>Exam</legend>
		<div id="count-down">
			
		</div>
		<br><br><br>
		<form action="exam2.php" method="POST">
		<label>Qustion (1):-------------------</label><br>
		<input type="radio" name="q1" value="Fisrtchoice" >Fisrt choice<br>
		<input type="radio" name="q1" value="secondchoice">Second choice<br>
		<input type="radio" name="q1" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q1" value="Fourthchoice">Fourth choice<br><br><hr><br>
		<label>Qustion (2):-------------------</label><br>
		<input type="radio" name="q2" value="Fisrtchoice">Fisrt choice<br>
		<input type="radio" name="q2" value="secondchoice">Second choice<br>
		<input type="radio" name="q2" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q2" value="Fourthchoice">Fourth choice<br><br><hr><br>
		<label>Qustion (3):-------------------</label><br>
		<input type="radio" name="q3" value="Fisrtchoice">Fisrt choice<br>
		<input type="radio" name="q3" value="secondchoice">Second choice<br>
		<input type="radio" name="q3" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q3" value="Fourthchoice">Fourth choice<br><br><hr><br>
		<label>Qustion (4):-------------------</label><br>
		<input type="radio" name="q4" value="Fisrtchoice">Fisrt choice<br>
		<input type="radio" name="q4" value="secondchoice">Second choice<br>
		<input type="radio" name="q4" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q4" value="Fourthchoice">Fourth choice<br><br><hr><br>
		<label>Qustion (5):-------------------</label><br>
		<input type="radio" name="q5" value="Fisrtchoice">Fisrt choice<br>
		<input type="radio" name="q5" value="secondchoice">Second choice<br>
		<input type="radio" name="q5" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q5" value="Fourthchoice">Fourth choice<br><br><hr><br>
		<label>Qustion (6):-------------------</label><br>
		<input type="radio" name="q6" value="Fisrtchoice">Fisrt choice<br>
		<input type="radio" name="q6" value="secondchoice">Second choice<br>
		<input type="radio" name="q6" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q6" value="Fourthchoice">Fourth choice<br><br><hr><br>
		<label>Qustion (7):-------------------</label><br>
		<input type="radio" name="q7" value="Fisrtchoice">Fisrt choice<br>
		<input type="radio" name="q7" value="secondchoice">Second choice<br>
		<input type="radio" name="q7" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q7" value="Fourthchoice">Fourth choice<br><br><hr><br>
		<label>Qustion (8):-------------------</label><br>
		<input type="radio" name="q8" value="Fisrtchoice">Fisrt choice<br>
		<input type="radio" name="q8" value="secondchoice">Second choice<br>
		<input type="radio" name="q8" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q8" value="Fourthchoice">Fourth choice<br><br><hr><br>
		<label>Qustion (9):-------------------</label><br>
		<input type="radio" name="q9" value="Fisrtchoice">Fisrt choice<br>
		<input type="radio" name="q9" value="secondchoice">Second choice<br>
		<input type="radio" name="q9" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q9" value="Fourthchoice">Fourth choice<br><br><hr><br>
		<label>Qustion (10):-------------------</label><br>
		<input type="radio" name="q10" value="Fisrtchoice">Fisrt choice<br>
		<input type="radio" name="q10" value="secondchoice">Second choice<br>
		<input type="radio" name="q10" value="Thirdchoice">Third choice<br>
		<input type="radio" name="q10" value="Fourthchoice">Fourth choice<br><br>
		<input type="submit" value="submit"><br>
		<input type="RESET" value="Clear !">
           
		</form>
	</fieldset>
<script type="text/javascript">
		var seconds=2000,
		 countDiv=document.getElementById('count-down'),
		 secondPass,
		 countDown=setInterval(function (){
			"use strict";
			secondPass();
		},1000);
		function secondPass(){
			"use strict";
			var minutes = Math.floor(seconds/60),
			remSeconds =seconds%60;
			countDiv.innerHTML=minutes+":"+remSeconds; 
			if (seconds < 10) {
				remSeconds = "0" +remSeconds;
			}
			if(seconds > 0){
				seconds -= 1;
			}
			else{
				clearInterval(countDown);
				countDiv.innerHTML="Done";

			}
		}
   
	</script>
</body>
</html>