<?php 
/*hacer una consulta con count i guardarlo si es igual a 0 incertar sino mensaje*/
require('conec.php');
//include ('../Vista/css.php');
//include ('../Vista/js.php');
$codpro=$_POST['codpro'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$cat=$_POST['cat'];
//$imagen="im";

$destino="../Content/Productos/";
$imagens=$_FILES['im']['tmp_name'];
$nomimagen=$_FILES['im']['name'];
$ext= pathinfo($nomimagen);
move_uploaded_file($imagens, $destino."/".$codpro.".".$ext['extension']);
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

$rs ="SELECT * FROM productos where Codigo =$codpro";
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
    alert("El codigo del producto ya existe en el inventario");
    location.href="../Vista/productos.php";
    </script>';
}else{

	$q= "INSERT INTO productos (Id_Producto,Codigo,Nombre,Precio_Unitario,Descripcion,Imagen,Categoria) 
				  values ('','$codpro','$nombre','$precio','$descripcion','$codpro', '$cat')";

$ejecuta_q= mysqli_query($con,$q) or die("aaaaaaa");

$qu = "INSERT INTO existencia (Id_Existencia,Cantidad,Producto) 
				  values ('', 0 ,(SELECT MAX(Id_Producto) FROM productos))";
$ejecuta_qu= mysqli_query($con,$qu) or die("error al insertar existencia");


mysqli_close($con);
echo'<script type="text/javascript">
    alert("El producto se ha agregado exitosamente");
    location.href="../Vista/agregaproducto.php";
    </script>';
//header('Location: ../Vista/agregaproducto.php');

}





 ?>