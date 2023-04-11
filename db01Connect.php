<?php
$servername = "vbtsql03";
$username = "MCF19152759";
$password = "280300";
$dbname = "Y1920_MCF19152759";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>