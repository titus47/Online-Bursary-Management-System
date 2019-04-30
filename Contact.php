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
<table width="1106"> 
<tr bgcolor="#009933"  ><td width="700" height="30" align="left"> welcome <form id="form1" name="form1" method="post" action="">
    <label for="textfield">search </label>
    <input type="text" name="textfield" id="textfield" /> 
  </form>
  </td>
</tr><br />
<tr align="center">
<td valign="right" width="700" >
<dv>
<dv>
<h2><font color=#000000">ONLINE SPONSORSHIP MANAGEMENT (OSMS)</font></h2>
</dv>
</td>
</tr>
<tr>
 <tr>
    <td width="632" align="center"> <font size="+3">
	<a href="index.php" >&nbsp; <em>&nbsp;<span class="style1">Home  </span></em></a>
	 <span class="style1"><em>
	  <a href="About.php">&nbsp;<em>&nbsp;<span class="style1"><span class="style1"> About</a>
     <a href="Contact.php">&nbsp;<em>&nbsp;<span class="style1"><span class="style1">Contact </a>
	   
</tr>
</font></table>
<table valign="center" width="1115">
<tr>
<td width="235" valign="center" bgcolor="#FFFFFF"><div>
  <div id="main_content">
    <div>
      <h2>Our Contacts</h2>
      <p>Meru County Headquarters<br />
        P.O. Box 120-60200<br />
        MERU, Kenya.<br />
        County Secretary office Phone :0775501502 <br />
        Tel.: 0775501502<br />
        Email: <a href="mailto:merucounty@meru.go.ke?subject=Meru%20County%20Website">merucounty@meru.go.ke</a></p>
      </div>
  </div>
</div>
  </td> 
<td width="663" valign="top">  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://wordpress-themes.org" id="get-map-data">http://wordpress-themes.org</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(0.0514721,37.64560419999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(0.0514721, 37.64560419999998)});infowindow = new google.maps.InfoWindow({content:"<b>The kenya</b><br/>town<br/> meru" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></td>
<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
</tr>
</table>
 <p>&nbsp;</p>
<p>&nbsp;</p>
<div id="footer"><div>
    <ul>
    </ul>
    <div>
	    <div>
      <p>&copy;2016 </a>Developed by Muriira James | All rights reserved. </p>
<table align="center"><tr><td <hr /><img src="IMAGES/fb.PNG" width="30" height="30" /><img src="IMAGES/IG.PNG" width="30" height="30" /><img src="IMAGES/twitter.PNG" width="30" height="30" /></td></tr>

	  </td>
	  </table>
    </div>
  </div>  
</div>
</head>
<body bgcolor="#14285f">
</body>
</html>
