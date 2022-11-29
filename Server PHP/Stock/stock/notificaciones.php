<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

    <?php include('../includes/head.php');?>

<!-- InstanceBeginEditable name="head" -->

<?php
session_start();
if(!isset($_SESSION['usuario']['nombre']) || empty($_SESSION['usuario']['nombre'])) 
header('refresh:0; url=../index.php');

$permisos = $_SESSION['usuario']['permisos_mto'];
if ($permisos == 2)
	header('refresh:0; url=index.php');

include_once('../includes/db.php');
$mysqli = ConectarDB();
$user = $_SESSION['usuario']['nombre'];
$sql = "SELECT * FROM notificaciones WHERE USER = '$user' AND LEIDO = 'NO' ORDER BY ID DESC";
$resultados = $mysqli->query($sql);

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
                            <label>Notificaciones</label>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            	<form action="acciones/agregarequipo.php" method="post" accept-charset="utf-8">
                                <input type="hidden" name="user" value="<?php echo $_SESSION['usuario']['nombre']?>">
                                <div class="col-lg-2">
                                 </div><!-- /.row col-3 -->
                                 
                                  <div class="col-lg-8">

                                    <?php
                                    while($row = $resultados->fetch_assoc()){
                                    ?>

                                    <?php if ($row['TIPO'] == 'DIF'){ ?>
                                        
                                        <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" <?php echo "onclick='notifiRead2($row[ID])'"; ?>>×</button>
                                        <h6 style="color:black; float: right;"><?php echo date("d-m-y H:i", strtotime($row['FECHA'])); ?></h6> 
                                        <?php echo $row['TEXTO']; ?> 
                                        </div>
                                    
                                    <?php } if ($row['TIPO'] == 'DIF2'){ ?>
                                    
                                    <div class="alert alert-warning alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true" <?php echo "onclick='notifiRead2($row[ID])'"; ?>>×</button>
                                        <h6 style="color:black; float: right;"><?php echo date("d-m-y H:i", strtotime($row['FECHA'])); ?></h6>
                                        <?php echo $row['TEXTO']; ?>
                                    </div>

                                    <?php } if ($row['TIPO'] == 'MOV'){ ?>
                                    
                                        <div class="alert alert-success alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" <?php echo "onclick='notifiRead2($row[ID])'"; ?>>×</button>
                                            <h6 style="color:black; float: right;"><?php echo date("d-m-y H:i", strtotime($row['FECHA'])); ?></h6>
                                            <?php echo $row['TEXTO']; ?>
                                        </div>

                                    <?php } ?>

                                    <?php
                                    }
                                    ?>
                                

                                    <button type="button" id="btn_leer" class="btn btn-primary btn-block">Marcar todas las notificaciones como leidas</button>
                                    <div id="resultado"></div>
                                  </div> <!-- /.row col-3 -->

                                <div class="col-lg-2">
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

    </div>
    <!-- /#wrapper -->

    <?php include('../includes/footer.php');?>
    
    <script type="text/javascript">

$(document).ready(function(){

  //comprobamos si se pulsa una tecla
  $("#btn_leer").click(function() {
                                                   
        $.ajax({
              type: "POST",
              url: "acciones/_notifi_read.php",
              data: '',
              dataType: "html",
              success: function(data){                                                    
                    //$("#resultado").empty(); 
                    //$("#resultado").append(data);
                    location.reload()                                
              }
        });
                                                                                                                             
  });  
     

});

</script>

<script type="text/javascript">

    function notifiRead2(id){
        $.ajax({
            type: "POST",
            url: "../includes/notifi_read.php",
            data: "id="+id,
            dataType: "html",
            success: function(data){                                                    
                reLoadNotif();                           
            }
        });
        
    }
</script>
</body>

<!-- InstanceEnd --></html>
