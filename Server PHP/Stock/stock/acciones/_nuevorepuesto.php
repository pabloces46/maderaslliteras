<?php
include ('../../includes/db.php');
	
// esta pagina agraga a la base de datos el nuevo repuesto, y el movimiento.
$mysqli = ConectarDB();

if (!$mysqli->query("INSERT INTO inventario (CODIGO,REPUESTO,DESCRIPCION,USO,STOCK,CANTMIN,UBICACION,IMAGEN,TIPO,DEPOSITO,UNIDAD,PROVEEDOR,CODPROV,PRESENTACION) VALUES ('$_POST[codigo]','$_POST[repuesto]','$_POST[descripcion]','$_POST[uso]','$_POST[stock]','$_POST[cantmin]','$_POST[ubicacion]','$_POST[imagen]','$_POST[tipo]','$_POST[deposito]','$_POST[unidad]','$_POST[proveedor]','$_POST[codprov]','$_POST[presentacion]')")) {
    echo "Error al agregar Repuesto: (" . $mysqli->errno . ") " . $mysqli->error;
}
else{
	$fecha = date("Y-m-d H:m");
	$user = $_POST['user'];
	$mysqli->query("INSERT INTO movimientos (FECHA,CODIGO,TIPO_MOV,CANTIDAD,USER,ARTICULO,COMENTARIOS) VALUES ('$fecha','$_POST[codigo]','Ingreso','$_POST[stock]','$user','$_POST[repuesto]','STOCK INICIAL')");
	echo "<b> Repuesto agregado Exitosamente </b>!! <br><br> Pronto seras redireccionado";
	header('refresh:0; url=../_masdetallesrepuestos.php?codigo='.$_POST['codigo']);
	}

?>