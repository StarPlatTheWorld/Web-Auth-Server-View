<?php
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header("Location: cv.php");
    exit;
}
?>

<html>
<head>
<title>
CV Ethan McFarlane
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Portfolio of Ethan McFarlane" "Belfast Introductions" "Web Introductions">
<meta name="keywords" content="Web Blogs" "Belfast Blogging">
<link rel="icon" type="image/x-icon" href="images/favicon.png"/>

</head>
<link href="css/myStyle.css" rel="stylesheet" type="text/css" media="all"/>
<body>


<div id="container">

<div class="horizontal-gradient2">
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

</div>
<main class="main-content2">
	<div class="page">	
	  <div class="wrap">
		<div class="container2">

<center>
<p10>CV</p10>
<form method="post" action="cv.php">
			<input type="image" name="submit" value="Log Out" src="images/logout.png">
	</form> </center>


<br>
<center>


<div class ="container5">
<p>(Work In Progress)</p>


<br>
<br>
</div>
</div>
</div>
</div>
</main>
<div class="site-footer">
	<div class="container2">
<p4>Website was built using a variety of php and CSS code. &copy; Gifs are NOT owned by me and are original concepts copyrighted by Rin Kokuyo and Signal.MD.<br>
   &copy;  Ethan 2019</p4>
</div>
</footer>
</html>