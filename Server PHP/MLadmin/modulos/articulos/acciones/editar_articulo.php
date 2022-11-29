<?php
header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: multipart/form-data; charset=UTF-8");
header('Content-Type: application/json');


include ('../../database/db.php');
$mysqli = ConectarDB();


    //Si he cambiado la imagen, elminio la anterior
    $sql="SELECT img FROM articulos WHERE _id = '$_POST[art_id]'";
    $result = $mysqli->query($sql);
    if($result){
        $row = $result->fetch_assoc();
        $img = $row['img'];
        if($img != 'generic.jpg'){
            $img = "../../../server/server_img/productos/$row[img]";
            unlink($img);
        }
    }

	$sql="UPDATE articulos SET 
    codigo = '$_POST[codigo]',
    articulo = '$_POST[articulo]',
    rubro = '$_POST[rubro]',
    familia = '$_POST[familia]',
    categoria = '$_POST[categoria]',
    espesor = '$_POST[espesor]',
    ancho = '$_POST[ancho]',
    largo = '$_POST[largo]',
    diametro = '$_POST[diametro]',
    litros = '$_POST[litros]',
    kilos = '$_POST[kilos]',
    tipo = '$_POST[tipo]',
    grano = '$_POST[grano]',
    diente = '$_POST[diente]',
    img = '$_POST[upload_img]'
    WHERE _id = '$_POST[art_id]'";

	
	if($mysqli->query($sql)){

        $sql="UPDATE articulos SET img = '$_POST[upload_img]' WHERE articulo = '$_POST[articulo]'";
        if($mysqli->query($sql)){
        echo "<meta http-equiv='refresh' content='0; url=detallearticulo.php?id=$_POST[art_id]' />";
        }
        else{
            echo "ERROR";
        }
        
    }
    else{
        echo "ERROR";
    }




?>