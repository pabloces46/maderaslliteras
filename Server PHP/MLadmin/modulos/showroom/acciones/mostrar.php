<?php

$id = $_POST['id'];
$activa = $_POST['activa'];

include ('../../database/db.php');

	$sql="UPDATE img_showroom SET activa = '$activa' WHERE _id = '$id'";
	$mysqli = ConectarDB();
	if($mysqli->query($sql)){
        echo "ok";
    }

    

?>