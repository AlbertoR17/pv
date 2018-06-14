<div class="ibox-title">
    <h5>Agregar usuario</h5>

</div>
<div class="ibox-content">
<fieldset>
                
        <form action="../Controlador/regUsuario.php" method="POST" class="form-horizontal" >
                  <div class="form-group"><label class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10"><input type="text" name="nombre" maxlength="60" onkeypress="return validaletra(event);" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-10"><input type="text" name="apellido" maxlength="60" onkeypress="return validaletra(event);" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Correo</label>
                    <div class="col-sm-10"><input type="text" name="correo" maxlength="70" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label">Contraseña</label>
                    <div class="col-sm-10"><input type="password" name="contra"maxlength="30" class="form-control"></div>
                  </div>

                  <input type="submit" class="btn btn-danger pull-right" value="Guardar" >
                </form>
              
             </fieldset>
             <br><br>
             <fieldset>
                <legend>Listado de empleados</legend>
                <div class="table-responsive">
                  <table class="footable table table-stripped" >
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      require('../Controlador/conec.php');
                      $rs = mysqli_query($con, "SELECT * FROM usuarios");
                      while($row=mysqli_fetch_array($rs))
                      {
                        echo "<tr class='gradeX'>";
                        echo "<td>".$row['Nombre']." ".$row['Apellido']."</td>";
                        echo "<td>".$row['Correo']."</td>";
                        echo "<td class='center'> <a href='../Controlador/eliUsuario.php?aidiuser=".$row['id']."' class='btn btn-danger'>Eliminar</a>
                        </td>";
                        echo "</tr>";

                      }

                      mysqli_close($con);
                      ?>
                    </tbody>
                    <tfoot>                      
                    </tfoot>
                  </table>
                </div>
              </fieldset>
          
</div>
 <script type="text/javascript">
        function validaletra(e) { 
          tecla = (document.all) ? e.keyCode : e.which; 
          if (tecla==8) return true; 
          patron =/[A-Za-z\s]/; 
          te = String.fromCharCode(tecla); 
          return patron.test(te); 
          }
      </script>
      <script type="text/javascript">
          function validanum(e){
          tecla = (document.all) ? e.keyCode : e.which;

          if (tecla==8){
              return true;
          }
              patron =/[0-9]/;
              tecla_final = String.fromCharCode(tecla);
              return patron.test(tecla_final);
          }
      </script>
      <script type="text/javascript">
         function validacorreo(e) { 
          tecla = (document.all) ? e.keyCode : e.which; 
          if (tecla==8) return true; 
          patron =/^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail); 
          te = String.fromCharCode(tecla); 
          return patron.test(te); 
          }
          function isValidEmail(mail) {  
  return /^\w+([\.\+\-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail); 
}

      </script>