<?php

$id = $_POST['id'];

include ('../../database/db.php');
$ok = "notOk";

$mysqli = ConectarDB();
$sql= "DELETE FROM preguntas WHERE _id = '$id'";
if($mysqli->query($sql)){
    //Eliminado ok
    $ok = "ok";
}

$preguntas = array();
$sql = "SELECT * FROM preguntas ORDER BY orden ASC";
$resultados = $mysqli->query($sql);
if($resultados->num_rows > 0){
    while($row = $resultados->fetch_assoc()){
        array_push($preguntas,$row['_id']);
    }
}

foreach ($preguntas as $key => $value) {
    $aux = $key+1;
    $sql="UPDATE preguntas SET orden = '$aux' WHERE _id = '$value'";
    if($mysqli->query($sql)){
        $ok = "ok";
    }else{
        $ok = "notOk";
    }
}

if($ok == 'ok'){
    echo "ok";
}
    

?>