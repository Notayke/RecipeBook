<?php

class User {
	
	public static function checkAuth(){
		if(isset($_SESSION['login']) && isset($_SESSION['password'])) {
			$query = DB::getInstance()->query("SELECT * FROM `admin_users` WHERE `login` = '".$_SESSION['login']."' LIMIT 1");
			if (DB::getInstance()->numRows($query) == 0) return false;
			$password = md5($password);
			$array = DB::getInstance()->fetchAssoc($query);
			if ($_SESSION['password'] != $array['password']) return false;
			return true;
		}else{
			return false;
		}
	}
	
}

?>