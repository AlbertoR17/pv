<?php 

require('conec.php');

$codpro=$_POST['codpro'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$cat=$_POST['cat'];
$imagen="holi";
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

$q= "INSERT INTO productos (Id_Producto,Codigo,Nombre,Precio_Unitario,Descripcion,Imagen,Categoria) 
				  values ('','$codpro','$nombre','$precio','$descripcion','$imagen', '$cat')";
$ejecuta_q= mysqli_query($con,$q) or die("error al insertar producto");

mysqli_close($con);
header('Location: ../Vista/agregaproducto.php');


 ?>