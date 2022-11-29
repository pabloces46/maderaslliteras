<?php
session_start();

include ('../../includes/db.php');
$mysqli = ConectarDB();

//$_POST['agregar_codigo'];
$user = $_SESSION['usuario']['nombre'];

$sql = "UPDATE inventario SET STOCK = STOCK + '$_POST[agregar_cantidad]' WHERE CODIGO = '$_POST[agregar_codigo]'";

if( $mysqli->query($sql) === True){
    $fecha = date("Y-m-d H:i");
    if($_POST['agregar_condicion'] == 'nuevo'){
    	$condicion = 'Ingreso';
    }
    else{
    	$condicion = 'Devolucion';
    }
    $sql = "SELECT REPUESTO,STOCK,CODIGO,UNIDAD FROM inventario WHERE CODIGO = '$_POST[agregar_codigo]'";
    $resultados = $mysqli->query($sql);
    $row=$resultados->fetch_assoc();
    $parcial = $row['STOCK'];
    $mysqli->query("INSERT INTO movimientos (FECHA,CODIGO,ARTICULO,TIPO_MOV,CANTIDAD,USER,COMENTARIOS,PARCIAL) VALUES ('$fecha','$_POST[agregar_codigo]','$row[REPUESTO]','$condicion','$_POST[agregar_cantidad]','$user','$_POST[agregar_comentario]','$parcial')");

    echo "Se agregaron $_POST[agregar_cantidad] de $_POST[agregar_codigo]";

    $getUsers = $mysqli->query("SELECT * FROM usuarios WHERE NOTIF_MOV = 'SI'");
    while($user2 = $getUsers->fetch_assoc()){
        $texto = "<b>$user</b> agregó <b>$_POST[agregar_cantidad] $row[UNIDAD]</b> 
                  <br> Artículo: <b>$row[REPUESTO]</b> 
                  <br> Código: <b>$row[CODIGO]</b> - Stock: <b>$parcial</b>";
                  
        $notif = $mysqli->query("INSERT INTO notificaciones (USER,TEXTO,TIPO) VALUES ('$user2[USER]','$texto','MOV')");
    }
}
else{
    echo "Error al actualizar la cantidad del $_POST[agregar_codigo].";
}

?>
