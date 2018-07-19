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
                        <a href="#" class="navbar-brand">ABARROTES BALFI</a>
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
         <th data-hide="all">Fecha</th>
         <th >Total</th>
         
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


        <!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
        </html>