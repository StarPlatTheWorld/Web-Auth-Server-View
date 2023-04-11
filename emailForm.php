<html>
<head>
<title>
Contact Ethan Via Email
</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Portfolio of Ethan McFarlane" "Web Social Media" "Contact Belfast">
	<meta name="keywords" content="Web Social Media" "Contact Belfast">
	<link rel="icon" type="image/x-icon" href="images/favicon.png"/>

</head>
<link href="css/myStyle.css" rel="stylesheet" type="text/css" media="all"/>
<body>





<div id="container">

	<div class="horizontal-gradient4">

		<ul id="nav">

<li> <a href="Contact.php" class="color-me">Contact</a>&emsp;&emsp;
	 <a href="Index.php" class="color-me">Home</a>&emsp;&emsp;
	 <a href="Blog.php" class="color-me">Blog</a>&emsp;&emsp;
	 <a href="portfolio.php" class="color-me">Portfolio</a>&emsp;&emsp;
	 <a href="cv.php" class="color-me">CV</a>
</li>
<p1>Hi I'm Ethan, a designer 
 <br>
in the works.</p1>
 <br>
 </ul>
 </div>

 
<main class="main-content">
	<div class="page">	
	  <div class="wrap">
		<div class="container2">
			
<center>
<p2>Click submit after filling in this form to send me an email</p2>

<p style="color:white"><span class="error">* required field</span></p>
<form method="post" action="mailto:thevesigeyt@gmail">  
<p style="color:white;">  Name: <input type="text" name="name" value="<?php echo $name;?>" required>
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>" required>
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Commission Choice: <input type="text" name="website" value="<?php echo $commissionchoice;?>" required>
  <span class="error">*<?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea></p>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


					</div>
				</div>
			</div>
		</main>
	</div>
</div>
<footer class="site-footer">
	<div class="container2">
<p4>Website was built using a variety of php and CSS code. &copy; Gifs are NOT owned by me and are original concepts copyrighted by Rin Kokuyo and Signal.MD.<br>
     &copy; Ethan 2019</p4>
</div>
</footer>
</html>
</body>