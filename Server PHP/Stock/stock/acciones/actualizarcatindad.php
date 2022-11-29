<?php

include ('../../includes/db.php');

// esta pagina lee de la base de datos la cantidad actual, y le suma la cantindad agragada.

$mysqli = ConectarDB();

$id = $_POST['id'];
$codigo = $_POST['codigo'];
$nombre = $_POST['repuesto'];
$user = $_POST['user'];
$cantaagregar = $_POST['nuevacantidad'];
$nuevacant = $_POST['cantidad'] + $_POST['nuevacantidad'];

if (!$mysqli->query("UPDATE inventario SET STOCK='$nuevacant' WHERE ID='$id'")) {
    echo "Error al modificar Repuesto: (" . $mysqli->errno . ") " . $mysqli->error;
}
else{
	$fecha = date(d)."-".date(m)."-".date(Y);
	$mysqli->query("INSERT INTO movimientos (FECHA,CODIGO,REPUESTO,ESTADO,CANTIDAD,USER) VALUES ('$fecha','$codigo','$nombre','Ingreso','$cantaagregar','$user')");
	echo "<b> Repuesto modificado Exitosamente </b>!! <br><br> Pronto seras redireccionado";
	//header('refresh:5; url=../buscar.php');
	echo"<form action='../buscar.php' method='post' name='msn' id='msn'>".
		"<input type='hidden' name='tipo' value='Todos'>".
		"<input type='hidden' name='filtro' value='Codigo'>".
		"<input type='hidden' name='buscar' value='".$codigo."'>".
		"</form>".
		"<body onload='document.msn.submit();'>";
	}

?>