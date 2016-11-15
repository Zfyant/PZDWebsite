<?php

session_start();

require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';


if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'UserID', 'Username', 'Password', 'FirstName', 'LastName', 'Email');
	//if (user_active($user_data['Username']) === false) {
	if ($user_data['Username'] === false) {
		session_destroy();
		header('Location: index.php');
		exit();
	}
}

$errors = array();
?>