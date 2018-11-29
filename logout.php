<?php

// Inialize session

session_start();
// Delete certain session
unset($_POST['username']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: login.php');
session_destroy();

?>