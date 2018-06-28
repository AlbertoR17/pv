<?php 

require('conec.php');
$id=$_POST['idProducto'];
$codigo=$_POST['codpro'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$cat=$_POST['cat'];



$q= "UPDATE productos set Codigo=$codigo, Nombre='$nombre', Precio_Unitario='$precio', Descripcion='$descripcion', Categoria='$cat' where Id_Producto=$id";


$ejecuta_q= mysqli_query($con,$q) or die("error al actualizar producto");


mysqli_close($con);
header('Location: ../Vista/productos.php');


 ?>