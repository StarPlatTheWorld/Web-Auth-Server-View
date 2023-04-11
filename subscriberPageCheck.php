<?php  // function to connect to database
include("db01Connect.php");
                $email=$_POST['email'];
                   
  $sql = "SELECT id, email FROM MailingList";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         "email: " . $row["email"].  "<br>";
                                if ($email==$row["email"]){
                                                header ("Location:subscriberOnly.php");
                                                }
                                echo "Result doesnt match";
                }
    
} else {
    echo "Negative";
}
                ?>
