<?php
	//ini_set("display_errors", 0);
	//error_reporting(0);

	$base_path		= "http://localhost/dummy/demo_webhook/";
	$db_name		= "demo_webhook";
	$db_user		= "root";
	$db_pass		= "";
	$db_host		= "127.0.0.1";

	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

	if (!$conn) die("Connection for user $db_user refused!");
	//mysql_select_db($db_name, $conn) or die("Can not connect to database!");
?>
