<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header("Location: store.php");
    exit;
}
?>
<html>
<head>
<title>
Ethan's Store Page
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Portfolio of Ethan McFarlane" "Belfast Introductions" "Web Introductions">
<meta name="keywords" content="Belfast Introductions" "Web Introductions">
<link rel="icon" type="image/x-icon" href="images/favicon.png"/>

</head>
<link href="css/myStyle.css" rel="stylesheet" type="text/css" media="all"/>
<body class="body2">


<div id="container">

<div class="horizontal-gradient2">
	<ul id="nav">
		<li> <a href="Contact.php" class="color-me">Contact</a>&emsp;&emsp;
			 <a href="Index.php" class="color-me">Home</a>&emsp;&emsp;
			 <a href="Blog.php" class="color-me">Blog</a>&emsp;&emsp;
			 <a href="portfolio.php" class="color-me">Portfolio</a>&emsp;&emsp;
			 <a href="store.php" class="color-me">Store</a> &emsp;&emsp;
			 <a href="cv.php" class="color-me">CV</a>
			 </li>
		<p1>Hi I'm Ethan, a designer 
		<br>
		in the works.</p1>
		<br>
</ul>
</div>
<main class="main-content2">
	<div class="page">	
	  <div class="wrap">
		<div class="container4">

<center>
<form method="post" action="store.php">
			<input type="image" name="submit" value="Log Out" src="images/logout.png">
	</form>

<img src="images/payment.jpg" style="position:relative; max-width:50%"></img>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TE4J4LASBLUZ4">
<input type="image" src="images/buynow.png" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

	<form action="emailService.php" method="post">
	<h1 style="color: white">Subscribe For Future Updates</h1><br>
<em><font color="white">Email Address:</font></em> <input type="text" name="email"  required/><br><br>
<input type="image" name="submit" src="images/subscribe.png">


</form>
<br>
<h1 style="color: white">Unsubscribe Below</h1><br>
<form action="db12DeleteRecNow.php" method="post">
<em><font color="white">Email Address:</font></em> <input type="text" name="email"  required/><br><br>
<input type="image" name="submit" src="images/unsubscribe.png">
</form>



</div>
</div>
</div>
</div>
</center>
</main>

</body>
</html>