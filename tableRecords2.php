<?php
include("db01Connect.php");

$sql = "SELECT id, email FROM MailingList";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - email: " . $row["email"].  "<br>";
    }
} else {
    echo "0 results";
}

include("db02ConnectClose.php");
?>
