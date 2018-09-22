<?php
include("db.php");
$username=$_SESSION['uname'];
$sql=mysql_query("select * from users where username='".$username."' ");
$row=mysql_fetch_array($sql);
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
          <li><a href="ncc.php" class="active"><span>NCC</span></a></li>
          <li><a href="nss.php"><span>NSS</span></a></li>
          <li><a href="sports.php"><span>SPORTS</span></a></li>
          <li><a href="msg.php"><span>Message</span></a></li>

        </ul>
     <?php
if($button)
{
$second="upload/".$_FILES['image']['name'];
if(move_uploaded_file($_FILES['image']['tmp_name'],$second)){
}
$insert=mysql_query("insert into ncc(no,name,rollno,image,class,email,phone,joind,address)values('$no','$name','$rollno','$second','$class','$email','$phone','$joind','$address')");
}
if($insert)
{
echo"Add Successfully";
}
else
{
echo"error";
}
?>  
       
<table width="500" height="20">
  <tr>
    <td width="194">Name</td>
    <td width="294"><form id="form1" enctype="multipart/form-data" name="form1" method="post" action="">
      <input type="text" name="name" id="textfield" placeholder="UserID" required  size="20" class="form-control"/>
   
    </td>
  </tr>
  
  <tr>
    <td>Roll No</td>
    <td>
      <input type="text" name="rollno" id="textfield2" placeholder="Password" required size="20" class="form-control"/>
   
    </td>
  </tr>
  <td>Photo</td>
  <td>  <input type="file" name="image" id="fileField" class="form-control"/>
</td>
</tr>
<td>class</td>
    <td>
<select name="class" class="form-control">
<option>Bsc Cs 1st Year</option>
<option>Bsc Cs 2nd Year</option>   
<option>Bsc Cs 3rd Year</option> 
<option>Bsc Chem 1st Year</option>   
<option>Bsc Chem 2nd Year</option>   
<option>Bsc Chem 3rd Year</option>  
<option>Bsc Maths 1st Year</option>
<option>Bsc Maths 2nd Year</option>   
<option>Bsc Maths 3rd Year</option> 
<option>Bsc IT 1st Year</option>   
<option>Bsc IT 2nd Year</option>   
<option>Bsc IT 3rd Year</option>    
 <option>BA Histroy 1st Year</option>    
  <option>BA Histroy 2nd Year</option>    
 <option>BA Histroy 3rd Year</option>    
<option>BA English 1st Year</option>    
  <option>BA English 2nd Year</option>    
 <option>BA English 3rd Year</option>  
  <option>Bcom 1st Year</option>    
  <option>Bcom English 2nd Year</option>    
 <option>Bcom English 3rd Year</option>   
    </td>
  </tr>
  <td>Email ID</td>
    <td>
      <input type="text" name="email" id="textfield2" placeholder="Email ID" required size="20" class="form-control"/>
   
    </td>
  </tr>
  <td>Phone NO</td>
    <td>
      <input type="text" name="phone" id="textfield2" placeholder="phone" required size="20" class="form-control"/>
   
    </td>
  </tr>
   <td>Join Date</td>
    <td>
      <input type="text" name="joind" id="textfield2" placeholder="phone" required size="20" class="form-control"/>
   
    </td>
  </tr>
  <td>Address</td>
    <td>
<textarea name="address" cols="17" rows="4" class="form-control"></textarea>   
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
  
</div>
        
  </div>
  
  
              <div style="position:absolute; left:20.7%; top:26.2%;"> 
<div class="menu">
        <ul>
          <li><a href="view.php" class="active"><span>View</span></a></li>
        
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
