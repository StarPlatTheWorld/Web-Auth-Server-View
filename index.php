<html>
<head>
<title>
Ethan McFarlane Portfolio
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Portfolio of Ethan McFarlane" "Web Design Belfast" "Web Belfast" "Ethan McFarlane Portfolio">
<meta name="keywords" content="Web Design Belfast" "Web Belfast">
<link rel="icon" type="image/x-icon" href="images/favicon.png"/>

</head>
<link href="css/myStyle.css" rel="stylesheet" type="text/css" media="all"/>
<body>


<div id="container">

<div class="horizontal-gradient">
	<ul id="nav">
<li> <a href="Contact.php" class="color-me">Contact</a>&emsp;&emsp;
<a href="Index.php" class="color-me">Home</a>&emsp;&emsp;
<a href="Blog.php" class="color-me">Blog</a>&emsp;&emsp;
<a href="portfolio.php" class="color-me">Portfolio</a>&emsp;&emsp;
<a href="store.php" class="color-me">Store</a> &emsp;&emsp;
<a href="cv.php" class="color-me">CV</a></li> </li>
		<p1>Hi I'm Ethan, a designer 
		<br>
		in the works.</p1>
		<br>
</ul>
</div>
<main class="main-content2">
	<div class="page">	
	  <div class="wrap">
		<div class="container4" style="margin-bottom:15%">	
 <center>
 &emsp;&emsp;&nbsp;<p3>Welcome to my website.</p3>
 <br>
 <br>
     &emsp;&emsp;<p2>Here you will find information about me, my portfolio and my contact information. Feel free to look around!</p2>
	 <br>
	 <br>
<!-- Creates Random Quote and Displays Below Text -->
<p18>
	<?php
$r_array=file('quotes.txt');
shuffle($r_array);
echo $mQuotePath[0];
echo $r_array[0];
		?>
</p18>	 
	 </center>
	 <br>
	 <br>
	 <center>
<script language="javascript">
        function MouseRollover(MyImage) {
        MyImage.src = "images/wave2.png";
    }
        function MouseOut(MyImage) {
        MyImage.src = "images/wave.png";
    }
</script>
<div align="center">
<!--The rollover image displays here.-->
<img src="images/wave.png" border="0px" 
width="350px" 
onMouseOver="MouseRollover(this)" 
onMouseOut="MouseOut(this)" />
</div>
	
</div>
</div>
</div>

</center>
</main>
<footer class="site-footer">
	<div class="container2">
<p4>Website was built using a variety of HTML and CSS code. &copy; Gifs are NOT owned by me and are original concepts copyrighted by Rin Kokuyo and Signal.MD.<br>
   &copy; Ethan 2019</p4>

</div>	
</footer>
</html>
</body>