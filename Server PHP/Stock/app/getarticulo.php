<?php

include ('../includes/db.php');
$mysqli = ConectarDB();
$c = $_GET['c'];
$resultados = $mysqli->query("SELECT * FROM inventario WHERE CODIGO = '$c'");



if($resultados->num_rows > 0){
    $row=$resultados->fetch_assoc();
   
    $proveedor = $row['PROVEEDOR'];
    if($proveedor == '')
        $proveedor = '-';
    
    $codprov = $row['CODPROV'];
    if($codprov == '')
        $codprov = '-';
    
    $presentacion = $row['PRESENTACION'];
    if($presentacion == '')
        $presentacion = '-';
    
    $unidad = $row['UNIDAD'];
    if($unidad == '')
        $unidad = '-';
    
    echo $row['CODIGO'].";".$row['REPUESTO'].";".$presentacion.";".$unidad.";".$row['STOCK'].";".$proveedor.";".$codprov.";";
}
else{
    echo "nada";
}


?>