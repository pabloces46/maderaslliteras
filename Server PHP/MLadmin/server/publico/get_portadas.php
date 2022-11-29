<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

//$json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
//$data = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE


include_once ('../../modulos/database/db.php');
$mysqli = ConectarDB();

$portada_data = [];

$sql = "SELECT * FROM img_portada";
$resultados = $mysqli->query($sql);

if($resultados->num_rows > 0 ){
	$aux2 = [];
	while ($art_result = $resultados->fetch_assoc()){
        $aux = [];
	    $aux['id'] = $art_result['_id'];
        $aux['img'] = $art_result['img'];
        $aux['texto'] = $art_result['texto'];
        $aux2[] = $aux;
    }

    $portada_data = $aux2;    
    //$portada_data['data'] = $aux2;
	//$portada_data['error'] =  0;
}
else{
	//Workout no encontrado Err = 1
	//$portada_data['error'] =  1;
}


//echo json_encode($data);
echo json_encode($portada_data);
//var_dump($art_data);
?>