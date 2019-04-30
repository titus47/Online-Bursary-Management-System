<?php
session_start();

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<style type="text/css">
<!--
.style1 {color: #CCC</h3>}
-->
</style>
<head>
<title>Online_Sponsorship_Management</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">

html, body {
background-color: #CCCS;
	height: 100%;
	width:50%;
}
body {
	margin: 0;
	padding: 0;
	background-color: #CCC;
	height: 100%;
}
/* ie8 beta allocates space for the empty <a> tag! this fixes it */
/* also it doesn't work correctly in Opera and this also fixes that */
#top {
	position: absolute;
}
/* <h1>, <p> etc throws the height out, so change it to have padding instead of margins to fix it */
h1, p {
	margin: 0;
	padding: 0.3em 0;
}

#container {
	min-height: 40%; /* use min-height not height, to prevent overlap */
	margin-bottom: -36px;
	 /* = #footer height+padding+border, to prevent overlap */
}
* html #container {
	height: 300%; 
	
	/* ie6 doesn't support min-height, so need to use height */
}

#footer-spacer {
	height: 30px;
	
	color:#9FF; /* = #container margin-bottom plus any extra space required between #container and #footer */
}
#footer {
	border-top: 1px solid #000;
	height: 20%;
	width: 380%;
background-color:#CCCS;
}
* html #footer {
	color:#CCCS;
}
	

</style>
<style type="text/css">
body {
	margin-left:55px;
	margin-right:20px;
	padding:0;
	color: ;

	background-color:#CCC;
	width:50%;
	background-color: #CCC;
}
h1 {
	padding-left:px;
	font:bold 0px/1.5em "Trebuchet MS", Trebuchet, Arial, Verdana, Sans-serif;
	text-transform:uppercase;
	letter-spacing:.0.5em;
}
a {
	outline: none;
}
</style>

<style type="text/css">
/* rotator in-page placement */
    div.rotator {
	position:relative;
	height:345px;
	display:none;
}
/* rotator css */
	div.rotator ul {
	margin:0;
	padding:0;
}
	div.rotator ul li {
	float:left;
	position:absolute;
	list-style: none;
}
/* rotator image style */	
	div.rotator ul li img {
	border:0px solid #ccc;
	padding: 4px;
	background: #FFF;
}
    div.rotator ul li.show {
	z-index:500;
}
</style>

<script type="text/javascript" src="js/jquery-1.11.0"></script>

<!-- By Dylan Wagstaff, http://www.alohatechsupport.net -->
<script type="text/javascript">
function theRotator() {
	//Set the opacity of all images to 0
	$('div.rotator ul li').css({opacity: 0.0});
	
	//Get the first image and display it (gets set to full opacity)
	$('div.rotator ul li:first').css({opacity: 1.0});
		
	//Call the rotator function to run the slideshow, 6000 = change to next image after 6 seconds
	
    if ($('div.rotator ul li').length > 1) {
    setTimeout('rotate()', 6000);
}
}

function rotate() {	
	//Get the first image
	var current = ($('div.rotator ul li.show')? $('div.rotator ul li.show') : $('div.rotator ul li:first'));

    if ( current.length == 0 ) current = $('div.rotator ul li:first');

	//Get next image, when it reaches the end, rotate it back to the first image
	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.rotator ul li:first') :current.next()) : $('div.rotator ul li:first'));
	
	//Un-comment the 3 lines below to get the images in random order
	
	//var sibs = current.siblings();
    //var rndNum = Math.floor(Math.random() * sibs.length );
    //var next = $( sibs[ rndNum ] );
			

	//Set the fade in effect for the next image, the show class has higher z-index
	next.css({opacity: 0.0}).addClass('show').animate({opacity: 1.0}, 1000);

	//Hide the current image
	current.animate({opacity: 0.0}, 1000, function(){setTimeout('rotate()', 6000);}) .removeClass('show');
	
};

$(document).ready(function() {		
	//Load the slideshow
	theRotator();
	$('div.rotator').fadeIn(1000);
    $('div.rotator ul li').fadeIn(1000); // tweek for IE
});
</script>
<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
</head>
<body>
<?php
$username=$_SESSION['U_Name'];
echo "welcome<br>You are now logged in as the ".$username;

?><a href="logout.php" target=_top><button>Sign Out</button></a>
 
<table width="1106"> 

     <tr bgcolor="#009933"  ><td width="700" height="30" align="left"> welcome <form id="form1" name="form1" method="post" action="">
    
  </form>
  </td>
</tr><br />
  </form>
  </td>
</tr><br />
<tr align="center">
<td valign="right" width="700" >
<h2><font color="#000000">ONLINE SPONSORSHIP MANAGEMENT (OSMS)</font></h2>
</td>
</tr>
<tr align="right"> 
  <td valign="right" width="700" >
  <!DOCTYPE html>

 </td>
</tr>
</font></table>
<table width="1106" cellpadding="30" bgcolor="#FFFFFF" >
  <tr>
    <td width="172" height="700"  colspan="0" valign="top"><hr /><img src="IMAGES/images1.jpg" width="170" height="300" />
    
    <p align="left"> The general objectives of Online Sponsorship Management is to help the less fortunate children who are willing to learn in raising the money needed to cater  for the fee and their upkeep; to support the orphaned kids get to school and finally to reduce the paper work used during the sending of invitations for the fundraisings. </p>
     
    </td>
    <td width="500" border ="2" valign="Center" >
	<div ">
    <script type="text/javascript">
<!-->
var image1=new Image()
image1.src="Images/Images/Student8.jpg"

var image2=new Image()
image2.src="Images/Images/Students1.jpg"

var image3=new Image()
image3.src="Images/Images/students.jpg"

var image4=new Image()
image4.src="Images/Images/Student7.jpg"

//-->
</script>
</head>
<body> 
<img src="cam1.jpg" name="slide" height="400" width="500" align="right" border="0" alt="camera">
<script type="text/javascript">
<!-->
var step=1
function slideit(){
document.images.slide.src=eval("image"+step+".src")
if(step<4)
step++
else
step=1
setTimeout("slideit()", 2500)
}
slideit()
//-->
</script>
</div>


<p>
<b>WHAT DRIVES US </b>
<p> Many people in Kenya and Africa as a whole live beyond the poverty line; this means that   they hardly afford three meals day. According to Kenya Institute for Public Policy Research and Analysis (Kippra) shows that the survival rate from class one to form four is below 20% and those that survive from class one to university is 1.69%. One of the major cause for drop outs is lack of the fees and the upkeep money for some time now, many of the students have been raising the money by organizing for fundraising, this is a tedious activity since sometimes those that are targeted by the people organizing do not turn up. This leads to disappointment since most of the students fail to accomplish their mission which is to complete their education.</p>
</center></Font></br><hr>


</td>
    <td width="208" align="char" valign="top"><hr />
	<table style="background:#848484">
<td>	
<BODY bgcolor=#FFFFCC><center>
<style bgcolor=#FFFCC>

</style><table cellspacing=20>
<tr><td align="center"> <font size="+3"><a href="index.php" target=_top><button>Home</button></a></td></tr>
<tr><td align="center"> <font size="+3"><a href="add_user.php" target=_top><button>Add User</button></a></td></tr>
<tr><td align="center"> <font size="+3"><a href="donnors.php" target=_top><button>View the Donors</button></a></td></tr>
<tr><td align="center"> <font size="+3"><a href="remove_handled.php" target=_top><button>Remove User</button></a></td></tr>
<tr><td align="center"> <font size="+3"><a href="Applicants.php" target=_top><button>View the Applicants</button></a></td></tr>
	  </td>
	  </table>
	  </table>
      <p class="style2">ONLINE SPONSRSHIP MANAGEMENT SYSTEM(OSMS) </p>
      <p>       Education is a key sector for every country whether developing or developed. There is a lot of input that has to be put in place to enable every child to undergo this process, however, many children fail to undergo the process due to lack of finances either for upkeep or as the fees. ONLINE SPONSORSHIP MANAGEMENT SYSTEM(OSMS) is a web based system which will help the needy students to raise the cash either for upkeep or for fees.
</table>
 <p>&nbsp;</p>
<p>&nbsp;</p>
<div id="footer"><div>
    <ul>
    </ul>
    <div>
	    <div>
      <p>&copy;2016 </a>Developed by Muriira James | All rights reserved. </p>
<table align="center"><tr><td <hr /><img src="IMAGES/fb.PNG" width="30" height="30" /></td></tr>
<tr><td <hr /><img src="IMAGES/IG.PNG" width="30" height="30" /></td></tr>
<tr><td <hr /><img src="IMAGES/twitter.PNG" width="30" height="30" /></td></tr>
	  </td>
	  </table>
    </div>
  </div>  
</div>
</head>
<body bgcolor="#14285f">
</body>
</html>