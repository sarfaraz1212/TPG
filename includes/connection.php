<?php

$host = "localhost";
$username = "root";
$password = "";
$db="thephysiquegym";

$conn = mysqli_connect($host,$username,$password,$db);

/*/ SQL query to create the clients table
$sql = "CREATE TABLE IF NOT EXISTS clients (
    id INT PRIMARY KEY AUTO_INCREMENT,
    membership_number VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    body_weight FLOAT NOT NULL,
    fee INT NOT NULL,
    package_type VARCHAR(255) NOT NULL,
    goal VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    added_on DATETIME NOT NULL
  )";
  
  // Execute the create table query
  if (mysqli_query($conn, $sql)) {
    echo "Table clients created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  */
  

?>