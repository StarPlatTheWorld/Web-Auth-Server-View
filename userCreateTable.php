<?php
include("db01Connect.php");

// sql to create table
$sql = "CREATE TABLE MailingList (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR (150) UNIQUE NOT NULL,
	reg_date TIMESTAMP
)";

/*
The data type specifies what type of data the column can hold. For a complete reference of all the available data types, go to our Data Types reference.

After the data type, you can specify other optional attributes for each column:
•NOT NULL - Each row must contain a value for that column, null values are not allowed
•DEFAULT value - Set a default value that is added when no other value is passed
•UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
•AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
•PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT

Each table should have a primary key column (in this case: the "id" column). Its value must be unique for each record in the table.

*/
 
if (mysqli_query($conn, $sql)) {
    echo "Table MailingList created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
include("db02ConnectClose.php");
?>