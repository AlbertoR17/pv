<?php include('css.php'); ?>
<?php require('../Controlador/conec.php'); ?>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Punto de venta | BALFI</title>
    


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
                <?php include('menu.php') ?>
            </div>
        </nav>
        </div>
        <div class="wrapper wrapper-content">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                    <!-- CONTENIDO DE LA PAGINA -->
                        <?php include('contenido/cont_productos.php'); ?>
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



<div class="modal fade" id="exampleModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Agrerar Existencias</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post" action="../Controlador/regProducto2.php">
                <div class="fetched-data"></div> 
            </div>
            <div class="modal-footer">
                 <input type='submit'  value='Guardar' class='btn btn-primary'>
            </div>
             </form>
        </div>
    </div>
</div>

<div class="modal fade" id="infoModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title" style="text-align: center;">Detalles de productos</h3>
            </div>
            <div class="modal-body">
          
            <div class="fetched-info"></div> 

    <!--<table class="table table-striped">
        <tr>
            <td>Codigo</td>
            <td>0000</td>
        </tr>
        <tr>
            <td>Nombre del Producto</td>
            <td>Tostitos</td>
        </tr>
        <tr>
            <td>Categoria</td>
            <td>Botana</td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>12.50</td>
        </tr>
        <tr>
            <td>Existencia</td>
            <td>6</td>
        </tr>
        
        <tr>
            <td>Descripcion</td>
            <td>sdjkfhkdsjhfgkjdhfskgjhksd asdfasdfsdfs dfasd fasd ga dsgdsagsdaga dsg sadg</td>
        </tr>
    </table>-->


            </div>
            
        </div>
    </div>
</div>



<?php include('js.php'); ?>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
</html>
<script type="text/javascript">
    $(document).ready(function(){
    $('#exampleModal').on('show.bs.modal', function (e) {

        var rowid = $(e.relatedTarget).data('id');
        // alert("El producto se ha agregado exitosamente"+ rowid);
        $.ajax({
            type : 'post',
            url : '../Controlador/fetch_record.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
                         //alert("El producto se ha agregado exitosamente"+ rowid);

                         $('.fetched-data').html(data);

           //$('#modal-content').html('<p><sdgtdrsyreyhrytys/p>');//Show fetched data from database
             //alert("El producto se ha agregado exitosamente");
            }
        });
     });
});
</script>


<script type="text/javascript">
    $(document).ready(function(){
    $('#infoModal').on('show.bs.modal', function (e) {

        var rowid = $(e.relatedTarget).data('id');
        // alert("El producto se ha agregado exitosamente"+ rowid);
        $.ajax({
            type : 'post',
            url : '../Controlador/fetch_record_info.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
                         //alert("El producto se ha agregado exitosamente"+ rowid);

                         $('.fetched-info').html(data);

           //$('#modal-content').html('<p><sdgtdrsyreyhrytys/p>');//Show fetched data from database
             //alert("El producto se ha agregado exitosamente");
            }
        });
     });
});
</script>


