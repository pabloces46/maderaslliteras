<?php

include ('../../includes/db.php');

//esta pagina es la que cambia el estado a inactivo del repuesto en la base de datos

if( isset($_GET["id"]) && !empty($_GET["id"])){
	$id  = $_GET["id"];
	$mysqli = ConectarDB();
	$resultado = $mysqli->query("UPDATE inventario SET ESTADO='inactivo' WHERE ID=$id");
	echo "<b> Repuesto eliminado Exitosamente </b>!! <br><br> Pronto seras redireccionado";
	header('refresh:1; url=../buscar.php');
}
else{
	echo "Error al agregar Repuesto: (" . $mysqli->errno . ") " . $mysqli->error;
}

?>