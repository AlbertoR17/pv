<?php
require('conec.php');
$codigo=test_input($_POST['Codigo']);
 $rs = mysqli_query($con, "SELECT * FROM productos where Codigo='$Codigo'");

                       while($row = mysqli_fetch_array($rs)){

                         $desc=$row['Descripcion'];
                         $precio=$row['Precio_Unitario'];

                      }

                      mysqli_close($con);

   
   echo "<label class='control-label' for='status'>Precio</label>";
  
   echo "<input type='number' id='precio' value='$precio' placeholder='Precio' class='form-control'>";
  
   echo "   <label for='' class='col-sm-2 control-label'>Precio:</label>";
   
   echo "   <input type='text' class='form-control' id='' placeholder='Precio...' value='$precio' disabled>";
  

     /* echo "<div class='form-group'>";
       echo "   <label for='' class='col-sm-2 control-label'>Imagen:</label>";
       echo "   <div class='col-sm-4'>";
       if($r['imagen']==""){
         echo "No hay imagen asociada...";
       }else{
         $src='img_articulos/'.$r['imagen'];
         echo "<img alt='150x150' src='$src'  height='250' width='300'/>";
       }
       echo "   </div>";
       echo "   </div>";*/

  
?>
