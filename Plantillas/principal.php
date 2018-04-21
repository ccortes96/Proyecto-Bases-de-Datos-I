
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootshop online Shopping cart</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--Less styles -->
        <!-- Other Less css file //different less files has different color scheam
             <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
             <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
             <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
        -->
        <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
        <script src="themes/js/less.js" type="text/javascript"></script> -->

        <!-- Bootstrap style --> 
        <link id="callCss" rel="stylesheet" href="themes/bootshop/bootstrap.min.css" media="screen"/>
        <link href="themes/css/base.css" rel="stylesheet" media="screen"/>
        <!-- Bootstrap style responsive -->	
        <link href="themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link href="themes/css/font-awesome.css" rel="stylesheet" type="text/css">
        <!-- Google-code-prettify -->	
        <link href="themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
        <!-- fav and touch icons -->
        <link rel="shortcut icon" href="themes/images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="themes/images/ico/apple-touch-icon-57-precomposed.png">
        <style type="text/css" id="enject"></style>
    </head>
    <body>
        <div id="header">
            <div class="container">
                <div id="welcomeLine" class="row">
                    <div class="span6">Bienvenido!<strong></strong></div>
                    <div class="span6">
                        <div class="pull-right">
                            <a href="product_summary.html"><span class="">Fr</span></a>
                            <a href="product_summary.html"><span class="">Es</span></a>
                            <span class="btn btn-mini">En</span>
                            <a href="product_summary.html"><span>&pound;</span></a>
                            <span class="btn btn-mini">$155.00</span>
                            <a href="product_summary.html"><span class="">$</span></a>
                            <a href="product_summary.html"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i>  Productos en carrito </span> </a> 
                        </div>
                    </div>
                </div>
                <!-- Navbar ================================================== -->
                <div id="logoArea" class="navbar">
                    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-inner">
                        <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
                        <form class="form-inline navbar-search" method="post" action="productos.php" >
                            <input id="srchFld" class="srchTxt" type="text" />
                            <select class="srchTxt">
                                <option>Todo</option>
                                <option>Electrónica, computadoras y oficina </option>
                                <option>Vestimenta, calzado y joyería </option>
                                <option>Libros </option>
                                <option>Automovilismo e industriales </option>
                                <option>Deportes </option>
                                <option>Jardinería </option>
                                <option>Juguetes y niños </option>
                                <option>Ebooks </option>
                                <option>Suplementos de mascotas </option>
                                <option>Ebooks </option>
                                <option>Comida y comestibles </option>
                                <option>Belleza y salud </option>
                                <option>Exclusivos</option>
                                <option>Hecho a mano </option>
                                <option>Películas, música y juegos </option>
                            </select> 
                            <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
                        </form>
                        <ul id="topMenu" class="nav pull-right">
                            <li class=""><a href="special_offer.html">Ofertas especiales</a></li>
                            <li class=""><a href="normal.html">Envío</a></li>
                            <li class=""><a href="contact.html">Contacto</a></li>
                            <li class="">
                                <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
                                <div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >


                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h3>Log in!</h3>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal loginFrm">
                                            <div class="control-group">								
                                                <input type="text" id="inputEmail" placeholder="Email">
                                            </div>
                                            <div class="control-group">
                                                <input type="password" id="inputPassword" placeholder="Contraseña">
                                            </div>

                                        </form>		
                                        <button type="submit" class="btn btn-success">Continuar</button>
                                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End====================================================================== -->
        <div id="carouselBlk">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <a href="signin.php"><img style="width:100%" src="themes/images/carousel/1.png" alt="Ofertas especiales"/></a>
                            <div class="carousel-caption">
                                <h4>Second Thumbnail label</h4>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <a href="signin.php"><img style="width:100%" src="themes/images/carousel/2.png" alt=""/></a>
                            <div class="carousel-caption">
                                <h4>Second Thumbnail label</h4>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="container">
                            <a href="signin.php"><img src="themes/images/carousel/4.png" alt=""/></a>
                            <div class="carousel-caption">
                                <h4>Second Thumbnail label</h4>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            </div>

                        </div>
                    </div>


                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div> 
        </div>
        <div id="mainBody">
            <div class="container">
                <div class="row">
                    <!-- Sidebar ================================================== -->
                    <div id="sidebar" class="span3">
                        <div class="well well-small"><a id="myCart" href="product_summary.html"><img src="themes/images/ico-cart.png" alt="cart">Artículos en tu carrito  <span class="badge badge-warning pull-right">$155.00</span></a></div>
                        <ul id="sideManu" class="nav nav-tabs nav-stacked">
                            <li><a href="products.php">ELECTRÓNCA Y COMPUTADORAS </a></li>
                            <li><a href="products.php">LIBROS </a></li>
                            <li><a href="products.php">JARDINERÍA</a></li>
                            <li><a href="products.php">EBOOKS</a></li>
                            <li><a href="products.php">PELÍCULAS,MÚSICA Y JUEGOS</a></li>
                            <li><a href="products.php">SUPLEMENTOS DE MASCOTAS</a></li>
                            <li><a href="products.php">DEPORTES</a></li>
                            <li><a href="products.php">TABLETAS</a></li>
                            <li><a href="products.php">COMIDA Y COMESTIBLES</a></li>
                            <li><a href="products.php">EXCLUSIVOS</a></li>
                            <li><a href="products.php">BELLEZA Y SALUD</a></li>
                            <li><a href="products.php">AUTOMOVILISMO E INSDUSTRIALES</a></li>
                        </ul>
                        <br/>
                        <div class="thumbnail">
                            <img src="themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
                            <div class="caption">
                                <h5>Panasonic</h5>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Añadir <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div><br/>
                        <div class="thumbnail">
                            <img src="themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
                            <div class="caption">
                                <h5>Kindle</h5>
                                <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Añadir <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                            </div>
                        </div><br/>

                    </div>
                    <!-- Sidebar end=============================================== -->
                    <div class="span9">		
                        <div class="well well-small">
                            <h4>Mejores Productos <small class="pull-right"></small></h4>
                            <div class="row-fluid">
                                <div id="featured" class="carousel slide">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <ul class="thumbnails">
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <i class="tag"></i>
                                                        <a href="product_details.html"><img src="themes/images/products/b1.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <i class="tag"></i>
                                                        <a href="product_details.html"><img src="themes/images/products/b2.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <i class="tag"></i>
                                                        <a href="product_details.html"><img src="themes/images/products/b3.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <i class="tag"></i>
                                                        <a href="product_details.html"><img src="themes/images/products/b4.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul class="thumbnails">
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <i class="tag"></i>
                                                        <a href="product_details.html"><img src="themes/images/products/5.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <i class="tag"></i>
                                                        <a href="product_details.html"><img src="themes/images/products/6.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/7.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/8.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul class="thumbnails">
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/9.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/10.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/11.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/1.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="item">
                                            <ul class="thumbnails">
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/2.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/3.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/4.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="span3">
                                                    <div class="thumbnail">
                                                        <a href="product_details.html"><img src="themes/images/products/5.jpg" alt=""></a>
                                                        <div class="caption">
                                                            <h5>Nombre del producto</h5>
                                                            <h4><a class="btn" href="product_details.html">MIRAR</a> <span class="pull-right">$222.00</span></h4>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
                                    <a class="right carousel-control" href="#featured" data-slide="next">›</a>
                                </div>
                            </div>
                        </div>
                        <h4>Últimos productos</h4>
                        <ul class="thumbnails">
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="themes/images/products/6.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Nombre del producto</h5>
                                        <p> 
                                            Descripción
                                        </p>

                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Añadir <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="themes/images/products/7.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Nombre del producto</h5>
                                        <p> 
                                            Descripción
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Añadir <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="themes/images/products/8.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Nombre del producto</h5>
                                        <p> 
                                            Descripción
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Añadir <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="themes/images/products/9.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Nombre del producto</h5>
                                        <p> 
                                            Descripción
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Añadir<i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="themes/images/products/10.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Nombre del producto</h5>
                                        <p> 
                                            Descripción
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Añadir <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                            <li class="span3">
                                <div class="thumbnail">
                                    <a  href="product_details.html"><img src="themes/images/products/11.jpg" alt=""/></a>
                                    <div class="caption">
                                        <h5>Nombre del producto</h5>
                                        <p> 
                                            Descripción 
                                        </p>
                                        <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Añadir <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
                                    </div>
                                </div>
                            </li>
                        </ul>	

                    </div>
                </div>
            </div>
        </div>
        <!-- Footer ================================================================== -->
        <div  id="footerSection">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <h5>CUENTA</h5>
                        <a href="login.html">TU CUENTA</a>
                        <a href="login.html">INFORMACIÓN PERSONAL</a> 
                        <a href="login.html">DIRECCIÓN</a> 

                        <a href="login.html">ORDENES</a>
                    </div>
                    <div class="span3">
                        <h5>INFORMACIÓN</h5>
                        <a href="contact.html">CONTACTO</a>  
                        <a href="signin.php">REGISTRO</a>  
                        <a href="legal_notice.html">MANUAL</a>  
                        <a href="tac.html">TÉRMINOS E INFORMACIÓN</a> 
                        <a href="faq.html">PREGUNTAS</a>
                    </div>



                </div><!-- Container End -->
            </div>
            <!-- Placed at the end of the document so the pages load faster ============================================= -->
            <script src="themes/js/jquery.js" type="text/javascript"></script>
            <script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="themes/js/google-code-prettify/prettify.js"></script>

            <script src="themes/js/bootshop.js"></script>
            <script src="themes/js/jquery.lightbox-0.5.js"></script>

            <!-- Themes switcher section ============================================================================================= -->
            <div id="secectionBox">
                <link rel="stylesheet" href="themes/switch/themeswitch.css" type="text/css" media="screen" />
                <script src="themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
                <div id="themeContainer">
                    <div id="hideme" class="themeTitle">Style Selector</div>
                    <div class="themeName">Oregional Skin</div>
                    <div class="images style">
                        <a href="themes/css/#" name="bootshop"><img src="themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
                        <a href="themes/css/#" name="businessltd"><img src="themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
                    </div>
                    <div class="themeName">Bootswatch Skins (11)</div>
                    <div class="images style">
                        <a href="themes/css/#" name="amelia" title="Amelia"><img src="themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="spruce" title="Spruce"><img src="themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
                        <a href="themes/css/#" name="superhero" title="Superhero"><img src="themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="cyborg"><img src="themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="cerulean"><img src="themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="journal"><img src="themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="readable"><img src="themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
                        <a href="themes/css/#" name="simplex"><img src="themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="slate"><img src="themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="spacelab"><img src="themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="united"><img src="themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
                        <p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
                    </div>
                    <div class="themeName">Background Patterns </div>
                    <div class="images patterns">
                        <a href="themes/css/#" name="pattern1"><img src="themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
                        <a href="themes/css/#" name="pattern2"><img src="themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern3"><img src="themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern4"><img src="themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern5"><img src="themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern6"><img src="themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern7"><img src="themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern8"><img src="themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern9"><img src="themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern10"><img src="themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>

                        <a href="themes/css/#" name="pattern11"><img src="themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern12"><img src="themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern13"><img src="themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern14"><img src="themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern15"><img src="themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>

                        <a href="themes/css/#" name="pattern16"><img src="themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern17"><img src="themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern18"><img src="themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern19"><img src="themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
                        <a href="themes/css/#" name="pattern20"><img src="themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>

                    </div>
                </div>
            </div>
            <span id="themesBtn"></span>
    </body>
</html>