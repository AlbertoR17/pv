<?php 
require('conec.php');


$id = $_POST['delete_id'];


$q2 = mysqli_query($con,"DELETE FROM existencia WHERE Producto='$id'");
$q = mysqli_query($con,"DELETE FROM productos WHERE Id_Producto='$id'");



//$rs ="DELETE FROM productos WHERE Id_Producto='$id'";
//$resultado = mysqli_query($con,$rs) or die("error al insertar existencia");

 ?>