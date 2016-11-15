<?php

function logged_in() {
	return (isset($_SESSION['user_id'])) ? true : false;
}

function register_user($register_data) {
	array_walk($register_data, 'array_sanitize');
	$register_data['password'] = md5($register_data['password']);
	
	$fields = '`' . implode('`, `', array_keys($register_data)) . '`';
	$data = '\'' . implode('\', \'', $register_data) . '\'';
	
	mysql_query("INSERT INTO `users` ($fields) VALUES ($data)");
}

function change_password($user_id, $password) {
	$user_id = (int)$user_id;
	$password = md5($password);
	mysql_query("UPDATE `users` SET `Password` = '$password' WHERE `UserID` = '$user_id'");
}

function user_count() {
	return mysql_result(mysql_query("SELECT COUNT(`UserID`) FROM `users`"),0);
}

function user_data($user_id) {
	$data = array();
	$user_id = (int)$user_id;
	
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	
	if ($func_num_args > 1)
	{
		unset($func_get_args[0]);
		
		$fields = '`' . implode('`, `', $func_get_args) . '`';
		$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM `users` WHERE `UserID` = '$user_id' "));
		return $data;
	}
}

function user_exists($username) {
  $username = sanitize($username);
  return (mysql_result(mysql_query("SELECT COUNT(`UserID`) FROM `users` WHERE `Username` = '$username' "), 0) == 1) ? true : false;
}

function email_exists($email) {
  $email = sanitize($email);
  return (mysql_result(mysql_query("SELECT COUNT(`UserID`) FROM `users` WHERE `Email` = '$email' "), 0) == 1) ? true : false;
}

function user_active($username) {
  $username = sanitize($username);
	return (mysql_result(mysql_query("SELECT COUNT(`UserID`) FROM `users` WHERE `Username` = '$username' AND `Active` = 1 "), 0) == 1) ? true : false;
}


function admin_check($username) {
  $username = sanitize($username);
	return (mysql_result(mysql_query("SELECT `UserLevel` FROM `users` WHERE `Username` = '$username'"), 0) == 3) ? true : false;
}
function redirect_admin() {
	if (mysql_num_rows(admin_check($username)) !== 3) {
		header('Location: restricted.php');
		exit();
	}
}

function redirect_verified() {
	if (user_active() === false) {
		header('Location: unverified.php');
		exit();
	}
}


function redirect_logged_in() {
	if (logged_in() === true) {
		header('Location: index.php');
		exit();
	}
}
function redirect_login() {
	if (logged_in() === false) {
		header('Location: unregistered.php');
		exit();
	}
}



function user_id_from_username ($username) {
	$username = sanitize ($username);
	return mysql_result(mysql_query("SELECT `UserID` FROM `users` WHERE `Username` = '$username' "), 0, 'UserID');
}

function login($username, $password){
	$user_id = user_id_from_username($username);
	
	$username = sanitize($username);
	$password = md5($password);
	
	return (mysql_result(mysql_query("SELECT COUNT(`UserID`) FROM `users` WHERE `Username`='$username' AND `Password` = '$password' "), 0)==1) ? $user_id : false;
}
?>