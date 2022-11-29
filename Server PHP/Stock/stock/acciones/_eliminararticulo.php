<?php

$articulo = $_POST['b'];
if(!empty($articulo)) {
      eliminar($articulo);
      
}

function eliminar($articulo) {
    include ('../../includes/db.php');
    $mysqli = ConectarDB();
   
    if (!$mysqli->query("DELETE FROM inventario WHERE CODIGO = '$articulo'")) {
        echo "err1";
    }
    else{
        echo "err0";
        }
}




?>