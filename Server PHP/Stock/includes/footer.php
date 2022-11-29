    <!-- jQuery -->
    <script src="../Estilos/Sub/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../Estilos/Sub/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../Estilos/Sub/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../Estilos/Sub/vendor/raphael/raphael.min.js"></script>
    <script src="../Estilos/Sub/vendor/morrisjs/morris.min.js"></script>
    

    <!-- Custom Theme JavaScript -->
    <script src="../Estilos/Sub/dist/js/sb-admin-2.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    <script src="../Estilos/datatables-demo.js"></script>

    <script type="text/javascript">
$(document).ready(function(){
    reLoadNotif();
}); 

function reLoadNotif(){
    //var consulta = $("#busqueda").val();

    $.ajax({
        type: "POST",
        url: "../includes/notificaciones.php",
        data: "",
        dataType: "html",
        success: function(data){                                                    
                $("#notificaciones").empty(); 
                $("#notificaciones").append(data);  
                                            
        }
    });
    
}

function notifiRead(id){
    $.ajax({
        type: "POST",
        url: "../includes/notifi_read.php",
        data: "id="+id,
        dataType: "html",
        success: function(data){                                                    
            reLoadNotif();     
            $("#notificaciones").addClass("open");                        
        }
    });
    
}
</script>