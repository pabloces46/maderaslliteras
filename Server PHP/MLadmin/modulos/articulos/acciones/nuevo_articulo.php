<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: multipart/form-data; charset=UTF-8");
header('Content-Type: application/json');

//$json = file_get_contents('php://input'); // RECIBE EL JSON DE ANGULAR
//$data = json_decode($json); // DECODIFICA EL JSON Y LO GUARADA EN LA VARIABLE


include ('../../database/db.php');
$mysqli = ConectarDB();

$sql = "INSERT INTO articulos (codigo, articulo, rubro, familia, categoria, espesor, ancho, largo, diametro, litros, kilos, tipo, grano, diente, activo, img) VALUES ('$_POST[codigo]','$_POST[articulo]','$_POST[rubro]','$_POST[familia]','$_POST[categoria]','$_POST[espesor]','$_POST[ancho]','$_POST[largo]','$_POST[diametro]','$_POST[litros]','$_POST[kilos]','$_POST[tipo]','$_POST[grano]','$_POST[diente]','SI','$_POST[upload_img]')";

if($resultado = $mysqli->query($sql)){

    $sql = "SELECT _id FROM articulos WHERE codigo = '$_POST[codigo]'";
    $resultados = $mysqli->query($sql);
    if($resultados->num_rows > 0 ){
        $row = $resultados->fetch_assoc();
        echo "<meta http-equiv='refresh' content='0; url=detallearticulo.php?id=".$row['_id']."' />";
    }
}

?>