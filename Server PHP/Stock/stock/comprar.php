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
if($permisos > 1){
	header('refresh:0; url=_repuestos.php');
}		


$mysqli = ConectarDB();
$resultado = $mysqli->query("SELECT * FROM inventario WHERE STOCK < CANTMIN");

// en esta pagina se hace un consulta de todos los repuestos en los que la cantidad
// actual es menor a la cantidad minima y se muestran en una tabla
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
                                    Artículos a reponer  <b>(<?= $resultado->num_rows; ?>)</b>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <?php
									if ($resultado->num_rows > 0){ ?>

                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>Código</th>
                                            <th>Artículo</th>
                                            <th>Proveedor</th>
                                            <th>Cod. Prov.</th>
                                            <th>Unidad</th>
                                            <th>Cant. Actual</th>
                                            <th>Cant. Minima</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>Código</th>
                                            <th>Artículo</th>
                                            <th>Proveedor</th>
                                            <th>Cod. Prov.</th>
                                            <th>Unidad</th>
                                            <th>Cant. Actual</th>
                                            <th>Cant. Minima</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php      
                                                while ($fila = $resultado->fetch_assoc()) {
                                                    if($fila['ESTADO']=="activo"){
                                                        echo "<tr>";
                                                        echo "<td><a href='_masdetallesrepuestos.php?codigo=$fila[CODIGO]'>" . $fila['CODIGO'] . "</a></td>";
                                                        echo "<td>" . $fila['REPUESTO'] . "</td>";
                                                        echo "<td>" . $fila['PROVEEDOR'] . "</td>";
                                                        echo "<td>" . $fila['CODPROV'] . "</td>";
                                                        echo "<td>" . $fila['UNIDAD'] . "</td>";
                                                        echo "<td align='center'>" . $fila['STOCK'] . "</td>";
                                                        echo "<td align='center'>" . $fila['CANTMIN'] . "</td>";
                                                        echo "</tr>";	
                                                    }// IF estado
                                                }//While
                                                ?>
                
                                        </tbody>
                                    </table>
                                </div>

                              </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                    <?php } ?>
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->

               
		
		<!-- InstanceEndEditable -->
        
      	</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('../includes/footer.php');?>

</body>

<!-- InstanceEnd --></html>
