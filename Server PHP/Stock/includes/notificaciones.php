<?php
session_start();
include_once('../includes/db.php');
$mysqli = ConectarDB();
$user = $_SESSION['usuario']['nombre'];
$sql = "SELECT * FROM notificaciones WHERE USER = '$user' AND LEIDO = 'NO' ORDER BY ID DESC";
$resultados = $mysqli->query($sql);

?>

    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
        <i class="fa fa-bell fa-fw"></i> <?php if($resultados->num_rows > 0) echo "($resultados->num_rows)"; ?> <i class="fa fa-caret-down"></i>
    </a>

    <?php if($resultados->num_rows > 0){ ?>
    <ul class="dropdown-menu dropdown-alerts">
        <?php
        $count = 0;
        while($row = $resultados->fetch_assoc()){
            $count++;
            if($count < 8){
        ?>
        <li    style="font-size: 13px;">
            <a href="#" <?php echo "onclick='notifiRead($row[ID])'"; ?> >
                <?php if ($row['TIPO'] == 'DIF'){ ?>
                    <div style="color:red;">
                        <i class="fa fa-info-circle"></i> <?php echo $row['TEXTO']; ?>
                        <br>
                        <span class="pull-right text-muted small"><?php echo date("d-m-y H:i", strtotime($row['FECHA'])); ?></span>
                    </div>
                <?php } if ($row['TIPO'] == 'DIF2'){ ?>
                    <div style="color:blue;">
                        <i class="fa fa-info-circle"></i> <?php echo $row['TEXTO']; ?>
                        <br>
                        <span class="pull-right text-muted small"><?php echo date("d-m-y H:i", strtotime($row['FECHA'])); ?></span>
                    </div>
                <?php }if ($row['TIPO'] == 'MOV'){ ?>
                    <div>
                        <?php echo $row['TEXTO']; ?>
                        <br>
                        <span class="pull-right text-muted small"><?php echo date("d-m-y H:i", strtotime($row['FECHA'])); ?></span>
                    </div>
                <?php } ?>
                
            </a>
        </li>
        <li class="divider"></li>

        <?php
            }//end if
        }//end while
        ?>

        
        <li >
            <a class="text-center" href="../stock/notificaciones.php" style="color:blue;">
                <strong>Ver todas las notificaciones</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>

    <?php } else { ?>
    <ul class="dropdown-menu dropdown-alerts">
        <li class="text-center">
                <strong>No tienes notificaciones</strong>
        </li>
    </ul>
    <?php }  ?>
    <!-- /.dropdown-alerts -->
