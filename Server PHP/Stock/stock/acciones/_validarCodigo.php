<?php
session_start();

$buscar = $_POST['b'];
if(!empty($buscar)) {
      buscar($buscar);
}

function buscar($b) {
    $permisos = $_SESSION['usuario']['permisos_mto'];

    include ('../../includes/db.php');
    $mysqli = ConectarDB();
    $sql = "SELECT * FROM inventario WHERE CODIGO = '$b'";
    $resultados = $mysqli->query($sql);
    if($resultados->num_rows >0){
        echo "CODIGO EXISTENTE";
    }
}

?>