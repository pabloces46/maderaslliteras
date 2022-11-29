<?php

$codigo = $_POST['codigo'];
$activo = $_POST['activo'];



include ('../../database/db.php');

	$sql="UPDATE articulos SET activo = '$activo' WHERE codigo = '$codigo'";
	$mysqli = ConectarDB();
	if($mysqli->query($sql)){
        echo "correcta";
    }




?>