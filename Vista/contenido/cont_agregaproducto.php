<div class="ibox-title">
    <h5>Agregar producto</h5>

</div>
<div class="ibox-content">
    <form class="form-horizontal" method="post" action="../Controlador/regProducto.php" enctype="multipart/form-data">
      <div class="form-group"><label class="col-sm-2 control-label">Codigo producto</label>
        <div class="col-sm-10"><input type="number" required   name="codpro" onkeypress="return validanum(event)" value="" class="form-control" autofocus></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-10"><input required type="text" name="nombre" value="" class="form-control"></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Precio unitario</label>
        <div class="col-sm-10"><input required type="number" min="0.50" step="0.01" name="precio" value="" class="form-control"></div>
    </div>
    <div class="form-group"><label class="col-sm-2 control-label">Descripción</label>
        <div class="col-sm-10"><input required type="text" name="descripcion" maxlength="100" value="" class="form-control"></div>
    </div>
    <!--<div class="form-group"><label class="col-sm-2 control-label">Categoria</label>
        <div class="col-sm-10"><input required type="text" name="cat" onkeypress="return validaletra(event)" value="" class="form-control"></div>
    </div>-->
    <div class="form-group"><label class="col-sm-2 control-label">Categoria</label>
        <div class="col-sm-10">
          <select class="form-control" required name="cat">
            <option></option>
            <option value="Lacteos">Lacteos</option>
            <option value="Panaderia">Panaderia</option>
            <option value="Botanas">Botanas</option>
            <option value="Bebidas">Bebidas</option>
            <option value="Frutas y Verduras">Frutas y Verduras</option>
            <option value="Carnes">Carnes</option>
            <option value="Detergentes">Detergentes</option>
            <option value="Enlatados">Enlatados</option>
            <option value="A granel">A granel</option>           
          </select>
        </div>
    </div>

    <!-- <div class="form-group"><label class="col-sm-2 control-label">Cantidad</label>
        <div class="col-sm-10"><input type="text" name="cant"  value="" class="form-control"></div>
    </div> -->
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
        <input type="file" name="im"/>
    </span>
    <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Cambiar</a>
</div> 
</div>
  <!--  </div>
    <div class="form-group col-lg-4 fileinput fileinput-new" data-provides="fileinput">
                <span class="btn btn-primary btn-file"><span class="fileinput-new">Seleccionar imagen</span>
                <span class="fileinput-exists">Cambiar</span>
                <input required type="file" name="imagen"></span>
                <span class="fileinput-filename"></span>
                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
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

    <!-- <script type="text/javascript">
function check_text(input) {  
    if (input.validity.patternMismatch){  
        input.setCustomValidity("Debe ingresar al menos 3 LETRAS");  
    }  
    else {  
        input.setCustomValidity("");  
    }                 
}  </script>-->
