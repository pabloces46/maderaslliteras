<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

    <?php include('../includes/head.php');?>

<!-- InstanceBeginEditable name="head" -->

<?php
session_start();
if (!isset($_SESSION['repuestos'])) {
	$_SESSION['repuestos']=array();
}


if(!isset($_SESSION['usuario']['nombre']) || empty($_SESSION['usuario']['nombre'])) 
		header('refresh:0; url=../index.php');

$permisos = $_SESSION['usuario']['permisos_mto'];

include ('../includes/db.php');


if( isset($_GET["codigo"]) && !empty($_GET["codigo"])){
    $codigo = $_GET['codigo'];
    $mysqli = ConectarDB();

    $sql = "SELECT * FROM inventario WHERE CODIGO = '$codigo'";
    $resultados = $mysqli->query("SELECT * FROM inventario WHERE CODIGO = '$codigo'");
    $repuesto=$resultados->fetch_assoc();

    $sql="SELECT * FROM movimientos WHERE CODIGO = '$codigo' ORDER BY ID DESC";
    $mysqli = ConectarDB();
    $movimientos = $mysqli->query($sql);
}
else{
    header('refresh:0; url=../index.php');
}

?>

<style>
/* Tooltip container */
.tooltip2 {
  position: relative;
  display: inline-block;
}

/* Tooltip text */
.tooltip2 .tooltiptext2 {
  visibility: hidden;
  width: 100px;
  background-color: #555;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;

  /* Position the tooltip text */
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -60px;

  /* Fade in tooltip */
  opacity: 0;
  transition: opacity 0.3s;
}

/* Tooltip arrow */
.tooltip2 .tooltiptext2::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip2:hover .tooltiptext2 {
  visibility: visible;
  opacity: 1;
}
</style>

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
                <label> DETALLES DEL ARTICULO</label>
                <?php
                if($permisos == 0)
                    echo "<a href='modificar.php?id=$codigo' title='Modificar' style='float: right;'><span class='glyphicon glyphicon-edit'></span></a>";
                ?>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-body text-center">
                                <img src="../archivos/repuestos/<?php echo $repuesto['IMAGEN']; ?>" width="300">
                            </div>
                            
                            <?php
                            if($permisos < 3){ ?>
                            <div class="col-lg-4 text-center">
                                <button type="button" class="btn btn-success  btn-circle" data-toggle="modal" data-target="#modal_agregar" onclick="SetCodigoAgregar('<?php echo $repuesto['CODIGO']; ?>')"><i class="fa fa-plus" ></i>
                                </button>
                            </div>
                            <?php } ?>

                            <div class="col-lg-4 text-center">
                                <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#modal_retirar" onclick="SetCodigo('<?php echo $repuesto['CODIGO']; ?>')"><i class="fa fa-minus"></i>
                                </button>
                            </div>

                            <div class="col-lg-4 text-center">
                                <a href="qr/index.php?codigo=<?php echo $repuesto['CODIGO']; ?>"  target = "_blank" ><button type="button" class="btn btn-info btn-circle"><i class="fa fa-barcode"></i>
                                </button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">

                                        <div class="col-xs-9">
                                            <div class="huge"><?php echo $repuesto['CODIGO']; ?></div>
                                            <div>Ubicación: <b><?php echo $repuesto['UBICACION']; ?></b> - Depósito: <b><?php echo $repuesto['DEPOSITO']; ?></b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $repuesto['STOCK']; ?></div>
                                            <div>En Stock</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-shopping-cart fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $repuesto['CANTMIN']; ?></div>
                                            <div>Stock min</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    Datos del Artículo
                                </div>
                                <div class="panel-body">
                                    <p><b>Artículo:</b> <?php echo $repuesto['REPUESTO']; ?></p>
                                    <p><b>Presentación:</b> <?php echo $repuesto['PRESENTACION']; ?></p>
                                    <p><b>Unidad de medida:</b> <?php echo $repuesto['UNIDAD']; ?></p>
                                    <p><b>Descripción:</b> <?php echo $repuesto['DESCRIPCION']; ?></p>
                                    <p><b>Comentarios:</b> <?php echo $repuesto['USO']; ?></p>
                                    <br>
                                    <p><b>Proveedor:</b> <?php echo $repuesto['PROVEEDOR']; ?></p>
                                    <p><b>Código Proveedor:</b> <?php echo $repuesto['CODPROV']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <?php 
            if($permisos < 2){
            ?>
            <div class="row">
            

                <div class="col-lg-12">
  
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Fecha</th>
                                    <th>Cantidad</th>
                                    <th>Stock Parcial</th>
                                    <th>Comentario</th>
                                    <th>Disp.</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    while($mov=$movimientos->fetch_assoc()){
                                ?>
                                <tr>
                                    <td><?php echo $mov['USER']; ?></td>
                                    <td><?php echo date("d-m-Y H:i", strtotime($mov['FECHA'])); ?></td>
                                    <td align="center"><b><?php echo $mov['CANTIDAD'];
                                    if($mov['TIPO_MOV'] == "Ingreso")
                                        echo "   <i class='fa fa-arrow-up' style='color:#0C3'></i>";
                                    if($mov['TIPO_MOV'] == "Egreso")
                                        echo "   <i class='fa fa-arrow-down' style='color:#F00'></i>";
                                    if($mov['TIPO_MOV'] == "Devolucion")
                                        echo "   <i class='fa fa-exchange'></i>";
                                    ?>
                                    </b></td>
                                    <td align="center"><b><?php echo $mov['PARCIAL']; ?></b></td>
                                    <td alt="5"><?php echo $mov['COMENTARIOS']; ?></td>
                                    <td><div class="tooltip2"><?php echo $mov['DISPOSITIVO']; ?>
                                            <span class="tooltiptext2"><?php echo $mov['PARCIALAPP']; ?></span>
                                            </div></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

    </div>
</div>

<div class="panel-body">
                <!-- Modal Retirar-->
                <div class="modal fade" id="modal_retirar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Retirar Repuesto</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <form method="POST" id="form_retirar">
                                    <div class="col-lg-3">
                                        CODIGO:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="modal_codigo" name="modal_codigo" class="form-control" readonly="">
                                    </div>
                                    <div class="col-lg-3">
                                        RETIRO:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" name="modal_cantidad" id="modal_cantidad" class="form-control" min="1" required="">
                                    </div>

                                    <div class="col-lg-3">
                                        QUEDAN:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" name="modal_quedan" id="modal_quedan" class="form-control" min="0">
                                    </div>

                                    <div class="col-lg-3">
                                        COMENTARIOS:
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea class="form-control" name="modal_comentarios" id="modal_comentarios"></textarea>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" id="btn_retirar">Confirmar</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
                <!-- Modal Retirar-->
                <div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">Agregar Repuesto</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                <form method="POST" id="form_agregar">
                                    <div class="col-lg-3">
                                        CODIGO:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" id="agregar_codigo" name="agregar_codigo" class="form-control" readonly="">
                                    </div>
                                    <div class="col-lg-3">
                                        CONDICIÓN:
                                    </div>
                                    <div class="col-lg-9">
                                    <select class="form-control" id="agregar_condicion" name="agregar_condicion" required="">
                                        <option value="nuevo">Nuevo</option>
                                        <option value="devolucion">Devolución</option>
         
                                    </select>
                                    </div>
                                    <div class="col-lg-3">
                                        CANTIDAD:
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" name="agregar_cantidad" id="agregar_cantidad" class="form-control" min="1" required="">
                                    </div>
                                    <div class="col-lg-3">
                                        COMENTARIO:
                                    </div>
                                    <div class="col-lg-9">
                                        <textarea name="agregar_comentario" id="agregar_comentario" class="form-control"></textarea>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-primary" id="btn_agregar">Confirmar</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div id="snackbar"></div>
<!-- /.row -->

<!-- InstanceEndEditable -->

</div>
<!-- /#page-wrapper -->

</div>
    <!-- /#wrapper -->
<?php include('../includes/footer.php');?>

<script type="text/javascript">
$(document).ready(function(){

  //comprobamos si se pulsa una tecla
  $("#busqueda").keyup(function(e){

      var consulta = $("#busqueda").val();
      //var filtro = $("input[name='radio']:checked").val();

      if(consulta.length > 2){                                                     
      //hace la búsqueda si hay por lo menos 2 letras                                                 
        $.ajax({
              type: "POST",
              url: "acciones/_buscarrepuestos.php",
              //data: "b="+consulta + "&f=" + filtro,
              data: "b="+consulta,
              dataType: "html",
              success: function(data){                                                    
                    $("#resultado").empty(); 
                    $("#resultado").append(data);                                
              }
        });
    
      }else{
        $("#resultado").empty(); 
      }                                                                                                                              
  });     

  $("#btn_retirar").click(function() {

    var enviar = false;
    /*if($("#modal_maquina").val() != ''){
        enviar = true;
    }
    else{
        alert("Debes seleccionar una maquina.");
        enviar = false;
    }*/
    if($("#modal_cantidad").val() > 0){
        enviar = true;
    }
    else{
        alert("Debes seleccionar la cantidad a retirar.");
        enviar = false;
    }

    if(enviar == true){

       $.ajax({
          type: "POST",
          url: "acciones/_retirar.php",
          data: $("#form_retirar").serialize(),
          dataType: "html",
          success: function(data){
                $('#modal_retirar').modal('hide');
                $("#snackbar").empty();                                           
                $("#snackbar").append(data);
                showToast();
                setTimeout("location.reload(true);",1500);

          }
        }); 
    }
    
  });

  $("#btn_agregar").click(function() {

    var enviar = false;
    if($("#agregar_cantidad").val() > 0){
        enviar = true;
    }
    else{
        alert("Debes seleccionar la cantidad a agregar.");
        enviar = false;
    }

    if(enviar == true){

       $.ajax({
          type: "POST",
          url: "acciones/_agregar.php",
          data: $("#form_agregar").serialize(),
          dataType: "html",
          success: function(data){
                $('#modal_agregar').modal('hide');
                $("#snackbar").empty();                                           
                $("#snackbar").append(data);
                showToast();
                setTimeout("location.reload(true);",1500);

          }
        }); 
    }
    
  });

});


function SetCodigo(codigo){
    document.getElementById("modal_codigo").value = codigo;
    document.getElementById("modal_cantidad").value = '';
    document.getElementById("modal_quedan").value = '';
    document.getElementById("modal_comentarios").value = '';
}

function SetCodigoAgregar(codigo){
    document.getElementById("agregar_codigo").value = codigo;
    document.getElementById("agregar_cantidad").value = '';
    document.getElementById("agregar_comentario").value = '';
}

function showToast() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
}



</script>

</body>

<!-- InstanceEnd --></html>
