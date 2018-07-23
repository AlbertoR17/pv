<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

    <link href="../Content/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Content/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../Content/css/animate.css" rel="stylesheet">
    <link href="../Content/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg" style="background-image: url('../Content/img/ps2.jpg');background-repeat:">

    <div class="loginColumns animated fadeInDown">
        <div class="content">

            <div class="col-md-8" style="margin-left:20%">
            <center> <h1 class="font-bold" style="color:white"><b>ABARROTES BALFI</b></h1></center>
               <br>
                <div class="ibox-content">
                    
                   
                    <form class="m-t" method="POST" role="form" action="../Vista/validarUsuario.php">
                        <center></center>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Usuario" autocomplete="off" required="" style="text-align: center;">
                        </div>
                        <div class="form-group">
                            <input type="password" autocomplete="off" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña" required=""style="text-align: center;">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Entrar</button>

                        
                    </form>
                   
                </div>
            </div>
        </div>
       
    </div>

</body>


</html>