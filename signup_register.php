<?php
	$server = "localhost";
	$u = "root";
	$p = "";
	$db = "log";
	$valid=0;

	$email =  addslashes($_POST['email']);
	$pass =  addslashes($_POST['password']);
	$phone =  addslashes($_POST['phone']);
	$fullname = addslashes($_POST['fullname']);
    $user = addslashes($_POST['username']);
	// Create connection
	$conn = new mysqli($server, $u, $p, $db);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	$date = date('Y-m-d');
	$sql = "INSERT INTO users (username, name, password,email,phone)
	VALUES ('$user', '$fullname', '$pass','$email','$phone')";
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully";
	    $valid =1;
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$create = "CREATE TABLE usr_$user (
	id int NOT NULL auto_increment PRIMARY KEY,
	date date,
	title text,
	data longtext
	)";
	if (mysqli_query($conn, $create)) {
	    echo "Table MyGuests created successfully";
	    $valid = 1;
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
	}
	if($valid == 1)
	{
		session_start();
	    $_SESSION['userid'] = $user;
	    $_SESSION['password'] = $pass;

	    header('Location: index.php');
	}
	$conn->close();
?>