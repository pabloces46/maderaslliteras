<?php

include ('../includes/db.php');
$mysqli = ConectarDB();
$resultados = $mysqli->query("SELECT * FROM usuarios WHERE ACTIVO = 'SI' ORDER BY USER DESC");

$aux = '';
$aux2 = '';

while ($users=$resultados->fetch_assoc()){
    $aux = $users['USER'] .";". $aux;
    $aux2 = $users['PWD'] .";". $aux2;
}

echo $aux."*".$aux2;
?>