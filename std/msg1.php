<?php 
include("db.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?PHP
$select=mysql_query("select * from msg where status=1 and  username='".$username."'");
$view=mysql_num_rows($select);
 for($i=0;$i<$view;$i++)
 {
 ?>

<?php echo mysql_result($select,$i,"username");?>
<br/>

       <?php echo mysql_result($select,$i,"time");?>
       <br/>

    <p style="color:#FF3333"><?php echo mysql_result($select,$i,"msg");?></p>
   
 
  <?PHP
  }
  ?>
</div>
</div>

<?php
 if($view)
{
?>
<div style="left:40.7%; top:80.2%; "> 

</div>
    <?php
	}
	
	else
	{
	?>
    <div style="position:absolute; left:40.7%; top:80.2%; "> 

</div>
<?php
	}
	?>
<body>
</body>
</html>
