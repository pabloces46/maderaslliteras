<?php
session_start();

include ('../../database/db.php');
if( isset($_POST["user"]) && isset($_POST["password"])){
	$user = $_POST["user"];
	$pass = $_POST["password"];
	$sql="SELECT * FROM usuarios WHERE user='$user'";
	$mysqli = ConectarDB();
	$resultado = $mysqli->query($sql);
	if($resultado->num_rows == 1){
		$fila = $resultado->fetch_assoc();
		if($fila['password'] == $pass){
			$_SESSION['usuario']['user'] = $user;
			$_SESSION['usuario']['permisos'] = $fila['permisos'];
			//echo "Usuario y Contraseña correctos";
			echo "<meta http-equiv='refresh' content='0; url=../main' />";
		}
		else{
			echo "Contraseña incorrecta";
		}
	}
	else{
		echo "Usuario no econtrado";
	}
}
?>