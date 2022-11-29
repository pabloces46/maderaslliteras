<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Content-Type: application/json');

$json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
$data = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE


include_once ('../../modulos/database/db.php');
$mysqli = ConectarDB();

$art_data = [];

//$art_id = '1';
$art_id = $data;

$sql = "SELECT * FROM articulos  WHERE _id = '$art_id'";
$resultados = $mysqli->query($sql);

if($resultados->num_rows > 0 ){
	
	$art_result = $resultados->fetch_assoc();
        
    /*$aux = [];
	$aux['_id'] = $art_result['_id'];
    $aux['codigo'] = $art_result['codigo'];
    $aux['articulo'] = $art_result['articulo'];
    $aux['rubro'] = $art_result['rubro'];
    $aux['familia'] = $art_result['familia'];
    $aux['categoria'] = $art_result['categoria'];
    $aux['img'] = $art_result['img'];
    $aux['img_tumb'] = $art_result['img_tumb'];
    $art_data['data'] = $aux;*/

    $sql = "SELECT * FROM articulos  WHERE articulo = '$art_result[articulo]'";
    $resultados = $mysqli->query($sql);
    if($resultados->num_rows > 0 ){
        $aux2 = [];
        while($art_spec = $resultados->fetch_assoc()){
            $aux = [];
            $aux['_id'] = $art_result['_id'];
            $aux['codigo'] = $art_result['codigo'];
            $aux['articulo'] = $art_result['articulo'];
            $aux['rubro'] = $art_result['rubro'];
            $aux['familia'] = $art_result['familia'];
            $aux['categoria'] = $art_result['categoria'];
            $aux['img'] = $art_result['img'];
            $aux['img_tumb'] = $art_result['img_tumb'];
            $aux['codigo'] = $art_spec['codigo'];
            $aux['espesor'] = $art_spec['espesor'];
            $aux['ancho'] = $art_spec['ancho'];
            $aux['largo'] = $art_spec['largo'];
            $aux['diametro'] = $art_spec['diametro'];
            $aux['litros'] = $art_spec['litros'];
            $aux['kilos'] = $art_spec['kilos'];
            $aux['grano'] = $art_spec['grano'];
            $aux['diente'] = $art_spec['diente'];
            $aux['tipo'] = $art_spec['tipo'];
            $aux['activo'] = $art_spec['activo'];
            //$aux2[]=$aux;
            $art_data[] =  $aux;
        }
    }
    
    //$art_data['specs'] =  $aux2;

    /*$sql = "SELECT * FROM articulos ORDER BY RAND() LIMIT 6";
    $resultados = $mysqli->query($sql);
    if($resultados->num_rows > 0 ){
        $aux3 = [];
        while($related = $resultados->fetch_assoc()){
            $aux = [];
            $aux['_id'] = $related['_id'];
            $aux['articulo'] = $related['articulo'];
            $aux['rubro'] = $related['rubro'];
            $aux3[]=$aux;
        }
    }

    $art_data['related'] =  $aux3;*/
	//$art_data['error'] =  0;
}
else{
	//Workout no encontrado Err = 1
	//$art_data['error'] =  1;
}


//echo json_encode($data);
echo json_encode($art_data);
//var_dump($art_data);
?>