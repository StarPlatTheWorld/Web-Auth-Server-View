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


<h1 style="color:white"> You have successfully subscribed! Click below to go back.</h1>
<br>

<form action="actualStore.php" method="post">
<input type="image" name="submit" src="images/submit.png">
</form>



</div>
</div>
</div>
</div>
</center>
</main>

</body>
</html>