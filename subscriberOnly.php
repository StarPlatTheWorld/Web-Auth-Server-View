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
		<div class="container1">
<center>
<form method="post" action="store.php">
			<input type="image" name="submit" value="Log Out" src="images/logout.png">
	</form>
	<h1 style="color:white"> Free Subscriber Images Below </h1>
	<div class="row">
  <div class="column">
  <a href="images/image1.jpg" download>
    <img src="images/image1.jpg" alt="nature" style="width:50%"></a>
                <br><br>

   </div>
  <div class="column">
  <a href="images/image2.jpg" download>
    <img src="images/image2.jpg" alt="firework" style="width:50%"></a>
                <br><br>
                
                  </div>   
<div class="column">
<a href="images/image3.jpg" download>
   <img src="images/image3.jpg" alt="coastal" style="width:50%"></a>
   <br><br>
                
   </div>
   </div>
</center>


</div>
</div>
</div>
</div>

</main>
<div class="site-footer2">
	<div class="container2">
<p4>Website was built using a variety of HTML and CSS code. &copy; Gifs are NOT owned by me and are original concepts copyrighted by Rin Kokuyo and Signal.MD.<br>
    &copy; Ethan 2019</p4>
</div>
</div>
</body>
</html>