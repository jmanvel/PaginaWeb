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
                                <a class="navbar-brand" href="/Sintad/index.php"><div class="logo_content"><img src="/Sintad/assets/img/logo/logo.jpg" alt="logo"/></div></a>
                            </div>
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul id="options" class="nav navbar-nav pull-right"> 
                                    <li class="dropdown">
                                        <a href="productos.php" >PRODUCTOS<b class="caret"> </b></a>
                                        <ul class="dropdown-menu">
                                            <div class="col-sm-5">
                                                <li class="submenu">
                                                    <a href="/Sintad/productos/carga.php">SCE - CARGA</a>
                                                </li>
                                                <li class="submenu">
                                                    <a href="/Sintad/productos/aduana.php">SCE - ADUANAS</a>
                                                </li>
                                                <li class="submenu">
                                                    <a href="/Sintad/productos/transporte.php">SCE - TRANSPORTE</a>
                                                </li></div>
                                            <div class="col-sm-7">
                                                <li class="submenu">
                                                    <a href="/Sintad/productos/almacen.php">SCE - ALMACEN</a>
                                                </li>
                                                <li class="submenu">
                                                    <a href="/Sintad/productos/doctel.php">DOCTEL</a>
                                                </li>
                                                <li class="submenu">
                                                    <a href="/Sintad/productos/valor_agregado.php">PRODUCTOS DE VALOR AGREGADO</a>
                                                </li>
                                            </div>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" >CONSULTAS EN LINEA <b class="caret"> </b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a target="_blank" href="#">Consulta 1</a>
                                            </li>
                                            <li class="dropdown-submenu">
                                                <a href="#" data-toggle="dropdown">Consulta 2 <b class="caretl hidden-xs"></b><b class="caret hidden-sm hidden-md hidden-lg"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a target="_blank" href="#"><b class="caretl hidden-sm hidden-md hidden-lg opt2"></b> Consulta 2 - 1</a>
                                                    </li>
                                                    <li>
                                                        <a target="_blank" href="#"><b class="caretl hidden-sm hidden-md hidden-lg opt2"></b> Consulta 2 - 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a target="_blank" href="#">Consulta 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/Sintad/nosotros.php">NOSOTROS</a>
                                    </li>
                                    <li>
                                        <a href="#">NOTICIAS</a>
                                    </li>
                                    <li >
                                        <a href="/Sintad/contacto.php">CONTACTO</a>
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
                                    <li class="dropdown hidden-xs separator">
                                        <a href="#">|</a>
                                    </li>
                                    <li>
                                        <a class="cursor" onclick="showSearch()">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </a>
                                    </li> 
                                    <li class="dropdown hidden-xs separator">
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
                                    <li class="dropdown hidden-xs separator">
                                        <a href="#">|</a>
                                    </li>
                                    <li>
                                        <a class="cursor"  onclick="showSearch()">
                                            <span class="glyphicon glyphicon-search"></span>
                                        </a>
                                    </li> 
                                    <li class="dropdown hidden-xs separator">
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