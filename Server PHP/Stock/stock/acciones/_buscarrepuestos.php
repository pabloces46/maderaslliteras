<?php
session_start();

$buscar = $_POST['b'];
$filtro = $_POST['f'];
if(!empty($buscar)) {
      buscar($buscar,$filtro);
}
 


function buscar($b,$f) {
    $permisos = $_SESSION['usuario']['permisos_mto'];

    include ('../../includes/db.php');
    $mysqli = ConectarDB();
    if($f == 'Codigo')
    $sql = "SELECT * FROM inventario WHERE (CODIGO LIKE '%".$b."%') OR (REPUESTO LIKE '%".$b."%') ORDER BY 'CODIGO'+0 ASC";
    else
    $sql = "SELECT * FROM inventario WHERE (PROVEEDOR LIKE '%".$b."%') OR (CODPROV LIKE '%".$b."%') ORDER BY 'CODIGO'+0 ASC";
    $resultados = $mysqli->query($sql);

      if($resultados->num_rows >0){

            $count = 1;
            while($row=$resultados->fetch_assoc()){
                  
                  if($count == 1){
                    ?>
                    <div class="row">
                <?php } ?>
                  <div class="col-lg-3">
                        <div class="panel panel-primary">
                            <div class="panel-heading text-center">
                                <b><?php echo $row['CODIGO']; ?></b>
                            </div>
                            <div class="panel-body text-center">
                                <img src="../archivos/repuestos/<?php echo $row['IMAGEN']; ?>" width="150">
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-lg-12">
                                        Artículo: <b><?php echo $row['REPUESTO']; ?> </b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    Proveedor: <b><?php echo $row['PROVEEDOR']; ?> </b>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                    Cod - proveedor: <b><?php echo $row['CODPROV']; ?> </b>
                                    </div>
                                </div>
                                
                                <div class="row">    
                                    <div class="col-lg-6">
                                        Stock: <b><?php echo $row['STOCK']; ?></b>
                                    </div>
                                    <div class="col-lg-6 text-right">
                                    <b><?php echo $row['UNIDAD']; ?></b>
                                    </div>
                                </div>

                                <div class="row">    
                                    <div class="col-lg-12">
                                        Ubicación:<b><?php echo $row['UBICACION']; ?></b>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 text-center">
                                    <a href="_masdetallesrepuestos.php?codigo=<?php echo $row['CODIGO']; ?>" target = "_blank" ><button type="button" class="btn btn-info btn-circle"><i class="fa fa-info"></i>
                                    </button></a>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                    <?php
                                    if($permisos < 3){ ?>
                                    <button type="button" class="btn btn-success  btn-circle" data-toggle="modal" data-target="#modal_agregar" onclick="SetCodigoAgregar('<?php echo $row['CODIGO']; ?>')"><i class="fa fa-plus" ></i>
                                    </button>
                                    <?php } ?>
                                    </div>
                                    <div class="col-lg-4 text-center">
                                    <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#modal_retirar" onclick="SetCodigo('<?php echo $row['CODIGO']; ?>')"><i class="fa fa-minus"></i>
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                $count++;
                if($count == 5){ 
                    $count = 1;
                    ?>
                    </div>
                <?php 
                } 
            }
      }
      else{
            
            echo "<div class='col-lg-3'> <b> No se encontraron resultados. </b></div>";

      }
}
       
?>
