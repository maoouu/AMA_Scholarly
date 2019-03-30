<?php
  $dbServername = "localhost";
  $dbUsername = "root";
  $dbPassword = "";
  $dbName = "ama_scholarly";

  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

  if ($conn-> connect_error) {
    die("Connection Failed: " . $conn-> connect_error);
  }
 ?>
