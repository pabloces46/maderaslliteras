<?php

$preg = $_POST['preg'];
$resp = $_POST['resp'];


include ('../../database/db.php');

    $orden = 1;
    $mysqli = ConectarDB();
    $sql = "SELECT * FROM preguntas ORDER BY orden DESC LIMIT 1";
    $resultados = $mysqli->query($sql);
    if($resultados->num_rows == 1){
        $row = $resultados->fetch_assoc();
        $orden = $row['orden']+1;
    }

    $sql="INSERT INTO preguntas (pregunta, respuesta, orden) VALUES ('$preg','$resp','$orden')";
	if($mysqli->query($sql)){
        echo "ok";
    }




?>