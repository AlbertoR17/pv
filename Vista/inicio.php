<?php 
session_start();

?>

<html>



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
                <?php include('menu.php') ?>
            </div>
        </nav>
        </div>
        <div class="wrapper wrapper-content">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h1><b><span class="text-navy">Bienvenido</span></b> <?php echo $_SESSION["Nombre"];  ?></h1>

                            
                        </div>
                        <div class="ibox-content">
                            Holis aqui ventas
                        </div>
                    </div>
                </div>    
            </div>
        <div class="footer">
            <div>
                <strong>Copyright</strong> Abarrotes BALFI &copy; <?php echo date('Y') ?>
            </div>
        </div>

        </div>
        </div>


<?php include('js.php'); ?>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/dashboard_4.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:36:08 GMT -->
</html>