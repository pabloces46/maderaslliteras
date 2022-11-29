<?php

include ('../../includes/db.php');
	
// esta pagina agraga a la base de datos el nuevo repuesto, y el movimiento.
$mysqli = ConectarDB();

if (!$mysqli->query("INSERT INTO listaequipos (EQUIPO,DESCRIPCION) VALUES ('$_POST[equipo]','$_POST[descripcion]')")) {
    echo "Error al agregar Repuesto: (" . $mysqli->errno . ") " . $mysqli->error;
}
else{
	echo "<b> Equipo agregado Exitosamente </b>!! <br><br> Pronto seras redireccionado";
	header('refresh:0; url=../Equipos.php?codigo='.$_POST["equipo"].'&movimientos=');
}
?>