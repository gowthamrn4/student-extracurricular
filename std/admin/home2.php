<?php
include("../db.php");
$name=$_SESSION['name'];
$sql=mysql_query("select * from admin where name='".$name."' ");
$row=mysql_fetch_array($sql);
if($button)
{
$second="../upload/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into users(username,password,name,email,phone,image)values('$username','$password','$name','$email','$phone','$second')");
}
if($insert)
{
echo"Add Successfully";
}
else
{
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo @$_SESSION['name']; ?></title>

</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="../bootstrap.min.css" rel="stylesheet">
 <link href="../css/stylish-portfolio.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="../js/bootstrap.min.js"></script>
</head>
<body background="bg_noise.png">
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><span>STUDENT </span>EXTRA<br/><small>CURRICULAR ACTIVITIES MANAGEMENT SYSTEM </small></h1>
      </div>
      <div class="menu">
        <ul>
          <li><a href="../Logout.php"class="active"><span>Logout</span></a></li>

          <li><a href="about1.php" class="active"><span>About</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
 <br/>
 <br/> <br/>
 <br/>
     <div class="header">
    <div class="header_resize">
      <div class="logo">
         <div class="menu">
        <ul>
          <li><a href="home2.php"><span>Home</span></a></li>
          <li><a href="view.php"><span>NCC</span></a></li>
          <li><a href="nss.php"><span>NSS</span></a></li>
          <li><a href="sport.php"><span>SPORTS</span></a></li>
          <li><a href="msg.php"><span>Message</span></a></li>

        </ul>
        <h1><span>ADD</span> USERS</h1>
        <table width="500" height="20">
  <tr>
    <td width="194">User ID</td>
    <td width="294"><form id="form1" enctype="multipart/form-data" name="form1" method="post" action="">
      <input type="text" name="username" id="textfield" placeholder="UserID" required  size="20"/>
   
    </td>
  </tr>
  
  <tr>
    <td>Password</td>
    <td>
      <input type="text" name="password" id="textfield2" placeholder="Password" required size="20" />
   
    </td>
  </tr>
<td>Name</td>
    <td>
      <input type="text" name="name" id="textfield2" placeholder="Name" required size="20" />
   
    </td>
  </tr>
  <td>Email ID</td>
    <td>
      <input type="text" name="email" id="textfield2" placeholder="Email ID" required size="20" />
   
    </td>
  </tr>
  <td>Phone NO</td>
    <td>
      <input type="text" name="phone" id="textfield2" placeholder="phone" required size="20" />
   
    </td>
  </tr>
  <td>Photo</td>
  <td>  <input type="file" name="image" id="fileField" />
</td>
</tr>
  <tr>
    <td>&nbsp;</td>
    
    <td>
      <input type="submit" name="button" id="button" value="ADD" class="btn btn.bg-navy" />
    </form>
    </td>
  </tr>
</table>
      </div>
</div></div></div></div></div>
    
   <div class="headert_text_resize"> 
      <div class="textarea">
     <div class="container">
<center>
  <section name="#log">

    </section></div>
</div>
        
  </div>
  
  
  
  
  
  
  
  
  
  
  
  <div class="footer">
    <div class="footer_resize">
  
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
</div>
</body>
</html>
