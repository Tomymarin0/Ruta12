<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Ruta 12 - Servicios</title>
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
        <!-- <link type="text/css" rel="stylesheet" href="css/personal.css"> -->
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
        <script src="https://kit.fontawesome.com/470f21b29d.js" crossorigin="anonymous"></script>
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
                                        <a href="#">INDUSTRIA</a>
                                        <!--level 2 -->
                                        <ul>
                                            <li><a href="expeller.php" class="">Expeller de soja</a></li>
                                            <li><a href="aceite.php" class="">Aceite desgomado</a></li>
                                        </ul>
                                        <!--level 2 end -->
                                    </li>
                                    <li>
                                        <a href="services.php" class="act-link">Servicios</a>
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
                            <!-- nav end-->
                            <!--lang-links-->

                            <!--lang-links end-->
                        </div>
                        <!--nav-social-->
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
                            <!-- <div class="logoapiboxclima">
                                <img src="images/logoR12-color.png" class="logoapi">
                            </div> -->
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
                        <!--fixed-column-wrap-->
                        <div class="fixed-column-wrap">
                            <div class="pr-bg"></div>
                            <!--fixed-column-wrap-content-->
                            <div class="fixed-column-wrap-content">
                                <div class="scroll-nav-wrap color-bg">
                                    <div class="carnival">Scroll down</div>
                                    <div class="snw-dec">
                                        <div class="mousey">
                                            <div class="scroller"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg" data-bg="images/bg/1.jpg"></div>
                                <div class="overlay"></div>
                                <div class="progress-bar-wrap bot-element">
                                    <div class="progress-bar"></div>
                                </div>
                                <!--fixed-column-wrap_title-->
                                <div class="fixed-column-wrap_title first-tile_load">
                                    <h2>Nuestros<br> Servicios</h2>
                                    <p style ="font-size: 16px;">Somos exportadores de granos y derivados de la soja. <br> Nos especializamos en asesoramiento agropecuario.</p>
                                </div>
                                <!--fixed-column-wrap_title end-->
                                <div class="fixed-column-dec"></div>
                            </div>
                            <!--fixed-column-wrap-content end-->
                        </div>
                        <!--fixed-column-wrap end-->
                        <!--column-wrap--> 
                        <div class="column-wrap">
                            <!--column-wrap-container -->   
                            <div class="column-wrap-container fl-wrap">
                                <div class="col-wc_dec">
                                    <div class="pr-bg pr-bg-white"></div>
                                </div>
                                <div class="col-wc_dec col-wc_dec2">
                                    <div class="pr-bg pr-bg-white"></div>
                                </div>
                                <!--section--> 
                                <section style="padding:0;"class="small-padding">
                                    <div class="container">
                                        <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h3>Acopio de cereales</h3>
                                            <p>En los últimos años hemos anexado el servicio de acopio y comercialización de todo tipo de granos como trigo, maíz, sorgo y soja, a lo que se sumamos la oferta de prestaciones de las que disponen nuestros clientes.</p>
                                        </div>
                                        <div class="column-wrap-content fl-wrap">
                                            <div class="column-wrap-media fl-wrap">
                                                <div class="single-slider-a-wrap">
                                                    <div class="single-slider-a fl-wrap">
                                                        <div class="swiper-container swiper-container-horizontal swiper-container-autoheight" style="cursor: grab;">
                                                            <div class="swiper-wrapper lightgallery" style="transition-duration: 0ms; transform: translate3d(-621px, 0px, 0px); height: 411px;"><div class="swiper-slide hov_zoom swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="2" style="width: 621px;"><img src="images/industria/expeller03.jpg" alt=""><a href="images/industria/expeller03.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom swiper-slide-active" data-swiper-slide-index="0" style="width: 621px;"><img src="images/Servicios/acopio01.jpg" alt=""><a href="images/Servicios/acopio01.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom swiper-slide-next" data-swiper-slide-index="1" style="width: 621px;"><img src="images/Servicios/acopio02.jpg" alt=""><a href="images/Servicios/acopio02.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 621px;"><img src="images/Servicios/acopio03.jpg" alt=""><a href="images/Servicios/acopio03.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                            <div class="swiper-slide hov_zoom swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 621px;"><img src="images/industria/expeller01.jpg" alt=""><a href="images/industria/expeller01.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div></div>
                                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                                    </div>
                                                    <div class="ss-slider-controls">
                                                        <div class="ss-slider-pagination-a swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                                                        <div class="ss-slider-cont ss-slider-cont-prev-a color-bg" tabindex="1" role="button" aria-label="Previous slide"><i class="fal fa-long-arrow-left"></i></div>
                                                        <div class="ss-slider-cont ss-slider-cont-next-a color-bg" tabindex="1" role="button" aria-label="Next slide"><i class="fal fa-long-arrow"></i></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="order-wrap fl-wrap">
                                            <a href="contacts.php" class="fc_button_a">Escribinos <i class="fal fa-envelope"></i></a>
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h4 style="cursor: pointer;" class="redirec_to_wp fafafa"><i class="fa-brands fa-whatsapp" style="color:green;"></i> ESTAMOS PARA AYUDARTE. </h4>
                                        </div>
                                    </div>
                                </section>
                                <!--section end--> 
                                <div class="clearfix"></div>
 
                                <div class="section-separator"></div>
                                <!--section--> 
                                <section  style="padding:0;" class="small-padding">
                                    <div class="container">
                                        <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h3>COMPRA, RECEPCION Y CANJE DE GRANOS</h3>
                                            <p>RECIBIMOS GRANOS OFRECIENDO TODOS LOS SERVICIOS RELACIONADOS NECESARIOS PARA LA COMERCIALIZACION EN TIEMPOS Y CONDICIONES ESTABLECIDAS.  </p>
                                        </div>
                                        <div class="column-wrap-content fl-wrap">
                                            <div class="column-wrap-media fl-wrap">
                                                <div class="single-slider-wrap">
                                                    <div class="single-slider-b fl-wrap">
                                                        <div class="swiper-container swiper-container-horizontal swiper-container-autoheight" style="cursor: grab;">
                                                            <div class="swiper-wrapper lightgallery" style="transition-duration: 0ms; transform: translate3d(-621px, 0px, 0px); height: 411px;"><div class="swiper-slide hov_zoom swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="3" style="width: 621px;"><img src="images/industria/expeller03.jpg" alt=""><a href="images/industria/expeller03.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom swiper-slide-active" data-swiper-slide-index="3" style="width: 621px;"><img src="images/Servicios/compra01.jpg" alt=""><a href="images/Servicios/compra01.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom swiper-slide-next" data-swiper-slide-index="4" style="width: 621px;"><img src="images/Servicios/compra02.jpg" alt=""><a href="images/Servicios/compra02.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom swiper-slide-duplicate-prev" data-swiper-slide-index="5" style="width: 621px;"><img src="images/Servicios/compra03.jpg" alt=""><a href="images/Servicios/compra03.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                            <div class="swiper-slide hov_zoom swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 621px;"><img src="images/industria/expeller01.jpg" alt=""><a href="images/industria/expeller01.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div></div>
                                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                                    </div>
                                                    <div class="ss-slider-controls">
                                                        <div class="ss-slider-pagination-b swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                                                        <div class="ss-slider-cont ss-slider-cont-prev-b color-bg" tabindex="0" role="button" aria-label="Previous slide"><i class="fal fa-long-arrow-left"></i></div>
                                                        <div class="ss-slider-cont ss-slider-cont-next-b color-bg" tabindex="0" role="button" aria-label="Next slide"><i class="fal fa-long-arrow"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>
                                    <div class="container">
                                        <div class="order-wrap fl-wrap">
                                            <a href="contacts.php" class="fc_button_a">Escribinos <i class="fal fa-envelope"></i></a>
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h4 style="cursor: pointer;" class="redirec_to_wp fafafa"><i class="fa-brands fa-whatsapp" style="color:green;"></i> ESTAMOS PARA AYUDARTE. </h4>
                                        </div>
                                    </div>
                                </section>
                                <!--section end-->
                                <div class="clearfix"></div>
     
                                <div class="section-separator"></div>
                                <!--section--> 
                                <section style="padding:0;" class="small-padding">
                                    <div class="container">
                                        <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h3>PRECAMPAÑA DE GRUESA</h3>
                                            <p>CONOCEMOS LAS PERSPECTIVAS ECONOMICAS, TECNOLOGICAS Y PRODUCTIVAS PARA LA PROXIMA CAMPAÑA DE TRIGO Y CEBADA.  </p>
                                        </div>
                                        <div class="column-wrap-content fl-wrap">
                                            <div class="column-wrap-media fl-wrap">
                                                <div class="single-slider-wrap">
                                                    <div class="single-slider-c fl-wrap">
                                                        <div class="swiper-container swiper-container-horizontal swiper-container-autoheight" style="cursor: grab;">
                                                            <div class="swiper-wrapper lightgallery" style="transition-duration: 0ms; transform: translate3d(-621px, 0px, 0px); height: 411px;"><div class="swiper-slide hov_zoom swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="1" style="width: 621px;"><img src="images/industria/expeller03.jpg" alt=""><a href="images/industria/expeller03.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom swiper-slide-active" data-swiper-slide-index="0" style="width: 621px;"><img src="images/Servicios/precamp01.jpg" alt=""><a href="images/Servicios/precamp01.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom swiper-slide-next" data-swiper-slide-index="1" style="width: 621px;"><img src="images/Servicios/precamp02.jpg" alt=""><a href="images/Servicios/precamp02.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom swiper-slide-duplicate-prev" data-swiper-slide-index="2" style="width: 621px;"><img src="images/Servicios/precamp03.jpg" alt=""><a href="images/Servicios/precamp03.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                            <div class="swiper-slide hov_zoom swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 621px;"><img src="images/industria/expeller01.jpg" alt=""><a href="images/industria/expeller01.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div></div>
                                                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                                    </div>
                                                    <div class="ss-slider-controls">
                                                        <div class="ss-slider-pagination-c swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
                                                        <div class="ss-slider-cont ss-slider-cont-prev-c color-bg" tabindex="0" role="button" aria-label="Previous slide"><i class="fal fa-long-arrow-left"></i></div>
                                                        <div class="ss-slider-cont ss-slider-cont-next-c color-bg" tabindex="0" role="button" aria-label="Next slide"><i class="fal fa-long-arrow"></i></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="order-wrap fl-wrap">
                                            <a href="contacts.php" class="fc_button_a">Escribinos <i class="fal fa-envelope"></i></a>
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h4 style="cursor: pointer;" class="redirec_to_wp fafafa"><i class="fa-brands fa-whatsapp" style="color:green;"></i> ESTAMOS PARA AYUDARTE. </h4>
                                        </div>
                                    </div>
                                </section>
                                <div class="clearfix"></div>
                                <!--section end-->    
                                <div class="section-separator"></div>
                                <div class="clearfix"></div>
                            </div>
                            <!--column-wrap-container end-->         
                        </div>
                        <!--column-wrap end--> 
                        <div class="limit-box fl-wrap"></div>
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
                                                <li><span>CORREO:</span><a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&to=administracion@ruta12.com">  ADMINISTRACION@RUTA12.COM</a></li>
                                                <li><span>UBICACIóN : </span><a href="contacts.php">KM 365, Hernández, Entre Ríos </a></li>
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
        <script>
            $(".redirec_to_wp").click(function() {
                window.open('https://api.whatsapp.com/send?phone=5493435620954&text=Buenas, estoy necesitado asesoramiento', '_blank');
            }) 
        </script>
    </body>
</html>