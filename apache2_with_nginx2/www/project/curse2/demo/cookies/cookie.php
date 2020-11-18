<?php
	setcookie("userName", "John", time()+3600, "/");

	// setcookie("name", "John", time()-3600); delete cookie
	// setcookie("name", "John", false); delete cookie
	echo $_COOKIE["userName"];


	$user = [
			'name' => 'John',
			'loin' => 'root',
			'password' => '1234'
			];

	$str = serialize($user);
	echo $str;

	echo base64_encode($str);

	// setcookie("name", "John", false); delete cookie

?>