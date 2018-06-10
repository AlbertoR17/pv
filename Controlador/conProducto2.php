<?php 
require('conec.php');
                       $rs = mysqli_query($con, "SELECT * FROM productos");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr'>"; 
                          $aidi=$row['Id_Producto']; 
                          echo "<td>" . $row['Codigo'] .  "</td>";
                          echo "<td> ". $row['Nombre'] . "</td>";
                          echo "<td> ". $row['Precio_Unitario'] . "</td>"; 
                          echo "<td> ". $row['Descripcion'] . "</td>"; 
                          //echo "<td> ". $row['Imagen'] . "</td>"; 
                          echo "<td> ". $row['Categoria'] . "</td>";


                          $rds = mysqli_query($con, "SELECT Cantidad FROM existencia where Producto='$aidi'");
                          while($row=mysqli_fetch_array($rds)){
                            
                             
                          $cant=$row['Cantidad'];
                          echo "<td> ". $cant . "</td>";                     
                            
                          }  

                          // echo "<td> 
                          // <form method='POST' action='../Vista/agregarexistencia.php'>
                          // <input type='hidden' class='btn btn-success' name='idproducto' value=".$row['Id_Producto'].">
                          // <button type='submit'>Agregar existencias</button>
                          //   </form>  </td>";
                          echo "</tr>";   
                      }

                      mysqli_close($con);


 ?>