<?php 
require('conec.php');
                       $rs = mysqli_query($con, "SELECT * FROM corte");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr'>"; 
                          $aidi=$row['Fecha']; 
                          echo "<td>" . $row['Fecha'] .  "</td>";
                          echo "<td> ". $row['Totalsis'] . "</td>";
                          echo "<td> ". $row['TotalReal'] . "</td>"; 
                          //echo "<td><a class='btn btn-primary' href='detallescorte.php?f=".$aidi."'>Ver detalles</a></td>"; 
                          


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