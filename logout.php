<?php
session_start(); 
$_SESSION = array();// To reset the session variables.
SESSION_DESTROY();// To destroy the session.
header("location: login.php");// Redirect to login page
exit;
?>