<?php

$id = $_POST['id'];
$preg = $_POST['preg'];
$resp = $_POST['resp'];


include ('../../database/db.php');

	$sql="UPDATE preguntas SET pregunta = '$preg', respuesta = '$resp' WHERE _id = '$id'";
	$mysqli = ConectarDB();
	if($mysqli->query($sql)){
        echo "ok";
    }




?>