<?php
require('conec.php');

$nombre = trim($_POST['nombre']);
$password = trim($_POST['contrasena']);



if (empty($nombre) || empty($password)) {
    header("location: ../Vista/Login.php");
    echo "";
    exit();

}

$rs  = "SELECT * FROM usuarios WHERE Nombre = '$nombre' AND Contrasena = '$password'";
$result = mysqli_query($con, $rs);
$row    = mysqli_fetch_assoc($result);
if (!isset($row)) {
    header("location: ../Vista/Login.php");
}
         $id  = $row['id'];
         $nombre= $row["Nombre"];
         $password = $row['Contrasena'];


if ($row["Nombre"] === $nombre && $row["Contrasena"] === $password) {
        session_start();
        $_SESSION["Nombre"] = $nombre;
        $_SESSION["id"] = $id;
        

        echo "
                <script language='JavaScript'>
                var mensaje = 'sesión iniciada';
                alert(mensaje);
                </script>";
        echo "
                <script>
                 document.location.href = 'inicio.php';
                </script> ";
        

    } 
    else {
        echo "
                <script type='text/javascript'>
                var mensaje='Usuario o contraseña incorrecto';
                alert(mensaje);

                </script>";
        echo "
                <script>
                 document.location.href = 'Login.php';
                </script> ";
        
        //exit();
    }



?>
