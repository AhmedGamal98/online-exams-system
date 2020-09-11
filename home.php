<?php

require 'includes/log_in.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/style1.css">
	
</head>
<body>

	<div class="header">
		<p class="head">Online Examinations System</p>
	</div>
	<div class="navigation">
		<ul>
			<li><a class="nav1" href="registration.php">Registration</a></li>
			<li><a class="nav1" href="about_page.php" target="_blank">About Page</a></li>
			<li><a class="nav1" href="Contact.php" target="_blank">Contact to Admin</a></li>
		</ul>
	</div>
	<dir >
		<div class="p">
			<p class="con"> Hello Dears </p>
			<p class="con">Here you will do your exams which your Doctors in FCI asked to do you will found it easy to reach to your exams in this page and it leds you to success with best wishes.</p>
		</div>
		<div class="slideshow-container">

    <div class="mySlides">
    
    <img src="images/welcome.jpeg" id="img_wel">

    </div>

    <div class="mySlides">
    <img src="images/faculty.jpg" id="img_wel">
    </div>

    <div class="mySlides">
    <img src="images/1.jpg" id="img_wel">

    </div>
    <div class="mySlides">
    <img src="images/2.jpg" id="img_wel">

    </div>
    <div class="mySlides">
    <img src="images/3.jpg" id="img_wel">

    </div>
    <div class="mySlides">
    <img src="images/4.jpg" id="img_wel">

    </div>
    <div class="mySlides">
    <img src="images/5.jpg" id="img_wel">

    </div>
    <div class="mySlides">
    <img src="images/6.jpeg" id="img_wel">

    </div>
    <div class="mySlides">
    <img src="images/7.jpg" id="img_wel">

    </div>
    </div>
    <br>

    <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span>
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span>
    <span class="dot"></span>
    
    </div>
		<fieldset>
			<legend>Log in</legend>
			<form  action="includes/log_in.php"  method="POST" onsubmit="return validate()">
				
			<label>E-mail: </label>
			<input id="login" type="text" name="email" placeholder="Enter your E-mail">
			<div id="email_erorr" class="val_erorr"></div>
			<label class="f"></label>
			<label>Password: </label>
			<input id="password" type="password" name="password" placeholder="Enter your Password">
			<div id="password_erorr" class="val_erorr"></div>
			<br>
			<input class="s" id="s" type="submit" name="Log_in" >
			
			<input class="s" type="RESET" value="CLEAN!">
			</form>
		</fieldset>
	</div>
	<br>
	<div class="footer">
		<p>Copyright &copy; 2018 All Right Reserved To GBG &reg; Team</p>
	</div>

	<script type="text/javascript">

		 var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 900); // Change image every 2 seconds
    }

	</script>	
	<script type="text/javascript">
	
			//GETTING ALL INPUT TEXT OBJECTS
			var login=document.forms["vform"]["email"];
			var pass=document.forms["vform"]["password"];
			//GETTING ALL ERORR DISPLAY OBJECTS
			var name_erorr=document.getElementsById("email_erorr");
			var pass_erorr=document.getElementsById("password_erorr");
			//SETTING ALL EVENT LISTENERS
			login.addEventListener("blur", nameVerify,true);
			pass.addEventListener("blur", passVerify,true);
			//VALIDATION FUNCTION
			function validate(){
				if(login.value==""){
					login.style.border="1px solid red";
					email_erorr.textContent ="Email is required";
					login.focus();
					return false;
				}
					if(pass.value==""){
					pass.style.border="1px solid red";
					password_erorr.textContent ="password is required";
					pass.focus();
					return false;	
			}
		}


		function emailVerify(){
			if(login.value!=""){
				email_erorr.innerHTML="";
				return true;
			}
		}	
			function passVerify(){
			if(pass.value!=""){
				password_erorr.innerHTML="";
				return true;
			}
		}	
	</script>
</body>
</html>