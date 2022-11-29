<?php
session_start();
include ('../../includes/db.php');

if( isset($_GET["invitado"]) && $_GET["invitado"] == "true")
{
	$_SESSION['usuario']['nombre'] = "Invitado";
	$_SESSION['usuario']['permisos'] = 5;
	$_SESSION['usuario']['name'] = "Invitado";
	header('refresh:0; url=../index.php');
}

?>