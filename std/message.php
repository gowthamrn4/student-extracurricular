<?php
include("db.php");
$username=$_SESSION['uname'];
$sql=mysql_query("select * from users where username='".$username."' ");
$row=mysql_fetch_array($sql);
?>
<?php
if($_GET['edit'])
{
$insert=mysql_query("update news set status=0 where no='".$_GET['edit']."'");
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
   $select=mysql_query("select * from news where no='".$_GET['edit']."'");
   $view=mysql_fetch_array($select);
?>
  
<title><?php echo $view['no'];?></title>
</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="bootstrap.min.css" rel="stylesheet">
 <link href="css/stylish-portfolio.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="style.css" rel="stylesheet" type="text/css" />
<script type="js/bootstrap.min.js"></script>
</head>
<body >
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><span>STUDENT </span>EXTRA<br/><small>CURRICULAR ACTIVITIES MANAGEMENT SYSTEM </small></h1>
      </div>
      <div class="menu">
        <ul>
          <li><a href="Logout.php"class="active"><span>Logout</span></a></li>

          <li><a href="about1.php" class="active"><span>About</span></a></li>
        </ul>
       <div style="position:absolute; left:89.7%; top:3.2%;"> 

        <img class="img-circle" src="<?php 

echo $row['image']; ?>" alt="<?php echo $row['name'];?>" width="100" height="100" style="border-top-color:#FF0000">
      </div></div>
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
          <li ><a href="home.php"><span>Home</span></a></li>
          <li><a href="ncc.php" ><span>NCC</span></a></li>
          <li><a href="nss.php"><span>NSS</span></a></li>
          <li><a href="sports.php" ><span>SPORTS</span></a></li>
          <li><a href="msg.php" class="active"><span>Message</span></a></li>

        </ul>
       
       
      <?Php
$name=$_SESSION['name'];
 $select=mysql_query("select * from news where no='".$_GET['edit']."'");
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
    <p style="font:large"><?php echo $view['news']; ?></p>
   </div>

</ul>
   
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
