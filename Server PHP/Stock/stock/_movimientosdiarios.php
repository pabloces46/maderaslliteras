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

if(isset($_POST['desde'])  && $_POST['desde'] != '' && isset($_POST['hasta'])  && $_POST['hasta'] != ''){

    $add_sql = '';
    if(isset($_POST['tipo']) && $_POST['tipo'] != 'TODOS'){
        $add_sql = $add_sql. " AND TIPO = '".$_POST['tipo']."'";
    }
    if( isset($_POST['deposito']) && $_POST['deposito'] != 'TODOS'){
        $add_sql = $add_sql. " AND DEPOSITO = '".$_POST['deposito']."'";
    }

    $texto = "Movimientos desde el ".$_POST['desde']." hasta el ".$_POST['hasta'];
    $desde = $_POST['desde'];
    $hasta = $_POST['hasta'];
    
    $desde = date("Y-m-d 00:00", strtotime($desde));
    $hasta = date("Y-m-d 00:00", strtotime($hasta ."+ 1 day"));
    $exportar = "retiros/resultados.php?desde=".$desde."&hasta=".$hasta;
    //$texto = "Movimientos desde el ".$desde." hasta el ".$hasta;
    $sql = "SELECT * FROM movimientos LEFT JOIN inventario ON movimientos.CODIGO = inventario.CODIGO WHERE FECHA between '$desde' and '$hasta'".$add_sql;
    //$sql = "SELECT * FROM movimientos WHERE FECHA between '$desde' and '$hasta'";
    $mysqli = ConectarDB();
    $movimientos = $mysqli->query($sql);

}
else{
    $add_sql = '';
    if(isset($_POST['tipo']) && $_POST['tipo'] != 'TODOS'){
        $add_sql = $add_sql. " AND TIPO = '".$_POST['tipo']."'";
    }
    if( isset($_POST['deposito']) && $_POST['deposito'] != 'TODOS'){
        $add_sql = $add_sql. " AND DEPOSITO = '".$_POST['deposito']."'";
    }
    $fecha = date("Y-m-d");
    //$sql= "SELECT * FROM movimientos WHERE FECHA LIKE '%".$fecha."%'".$add_sql;
    $sql = "SELECT * FROM movimientos LEFT JOIN inventario ON movimientos.CODIGO = inventario.CODIGO WHERE FECHA LIKE '%".$fecha."%'".$add_sql;
    $mysqli = ConectarDB();
    $movimientos = $mysqli->query($sql);

    $desde = date("Y-m-d 00:00");
    $hasta = date("Y-m-d 00:00", strtotime(date("Y-m-d") ."+ 1 day"));
    $exportar = "retiros/resultados.php?desde=".$desde."&hasta=".$hasta;
    $texto = "Movimientos del día";
}

$resultado_tipo = $mysqli->query("SELECT TIPO FROM inventario GROUP BY TIPO ORDER BY TIPO ASC");
$resultados_deposito = $mysqli->query("SELECT DEPOSITO FROM inventario GROUP BY DEPOSITO ORDER BY DEPOSITO ASC");

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
                        <div class="panel-heading" align="center"> Seleccione filtros de Búsqueda</div>
                        <div class="panel-body">
                        <div class="row">
                            <form method="POST" action="_movimientosdiarios.php">
                                <div class="col-lg-3">
                                Fecha desde:
                                <input type="date" name="desde" class="form-control">
                                </div>
                                <div class="col-lg-3">
                                hasta:
                                <input type="date" name="hasta" class="form-control">
                                </div>
                                <div class="col-lg-2">
                                    Depósito
                                    <select name="deposito" class="form-control">
                                        <option value="TODOS"> TODOS</option>
                                        <?php
                                        while ($fila = $resultados_deposito->fetch_assoc()) {
                                            if($fila['DEPOSITO'] != '')
                                            echo "<option value=". $fila['DEPOSITO'] .">". strtoupper( $fila['DEPOSITO'] )."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    TIpo / Rubro
                                    <select name="tipo" class="form-control">
                                        <option value="TODOS">TODOS</option>
                                        <?php
                                        while ($fila = $resultado_tipo->fetch_assoc()) {
                                            if($fila['TIPO'] != '')
                                            echo "<option value=". $fila['TIPO'] .">". strtoupper( $fila['TIPO'] )."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-2">
                                    <br>
                                <button type="submit" class="btn btn-primary">Buscar</button>
                                </button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Table de informe -->
		<?php
        if (isset($movimientos)){
            $movimientos->data_seek(0); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    
                                <div class="panel-heading" align="center">
                                    <?php echo $texto; ?>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                <th>Código</th>
                                                <th>Articulo</th>
                                                <th>Usuario</th>
                                                <th>Fecha</th>
                                                <th>Cantidad</th>
                                                <th>Comentario</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                <?php 
                                while($mov=$movimientos->fetch_assoc()){
                                ?>
                                <tr>   
                                    <td><a href='_masdetallesrepuestos.php?codigo=<?php echo $mov['CODIGO']; ?>'><?php echo $mov['CODIGO']; ?></a></td>
                                    <td><?php echo $mov['REPUESTO']; ?></td>
                                    <td><?php echo $mov['USER']; ?></td>
                                    <td><?php echo date("d-m-Y H:i", strtotime($mov['FECHA'])); ?></td>
                                    <td><b><?php echo $mov['CANTIDAD'];
                                    if($mov['TIPO_MOV'] == "Ingreso")
                                        echo "   <i class='fa fa-arrow-up' style='color:#0C3'></i>";
                                    if($mov['TIPO_MOV'] == "Egreso")
                                        echo "   <i class='fa fa-arrow-down' style='color:#F00'></i>";
                                    if($mov['TIPO_MOV'] == "Devolucion")
                                        echo "   <i class='fa fa-exchange'></i>";
                                    ?>
                                    </b></td>
                                    <td><?php echo $mov['COMENTARIOS']; ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                                        </table>
                                    </div><!-- /.table-responsive -->
                              </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                </div><!-- /.col-lg-12 -->
            </div><!-- /.row -->
		<?php } ?>
	
        
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('../includes/footer.php');?>

</body>

<!-- InstanceEnd --></html>
