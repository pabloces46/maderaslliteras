<?php
session_start();
include ('../../includes/db.php');

// En la pagina de retirar repuestos hay 2 opciones, o busco un repuesto que quiera retirar 
// en la base de datos y la agregp a la variable de session, o descuento del stock actual los
// repuestos de la lista, que son los que estan guardados en la variable session.

// Para determinar eso hay un elemento oculto en ambos forms "accion". Si accion es "buscar"
// solo busca el repuesto de la base y lo agrega a la lista. Si accion es "retirar" lo que hace 
// es descaontar de la base de datos aquellos repuestos que la cantidad actual sea mayor a la 
// indicada para retirar. Y lo guarda en la tabla de movimeintos tmb.

	if( isset($_POST["codigo"]) && !empty($_POST["codigo"]) && $_POST["accion"]=="buscar"){
	$codigo  = $_POST["codigo"];
	}
	if( isset($_GET["codigo"]) && !empty($_GET["codigo"]) && $_GET["accion"]=="buscar"){
	$codigo  = $_GET["codigo"];	
	}
	
	$mysqli = ConectarDB();
	$resultado = $mysqli->query("SELECT * FROM inventario WHERE CODIGO='$codigo'");
		if($resultado->num_rows > 0){
			$fila = $resultado->fetch_assoc();
			$nombre  = $fila['REPUESTO'];
			$cantactual = $fila['STOCK'];
			$encontro = 0;
			if (isset($_SESSION['repuestos'])) {
				for ($x=0; $x<count($_SESSION['repuestos']); $x++) {
					if($_SESSION['repuestos'][$x]['CODIGO'] == $codigo){
						$_SESSION['repuestos'][$x]['CANTIDAD']++;
						$encontro = 1;
					}
				}
				if($encontro == 0){
					$nuevo_repuesto = array('CODIGO' => $codigo, 'REPUESTO' => $nombre,'CANTIDAD' => 1,'CANTACT' => $cantactual);
 					array_push($_SESSION['repuestos'], $nuevo_repuesto);
				}
			}

			echo "<b> Repuesto Encontrado!! </b>";
			header('refresh:0; url=../retirar.php');
			
		}
		else{
			echo "<b> Repuesto NO encontrado. </b>";
			header('refresh:0; url=../retirar.php');
		}
	
		if($_POST["accion"] == "retirar"){
			$mysqli = ConectarDB();
			$pos = array(); 
			for ($x=0; $x<count($_SESSION['repuestos']); $x++) {
				$newcodigo = $_SESSION['repuestos'][$x]['CODIGO'];
				$resultado = $mysqli->query("SELECT * FROM inventario WHERE CODIGO='$newcodigo'");
				if($resultado->num_rows > 0){
					$fila = $resultado->fetch_assoc();
					$user = $_POST['user'];
					$nombre  = $fila['REPUESTO'];
					$cantaretirar = $_SESSION['repuestos'][$x]['CANTIDAD'];
					$nuevacantidad = $fila['CANTIDAD'] - $cantaretirar;
					if($nuevacantidad >= 0){
						$mysqli->query("UPDATE inventario SET CANTIDAD='$nuevacantidad' WHERE CODIGO='$newcodigo'");
						echo "<b> Repuesto ". $_SESSION['repuestos'][$x]['REPUESTO'] . "retirado Exitosamente!! </b>";
						array_push($pos, $x);
						$fecha = date(d)."-".date(m)."-".date(Y);
						$mysqli->query("INSERT INTO movimientos (FECHA,CODIGO,REPUESTO,ESTADO,CANTIDAD,USER) VALUES ('$fecha','$newcodigo','$nombre','Egreso','$cantaretirar','$user')");
					}
					else{
						$error = 1; //Error mayor cantidad a sacar que el stock actual
					}
				}
			}
			//print_r($pos);
			for ($x = count($pos) - 1; $x >-1; $x--) {
				//unset($_SESSION['repuestos'][$x]);
				array_splice($_SESSION['repuestos'], $pos[$x] , 1);
				//echo "<br>".$pos[$x];
			}
			if($error == 1){
				header('refresh:0; url=../retirar.php?error1');
			}
			else{
				header('refresh:0; url=../retirar.php');
			}
			
		}
?>