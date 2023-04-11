<?php
include("db01connect.php");
$con=mysql_connect($servername, $username, $password, $dbname) or die(mysql_error());
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("$dbname", $con);
  
  $sql="INSERT INTO MailingList (email) VALUE ('$_POST[email]')";
  
  if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);


header ("location:successSubscribe.php");


?>

