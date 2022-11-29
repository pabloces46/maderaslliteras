<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

    <?php include('../includes/head.php');?>

<!-- InstanceBeginEditable name="head" -->
<?php
session_start();
if(!isset($_SESSION['usuario']['nombre']) || empty($_SESSION['usuario']['nombre'])) 
header('refresh:0; url=../index.php');
include ('../includes/db.php');

$permisos = $_SESSION['usuario']['permisos_mto'];
if ($permisos == 2)
	header('refresh:0; url=index.php');
	

// esta pagina trae por Get el id del repuesto a modificar la cantidad y arma un fomrulario 
// con el codigo y el nombre del repuesto fijo, y un campo que es para agregar la cantidad 
// comprada del repuesto.

// este form es enviado acciones/actualizarcatindad.php que toma de la base de datos la
// cantidad actual del repuesto y le suma el valor del campo ingresado. este movimiento se 
// guarda en la tabla de movimientos de la base de datos.

if( isset($_GET["id"]) && !empty($_GET["id"])){
	$id  = $_GET["id"];
	$mysqli = ConectarDB();
	$resultado = $mysqli->query("SELECT * FROM inventario WHERE ID='$id'");
	$fila = $resultado->fetch_assoc();
}

?>
<!-- InstanceEndEditable -->
</head>

<body>

    <div id="wrapper">

        <?php include('../includes/menustock.php');?>

        <div id="page-wrapper">
		<!-- InstanceBeginEditable name="Contenido" -->
        
        
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <label>Modificar Cantidad</label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
							<?php if(isset($fila)){ ?>
                                <form action="acciones/actualizarcatindad.php" method="post" accept-charset="utf-8">
                                <input type="hidden" name="id" value="<?= $fila['ID']?>">
                                <input type="hidden" name="cantidad" value="<?= $fila['STOCK']?>">
                                <input type="hidden" name="codigo" value="<?= $fila['CODIGO']?>">
                                <input type="hidden" name="repuesto" value="<?= $fila['REPUESTO']?>">
                                <input type="hidden" name="user" value="<?= $_SESSION['usuario']['nombre']?>">
                                <div class="col-lg-3">
                                 </div><!-- /.row col-3 -->
                                 
                                  <div class="col-lg-6">
                                  <div class="table-responsive">
                                  	<table class="table">
                                        <tbody>
                                          <tr>
                                            <td>Codigo:</td>
                                            <td><?= $fila['CODIGO']?></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>Repuesto:</td>
                                            <td><?= $fila['REPUESTO']?></td>
                                          </tr>

                                            <tr>
                                            <td>Cant. Actual:</td>
                                            <td><?= $fila['STOCK']?></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>Cantiadad a agregar:</td>
                                            <td><input type="number" min="1" name="nuevacantidad" value="1" class="form-control"></td>
                                          </tr>
  
                                        </tbody>
                                    </table><!-- /.table -->
                                  </div><!-- /.table-responsive -->
                                    
                                    
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Agregar cantidad</button>
                                  </div> <!-- /.row col-3 -->

                                <div class="col-lg-3">
                                </div> <!-- /.row col-3 -->
                                </form>
								<?php }// End if isset($fila) ?>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

		
		<!-- InstanceEndEditable -->
        
      	</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('../includes/footer.php');?>

</body>

<!-- InstanceEnd --></html>
