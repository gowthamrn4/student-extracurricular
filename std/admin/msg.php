<?php
include("../db.php");
$name=$_SESSION['name'];
$sql=mysql_query("select * from admin where name='".$name."' ");
$row=mysql_fetch_array($sql);
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
          <li><a href="home2.php"><span>Message</span></a></li>

        </ul>
        <?php
	include("db.php");
        $status=1;
		  	$time = date("j n   Y, \a\\t g.i a", time());
			if($button)
		  {
		  $insert=mysql_query("insert into news(no,username,news,time,status)values('$no','$username','$news','$time','$status')");
		  }
            ?>    <div class="col-md-6">

<li class="list-group-item">
  <form id="form5" name="form5" method="post" action="">
  
      <input type="hidden" name="username" id="userid" value="<?php echo $row['username']; ?>" placeholder="UserID" required  class="form-control"/>
         
    
           <input type="text" name="news" id="msg" value="" placeholder="Message.........." required  class="form-control"/>

      <input type="hidden" name="time" id="time" value="<?php echo $time;?>" placeholder="UserID" required  class="form-control"/>
    

      <input type="submit" name="button" id="button" value="Submit" class="btn btn.bg-navy" />
    </form>
<?php 
if($insert)
{
echo"Sent........";
}
else
{
echo"Error";
}
?>

     
  
  
  
  
  <?php
$select=mysql_query("select * from msg where status=1 ");
   $view=mysql_num_rows($select);
   $view1=$view+$count+1;
   for($i=0;$i<$view;$i++)
   ?>
      <li class="active"><a style="color:#666666" href="Message1.php"><span data-toggle="tooltip" title="3 New Messages" style="background-color:#0099FF" class="badge bg-green"><?php echo $view;?> </span>Message</a></li>

   <li ><a style="color:#666666" href="notification.php">Older Message</a></li>
  
   <li><a style="color:#666666" href="logout.php">Log Out</a></li>
</ul>

   </div>
<table class="table table-hover">

<table width="571" height="100" border="2" cellpadding="0" cellspacing="0">
  <tr>
    <td width="54" height="45" align="center">No</td>
        <td width="54" height="45" align="center">Time</td>

    <td width="200" align="center">User Name</td>
        <td width="200" align="center">Action</td>

  </tr></div>
 <?PHP
$select=mysql_query("select * from msg where status=1 ");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?>
 <div class="table-responsive">

 <tr>
    <td align="center"><?php echo mysql_result($select,$i,"no");?></td>
        <td align="center"><?php echo mysql_result($select,$i,"time");?></td>

    <td align="center"><?php echo mysql_result($select,$i,"username");?></td>
    <td align="center"><a href="message.php?edit=<?php echo mysql_result($select,$i,"no");?>">View</a>
  </tr></center>
  <?PHP
  }
  ?>
</table></div></div></div>
</div>
</div>

<?php
 if($view)
{
?>
<div style="left:40.7%; top:80.2%; "> 

	     <div class="alert alert-success" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>You Have New  <?php echo $count;?>Message</p></div>
</div>
    <?php
	}
	
	else
	{
	?>
    <div style="position:absolute; left:40.7%; top:80.2%; "> 

	     <div class=" alert  alert-danger" ><a href="#" class="close" data-dismiss="alert" aria-label="close">x</a> <p>You Have No	New Message</p></div>
</div>
<?php
	}
	?>
  
  
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
