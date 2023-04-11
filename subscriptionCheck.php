<?php
include("db01connect.php");
$con=mysql_connect($servername, $username, $password, $dbname) or die(mysql_error());
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("$dbname", $con);
  
  $sql="INSERT INTO SubscriptionService (username, plan) VALUE ('$_POST[username]','$_POST[plan]')";
  
  if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con);


?>