<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

    <?php include('../includes/head.php');?>

<!-- InstanceBeginEditable name="head" -->

<style type="text/css" media="print">
@media print {
#inventario {display:none;}
#movimientos {display:none;}
#vermovs {display:none;}
}
</style>

<?php
session_start();
if(!isset($_SESSION['usuario']['nombre']) || empty($_SESSION['usuario']['nombre'])) 
header('refresh:0; url=../index.php');




$permisos = $_SESSION['usuario']['permisos_mto'];
if($permisos > 2){
	header('refresh:0; url=_repuestos.php');
}	
include_once ('../includes/db.php');
$mysqli = ConectarDB();
$result_proveedor = $mysqli->query("SELECT PROVEEDOR FROM inventario GROUP BY PROVEEDOR ORDER BY PROVEEDOR ASC");

if(isset($_GET['f']) && !empty($_GET['f'])){
    $permisos = $_SESSION['usuario']['permisos_mto'];
    $f = $_GET['f'];
    $sql= "SELECT CODIGO,REPUESTO,PROVEEDOR,CODPROV,PRESENTACION,UNIDAD,STOCK,CANTMIN,ESTADO,UBICACION FROM inventario WHERE PROVEEDOR LIKE '%$f%' ORDER BY UBICACION ASC";
	$mysqli = ConectarDB();
    $resultado = $mysqli->query($sql);
    $totalData = $resultado->num_rows;
}
?>

</script>
<!-- InstanceEndEditable -->
</head>

<body>

    <div id="wrapper">

        <?php include('../includes/menustock.php');?>

        <div id="page-wrapper">
		<!-- InstanceBeginEditable name="Contenido" -->

        <!-- InstanceBeginEditable name="Contenido" -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" align="center">
                            <label>Exixtencias de Artículos</label>
                        </div>
                        <div class="panel-body">
                            
                                <div class="row">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-6" align="center">
                                            
                                            <div class="form-group input-group" style="padding-top:12px;">
                                            <input list="proveedor_b" name="proveedor_b" type="text" placeholder="Seleccione un proveedor" class="form-control"  id="busqueda" autofocus="">
                                            <datalist id="proveedor_b">
                                              <?php
                                                while ($row = $result_proveedor->fetch_assoc()) {
                                                  echo "<option value='". $row['PROVEEDOR'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>    
                                            <span class="input-group-btn">
                                                    <button class="btn btn-default" id="btn_buscar"><i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                            </div>

                                    </div>
                                    
                                    
                                </div>

                            <hr>
                            <?php
                            if(isset($_GET['f']) && !empty($_GET['f'])){
                                ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Artículo</th>
                                            <th>Proveedor</th>
                                            <th>Cod. Prov.</th>
                                            <th>Pres.</th>
                                            <th>Uni.</th>
                                            <th>Stock</th>
                                            <th>Stock Crit.</th>
                                            <th>Reponer</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Codigo</th>
                                            <th>Artículo</th>
                                            <th>Proveedor</th>
                                            <th>Cod. Prov.</th>
                                            <th>Pres.</th>
                                            <th>Uni.</th>
                                            <th>Stock</th>
                                            <th>Stock Crit.</th>
                                            <th>Reponer</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    while ($fila = $resultado->fetch_assoc()) {
                                    if($fila['ESTADO']=="activo"){
                                    echo "<tr>";
                                    echo "<td><a href='_masdetallesrepuestos.php?codigo=$fila[CODIGO]' target='_blank'>" . $fila['CODIGO'] . "</a></td>";
                                    echo "<td>" . $fila['REPUESTO'] . "</td>";
                                    echo "<td>" . $fila['PROVEEDOR'] . "</td>";
                                    echo "<td>" . $fila['CODPROV'] . "</td>";
                                    echo "<td>" . $fila['PRESENTACION'] . "</td>";
                                    echo "<td>" . $fila['UNIDAD'] . "</td>";
                                    if($fila['STOCK'] < $fila['CANTMIN'] ){
                                        echo "<td align='center' style='background:red;color:white;'>" . $fila['STOCK'] . "</td>";
                                    }
                                    else{
                                        echo "<td align='center'>" . $fila['STOCK'] . "</td>";
                                    }

                                    echo "<td align='center'>" . $fila['CANTMIN'] . "</td>";

                                    if((($fila['CANTMIN']*2)-$fila['STOCK']) < 0){
                                        echo "<td>" . 0 . "</td>";
                                    }
                                    else{
                                        echo "<td>" . (($fila['CANTMIN']*2)-$fila['STOCK']) . "</td>";
                                    }
                                    echo "<td>";
                                    echo "<a href='qr/index.php?codigo=".$fila['CODIGO']."' target='_blank' title='Código QR'><span class='glyphicon glyphicon-qrcode'></span></a>";
                                        if($permisos < 2){
                                            echo "<a href='modificar.php?id=".$fila['CODIGO']."' title='Modificar'><span class='glyphicon glyphicon-edit' style='padding-left: 5px;'></span></a>";
                                            echo "<a href='duplicar.php?id=".$fila['CODIGO']."' title='Modificar'><span class='glyphicon glyphicon-copy' style='padding-left: 5px;'></span></a>";
                                            echo "<a href='#' title='Borrar' onclick='borrar(".$fila['CODIGO'].")'><span class='glyphicon glyphicon-trash' style='padding-left: 5px;' ></span></a>";
                                        }

                                    echo "</td>";
                                    echo "</tr>";
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php
                            }
                            ?>
                            
                                
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->    
                
        </div>
        <!-- /#page-wrapper -->
        
    </div>
    <!-- /#wrapper -->

    <?php include('../includes/footer.php');?>

    <script type="text/javascript">
        function borrar(codigo) {

            var a = confirm("¿Seguro deseas eliminar el artículo?");

            if ( a == true){
                $.ajax({
                type: "POST",
                url: "acciones/_eliminararticulo.php",
                data: "b="+codigo,
                dataType: "html",
                success: function(data){      
                    console.log(data);                                      
                    if(data == "err1"){
                        alert("Error al eliminar el articulo, intentalo nuevamente.");
                    }

                    if(data == "err0"){
                        alert("Artículo '" +codigo+ "' elimindo correctamente.");
                        location.reload();
                    }

                }
                });
            }

        }
    </script>
    
    <script type="text/javascript">
    $(document).ready(function(){

        $("#busqueda").keyup(function(e){

            var consulta = $("#busqueda").val();

            if(e.which == 13){
            //hace la búsqueda cuando presiono enter 
                location.href = "?f="+consulta;
            }                                                                                                                         
        });   

        $("#btn_buscar").click(function() {

            var consulta = $("#busqueda").val();
            location.href = "?f="+consulta;                                                                                                                     
        });    
    });  
    </script>

</body>

<!-- InstanceEnd --></html>
