<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

    <?php include('../includes/head.php');?>

<!-- InstanceBeginEditable name="head" -->
<?php
session_start();
if(!isset($_SESSION['usuario']['nombre']) || empty($_SESSION['usuario']['nombre'])) 
header('refresh:0; url=../index.php');


// esta pagina trae por Get el id del repuesto a modificar y arma un formulario igual 
// al de dar de alta un repuesto, pero con los valores ya precargados del repuesto.
// aca no se puede modificar la cantidad actual ya que para eso esta la otra pagina de 
// modificar cantidad

include ('../includes/db.php');

$permisos = $_SESSION['usuario']['permisos_mto'];
if($permisos > 2){
	header('refresh:0; url=_repuestos.php');
}	

if( isset($_GET["id"]) && !empty($_GET["id"])){
	$id  = $_GET["id"];
	$mysqli = ConectarDB();
	$resultado = $mysqli->query("SELECT * FROM inventario WHERE CODIGO='$id'");
	$fila = $resultado->fetch_assoc();
}

$resultados = $mysqli->query("SELECT TIPO FROM inventario GROUP BY TIPO ORDER BY TIPO ASC");
$resultados2 = $mysqli->query("SELECT DEPOSITO FROM inventario GROUP BY DEPOSITO ORDER BY DEPOSITO ASC");
$resultados3 = $mysqli->query("SELECT PROVEEDOR FROM inventario GROUP BY PROVEEDOR ORDER BY PROVEEDOR ASC");
$resultados4 = $mysqli->query("SELECT UNIDAD FROM inventario GROUP BY UNIDAD ORDER BY UNIDAD ASC");
$resultados5 = $mysqli->query("SELECT PRESENTACION FROM inventario GROUP BY PRESENTACION ORDER BY PRESENTACION ASC");


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
                            <label>Modificar Repuesto</label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="acciones/_editar.php" method="post" accept-charset="utf-8">
                                <input type="hidden" name="id" value="<?= $fila['ID']?>">
                                <div class="col-lg-3">
                                 </div><!-- /.row col-3 -->
                                 
                                  <div class="col-lg-6">
                                  <div class="table-responsive">
                                  	<table class="table">
                                        <tbody>
                                          <tr>
                                            <td>Codigo:</td>
                                            <td><input type="text" name="codigo" value="<?= $fila['CODIGO']?>" class="form-control" readonly></td>
                                          </tr>
                                          
                                          

                                          <tr>
                                            <td>Tipo / Rubro:</td>
                                            <td>
                                              <input list="tipo" name="tipo" type="text" value="<?= $fila['TIPO']?>" placeholder="Seleccione un tipo/rubro" class="form-control" required="">
                                            <datalist id="tipo">
                                              <?php
                                                while ($row = $resultados->fetch_assoc()) {
                                                  echo "<option value='". $row['TIPO'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Artículo:</td>
                                            <td><input type="text" name="repuesto" value="<?= $fila['REPUESTO']?>" class="form-control"></td>
                                          </tr>

                                          <tr>
                                            <td>Proveedor:</td>
                                            <td>
                                              <input list="proveedor" name="proveedor" type="text" value="<?= $fila['PROVEEDOR']?>" placeholder="Seleccione un proveedor" class="form-control" required="">
                                            <datalist id="proveedor">
                                              <?php
                                                while ($row = $resultados3->fetch_assoc()) {
                                                  echo "<option value='". $row['PROVEEDOR'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Cód. Proveedor:</td>
                                            <td><input type="text" name="codprov" value="<?= $fila['CODPROV']?>" placeholder="Código proveedor" class="form-control" required=""></td>
                                          </tr>
                                          
                                          
                                            <tr>
                                            <td>Descripcion:</td>
                                            <td><textarea name="descripcion" class="form-control"><?= $fila['DESCRIPCION']?></textarea></td>
                                          </tr>
                                          
                                          <tr>
                                            <td>Comentarios:</td>
                                            <td><textarea name="uso" class="form-control"><?= $fila['USO']?></textarea></td>
                                          </tr>
                                          
                                          
                                          <tr>
                                            <td>Cant. Minima:</td>
                                            <td><input type="number" min="0" name="cantmin" value="<?= $fila['CANTMIN']?>" class="form-control"></td>
                                          </tr>

                                          <tr>
                                            <td>Presentación:</td>
                                            <td>
                                              <input list="presentacion" name="presentacion" type="text" value="<?= $fila['PRESENTACION']?>" placeholder="Presentación" class="form-control" required="">
                                            <datalist id="presentacion">
                                              <?php
                                                while ($row = $resultados5->fetch_assoc()) {
                                                  echo "<option value='". $row['PRESENTACION'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Unidad de medida:</td>
                                            <td>
                                              <input list="unidad" name="unidad" type="text" value="<?= $fila['UNIDAD']?>" placeholder="Unidad de medida" class="form-control" required="">
                                            <datalist id="unidad">
                                              <?php
                                                while ($row = $resultados4->fetch_assoc()) {
                                                  echo "<option value='". $row['UNIDAD'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Depósito:</td>
                                            <td>
                                              <input list="deposito" name="deposito" type="text" value="<?= $fila['DEPOSITO']?>" placeholder="Seleccione un depósito" class="form-control" required="">
                                            <datalist id="deposito">
                                              <?php
                                                while ($row = $resultados2->fetch_assoc()) {
                                                  echo "<option value='". $row['DEPOSITO'] ."'></option>";
                                                }
                                              ?>
                                            </datalist>
                                            </td>
                                          </tr>
                                          
                                           <tr>
                                            <td>Ubicacion:</td>
                                            <td><input type="text" name="ubicacion" value="<?= $fila['UBICACION']?>" class="form-control"></td>
                                          </tr>

                                          <tr>
                                            <td>
                                              Imagen: 
                                              <button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#ModalNewFoto"><i class="fa fa-plus"></i>
                                              </button>
                                            </td>
                                            <td><input type="text" name="imagen" id="imagen" value="<?= $fila['IMAGEN']?>" class="form-control" readonly ></td>
                                          </tr>
                                          
                                         
                                        </tbody>
                                    </table><!-- /.table -->
                                  </div><!-- /.table-responsive -->
                                    
                                    
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Modificar Artículo</button>
                                  </div> <!-- /.row col-3 -->

                                <div class="col-lg-3">
                                </div> <!-- /.row col-3 -->
                                </form>
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

          <!-- Modal -->
          <div class="modal fade" id="ModalNewFoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title" id="myModalLabel">Nueva Imagen</h4>
                      </div>
                      <div class="modal-body">
                          <form method="POST" id="foto_form" enctype="multipart/form-data">
                             <input type="file" class="form-control" name="uploadedFile" />
                          </form>
                          <div style="color: red;" id="result"></div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-primary" id="Btn_guardar_foto">Guardar</button>
                      </div>
                  </div>
                  <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

    </div>
    <!-- /#wrapper -->

    <?php include('../includes/footer.php');?>

<script type="text/javascript">
$(document).ready(function(){
                                                                                                                                                          
    $( "#Btn_guardar_foto" ).click(function() {

        var form = $('#foto_form');
        var formdata = false;
        if (window.FormData){
            formdata = new FormData(form[0]);
        }

        var formAction = form.attr('action');
        $.ajax({
            url         : 'acciones/_upload_foto.php',
            data        : formdata ? formdata : form.serialize(),
            cache       : false,
            contentType : false,
            processData : false,
            type        : 'POST',
            success     : function(data, textStatus, jqXHR){
              if(data.message == 'ok'){
                document.getElementById("imagen").value = data.data;
                $("#result").empty();
                $("#result").append("Archivo subido correctamente.");
              }
              else{
                $("#result").empty();
                $("#result").append(data.message);
              }
              
            }
        });
    });
});



</script>

</body>

<!-- InstanceEnd --></html>
