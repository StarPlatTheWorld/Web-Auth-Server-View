
<html>
<head>
<title>
Ethan's Login Page
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
			 <a href="cv.php" class="color-me">CV</a></li>
		<p1>Hi I'm Ethan, a designer 
		<br>
		in the works.</p1>
		<br>
</ul>
</div>
<main class="main-content2" style="padding-bottom:400px">
	<div class="page">	
	  <div class="wrap">
		<div class="container3" style="margin-bottom:120px;margin-top:0px;">

<?php
include("db01connect.php");
$con=mysql_connect($servername, $username, $password, $dbname) or die(mysql_error());
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("$dbname", $con);
  
  $sql="INSERT INTO UserDetails (username, password) VALUE ('$_POST[username]','$_POST[password]')";
  
  if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);


?>
<center>
<p19 style="color:#fffffc; font-size:16px; font-style: Karla, Helvitica, sans-serif">Account Created - Click Below To Login</p19><br>
<form method="post" action="CV.php">
			<input type="submit" name="submit" value="Log In Here">
	</form> </center>
<br>
<br>
</div>
</div>
</div>
</div>
</center>
</main>
<div class="site-footer2">
	<div class="container2">
<p4>Website was built using a variety of HTML and CSS code. &copy; Gifs are NOT owned by me and are original concepts copyrighted by Rin Kokuyo and Signal.MD.<br>
    &copy; Ethan 2019</p4>
</div>
</div>
</body>
</html>