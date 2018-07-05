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


$qss = "UPDATE existencia set Cantidad=Cantidad+ $cantidad WHERE Producto=$idproducto"; 


/*
$qss= "INSERT INTO existencia (Id_Existencia,Cantidad,Producto) 
				  values ('','$cantidad','$idproducto')";
				  */
$ejecuta_qss= mysqli_query($con,$qss) or die("error al insertar producto");

$rs = mysqli_query($con, "SELECT * FROM existencia where Producto =$idproducto");
    $row = mysqli_fetch_array($rs);
    $cant=$row['Cantidad'];

if ($cant<0) {

$qss = "UPDATE existencia set Cantidad=Cantidad- $cantidad WHERE Producto=$idproducto"; 


$ejecuta_qss= mysqli_query($con,$qss) or die("error al insertar producto");

	echo'<script type="text/javascript">
    alert("la existencia no puede ser menor a 0");
    location.href="../Vista/productos.php";
    </script>';
}else{
	header('Location: ../Vista/productos.php');
}

mysqli_close($con);
//header('Location: ../Vista/productos.php');


 ?>