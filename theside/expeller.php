<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Ruta 12 - Expeller de Soja</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <link type="text/css" rel="stylesheet" href="css/snackbar.css">
        <link type="text/css" rel="stylesheet" href="css/personal.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--Loader -->
        <div class="loader2">
            <div class="loader loader_each"><span></span></div>
        </div>

        <?php
        require_once __DIR__ . "/php/suscripcion.php";
        ?>
        <!-- loader end  -->
        <!-- main start  -->
        <div id="main">
                        <!-- header start  -->
            <header class="main-header">
                <a href="index.php" class="header-logo "><img src="images/logo.png" alt=""></a>
                <!-- sidebar-button --> 
                <!-- nav-button-wrap-->
                <div class="nav-button-wrap">
                    <div class="nav-button">
                        <span  class="nos"></span>
                        <span class="ncs"></span>
                        <span class="nbs"></span>
                        <div class="menu-button-text">Menu</div>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!-- sidebar-button end-->  
                <!--  navigation --> 
                <div class="left-panel_social">
                    <ul class="panelgranos" id="parent-list-b">
                        <li id="a"><img src="images/iconos/cereal-gris.png" class="iconoslateral" ></li>
                        <li id="b"><img src="images/iconos/moneda-gris.png" class="iconoslateral"></li>
                        <li id="c"><img src="images/iconos/clima-gris.png" class="iconoslateral"></li>
                        <li id="d"><img src="images/iconos/atencion-gris.png" class="iconoslateral"></li>
                    </ul>
                </div>
                <div class="header-contacts">
                    <ul>
                        <li><span> WTS </span> <a href="https://api.whatsapp.com/send?phone=5493435620954&text=Buenas, estoy necesitado asesoramiento">+54 9 (3435) 62 0954</a></li>
                        <li><span> CORREO </span> <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=administracion@ruta12.com">ADMINISTRACION@RUTA12.COM</a></li>
                    </ul>
                </div>
                <!-- navigation  end -->            
            </header>
            <!-- header end -->
            <!-- left-panel -->
            <div class="left-panel">
                <div class="horizonral-subtitle"><span><strong></strong></span></div>
                <div class="left-panel_social">
                    <ul id="parent-list">
                        <li id="a"><img src="images/iconos/cereal-gris.png" class="iconoslateral" ></li>
                        <li id="b"><img src="images/iconos/moneda-gris.png" class="iconoslateral"></li>
                        <li id="c"><img src="images/iconos/clima-gris.png" class="iconoslateral"></li>
                        <li id="d"><img src="images/iconos/atencion-gris.png" class="iconoslateral"></li>
                    </ul>
                </div>
            </div>
            <!-- left-panel end -->
            <!-- share-button -->
            <div class="share-button">
                <span>Cost</span>
            </div>
            <!-- share-button end -->
            <!-- wrapper  -->	
            <div id="wrapper">
                <!-- content-holder  -->	
                <div class="content-holder" data-pagetitle="Hernández - Entre Ríos">
                    <!-- nav-holder-->
                    <div class="nav-holder but-hol">
                        <div class="nav-scroll-bar-wrap fl-wrap">
                            <!-- <div class="nav-search">
                                <form action="#" class="searh-inner fl-wrap">
                                    <input name="se" id="se" type="text" class="search fl-wrap" placeholder="Search.." value="Search..." />
                                    <button class="search-submit color-bg" id="submit_btn"><i class="fal fa-search"></i> </button>
                                </form>
                            </div> -->
                            <!-- nav -->
                            <nav class="nav-inner" id="menu">
                                <ul>
                                    <li>
                                        <a href="index.php" class="">Home</a>
                                    </li>
                                    <li>
                                        <a href="empresa.php" class="">EMPRESA</a>
                                    </li>
                                    <li>
                                        <a href="#" class="act-link">INDUSTRIA</a>
                                        <!--level 2 -->
                                        <ul>
                                            <li><a href="expeller.php" class="act-link">Expeller de soja</a></li>
                                            <li><a href="aceite.php" class="">Aceite desgomado</a></li>
                                        </ul>
                                        <!--level 2 end -->
                                    </li>
                                    <li>
                                        <a href="services.php">Servicios</a>
                                    </li>
                                    <li><a href="nutricionanimal.php" class="">Nutricion animal</a></li>
                                    <li><a href="agroinsumos.php" class="">Agroinsumos</a></li>
                                    <li><a href="blog.php" class="">Blog</a></li>
                                    <li><a href="contacts.php" class="">Contacto</a></li>
                                </ul>
                            </nav>
                            <!-- nav end-->
                            <!--lang-links-->
                            <div class="lang-links fl-wrap">
                            </div>
                            <!--lang-links end-->
                        </div>
                        <!--nav-social-->
                        <div class="nav-social">
                            <span class="nav-social_title">Seguinos: </span>
                            <ul >
                                <li><a href="https://www.facebook.com/ruta12.365" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/ruta12_365/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://api.whatsapp.com/send?phone=5493435620954&text=Buenas, estoy necesitado asesoramiento"><i class="fab fa-whatsapp"></i></a></li>

                            </ul>
                        </div>
                        <!--nav-social end -->
                    </div>
                    <div class="nav-overlay">
                        <div class="element"></div>
                    </div>
                    <!-- nav-holder end --> 
                    <!--content--> 
                    <div class="content">
                    <div class="closeonclick" id="clickout"></div>
                    <div class="apiclima" id="api1">
                        <div class="climabox">
          <!--                   <div class="logoapibox">
                                <img src="images/logoR12-color.png" class="logoapi">
                            </div>
                            <h3 class="tituloapi">Clima en la region</h3>
                            <div class="section-sep"></div>
                            <h4 class="subtituloapi">Entre Ríos - Argentina</h4>
                            <iframe width="90%" height="70%" src="https://embed.windy.com/embed2.html?lat=-32.556&lon=-60.024&detailLat=-32.452&detailLon=-60.024&width=650&height=450&zoom=10&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=true&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe> -->
                        </div>
                    </div>
                    <div class="apicotizacion" id="api2">
                        <div class="climabox" style="overflow: auto;">
                            <?php
                                require_once __DIR__ . "/cotizacion_table.php";
                            ?>
                        </div>
                    </div>
                    <div class="apiclima" id="api3">
                        <div class="climabox">
                            <div class="logoapiboxclima">
                                <img src="images/logoR12-color.png" class="logoapi">
                            </div>
                            <h3 class="tituloapi">Clima en la region</h3>
                            <div class="section-sep"></div>
                            <h4 class="subtituloapi">Entre Ríos - Argentina</h4>
                            <iframe class="mapaclima" src="https://embed.windy.com/embed2.html?lat=-32.556&lon=-60.024&detailLat=-32.452&detailLon=-60.024&width=650&height=450&zoom=10&level=surface&overlay=wind&product=ecmwf&menu=&message=true&marker=&calendar=now&pressure=true&type=map&location=coordinates&detail=true&metricWind=default&metricTemp=default&radarRange=-1" frameborder="0"></iframe>
                        </div>
                    </div>
                    
                    <div class="apicontacto" id="api4">
                        <div class="climabox">
                            <div id="logoR12" class="logoapibox">
                                <img src="images/logoR12-color.png" class="logoapi">
                            </div>
                            <div class="box2">
                                <img src="images/iconos/atencionapi.jpg" class="atencion">
                            </div>
                            <div class="box3">
                                <h3 class="tituloapiwp">Conecta con un asesor</h3>
                                <h4 class="subtituloapiwp">Envianos tu consulta por WhatsApp</h4>
                            </div>
                            <div class="box4">
                                <div class="botonwp">
                                    <a href="https://api.whatsapp.com/send?phone=5493435620954&text=Buenas, estoy necesitado asesoramiento"><div class="wptext">Continuar al chat</div></a>
                                </div>
                            </div>    
                        </div>   
                    </div>
                        <!--section--> 
                        <section class="hero-section dark-bg"  data-scrollax-parent="true">
                            <div class="hero-canvas-wrap fs-canvas first-tile_load">
                                <div class="dots gallery__dots" data-dots=""></div>
                            </div>
                            <div class="hero-bg">
                                <div class="bg par-elem"  data-bg="images/Industria/expeller-inicial.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                                <div class="overlay"></div>
                                <div class="pr-bg"></div>
                                
                            </div>
                            <div class="container">
                                <div class="section-title fl-wrap first-tile_load">
                                    <h2>EXPELLER DE SOJA <br style="display:block;content: '';margin-top: -2%;"> <span class="cerouno">SOMOS EXPORTADORES</span> </h2>
                                    <p style="font-size: 16px;"> If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                                    
                                </div>
                            </div>
                            <div class="hero-start-link bot-element">
                                <div class="scroll-down-wrap">
                                    <div class="mousey">
                                        <div class="scroller"></div>
                                    </div>
                                    <span>Scroll Down</span>
                                </div>
                                <a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-long-arrow-down"></i></a>
                            </div>
                        </section>
                        <!--section end--> 
                        <!--section  --> 
                        <section class="no-padding-bottom " id="sec1">
                            <!-- container-->  
                            <div class="container">
                                <!-- det-wrap-->  
                                <div class="fl-wrap det-wrap">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="fixed-column fl-wrap">
                                                <div class="pr-bg pr-bg-white"></div>
                                                <div class="pr-title">
                                                    EXPELLER DE SOJA
                                                    <span>Subproducto que se obtiene de la extraccion de aceite por el metodo de Extrusado-Prendado.</span>
                                                </div>
                                                <ul class="pr-list dark-bg">
                                                    <li><a href="public/pdf/Expeller-FT.pdf" target="_blank"><span id="ficha">FICHA TECNICA</span></a></li>
                                                </ul>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-8 first-tile_load">
                                            <!-- tabs-container-->  
                                            <div id="tabs-container" class="fl-wrap">
                                                <div class="tabs-counter">
                                                    <span>0</span>
                                                    <div class="tc_item">1</div>
                                                </div>
                                                
                                                <!-- tab-content--> 
                                                <div id="tab-1" class="tab-content">
                                                    <div class="column-wrap-media fl-wrap">
                                                        <div class="single-slider-wrap">
                                                            <div class="single-slider fl-wrap">
                                                                <div class="swiper-container">
                                                                    <div class="swiper-wrapper lightgallery">
                                                                        <div class="swiper-slide hov_zoom"><img src="images/Industria/expeller01.jpg" alt=""><a href="images/Industria/expeller01.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                        <div class="swiper-slide hov_zoom"><img src="images/Industria/expeller02.jpg" alt=""><a href="images/Industria/expeller02.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                        <div class="swiper-slide hov_zoom"><img src="images/Industria/expeller03.jpg" alt=""><a href="images/Industria/expeller03.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ss-slider-controls">
                                                                <div class="ss-slider-pagination"></div>
                                                                <div class="ss-slider-cont ss-slider-cont-prev color-bg"><i class="fal fa-long-arrow-left"></i></div>
                                                                <div class="ss-slider-cont ss-slider-cont-next color-bg"><i class="fal fa-long-arrow"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="pr-subtitle mar-top"> EXPELLER DE SOJA</h3>
                                                    <p>El expeler de soja es el subproducto que se obtiene de la extracción de aceite por el método de Extrusado-Prendado (E-P) del poroto</p>
                                                    <p>Es un concentrado con un importante contenido proteico (varía entre el 40 y 47% de proteína en base seca).</p>
                                                    <p>El expeler puedo utilizarse como materia prima para formular alimentos balanceados completos, o utilizarse tal cual y transformarse en proteína animal: cerdo, pollo, huevo, leche, carne bovina, etc.</p>
                                                    <p>El expeller de soja cuenta con un contenido de aceite que oscila entre un 5 y 8%. </p>
                                                    <p>En Ruta 12, realizamos procesos de extrusión y prensado bien controlados (Temperaturas elevadas por un corto período de tiempo), lo que nos permite generar materiales de la mejor calidad. Más digestibles, con menor daño a la proteína y mayor contenido de aminoácidos esenciales.</p>
                                                </div>
                                                <!-- tab-content end--> 
                                                <!-- tab-content--> 
                                                <div id="tab-2" class="tab-content">
                                                    <h3 class="pr-subtitle"> Project Presentation.</h3>
                                                    <p>  An eros argumentum vel, elit diceret duo eu, quo et aliquid ornatus delicatissimi. Cu nam tale ferri utroque, eu habemus albucius mel, cu vidit possit ornatus eum. Eu ius postulant salutatus definitionem, explicari. Graeci viderer qui ut, at habeo facer solet usu. Pri choro pertinax indoctum ne, ad partiendo persecuti forensibus est.</p>
                                                    <div class="video-box fl-wrap">
                                                        <img src="images/all/1.jpg" class="respimg" alt="">
                                                        <a class="video-box-btn image-popup" href="https://vimeo.com/34741214"><i class="fas fa-play"></i></a>
                                                    </div>
                                                </div>
                                                <!-- tab-content end-->                                                      
                                                <!-- tab-content--> 
                                                <div id="tab-3" class="tab-content">
                                                    <h3 class="pr-subtitle">Plan and sketches of the project.</h3>
                                                    <div class="palns-gal fl-wrap lightgallery">
                                                        <!-- plans-gal_item--> 
                                                        <div class="plans-gal_item hov_zoom">
                                                            <img src="images/plans/1.jpg" alt="" class="respimg">
                                                            <a href="images/plans/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                        </div>
                                                        <!-- plans-gal_item end-->
                                                        <!-- plans-gal_item--> 
                                                        <div class="plans-gal_item hov_zoom">
                                                            <img src="images/plans/1.jpg" alt="" class="respimg">
                                                            <a href="images/plans/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                        </div>
                                                        <!-- plans-gal_item end-->
                                                        <!-- plans-gal_item--> 
                                                        <div class="plans-gal_item hov_zoom">
                                                            <img src="images/plans/1.jpg" alt="" class="respimg">
                                                            <a href="images/plans/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                        </div>
                                                        <!-- plans-gal_item end-->                                                                                                           
                                                    </div>
                                                </div>
                                                <!-- tab-content end-->                                                     
                                            </div>
                                            <!-- tabs-container end-->  
                                            <div class="clearfix"></div>
                                            <span class="dec-border fl-wrap"></span>
                                            <a href="contacts.php" class="pr-view" >hace tu consulta, estamos para ayudarte! <i class="fal fa-long-arrow-right"></i></a>
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="whitebox"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- det-wrap end-->  
                            </div>
                            <!-- container end -->
                            <div class="clearfix"></div>
                            <div class="limit-box fl-wrap"></div>
                        </section>
                    </div>
                    <!--content end -->       
                     <!-- footer -->
                    <div class="height-emulator fl-wrap"></div>
                    <footer class="main-footer fixed-footer">
                        <div class="pr-bg"></div>
                        <div class="container">
                            <div class="fl-wrap footer-inner">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="footer-logo">
                                            <img src="images/logo.png" alt="">
                                        </div>
                                        <div class="footer_text  footer-box fl-wrap">
                                            <p style="font-size:14px;font-weight: 100">En Ruta 12 SRL; ofrece todos los servicios necesarios para el productor agropecuario. Ofrecemos acopio de cereales, comercializacion y acondicionamiento de granos y siempre respaldo por un asesoramiento tecnico profesional a la altura de las maximas exigencias del mercado.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="footer-header fl-wrap"><span class="cerouno">01.</span> Contacto</div>
                                        <!-- footer-contacts-->
                                        <div class="footer-contacts footer-box fl-wrap">
                                            <ul>
                                                <li><span>WHATSAPP:</span><a href="https://api.whatsapp.com/send?phone=5493435620954&text=Buenas, estoy necesitado asesoramiento">+54 9 (3435) 62 0954</a></li>
                                                <li><span>CORREO:</span><a href="https://mail.google.com/mail/?view=cm&fs=1&to=administracion@ruta12.com">  ADMINISTRACION@RUTA12.COM</a></li>
                                                <li><span>UBICACIóN : </span><a target="_blank" href="contacts.php">KM 365, Hernández, Entre Ríos </a></li>
                                            </ul>
                                        </div>
                                        <!-- footer contacts end -->
                                        <a href="contacts.php" class="fc_button">Escribinos<i class="fal fa-envelope"></i></a>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="footer-header fl-wrap"><span class="cerodos">02.</span> Subscribite</div>
                                        <div class="footer-box fl-wrap">
                                            <p>Si queres recibir las novedades mensuales del sector agropecuario, REGISTRATE <span class="gratis">GRATIS</span> dejando tu correo.</p>
                                            <div class="subcribe-form fl-wrap">
                                                <form id="subscribe_form" class="fl-wrap" method="post" action="suscribe.php" autocomplete="off">
                                                        <input class="enteremail" name="email" placeholder="Your Email" spellcheck="false" type="email" required>
                                                        <input style="display: none" name="dominio" value="<?php echo $_SERVER['REQUEST_URI'] ?>">
                                                        <button id="submit_buttom" type="submit" class="subscribe-button">  Enviar  <i class="fal fa-long-arrow-right"></i></button>
                                                        <label for="subscribe-email" class="subscribe-message"></label>
                                                        <div id="submit_spinner" style="display: none; float: right" class="spinner"></div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="subfooter fl-wrap">
                                <!-- policy-box-->
                                <div class="policy-box">
                                    <a class="policy-box" href="https://estudiojpg.com/es"><span>&#169; estudiojpg.com  |  2022</span></a>

                                </div>
                                <!-- policy-box end-->
                                <a href="#" class="to-top-btn to-top">Back to top <i class="fal fa-long-arrow-up"></i></a>
                            </div>
                        </div>
                        <div class="footer-canvas">
                            <div class="dots gallery__dots" data-dots=""></div>
                        </div>
                    </footer>
                    <!-- footer  end -->
                    <!-- share-wrapper-->  
                    <div class="share-wrapper">
                        <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> Close</div>
                        <div class="share-container fl-wrap  isShare"></div>
                    </div>
                    <!-- share-wrapper  end --> 
                </div>
                <!-- content-holder end -->	
            </div>
            <!-- wrapper end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/core.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </body>
</html>