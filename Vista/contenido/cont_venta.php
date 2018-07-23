
<div class="row">
    <div class="col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
               <center class="title">VENTA</center>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                   
                </div>
            </div>

            <div class="ibox-content">
              <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    
                    <label class="control-label" for="order_id">Codigo del Producto</label>
                    <input type="text" id="codigo"  value="" placeholder="Codigo del producto" class="form-control" onchange='buscar_articulo();'>
                    <input type="text" id="IdPro"  value="" class="form-control" style="display: none;">

                      <br>
                    <label class="control-label" for="order_id">Producto</label>
                    <input type="text" id="nombre"  value=""  placeholder="Producto" class="form-control nombre" readonly="">
                    <br>
                   <label class="control-label" for="status">Precio</label>
                    <input type="text" id="precioU" value="" placeholder="Precio" class="form-control" readonly="">
                    <br>

                    <label class="control-label" for="status">Cantidad</label>
                    <input type="number" id="cantidad" value="" placeholder="Cantidad" class="form-control" required="required">
                     <br>
                    <label class="control-label" for="order_id">Unidad de medida</label>
                    <select data-placeholder="Unidad de medida" id="lugs" class="chosen-select col-sm-10" style="width:350px;" >

                        <option value="Agua_Prieta">Pieza</option>
                        <option value="Aconchi">KG</option>
                    </select>
                    <br>
                    
                </div>
                 </div>
                 <div class="col-md-6">
                <div class="form-group">

                    <label class="control-label" for="status">Imagen del producto</label>
                    <div class="form-control" style="max-width: 250px;min-width: 250px; max-height: 210px;min-height: 210px">
                        <center><img style="max-width: 150px;min-width: 150px; max-height: 200px;min-height: 200px" id="imagen"></center>
                    </div>
                    <br>
                    <label class="control-label" for="order_id">Descripción del producto</label>
                    <input type="text" value="" readonly placeholder="Descripción del producto" class="form-control" id="descripcion">
                    
                </div>
                </div>        
  
                <input type="submit"  value="Agregar" class="btn btn-info form-control lazur-bg " onclick="agregar()" disabled="disabled" id="ven">
                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="col-lg-4 text-left">
            <div class="widget style1 lazur-bg">
                <div class="row vertical-align">                    
                    <i class="fa-1x"><b>TOTAL VENTA</b></i>
                   <h2 class="font-bold suma" id="suma"> </h2>                            
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="widget style1 lazur-bg">
                <div class="row vertical-align">
                    <i class="fa-1x"><b>Recibido</b></i>
                    <input type="number" min="0" style="color: black" id="pago"  value="" class="form-control" onchange="cambio();">       
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-right">
            <div class="widget style1 lazur-bg">
                <div class="row vertical-align">                                
                    <i class="fa-1x"><b>Cambio</b></i>
                    <h2 class="font-bold cambio" id="cambio"></h2>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit"  value="Terminar venta" class="btn btn-info form-control lazur-bg " onclick="Venta();" disabled="disabled" id="terminar">
        </div>
        <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h3>Nota de compra</h3>
            </div>
            <div class="ibox-content">

                <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15" id="productos">
                    <thead>
                        <tr>

                            
                            <th >Producto</th>
                            <th >Descripción</th>
                            <th >Precio Unitario</th>
                            <th >Cantidad</th>
                            <th >Total del producto</th>
                            <th style="display: none;" >Id</th>
                            <th class="text-right">Action</th>

                        </tr>
                    </thead>
                    <tbody id="tbody">
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function buscar_articulo(){
     //$(document).ready(function(){
      var cod=$("#codigo").val();
      
       $.ajax({
            url: "busca_producto.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {codigo:cod},
            success: function(data){
             //if (true) {alert("producto no encotrado")}
              $("#nombre").val(data.Nombre);
              $("#precioU").val(data.Precio_Unitario);
              $("#descripcion").val(data.Descripcion);
              $("#IdPro").val(data.Id_Producto);
              if (data.Imagen!="") {
               $("#imagen").attr('src','../Content/Productos/'+data.Imagen+'.jpg');
              }
              else{
                 $("#imagen").attr('src','../Content/Productos/nohay.jpg');
              }
              if (data.Categoria=="Frutas y Verduras" || data.Categoria=="A granel" ||data.Categoria=="Carnes") {

                  alert("entre al if")
                  
                 $("#ven").attr("disabled",false);
              }
              else{
                 agregar();
              }
              
            
            }
            
            
        });
           
         // })
         }
 function agregar(){
   $(document).ready(function(){
           
            var articulo=$("#codigo").val();
             var produc=$("#nombre").val();
            var descripcion=$("#descripcion").val();
            var precio=$("#precioU").val();
            var cantidad=$("#cantidad").val();
            if (cantidad=="") {
                cantidad=1;
            }
            var  id = $("#IdPro").val();
            var monto=cantidad*precio;
            $("#productos > tbody").append("<tr><td class='center'>"+produc+"</td><td class='center'>"+descripcion+"</td><td class='center'>"+precio+"</td><td class='center'>"+cantidad+"</td><td class='total'>"+monto.toFixed(2)+"</td><td class='center' style='display:none'>"+id+"</td><td class='center'><button class='btn btn-block btn-danger btn-xs eliminar' onclick='eliminar();'><i class='icon-trash bigger-120'></i> Eliminar</button></td></tr>");
            $("#codigo").val("");
            $("#cantidad").val("");
            $("#precioU").val("");
            $("#nombre").val("");
             $("#descripcion").val("");
            $("#imagen").removeAttr('src');
            $("#ven").attr("disabled",true);
             var data = [];
          $("td.total").each(function(){
         data.push(parseFloat($(this).text()));
           });
         var suma = data.reduce(function(a,b){ return a+b; },0);
         $("#suma").html(suma);
          $("#terminar").attr("disabled",false);
      });
           
           
         }
   function eliminar(){

      $(document).on('click', '.eliminar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
    var data = [];
     $("td.total").each(function(){
         data.push(parseFloat($(this).text()));
           });
         var suma = data.reduce(function(a,b){ return a+b; },0);
         $("#suma").html(suma);
     });

   }

    function cambio(){
   $(document).ready(function(){
         
          var sum=$(".suma").html();
          var pago=$("#pago").val();
          var cam=parseFloat(pago)-parseFloat(sum);
          $(".cambio").html("$ "+cam.toFixed(2)); 
          
      });
           
           
         }

        
   function Venta(){
  $(document).ready(function(){
             
           
          var suma=$(".suma").html();
          var sum= parseFloat(suma);
        
          $.ajax({
            url: "procesar.php",
           // dataType: 'json',
            type: "POST",
            dataType: 'json',
            data: {suma:sum},
            success: function(data){
              
            }
             
        });
          inser();
          
          
                         /*$(".suma").html("");
                         $("#pago").val("");
                         $(".cambio").html("");*/
                          });
                        }

    function inser(){
   $(document).ready(function(){
         var yapuso=0;
          $('#productos > tbody > tr').each(function(){
               	var id=$(this).find('td').eq(5).html();
                var descripcion=$(this).find('td').eq(1).html();
                var proc = $(this).find('td').eq(0).html();
                var can = $(this).find('td').eq(3).html();
                var preciou  = $(this).find('td').eq(2).html();
                var monto=$(this).find('td').eq(4).html();
               
                         $.ajax({
                             beforeSend: function(){
                              },
                             url: 'procesar_venta.php',
                             type: 'POST',
                             data: '&proc='+proc+'&cantidad='+can+'&preciou='+preciou+'&descripcion='+descripcion+'&id='+id,
                             success: function(x){
                                  
                                  var n = noty({
                                   text: "Procesando venta...  articulo actual: "+proc,
                                   theme: 'relax',
                                   layout: 'topLeft',
                                   type: 'success',
                                   timeout: 2000,
                                  });
                               /*if(yapuso==0){
                               llena_ticket_archivo(cod,can,preciou,descripcion_art,yapuso,monto,$("#totales").html(),$("#paga_con").val(),$("#el_cambio").val(),n_tic);
                               yapuso=1;
                               }else{
                               llena_ticket_archivo(cod,can,preciou,descripcion_art,yapuso,monto,$("#totales").html(),$("#paga_con").val(),$("#el_cambio").val(),n_tic);
                               }*/
                              },
                             error: function(jqXHR,estado,error){
                               $("#errores").html('Error... ');
                              }
                             });
                           });
          alert("venta Realizada");
          $(".suma").html("");
          $("#pago").val("");
          $(".cambio").html("");
          $("#tbody").empty();
          
      });
           
           
         }
         
</script>