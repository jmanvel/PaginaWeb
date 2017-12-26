<div class="container-fluid vision" style="height: 495px;">
    <div id="map"></div>
    <div class="container">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4" style="margin-top: -420px;">
                    <div class="container white" style="height: 350px; width: 370px;  position: absolute;margin-left: 15px" id="mapa">
                        <div class="row" style="margin-top: 20px">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <h3 style="margin-top: 50px; padding-bottom: 15px; font-family: MyriadPro-Bold; font-size: 28px">UB&Iacute;CANOS</h3>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2"><img src="<?php echo base_url(); ?>assets/img/map.png" alt="ubicacion" ></div>
                            <div class="col-sm-7" style="margin-left: -20px; color: #aeaeae">
                                <p style="font-size: 16px"> Pasaje Parque<br> San Carlos 271- 275<br> Pueblo Libre, Lima, Per&uacute;</p>
                            </div>
                            <div class="col-sm-2"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2"><img src="<?php echo base_url(); ?>assets/img/phone.png" alt="telefono" ></div>
                            <div class="col-sm-7" style="margin-left: -20px; color: #aeaeae; margin-top: 5px;">
                                <p style="font-size: 16px">(511) 743 - 4040</p>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2"><img src="<?php echo base_url(); ?>assets/img/mail.png" alt="Mail"></div>
                            <div class="col-sm-7" style="margin-left: -20px; color: #aeaeae; margin-top: 5px;">
                                <p style="font-size: 16px">contacto@sintad.com.pe</p>
                            </div>
                            <div class="col-sm-1"></div>
                        </div>
                    </div>
                    <div class="row red" style="width: 370px; margin-top: 350px; height: 15px; margin-left: 15px" id="mapa">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid contacto">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><h1 style="text-align: center; margin-top: 80px;font-family: MyriadPro-Bold;">CONTACTO ESPEC&Iacute;FICO</h1></div>
        </div>
        <div class="row" style="padding-bottom: 50px">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <div class="red" style="height: 15px">
                </div>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <div class="row" style="padding-bottom: 20px">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="form-group">
                    <select id="modulo" name="modulo" class="form-control input-sm" style="height: 50px">
                        <option value="">Selecciona una categoría</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row" style="padding-bottom: 80px">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <div class="form-group">
                    <select id="modulo" name="modulo" class="form-control input-sm" style="height: 50px" disabled="disabled">
                        <option value="">Selecciona una contacto</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background: #e7e7e7">
    <div class="container">
        <div class="row">
            <div class="col-sm-12"><h1 style="text-align: center; margin-top: 80px;font-family: MyriadPro-Bold;">ESCR&Iacute;BENOS</h1></div>
        </div>
        <div class="row" style="padding-bottom: 50px">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <div class="red" style="height: 15px">
                </div>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <div class="row" style="padding-bottom: 10px">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <div class="form-group">  
                    <input id="descripciondp" name="descripciondp" style="height: 50px" type="text" class="form-control input-sm" placeholder="Nombre completo" maxlength="50" value="" />                               
                </div>
            </div>
            <div class="col-sm-5">
                <div class="form-group">         
                    <input id="descripciondp" name="descripciondp" style="height: 50px" type="text" class="form-control input-sm" placeholder="Correo electrónico" maxlength="50" value="" />                               
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <div class="row" style="padding-bottom: 10px">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="form-group">
                    <textarea class="form-control v-resize" value="" rows="4" id="detalle" name="detalle" placeholder="Mensaje"></textarea>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <div class="row" style="padding-bottom: 60px">
            <div class="col-sm-5"></div>
            <div class="col-sm-2" style="text-align: center; ">
                <button class="btn btn-hero btn-lg redVermas" role="button">Enviar</button>
            </div>
            <div class="col-sm-5"></div>
        </div>
    </div>
</div>
<script>
    function initMap() {
        var uluru = {lat: -12.072423500000015, lng: -77.07030950000001};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIiEq3mm56dM1Nspzrj0RCplbEBsWsWHY&callback=initMap">
</script>