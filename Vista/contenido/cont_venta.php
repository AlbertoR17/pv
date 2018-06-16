<div class="row">
    <div class="col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Basic Table</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="form-group">
                    <label class="control-label" for="order_id">Codigo del Producto</label>
                    <input type="text" id="order_id" name="order_id" value="" placeholder="Codigo del producto" class="form-control">
                    <br>
                    <label class="control-label" for="order_id">Descripción del producto</label>
                    <input type="text" value="" readonly placeholder="Descripción del producto" class="form-control">
                    <br>
                    <label class="control-label" for="status">Precio</label>
                    <input type="number" id="status" name="status" value="" placeholder="Precio" class="form-control">
                    <label class="control-label" for="order_id">Unidad de medida</label>
                    <select data-placeholder="Unidad de medida" name="lugs" class="chosen-select col-sm-10" style="width:350px;" >
                        <option value="Agua_Prieta">Pieza</option>
                        <option value="Aconchi">KG</option>
                    </select>
                    <br>
                    <label class="control-label" for="status">Cantidad</label>
                    <input type="number" id="status" name="status" value="" placeholder="Cantidad" class="form-control">

                </div>
                <div class="form-group">

                    <input type="submit"  value="Agregar" class="btn btn-info form-control lazur-bg ">
                    <label class="control-label" for="status">Imagen del producto</label>
                    <div class="form-control" style="max-width: 250px;min-width: 250px; max-height: 210px;min-height: 210px">
                        <center><img style="max-width: 150px;min-width: 150px; max-height: 200px;min-height: 200px" src="../Content/Productos/Nesquik.png" alt="Cereal"></center>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="col-lg-4 text-left">
            <div class="widget style1 lazur-bg">
                <div class="row vertical-align">                    
                    <i class="fa-1x"><b>TOTAL</b></i>
                    <h2 class="font-bold">$10000.00</h2>                                 
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="widget style1 lazur-bg">
                <div class="row vertical-align">
                    <i class="fa-1x"><b>Recibido</b></i>
                    <input type="number" min="0" style="color: black" id="order_id" name="order_id" value="" class="form-control">       
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-right">
            <div class="widget style1 lazur-bg">
                <div class="row vertical-align">                                
                    <i class="fa-1x"><b>Cambio</b></i>
                    <h2 class="font-bold">$100.00</h2>
                </div>
            </div>
        </div>
        <div class="form-group">
            <input type="submit"  value="Terminar venta" class="btn btn-info form-control lazur-bg ">
        </div>
        <div class="ibox float-e-margins">
            <div class="ibox-title">
            <h3>Nota de compra</h3>
            </div>
            <div class="ibox-content">

                <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
                    <thead>
                        <tr>


                            <th >Producto</th>
                            <th >Descripción</th>
                            <th >Precio Unitario</th>
                            <th >Cantidad</th>
                            <th >Total del producto</th>

                            <th class="text-right">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                Pan Bimbo
                            </td>
                            <td>
                                Barra extra grande
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td class="text-right">
                                <div class="btn-group">
                                    <button class="btn-white btn btn-xs">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                Pan Bimbo
                            </td>
                            <td>
                                Barra extra grande
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td class="text-right">
                                <div class="btn-group">
                                    <button class="btn-white btn btn-xs">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                Pan Bimbo
                            </td>
                            <td>
                                Barra extra grande
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td class="text-right">
                                <div class="btn-group">
                                    <button class="btn-white btn btn-xs">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                Pan Bimbo
                            </td>
                            <td>
                                Barra extra grande
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td class="text-right">
                                <div class="btn-group">
                                    <button class="btn-white btn btn-xs">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>

                            <td>
                                Pan Bimbo
                            </td>
                            <td>
                                Barra extra grande
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                $32.00
                            </td>
                            <td class="text-right">
                                <div class="btn-group">
                                    <button class="btn-white btn btn-xs">Delete</button>
                                </div>
                            </td>
                        </tr>
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
