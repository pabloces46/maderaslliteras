<?php

$id = $_POST['id'];
$precio = $_POST['precio'];

include ('../../database/db.php');

	$sql="UPDATE envios SET precio = '$precio' WHERE _id = '$id'";
	$mysqli = ConectarDB();
	if($mysqli->query($sql)){
        echo "ok";
    }




?>