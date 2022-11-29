<?php


if (empty($_POST['old']))
{
	$errors[] = "El campo PIN actual está vacío";
}
elseif(empty($_POST['new']))
{
	$errors[] = "El campo Nuevo PIN está vacío";
}
elseif(strlen ($_POST['new']) < 4)
{
	$errors[] = "El PIN debe tener como mínimo 4 números";
}
elseif(strlen ($_POST['new']) > 8)
{
	$errors[] = "El PIN debe tener como máximo 8 números";
}
else
{

	include ('../../includes/db.php');
	$mysqli = ConectarDB();
	$old = $_POST['old'];
	$new = $_POST['new'];
	$user = $_POST['user'];

	$sql = "SELECT * FROM usuarios WHERE USER = '$user'";
	$query_user = $mysqli->query($sql);

  if ($query_user->num_rows == 0) {
        $errors[] = "Lo sentimos , usuario NO encontrado.";
  } 
  else 
  {
  		$fila = $query_user->fetch_assoc();
  		$oldpass = $fila['PWD'];

  		if($oldpass == $old){
  			$user;
         // actualizamos el pass
  			$sql = "UPDATE usuarios SET PWD = '$new' WHERE USER = '$user'";
        	$query_update = $mysqli->query($sql);

	        // Si la contraseña se cambio correctamente
		    if ($query_update) {
		        $messages[] = "PIN cambiado con éxito.";
		        echo "<meta http-equiv='refresh' content='1; url=cerrar.php'>";
		    } 
		    else {
		        $errors[] = "Lo sentimos, el cambio falló. Por favor, regrese y vuelva a intentarlo.";
		        echo("Error description: " . $mysqli -> error);
		    }  

  		}

  		else{
  			$errors[] = "PIN actual incorrecto.";
  		}
	    
	}
}

if (isset($errors)){         
      ?>

	<div class="alert alert-danger" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Error!</strong> 
		<?php
		foreach ($errors as $error) 
			echo $error;
		?>
	</div>

<?php
}

if (isset($messages)){               
?>
	<div class="alert alert-success" role="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>¡Bien hecho!</strong>
		<?php
		foreach ($messages as $message)
	        echo $message;
	?>

	</div>

<?php
}
?>