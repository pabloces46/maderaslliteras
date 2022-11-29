<?php

$id = $_POST['id'];
$text = $_POST['text'];


include ('../../database/db.php');

	$sql="UPDATE img_portada SET texto = '$text' WHERE _id = '$id'";
	$mysqli = ConectarDB();
	if($mysqli->query($sql)){
        echo "ok";
    }




?>