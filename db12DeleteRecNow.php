<?php
include("db01Connect.php");
$emaillist=$_POST['email'];
// sql to delete a record
  $sql = "DELETE FROM MailingList WHERE email='$emaillist'";
 
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

include("db02ConnectClose.php");
header ("location: successUnsubscribe.php");
?>
