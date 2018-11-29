<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "log";
  $title =  addslashes($_POST['title']);
  $data = addslashes($_POST['description']);
    $user = addslashes($_POST['user']);
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  $date = date('Y-m-d');
  $sql = "INSERT INTO usr_$user (date, title, data)
  VALUES ('$date', '$title', '$data')";
  if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();
?>