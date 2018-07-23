<?php 
$fecha=$_GET['f'];

 ?>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Punto de venta | BALFI</title>
    
    <?php include('css.php'); ?>
</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-static-top" role="navigation">
                    <div class="navbar-header">
                        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <i class="fa fa-reorder"></i>
                        </button>
                        <a href="inicio.php" class="navbar-brand">ABARROTES BALFI</a>
                    </div>
                    <div class="navbar-collapse collapse" id="navbar">
                        <?php // include('menu.php') ?>
                        <ul class="nav navbar-nav">
                            <li class="">
                                <a aria-expanded="false" role="button" href="Hiscorte.php"><i class="fa fa-mail-reply"></i> REGRESAR </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="wrapper wrapper-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <!-- CONTENIDO DE LA PAGINA -->
                                <?php //include('contenido/cont_detallescorte.php'); ?>

             <div class="ibox-content">
             <fieldset>
        <legend>Detalles del corte</legend>
                   
    <input type="text" class="form-control input-sm m-b-xs" id="filter"
    placeholder="Buscar...">
    <br>
    <table class="footable table table-stripped" data-page-size="8" data-filter=#filter>
      <thead>
        <tr>
         <th >Totales</th>
         
       </tr>
     </thead>
     <tbody>
       <?php 

       require('../Controlador/conDetallescorte.php');
       ?>
     </tbody>
     <tfoot>
      <tr>
        <td colspan="5">
          <ul class="pagination pull-right"></ul>
        </td>
      </tr>
    </tfoot>
  </table>
</fieldset>

</div>




                                <!-- _______________________ -->
                            </div>
                        </div>    
                    </div>
                    <div class="footer">
                        <div>
                            <strong>Copyright</strong> Abarrotes &copy; <?php echo date('Y') ?>
                        </div>
                    </div>

                </div>
            </div>


            <?php include('js.php'); ?>

        </body>

<div class="modal fade" id="modalCorte" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detalles de la Venta</h4>
            </div>
            <div class="fetched-corte">
           
                
            </div>
         
         
        </div>
    </div>
</div>
        <!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
        </html>


        <script type="text/javascript">
    $(document).ready(function(){
    $('#modalCorte').on('show.bs.modal', function (e) {

        var rowid = $(e.relatedTarget).data('id');
        // alert("El producto se ha agregado exitosamente"+ rowid);
        $.ajax({
            type : 'post',
            url : '../Controlador/conDetallesCorteProductos.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
                         //alert("El producto se ha agregado exitosamente"+ rowid);

                         $('.fetched-corte').html(data);

           //$('#modal-content').html('<p><sdgtdrsyreyhrytys/p>');//Show fetched data from database
             //alert("El producto se ha agregado exitosamente");
            }
        });
     });
});
</script>


        <!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
        </html>