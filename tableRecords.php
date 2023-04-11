<?php
include("db01Connect.php");

$sql = "SELECT id, username, password FROM UserDetails";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br>" . "id: " . $row["id"] . "<br>- " .  $row["username"]. " vs " . $row["password"]. "<a href=\"amendChoice.html?recId=".$row["id"]."\">Amend</a>" . "<br>";
    }
} else {
    echo "0 results";
}
 
include("db02ConnectClose.php");
?>