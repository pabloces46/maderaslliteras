<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

$json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
$data = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE


include_once ('../../modulos/database/db.php');
$mysqli = ConectarDB();

$art_data = [];

$sql = "SELECT * FROM articulos ORDER BY RAND() LIMIT 6";
$resultados = $mysqli->query($sql);
if($resultados->num_rows > 0 ){
    $aux3 = [];
    while($related = $resultados->fetch_assoc()){
        $aux = [];
        $aux['_id'] = $related['_id'];
        $aux['articulo'] = $related['articulo'];
        $aux['rubro'] = $related['rubro'];
        $aux['img'] = $related['img'];
        $aux3[]=$aux;
    }
}

//$art_data['related'] =  $aux3;
$art_data =  $aux3;

//echo json_encode($data);
echo json_encode($art_data);
//var_dump($art_data);
?>