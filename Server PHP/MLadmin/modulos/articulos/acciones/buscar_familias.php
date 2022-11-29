<?php

include ('../../database/db.php');
$mysqli = ConectarDB();


$rubro =  $_POST['rubro'];
$resultados_familias = $mysqli->query("SELECT familia FROM articulos WHERE rubro = '$rubro' GROUP BY familia ORDER BY familia ASC");

if($resultados_familias->num_rows > 0 ){
    $aux= [];
    while ($row = $resultados_familias->fetch_assoc()){  
        $aux[] = array(
            'value' => $row["familia"],
            'name'  => $row["familia"]
            );
    }
    $output['data'] = $aux;
    $output['error'] = 0;
    $output['cant'] = $resultados_familias->num_rows;
    echo json_encode($output);
}
else{
    $output['error'] = 1;
    echo json_encode($output);
}

?>