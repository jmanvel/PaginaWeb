<div class="container-fluid" style="background: #f5f5f5">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><h1 style="font-weight: bold; text-align: center; margin-top: 80px">TIPO DE CAMBIO DÓLAR</h1></div>
        </div> 
        <div class="gray"></div> 
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="table-responsive">
                    <table class="table table-hover table-striped nowrap" id="dataTable">
                        <thead style="inline-box-align:  ">
                            <tr>
                                <th class="col-sm-1">Código</th>
                                <th>País</th>
                                <th>Moneda</th>
                                <th>Venta</th>
                                <th class="col-sm-1">Compra</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="cursor: pointer;">
                                <td style="color: red;">USD</td>
                                <td>United State.</td>
                                <td>Dólar</td>
                                <td>3.268</td>
                                <td>3.2650</td>
                                <td>22/12/2017</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12"><h1 style="font-weight: bold; text-align: center; margin-top: 80px">FACTORES DE CONVERSIÓN MENSUAL</h1></div>
                <div class="col-sm-offset-4 col-sm-4">
                    <label for="" class="control-label">País:</label>
                    <div class="form-group">
                        <select id="modulo" name="modulo" class="form-control input-sm" style="height: 50px" disabled="">
                            <option value="">Selecciona </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-5 col-sm-2" style="text-align: center; ">
                    <button class="btn btn-hero btn-lg redVermas" role="button">Buscar</button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped nowrap" id="dataTable">
                            <thead style="inline-box-align:  ">
                                <tr>
                                    <th class="col-sm-1">Código</th>
                                    <th>País</th>
                                    <th>Moneda</th>
                                    <th>Fecha</th>
                                    <th>Factor</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="cursor: pointer;">
                                    <td style="color: red;">DEM</td>
                                    <td>GERMANY.</td>
                                    <td>DEUSTSCHE MARK</td>
                                    <td> 2017-12-04</td>
                                    <td>0.669110000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-offset-5 col-sm-2" style="text-align: center; ">
                    <button class="btn btn-hero btn-lg noticias" role="button">Ver Historial</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>
                <div class="modal-body">
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background: #fff">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><h1 style="font-weight: bold; text-align: center; margin-top: 80px">TAMEX</h1></div>
        </div> 
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <label for="" class="control-label">Mes:</label>
                <div class="form-group">
                    <select id="modulo" name="modulo" class="form-control input-sm" style="height: 50px" disabled="">
                        <option value="">Selecciona </option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="" class="control-label">Año:</label>
                <div class="form-group">
                    <select id="modulo" name="modulo" class="form-control input-sm" style="height: 50px" disabled="">
                        <option value="">Selecciona </option>
                    </select>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-offset-5 col-sm-2" style="text-align: center; ">
                <button class="btn btn-hero btn-lg redVermas" role="button">Buscar</button>
            </div>
        </div>
        <div class="row" style="padding-bottom: 80px">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="table-responsive">
                    <table class="table table-hover table-striped nowrap" id="dataTable">
                        <thead style="inline-box-align:  ">
                            <tr>
                                <th>Fecha</th>
                                <th>Tamex</th>
                                <th>Factor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="cursor: pointer;">
                                <td >21/12/2017</td>
                                <td>6.630000.</td>
                                <td>0.000180</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        deta();
    });
    var deta = function () {
        $("#dataTable tbody tr").each(function () {
            $(this).click(function () {
                callModal('Boletín Químico', '<?php echo base_url(); ?>consultas_en_linea/boletin_detalle');
                $('#dataTable tbody tr').removeClass('info2');
                $(this).addClass('info2');
            });
        });
    };
</script>