<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

//$json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
//$data = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE


include_once ('../../modulos/database/db.php');
$mysqli = ConectarDB();

$data = [];

$sql = "SELECT * FROM envios ORDER BY radio";
$resultados = $mysqli->query($sql);

if($resultados->num_rows > 0 ){
	$aux2 = [];
	while ($art_result = $resultados->fetch_assoc()){
        $aux = [];
	    $aux['id'] = $art_result['_id'];
        $aux['radio'] = $art_result['radio'];
        $aux['precio'] = $art_result['precio'];
        $aux2[] = $aux;
    }

    $data = $aux2;    
    //$portada_data['data'] = $aux2;
	//$portada_data['error'] =  0;
}
else{
	//Workout no encontrado Err = 1
	//$portada_data['error'] =  1;
}


//echo json_encode($data);
echo json_encode($data);
//var_dump($art_data);
?>