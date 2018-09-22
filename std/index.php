<?php
include("db.php");
if(isset($_POST['button']))
{
$file=mysql_query(" SELECT * FROM users WHERE username='$username' and password='$password'");
		  $num=mysql_num_rows($file);
		  
		  if($num>0)
		{
$_SESSION['uname']=mysql_result($file,0,"username");

		header("Location:home.php");	
			}
		{
$file1=mysql_query(" SELECT * FROM admin WHERE username='$username' and password='$password' ");

		  $num=mysql_num_rows($file1);
		  if($num>0)
  {
$_SESSION['name']=mysql_result($file1,0,"name");
mysql_query("update show set status='online' where username='$username' and password='$password' ");

   header("location:admin/home2.php");
   }	
			
 else
   
			{
			
			
}
}	
}		
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>STUDENT EXTRA-CURRICULAR ACTIVITIES MANAGEMENT SYSTEM

</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="bootstrap.min.css" rel="stylesheet">
 <link href="css/stylish-portfolio.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all">
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body background="images/bg_noise.png">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><span>STUDENT </span>EXTRA<br/><small>CURRICULAR ACTIVITIES MANAGEMENT SYSTEM </small></h1>
      </div>
      <div class="menu">
        <ul>
          <li><a href="index.php" class="active"><span>Index</span></a></li>
                    <li><a href="reg.php"><span>Register</span></a></li>

          <li><a href="about.php"><span>About</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
 
    
    
    
    <script type="text/javascript">
var timer = null

function stop()
{
clearTimeout(timer)
}

function start()
{
var time = new Date()
var hours = time.getHours()
var minutes = time.getMinutes()
minutes=((minutes < 10) ? "0" : "") + minutes
var seconds = time.getSeconds()
seconds=((seconds < 10) ? "0" : "") + seconds
var clock = hours + ":" + minutes + ":" + seconds
document.forms[0].display.value = clock
timer = setTimeout("start()",1000)
}
</script>


   
    
    
    <div class="headert_text_resize"> 
      <div class="textarea">
     <div class="container">
<center>
  <section name="#log">
<table width="500" height="141">
  <tr>
    <td width="194">User ID</td>
    <td width="294"><form id="form1" name="form1" method="post" action="">
      <input type="text" name="username" id="textfield" placeholder="UserID" required  class="form-control"/>
   
    </td>
  </tr>
  <td>&nbsp;</td>
    <td>&nbsp;</td>
  <tr>
    <td>Password</td>
    <td>
      <input type="password" name="password" id="textfield2" placeholder="Password" required  class="form-control" />
   
    </td>
  </tr>
      <td>&nbsp;</td>

  <tr>
    <td>&nbsp;</td>
    
    <td>
      <input type="submit" name="button" id="button" value="Login" class="btn btn.bg-navy" />
    </form>
    </td>
  </tr>
</table>
    </section></div>
</div>
        
  </div>
  
  
  
  
  
  
  
  
  
  
  
  <div class="footer">
    <div class="footer_resize">
      <p class="lf"> <a href="#"></a></p>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>
