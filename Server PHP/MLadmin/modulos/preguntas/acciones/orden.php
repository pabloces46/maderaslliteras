<?php
include ('../../database/db.php');
$mysqli = ConectarDB();

$preguntas = array();

$sql = "SELECT * FROM preguntas ORDER BY orden ASC";
$resultados = $mysqli->query($sql);
    if($resultados->num_rows > 0){
        while($row = $resultados->fetch_assoc()){
            array_push($preguntas,$row['_id']);
        }
    }

//echo '<pre>' , var_dump($preguntas) , '</pre>';

$old_position = $_POST['old_position']-1;
$new_position = $_POST['new_position']-1;

$pregNewEntry = array( 0 => $preguntas[$old_position]);
$preguntas = array_merge($pregNewEntry, $preguntas);
array_splice($preguntas, $old_position+1, 1);
$pregRemovedEntry = array_splice($preguntas, 0, 1);
array_splice($preguntas, $new_position, 0, $pregRemovedEntry);

//echo '<pre>' , var_dump($preguntas) , '</pre>';
$ok = "notOk";

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

