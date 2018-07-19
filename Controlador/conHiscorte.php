<?php 
require('conec.php');
                       $rs = mysqli_query($con, "SELECT * FROM corte");

                       while($row = mysqli_fetch_array($rs)){

                          echo "<tr'>"; 
                          $aidi=$row['Fecha']; 
                          echo "<td>" . $row['Fecha'] .  "</td>";
                          echo "<td> ". $row['Totalsis'] . "</td>";
                          echo "<td> ". $row['TotalReal'] . "</td>"; 
                          echo "<td><a class='btn btn-primary' href='detallescorte.php?f=".$aidi."'>Ver detalles</a></td>"; 
                          
                          echo "</tr>";   
                      }

                      mysqli_close($con);


 ?>