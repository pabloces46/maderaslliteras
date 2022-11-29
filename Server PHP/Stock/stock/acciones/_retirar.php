<?php
session_start();

include ('../../includes/db.php');
$mysqli = ConectarDB();


$user = $_SESSION['usuario']['nombre'];

$sql = "SELECT STOCK,REPUESTO FROM inventario WHERE CODIGO = '$_POST[modal_codigo]'";
$resultados = $mysqli->query($sql);
$row=$resultados->fetch_assoc();

if($row['STOCK'] - $_POST['modal_cantidad'] >= 0){
  $sql = "UPDATE inventario SET STOCK = STOCK - '$_POST[modal_cantidad]' WHERE CODIGO = '$_POST[modal_codigo]'";

  if( $mysqli->query($sql) === True){
      $fecha = date("Y-m-d H:i");
      $sql = "SELECT REPUESTO,STOCK,CODIGO,UNIDAD FROM inventario WHERE CODIGO = '$_POST[modal_codigo]'";
      $resultados = $mysqli->query($sql);
      $row=$resultados->fetch_assoc();
      $parcial = $row['STOCK'];
      $parcial_user = $_POST['modal_quedan'];
      $mysqli->query("INSERT INTO movimientos (FECHA,CODIGO,ARTICULO,TIPO_MOV,CANTIDAD,USER,RECURSO,COMENTARIOS,PARCIAL,PARCIALAPP,DISPOSITIVO) VALUES ('$fecha','$_POST[modal_codigo]','$row[REPUESTO]','Egreso','$_POST[modal_cantidad]','$user','','$_POST[modal_comentarios]','$parcial', '$parcial_user','WEB')");
      echo "Se retiraron $_POST[modal_cantidad] de $_POST[modal_codigo]";

      $getUsers = $mysqli->query("SELECT * FROM usuarios WHERE NOTIF_MOV = 'SI'");
      while($user2 = $getUsers->fetch_assoc()){
        $texto = "<b>$user</b> retiró <b>$_POST[modal_cantidad] $row[UNIDAD]</b> 
                  <br> Artículo: <b>$row[REPUESTO]</b> 
                  <br> Código: <b>$row[CODIGO]</b> - Stock: <b>$parcial</b>";
        $notif = $mysqli->query("INSERT INTO notificaciones (USER,TEXTO,TIPO) VALUES ('$user2[USER]','$texto','MOV')");
      }

      

      if($parcial_user != $parcial){
        $getUsers = $mysqli->query("SELECT * FROM usuarios WHERE NOTIF_DIF = 'SI'");
        
        if($parcial_user == ''){
          $texto = "<b>$user</b> no indicó el stock 
                    <br> Artículo: <b>$row[REPUESTO]</b> 
                    <br> Código: <b>$row[CODIGO]</b> - Stock: <b>$parcial</b>";
          while($user2 = $getUsers->fetch_assoc()){    
            $notif = $mysqli->query("INSERT INTO notificaciones (USER,TEXTO,TIPO) VALUES ('$user2[USER]','$texto','DIF2')");
          }

        }
        else{

          $texto = "No coincide el stock indicado por <b>$user</b>
                    <br> Artículo: <b>$row[REPUESTO]</b> 
                    <br> Código: <b>$row[CODIGO]</b> 
                    <br> Stock: <b>$parcial</b>
                    <br> Stock Indicado: <b>$parcial_user</b>";

          while($user2 = $getUsers->fetch_assoc()){    
              $notif = $mysqli->query("INSERT INTO notificaciones (USER,TEXTO,TIPO) VALUES ('$user2[USER]','$texto','DIF')");
          }
        }
          
          
      }

      

  }
  else{
      echo "Error al actualizar la cantidad del $_POST[modal_codigo].";
  }
}
else{
  echo "Repuestos insuficientes.";
}


?>