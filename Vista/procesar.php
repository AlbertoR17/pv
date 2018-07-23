<?php 
session_start();
require('conec.php');

$suma=$_POST['suma'];
$id=$_SESSION["id"];
$query= mysqli_query($con,"INSERT INTO venta (Id_Venta,Total,Fecha,Usuario) values ('','$suma',now(),'$id')");


mysqli_close($con);


 ?>