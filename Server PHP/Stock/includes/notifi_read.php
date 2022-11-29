<?php
session_start();
include_once('../includes/db.php');
$mysqli = ConectarDB();
$user = $_SESSION['usuario']['nombre'];

$sql = "UPDATE notificaciones SET LEIDO='SI' WHERE ID='$_POST[id]'";
$resultados = $mysqli->query($sql);

?>