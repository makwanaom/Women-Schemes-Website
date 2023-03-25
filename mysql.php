<?php
 <?php
 // Connect to the database server
 $conn = mysqli_connect("hostname", "username", "password", "database_name");
 
 // Check if the connection was successful
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 
 // SQL statement to create a table
 $sql = "CREATE TABLE table_name (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
 name VARCHAR(30) NOT NULL,
 email VARCHAR(50),
 reg_date TIMESTAMP
 )";
  
 // Execute the SQL statement
 if (mysqli_query($conn, $sql)) {
     echo "Table table_name created successfully";
 } else {
     echo "Error creating table: " . mysqli_error($conn);
 }
 
 // Close the connection
 mysqli_close($conn);
 ?>
 


