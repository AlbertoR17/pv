<?php 
	
require('conec.php');

$id=$_GET['aidiuser'];


mysqli_query($con, "DELETE FROM usuarios WHERE id = $id");

mysqli_close($con);
header('Location: ../Vista/usuarios.php');


?>