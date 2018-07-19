<?php 
/*hacer una consulta con count i guardarlo si es igual a 0 incertar sino mensaje*/
require('conec.php');

$fecha=$_POST['fecha'];
$totalsis=$_POST['totalsis'];
$totalreal=$_POST['totalreal'];

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

$rs ="SELECT * FROM corte where Fecha='$fecha'";
$resultado = mysqli_query($con,$rs) or die("error al insertar existencia");
    /*$row = mysqli_fetch_array($rs);
    $codigoPro =$row['Codigo'];*/
 




/*$ejecutaConsulta = mysqli_query($con,$consulta) or die("NANANANANA");
mysqli_close($con);
/*$consulta = "SELECT * FROM productos WHERE Codigo=$codpro";*/

if (mysqli_num_rows($resultado)>0) {
	//echo "Error el codigo ya existe en el sistema";
	mysqli_close($con);
	echo'<script type="text/javascript">
    alert("No se pueden realizar dos cortes el mismo dia");
    location.href="../Vista/venta.php";
    </script>';
}else{

	$q= "INSERT INTO corte (Id_Corte,Fecha,Totalsis,TotalReal) 
				  values ('','$fecha','$totalsis','$totalreal')";

$ejecuta_q= mysqli_query($con,$q) or die("aaaaaaah!! hubo un problema");




mysqli_close($con);
echo'<script type="text/javascript">
    alert("El corte se realizo correctamente");
    location.href="../Vista/venta.php";
    </script>';
//header('Location: ../Vista/agregaproducto.php');

}