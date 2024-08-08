<?php
	$host ="localhost";
	$user_name ="root";
	$password ="";
	$database_name ="db_perpus";
	$port ="3306";
	$db_link =mysqli_connect($host,$user_name,$password,$database_name,$port);
	if(!$db_link) {
		echo"Gagal Terhubung ke Server";
		}
?>
