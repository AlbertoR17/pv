<?php
//Include database connection
require('conec.php');

if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
    // Run the Query

$rs = mysqli_query($con, "SELECT * FROM productos where Id_Producto =$id");
    $row = mysqli_fetch_array($rs);
    $codigoPro =$row['Codigo'];
    $nombre=$row['Nombre'];

    // Fetch Records
    // Echo the data you want to show in modal


      echo "
      <div class='form-group'><label class='col-sm-4 control-label'>Nombre producto</label>
        <div class='col-sm-5'>
        <input required type='number' name='idproducto' value='".$id."' class='form-control' style='display: none'>
        <input required type='text' name='cantidad' value='".$nombre."' class='form-control' disabled>
        </div>
    </div>
    <div class='form-group'><label class='col-sm-4 control-label'>Cantidad</label>
        <div class='col-sm-5'><input required type='number' name='cantidad' value='' class='form-control'  autofocus></div>
    </div>
    

     


      </div>";
 }
?>