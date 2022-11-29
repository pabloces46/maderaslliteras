<?php

include ('../../includes/db.php');
	
// esta pagina es la que actualiza los datos del repuesto modificado en la base de datos
$mysqli = ConectarDB();


//echo $_POST['codigo'] ."<br>". $_POST[repuesto] $_POST[tipo] $_POST[descripcion] $_POST[uso] $_POST[cantidad] $_POST[cantmin] $_POST[ubicacion] $_POST[id]
if (!$mysqli->query("UPDATE inventario SET REPUESTO='$_POST[repuesto]',TIPO='$_POST[tipo]',DESCRIPCION='$_POST[descripcion]',USO='$_POST[uso]',CANTMIN='$_POST[cantmin]',UBICACION='$_POST[ubicacion]', IMAGEN='$_POST[imagen]', DEPOSITO='$_POST[deposito]', PROVEEDOR='$_POST[proveedor]', CODPROV='$_POST[codprov]', PRESENTACION='$_POST[presentacion]' , UNIDAD='$_POST[unidad]' WHERE ID='$_POST[id]'")) {
    echo "Error al modificar Repuesto: (" . $mysqli->errno . ") " . $mysqli->error;
}
else{
	echo "<b> Repuesto modificado Exitosamente </b>!! <br><br> Pronto seras redireccionado";
	header('refresh:0; url=../_masdetallesrepuestos.php?codigo='.$_POST['codigo']);
	}

?>