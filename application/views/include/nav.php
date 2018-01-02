<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="nav">
    <div class="container-fluid">
        <div class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <div class="col-sm-12">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="<?php echo base_url(); ?>"><div class="logo_content">
                                        <img src="<?php echo base_url(); ?>assets/img/logo/logo.jpg" alt="logo"/>
                                    </div>
                                </a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul id="options" class="nav navbar-nav pull-right animated" animate="bounceInLeft"> 
                                    <li class="dropdown"> 
                                        <a href="<?php echo base_url(); ?>productos">PRODUCTOS<b class="caret"> </b></a> 
                                        <ul class="dropdown-menu">  
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>productos/sce_carga">SCE - CARGA</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>productos/sce_aduanas">SCE - ADUANAS</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>productos/sce_transporte">SCE - TRANSPORTE</a>
                                                    </li></div>
                                                <div class="col-sm-7">
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>productos/sce_almacen">SCE - ALMACEN</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>productos/sce_doctel">DOCTEL</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>productos/productos_de_valor_agregado">PRODUCTOS DE VALOR AGREGADO</a>
                                                    </li>
                                                </div>
                                            </div> 
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" >CONSULTAS EN LINEA <b class="caret"> </b></a>
                                        <ul class="dropdown-menu">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/arancel_de_aduanas">Arancel de aduanas</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/dam_numeradas">DAM numeradas</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/normas_legales">Normas Legales</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/boletines_quimicos">Boletines Quimicos</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/ley_lga">Ley </a>
                                                        /
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/reglamento_lga">Reglamento LGA</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/resoluciones_arancelarias">Resoluciones Arancelarias</a>
                                                    </li>
                                                </div>
                                                <div class="col-sm-6"> 
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/tipo_de_cambio_tamex">Tipo de cambio / Tamex</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/instructivo_dam">Instructivo DAM</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/informes_aduaneros">Informes Aduaneros</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/infracciones_sanciones">Infracciones Sanciones</a>
                                                    </li>
                                                    <li class="submenu">
                                                        <a href="<?php echo base_url(); ?>consultas_en_linea/links_de_ayuda">Links de ayuda</a>
                                                    </li>
                                                </div>
                                            </div> 
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>Nosotros">NOSOTROS</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>noticias">NOTICIAS</a>
                                    </li>
                                    <li >
                                        <a href="<?php echo base_url(); ?>contacto">CONTACTO</a>
                                    </li> 
                                    <li class="dropdown hidden-xs separator">
                                        <a href="#">|</a>
                                    </li> 
                                    <li class="dropdown">
                                        <a href="#" >ES<b class="caret"> </b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">EN</a>
                                            </li>
                                            <li>
                                                <a href="#">FR</a>
                                            </li>
                                        </ul>
                                    </li> 
                                    <li class="dropdown hidden-xs separator" id="separador">
                                        <a href="#">|</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#">LOG IN</a>
                                    </li>
                                    <li class="dropdown hidden-xs separator" style="user-select: none;">
                                        <a href="#">|</a>
                                    </li>
                                    <li>
                                        <a class="cursor" style="user-select: none;" onclick="showSearch()">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </a>
                                    </li> 
                                    <li class="dropdown hidden-xs separator" style="user-select: none;">
                                        <a href="#">|</a>
                                    </li>
                                </ul>
                                <ul id="searchOption" class="nav navbar-nav pull-right" style="display: none">
                                    <li>
                                        <form action="search" method="POST">
                                            <div class="col-sm-12"> 
                                                <input id="txtSearch" name="txtSearch" class="form-control input-sm animated" animate="bounceInLeft" placeholder="Buscar" style="margin-top: 8px; width: 500px;">            
                                            </div>
                                        </form>
                                    </li>
                                    <li class="dropdown hidden-xs separator" style="user-select: none;">
                                        <a href="#">|</a>
                                    </li>
                                    <li>
                                        <a class="cursor"  style="user-select: none;" onclick="showSearch()">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </a>
                                    </li> 
                                    <li class="dropdown hidden-xs separator" style="user-select: none;">
                                        <a href="#">|</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</nav>
