<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

$json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
$data = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE


include_once ('../../modulos/database/db.php');
$mysqli = ConectarDB();

$art_data = [];

//$rubro = 'MADERAS';
$search = $data;

$sql = "SELECT * FROM articulos  WHERE articulo LIKE '%$search%' AND activo = 'SI' GROUP BY articulo";
$resultados = $mysqli->query($sql);

if($resultados->num_rows > 0 ){
	$aux2 = [];
	while ($art_result = $resultados->fetch_assoc()){
        $aux = [];
	    $aux['_id'] = $art_result['_id'];
        $aux['articulo'] = $art_result['articulo'];
        $aux['familia'] = $art_result['familia'];
        $aux['categoria'] = $art_result['categoria'];
        $aux['img_tumb'] = $art_result['img_tumb'];
        $aux['img'] = $art_result['img'];
        $aux2[] = $aux;
    }


    $art_data['data'] = $aux2;
	$art_data['error'] =  0;
}
else{
	//Workout no encontrado Err = 1
	$art_data['error'] =  1;
}


//echo json_encode($data);
echo json_encode($art_data);
//var_dump($art_data);
?>