1:  <?php
2:  // function to connect to database
3:  function doDB() {
4:      global $mysqli;
5:
6:      //connect to server and select database
7:      $mysqli = mysqli_connect("localhost", "joeuser",
8:          "somepass", "testDB");
9:
10:      //if connection fails, stop script execution
11:      if (mysqli_connect_errno()) {
12:          printf("Connect failed: %s\n", mysqli_connect_error());
13:          exit();
14:      }
15:  }
16:  // function to check email address
17:  function emailChecker($email) {
18:     global $mysqli, $safe_email, $check_res;
19:
20:     //check that email is not already in list
21:     $safe_email = mysqli_real_escape_string($mysqli, $email);
22:     $check_sql = "SELECT id FROM MailingList
23:          WHERE email = '".$safe_email."'";
24:     $check_res = mysqli_query($mysqli, $check_sql)
25:          or die(mysqli_error($mysqli));
26:  }
27:  ?>