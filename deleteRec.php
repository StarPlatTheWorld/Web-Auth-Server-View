<?php
include("db01Connect.php");

// sql to delete a record
  $sql = "DELETE FROM UserDetails WHERE id=9";
 
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

include("db02ConnectClose.php");
?>