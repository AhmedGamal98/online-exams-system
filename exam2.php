<?php
session_start();
$_SESSION['counter']=0;
if(isset($_POST['q1']))
{
    $qu1=$_POST['q1'];
}
else
{
    $qu1=NULL;
}
if($qu1!=NULL)
{
    
    if($qu1=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
}
if(isset($_POST['q2']))
{
    $qu2=$_POST['q2'];
}
else
{
    $qu2=NULL;
}
if($qu2!=NULL)
{
    
    if($qu2=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
}
if(isset($_POST['q3']))
{
    $qu3=$_POST['q3'];
}
else
{
    $qu3=NULL;
}
if($qu3!=NULL)
{
    
    if($qu3=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
}
if(isset($_POST['q4']))
{
    $qu4=$_POST['q4'];
}
else
{
    $qu4=NULL;
}
if($qu4!=NULL)
{
    
    if($qu4=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
}
if(isset($_POST['q5']))
{
    $qu5=$_POST['q5'];
}
else
{
    $qu5=NULL;
}
if($qu5!=NULL)
{
    
    if($qu5=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
}
if(isset($_POST['q6']))
{
    $qu6=$_POST['q6'];
}
else
{
    $qu6=NULL;
}
if($qu6!=NULL)
{
    
    if($qu6=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
}
if(isset($_POST['q7']))
{
    $qu7=$_POST['q7'];
}
else
{
    $qu7=NULL;
}
if($qu7!=NULL)
{
    
    if($qu7=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
}
if(isset($_POST['q8']))
{
    $qu8=$_POST['q8'];
}
else
{
    $qu8=NULL;
}
if($qu8!=NULL)
{
    
    if($qu8=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
}
if(isset($_POST['q9']))
{
    $qu9=$_POST['q9'];
}
else
{
    $qu9=NULL;
}
if($qu9!=NULL)
{
    
    if($qu9=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
}
if(isset($_POST['q10']))
{
    $qu10=$_POST['q10'];
}
else
{
    $qu10=NULL;
}
if($qu10!=NULL)
{
    
    if($qu10=="Fisrtchoice")
    {
        $_SESSION['counter']++;
    }
    
}
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