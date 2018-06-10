<?php 

require('conec.php');

$idproducto=$_POST['idproducto'];
$cantidad=$_POST['cantidad'];

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

$qss= "INSERT INTO existencia (Id_Existencia,Cantidad,Producto) 
				  values ('','$cantidad','$idproducto')";
$ejecuta_qss= mysqli_query($con,$qss) or die("error al insertar producto");

mysqli_close($con);
header('Location: ../Vista/existencias.php');


 ?>