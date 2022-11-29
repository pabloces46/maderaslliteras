<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
 
function ConectarDB(){
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_database = "stock";
	
	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
		if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

	$mysqli->set_charset("utf8");
	return $mysqli;
}

function ConectarDB_User(){
	$db_host = "localhost";
	$db_username = "root";
	$db_password = "";
	$db_database = "vinventions";
	
	$mysqli = new mysqli($db_host, $db_username, $db_password, $db_database);
		if ($mysqli->connect_errno) {
			echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}

	$mysqli->set_charset("utf8");
	return $mysqli;
}

function check_in_range($start_date, $end_date, $evaluame) {
    $start_ts = strtotime($start_date);
    $end_ts = strtotime($end_date);
    $user_ts = strtotime($evaluame);
    return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
}

?>