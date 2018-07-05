<div class="ibox-title">
    <h5>Agregar producto</h5>

</div>
<div class="ibox-content">
    <form class="form-horizontal" method="post" action="../Controlador/regProducto2.php">
      <div class="form-group"><label class="col-sm-2 control-label">Codigo producto</label>
        <div class="col-sm-10"><select data-placeholder="Selecciona el vehiculo" onchange="return showCustomer();" id="selecar" name="idproducto"  class="chosen-select col-sm-10" style="width:350px;" tabindex="4">
                            <option value="0" disabled selected>Selecciona </option>
                            <?php
                            

                            $rs = mysqli_query($con, "SELECT Id_Producto,Nombre FROM productos");
                            while($row=mysqli_fetch_array($rs))
                            {
                              echo "<option value='".$row['Id_Producto']."'>";
                              echo $row['Nombre'];
                              echo "</option>";                     
                            }
                            mysqli_close($con);
                            ?>
                          </select></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Cantidad</label>
        <div class="col-sm-10"><input required type="number" name="cantidad" value="" class="form-control"></div>
    </div>
    
    <!-- <div class="form-group"><label class="col-sm-2 control-label">Cantidad</label>
        <div class="col-sm-10"><input type="text" name="cant"  value="" class="form-control"></div>
    </div> 
    <div class="form-group"><label class="col-sm-2 control-label">Imagen</label>
        <div class="col-sm-10">
    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
    <div class="form-control" data-trigger="fileinput">
        <i class="glyphicon glyphicon-file fileinput-exists"></i>
    <span class="fileinput-filename"></span>
    </div>
    <span class="input-group-addon btn btn-default btn-file">
        <span class="fileinput-new">Seleccionar archivo</span>
        <span class="fileinput-exists">Cargar</span>
        <input type="file" name="..."/>
    </span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Cambiar</a>
</div> 
</div>
    </div>-->
    <div class="form-group">     
        <center>   
        <div class="col-sm-12 "><input type="submit"  value="Guardar producto" class=" btn btn-primary"></div>
        </center>
    </div>  
</form>
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