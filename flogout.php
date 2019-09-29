<?php
//Start session
	session_start();
//Unset the variables stored in session
	unset($_SESSION['id']);
	session_destroy();
//redirect to login page
	header('Location:index.html');
?>