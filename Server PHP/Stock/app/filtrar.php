<?php

include ('../includes/db.php');
$mysqli = ConectarDB();
$c = $_GET['c'];

$sql = "SELECT * FROM inventario WHERE (CODIGO LIKE '%".$c."%') OR (REPUESTO LIKE '%".$c."%') ORDER BY 'CODIGO'+0 ASC";
$resultados = $mysqli->query($sql);

$aux = '';
$aux2 = '';

if($resultados->num_rows >0){
    while($row=$resultados->fetch_assoc()){
        $aux = $row['CODIGO'] .";". $aux;
        $aux2 = $row['REPUESTO'] .";". $aux2;
    }

    echo $aux."*".$aux2;
    
}
else{
    echo "nada";
}

?>