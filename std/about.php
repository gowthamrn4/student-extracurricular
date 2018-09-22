
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
          <li><a href="index.php"><span>Index</span></a></li>
                    <li><a href="reg.php"><span>Register</span></a></li>

          <li><a href="about.php" class="active"><span>About</span></a></li>
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

<script type="text/javascript" >
var  d=new Date()
var weekday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
var monthname=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec")
document.write(weekday[d.getDay()] + " ")
document.write(d.getDate() + ". ")
document.write(monthname[d.getMonth()] + " ")
document.write(d.getFullYear())

</script>
<div style=""
<form>
<br/>
<br/>
</form></font>
  <div style="position:absolute;  top:37.2%; left:30%"; style="color:#CC6633"> 

<script type="text/javascript">

/***********************************************
* Fading Scroller-  Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
var inf=["0"];

var delay = 4000; //set delay between message change (in miliseconds)
var maxsteps=30; // number of steps to take to change from start color to endcolor
var stepdelay=40; // time in miliseconds of a single step
//**Note: maxsteps*stepdelay will be total time in miliseconds of fading effect
var startcolor= new Array(255,255,255); // start color (red, green, blue)
var endcolor=new Array(0,0,0); // end color (red, green, blue)

var fcontent=new Array();
begintag='<div style="font: normal 16px Arial; padding: 5px;text-align:center;">'; //set opening tag, such as font declarations
fcontent[0]="<b><i>Hostel Management System<i></i></b><br><br>Do you know about its greatness<br><br>To computerize the entire  conventional way of documentation which was earlier used to be done by the social Welfare officers who used to enter the data manually involving the risk of bookkeeping activities with some difficulty and risk of errors we with the help of AO of Nalgonda has under taken this project to computerize the activities related to the hostels in Nalgonda District and the strudents detials under these hostels,it also include the stockmanagement in these hostels monthly wise and yearly wise.We a batch of 5 members have undertaken this project...";
fcontent[1]="<b>Activities include:</b><br><br>providing a graceful environment to the Social Welfare officer in the district <br>Offering reliability and flexibility to hostel authorities and government social welfare officers";
fcontent[2]="IT for People Quality Training Innovative Ideas<br>Institute for Electronic Governance as a <b>'not for profit' Institute.</b>";
closetag='</div>';

var fwidth='500px'; //set scroller width
var fheight='250px'; //set scroller height

var fadelinks=1;  //should links inside scroller content also fade like text? 0 for no, 1 for yes.

///No need to edit below this line/////////////////


var ie4=document.all&&!document.getElementById;
var DOM2=document.getElementById;
var faderdelay=0;
var index=0;


/*Rafael Raposo edited function*/
//function to change content
function changecontent(){
//alert(inf[0]);
//alert("hai");
  if (index>=fcontent.length)
    index=0
  if (DOM2){
    document.getElementById("fscroller").style.color="rgb("+startcolor[0]+", "+startcolor[1]+", "+startcolor[2]+")"
    document.getElementById("fscroller").innerHTML=begintag+fcontent[index]+closetag
    if (fadelinks)
      linkcolorchange(1);
    colorfade(1, 15);
  }
  else if (ie4)
    document.all.fscroller.innerHTML=begintag+fcontent[index]+closetag;
  index++
}

// colorfade() partially by Marcio Galli for Netscape Communications.  ////////////
// Modified by Dynamicdrive.com

function linkcolorchange(step){
  var obj=document.getElementById("fscroller").getElementsByTagName("A");
  if (obj.length>0){
    for (i=0;i<obj.length;i++)
      obj[i].style.color=getstepcolor(step);
  }
}

/*Rafael Raposo edited function*/
var fadecounter;
function colorfade(step) {
  if(step<=maxsteps) {	
    document.getElementById("fscroller").style.color=getstepcolor(step);
    if (fadelinks)
      linkcolorchange(step);
    step++;
    fadecounter=setTimeout("colorfade("+step+")",stepdelay);
  }else{
    clearTimeout(fadecounter);
    document.getElementById("fscroller").style.color="rgb("+endcolor[0]+", "+endcolor[1]+", "+endcolor[2]+")";
    setTimeout("changecontent()", delay);
	
  }   
}

/*Rafael Raposo's new function*/
function getstepcolor(step) {
  var diff
  var newcolor=new Array(3);
  for(var i=0;i<3;i++) {
    diff = (startcolor[i]-endcolor[i]);
    if(diff > 0) {
      newcolor[i] = startcolor[i]-(Math.round((diff/maxsteps))*step);
    } else {
      newcolor[i] = startcolor[i]+(Math.round((Math.abs(diff)/maxsteps))*step);
    }
  }
  return ("rgb(" + newcolor[0] + ", " + newcolor[1] + ", " + newcolor[2] + ")");
}

if (ie4||DOM2)
  document.write('<div id="fscroller" style="border:0px solid black;width:'+fwidth+';height:'+fheight+'"></div>');

if (window.addEventListener)
window.addEventListener("load", changecontent, false)
else if (window.attachEvent)
window.attachEvent("onload", changecontent)
else if (document.getElementById)
window.onload=changecontent

</script>
    </div>
    
    
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
