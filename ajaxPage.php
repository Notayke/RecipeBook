<?php

$method = $_GET['method'];

if ($method == "auth") {
	$login = $_POST['login'];
	$password = $_POST['password'];
	
	if(empty($login) || empty($password)) die("ERROR1");
	
	$query = DB::getInstance()->query("SELECT * FROM `admin_users` WHERE `login` = '".$login."' LIMIT 1");
	if (DB::getInstance()->numRows($query) == 0) die("ERROR2");
	
	$password = md5($password);
	
	$array = DB::getInstance()->fetchAssoc($query);
	
	if ($password != $array['password']) die("ERROR3");
	
	$_SESSION['login'] = $login;
	$_SESSION['password'] = $password;
	
	die("SUCCESS");
}

if ($method == "exit") {
	if (!User::checkAuth()) die("ERROR1");
	unset($_SESSION['login']);
	unset($_SESSION['password']);
	die("SUCCESS");
}

?>