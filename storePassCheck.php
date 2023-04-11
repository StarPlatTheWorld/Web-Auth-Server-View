<?php
                include("db01Connect.php");
                $loginName=$_POST['Username'];
                $loginPassword=$_POST['Password'];
/*Read Table */
$sql = "SELECT id, Username, Password FROM UserDetails";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         "id: " . $row["id"]. " || Username: " . $row["Username"]. "  || Password: " . $row["Password"]. "<br>";
                                if ($loginName==$row["Username"] && $loginPassword==$row["Password"]){
                                                header ("Location: actualstore.php");
                                                
                                }
								echo "Results do not match.";
	}
} else {
    echo "Negative";
}
?>