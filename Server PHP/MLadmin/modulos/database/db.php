<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
 
function ConectarDB(){
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_database = "lliteras";
	
	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
		if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

	$mysqli->set_charset("utf8");
	return $mysqli;
}


?>