<?php
include("db.php");
$username=$_SESSION['uname'];
$sql=mysql_query("select * from users where username='".$username."' ");
$row=mysql_fetch_array($sql);
?>
<?php
if($_GET['del'])
{
$delete=mysql_query("delete from sport where name='".$_GET['del']."'");
if($delete>0)
{
header('location:Athlete.php');
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo @$_SESSION['uname']; ?></title>

</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="bootstrap.min.css" rel="stylesheet">
 <link href="css/stylish-portfolio.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="style.css" rel="stylesheet" type="text/css" />
<script type="js/bootstrap.min.js"></script>
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
          <li><a href="sports.php"class="active"><span>SPORTS</span></a></li>
          <li><a href="msg.php"><span>Message</span></a></li>

        </ul>
     <table width="571" height="100" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center" width="54" height="45">No</td>
        <td align="center" width="54" height="45">Photo</td>

    <td align="center" width="200">Name</td>
    <td align="center" width="171">Class</td>
    <td align="center" width="134">ACTION</td>
  </tr></div>
 <?PHP
$select=mysql_query("select * from sport where type='Athlete' ");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?><div class="table-responsive">

 <tr>
    <td align="center"><?php echo mysql_result($select,$i,"no");?></td>
        <td align="center"><img src="<?php echo mysql_result($select,$i,"image");?>" width="70" height="70" /></td>

    <td align="center"><?php echo mysql_result($select,$i,"name");?></td>
    <td align="center"><?php echo mysql_result($select,$i,"class");?></td>
    <td align="center"><a href="view12.php?edit=<?php echo mysql_result($select,$i,"name");?>">View</a>
    <td align="right"><a href="<?php $_SERVER['DOCUMENT_ROOT'];?>?del=<?php echo mysql_result($select,$i,"name");?>"><img src="images/Close.ico" width="30" height="30"/></a></td>
  </tr></center>
  <?PHP
  }
  ?>
</table></div>

  
       
      </div>
</div></div></div></div>
  
</div>
        
  </div>
  
  
              <div style="position:absolute; left:20.7%; top:26.2%;"> 
<div class="menu">
        <ul>
         
        
        </ul>
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
