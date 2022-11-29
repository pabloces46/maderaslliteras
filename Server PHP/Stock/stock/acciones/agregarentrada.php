<?php

include ('../../includes/db.php');
	
// esta pagina agraga a la base de datos el nuevo repuesto, y el movimiento.
$mysqli = ConectarDB();
//$fecha = date(d)."-".date(m)."-".date(Y);
$fecha = date("d-m-Y");

if (!$mysqli->query("INSERT INTO equipos (EQUIPO,DESCRIPCION,FECHA) VALUES ('$_POST[codigo]','$_POST[descripcion]','$fecha')")) {
    echo "Error al agregar Repuesto: (" . $mysqli->errno . ") " . $mysqli->error;
}
else{
	echo "<b> Entrada agregado Exitosamente </b>!! <br><br> Pronto seras redireccionado";
	header('refresh:0; url=../Equipos.php?codigo='.$_POST["codigo"].'&movimientos=');
}
?>