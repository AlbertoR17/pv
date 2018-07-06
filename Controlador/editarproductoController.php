<?php 

require('conec.php');
$id=$_POST['idProducto'];
$codigo=$_POST['codpro'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$descripcion=$_POST['descripcion'];
$cat=$_POST['cat'];

$query ="SELECT * FROM productos where Codigo =$codigo";
$resultado = mysqli_query($con,$query) or die("error al insertar existencia");

//Codigo de la BD
$rs = mysqli_query($con, "SELECT * FROM productos where Id_Producto =$id");
    $row = mysqli_fetch_array($rs);

     $codigoOriginal =$row['Codigo'];

//Codigo del POST(nuevo)
//$codRepetido = mysqli_query($con, "SELECT * FROM productos where Codigo =$codigo");
//$row2 = mysqli_fetch_array($codRepetido);
//$CodigoNuevo = 

//$ejecuta_codRepetido = mysqli_query($con,$codRepetido) or die("error al insertar existencia");


if (mysqli_num_rows($resultado)>0 && $codigoOriginal==$codigo) {
	
	$q= "UPDATE productos set Codigo=$codigo, Nombre='$nombre', Precio_Unitario='$precio', Descripcion='$descripcion', Categoria='$cat' where Id_Producto=$id";


$ejecuta_q= mysqli_query($con,$q) or die("error al actualizar producto");

mysqli_close($con);
echo'<script type="text/javascript">
    alert("El producto fue actualizado correctamente");
    location.href="../Vista/productos.php";
    </script>';
//header('Location: ../Vista/productos.php');
}elseif (mysqli_num_rows($resultado)==0) {
	$q= "UPDATE productos set Codigo=$codigo, Nombre='$nombre', Precio_Unitario='$precio', Descripcion='$descripcion', Categoria='$cat' where Id_Producto=$id";


$ejecuta_q= mysqli_query($con,$q) or die("error al actualizar producto");

mysqli_close($con);
echo'<script type="text/javascript">
    alert("El producto fue actualizado correctamente");
    location.href="../Vista/productos.php";
    </script>';
//header('Location: ../Vista/productos.php');
}else{
	
echo'<script type="text/javascript">
    alert("El codigo ya existe en la base de datos ingrese otro codigo");
    location.href="../Vista/productos.php";
    </script>';
	//mysqli_close($con);
}




//mysqli_close($con);
//header('Location: ../Vista/productos.php');


 ?>