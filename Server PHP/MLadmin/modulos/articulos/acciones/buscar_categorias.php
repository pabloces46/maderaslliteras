<?php

include ('../../database/db.php');
$mysqli = ConectarDB();

$familia =  $_POST['familia'];

$resultados_familias = $mysqli->query("SELECT categoria FROM articulos WHERE familia = '$familia' GROUP BY categoria ORDER BY categoria ASC");
if($resultados_familias->num_rows > 0 ){
    $aux= [];
    while ($row = $resultados_familias->fetch_assoc()){  
        $aux[] = array(
            'value'    => $row["categoria"],
            'name'  => $row["categoria"]
            );
    }
    $output['data'] = $aux;
    $output['error'] = 0;
    echo json_encode($output);
}
else{
    $output['error'] = 1;
    echo json_encode($output);
}

?>