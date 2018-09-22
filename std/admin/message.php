<?php
include("../db.php");
$name=$_SESSION['name'];
$sql=mysql_query("select * from admin where name='".$name."' ");
$row=mysql_fetch_array($sql);
?>
<?php
if($_GET['edit'])
{
$insert=mysql_query("update msg set status=0 where no='".$_GET['edit']."'");
	}
	?>
   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
   $select=mysql_query("select * from msg where no='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
  
<title><?php echo $view['no'];?></title>
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
          <li><a href="home2.php"><span>Message</span></a></li>

        </ul>
<?Php
$name=$_SESSION['name'];
 $select=mysql_query("select * from msg where no='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>

  <div class="col-lg-5">

<ul class="list-group list-group-unbordered">

<li class="list-group-item" style="background:url(img/bg_noise.png) ">

<li class="list-group-item" style="background:url(img/bg_noise.png) ">

                  
<li class="list-group-item" style="background:url(img/bg_noise.png) ">

                 <a class="pull-right"> <?php 

echo $view['time']; ?>
</a>
<li class="list-group-item" style="background:url(img/bg_noise.png) ">

                
</a></li>

<br/>
<br/>

<div class="panel panel-primary">

   <div class="panel-heading">
   </div>
   <div class="panel-body">
    <p style="font:large"><?php echo $view['msg']; ?></p>
   </div>

</ul>

     
  
  
  
  
 
  
   </div>
</div></div></div></div></div>
    
   
<center>
  </div>
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
