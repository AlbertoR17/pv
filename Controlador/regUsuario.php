<?php 

require('conec.php');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$correo=$_POST['correo'];
$contra=$_POST['contra'];

//$cant=$_POST['cant'];
/*
echo $codpro;
echo $nombre;
echo $precio;
echo $descripcion;
echo $cat;
echo $cant;
$qs= "INSERT INTO existencia (Id_Existencia,Cantidad) VALUES ('',$cant)";
$ejecuta_qs= mysqli_query($con,$qs) or die("error al insertar existencia");*/

$qss= "INSERT INTO usuarios (id,Nombre,Apellido,Correo,Contrasena) 
				  values ('','$nombre','$apellido','$correo','$contra')";
$ejecuta_qss= mysqli_query($con,$qss) or die("error al insertar producto");

mysqli_close($con);
header('Location: ../Vista/usuarios.php');


 ?>