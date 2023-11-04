<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Ruta 12 - Empresa</title>
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
                <span>COST</span>
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
                                        <a href="empresa.php" class="act-link">EMPRESA</a>
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
                                <img src="images/Empresa/e02.jpg" class="bgempresa">
                                <img src="images/Empresa/e03.jpg" class="bgempresa">
                                <div class="overlay"></div>
                                <div class="progress-bar-wrap bot-element">
                                    <div class="progress-bar"></div>
                                </div>
                                <!--fixed-column-wrap_title-->
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
                                <section id="sec1" class="small-padding">
                                    <div class="container">
                                        <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <p>Trabajamos todos los días en equipo para ofrecer soluciones y productos al mercado agropecuario de la región!</p>
                                        </div>
                                        <div class="section-number right_sn">
                                            <div class="pr-bg pr-bg-white" style="left: 100%; transform: translate3d(0px, 0px, 0px);"></div>
                                            <span>0</span>1.
                                        </div>
                                        <div class="column-wrap-content fl-wrap">

                                            <div class="column-wrap-media fl-wrap">
                                                <div class="pr-bg pr-bg-white"></div>
                                                <img src="images/Empresa/e01.jpg"  class="respimg" alt="">
                                                <a href="https://youtu.be/JUcZDQJ8eP4" class="column-wrap-media_btn color-bg image-popup">
                                                    ver video <i class="fas fa-play"></i>
                                                    <div class="pr-bg pr-bg-white"></div>
                                                </a>
                                            </div>
                                            <div class="column-wrap-text">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h3 class="pr-subtitle">
                                                            Sobre nosotros…
                                                            <div class="pr-bg pr-bg-white"></div>
                                                        </h3>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="pr-bg pr-bg-white"></div>
                                                        <p style="font-size: 13px; font-weight: 400;">Somos una empresa con más de 12 años trabajando con y para el mercado agropecuario de la región, ofreciendo servicios y productos de la más alta calidad bajo las estrictas normas de calidad.</p>
                                                        <p style="font-size: 13px; font-weight: 400;">Ofrecemos inmejorables condiciones comerciales para nuestros clientes gracias a la trayectoria y el compromiso que nos diferencia desde nuestros inicios.</p>
                                                        <p style="font-size: 13px; font-weight: 400;">Desde el año 2020, luego de la crisis de COVID-19 expandimos nuestro alcance comercial incluyendo insumos agropecuarios y alimento balanceado para animales.</p>
                                                        <p style="font-size: 13px; font-weight: 400;">Hoy, la empresa cuenta con una gran oferta de productos como agro insumos para toda la producción agropecuaria, además de un servicio personalizado de asesoramiento para tambos y productores ganaderos.</p>
                                                        <p style="font-size: 13px; font-weight: 400;">Porque conocemos cada etapa del proceso, trabajamos cerca de nuestros clientes ofreciendo siempre nuestro humilde asesoramiento para ayudarlos a incrementar su producción. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                                <!--section end--> 
                                <div class="section-separator"></div>
                                <!--section --> 
                                <section   class="no-padding">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="inline-facts-container fl-wrap">
                                                    <div class="pr-bg pr-bg-white"></div>
                                                    <!-- inline-facts -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="12">0</div>
                                                                </div>
                                                            </div>
                                                            <h6>años de trabajo</h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end -->
                                                    <!-- inline-facts  -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="160">0</div>
                                                                </div>
                                                            </div>
                                                            <h6>clientes</h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end -->
                                                    <!-- inline-facts  -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="50">0</div>
                                                                </div>
                                                            </div>
                                                            <h6>empleados</h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end -->
                                                    <!-- inline-facts  -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="4">0</div>
                                                                </div>
                                                            </div>
                                                            <h6>provincias</h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end --> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--section end--> 
                                <div class="section-separator"></div>
                                <!--section NO DECOMENTAR--> 
                                <!-- <section id="sec2" class="small-padding">
                                    <div class="container">
                                        <div class="section-number right_sn">
                                            <div class="pr-bg pr-bg-white" style="left: 100%; transform: translate3d(0px, 0px, 0px);"></div>
                                            <span>0</span>2.
                                        </div> -->
                                        <!-- <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h3>El mejor equipo</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.  </p>
                                        </div> -->
                                        <!-- team-box   No descomentar -->
                                        <!-- <div class="team-box">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="team-photo">
                                                <div class="overlay"></div>
                                                <img src="images/team/1.jpg" alt="" class="respimg"> 	
                                                <ul class="team-social">
                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f rojo"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram rojo"></i></a></li>
                                                </ul>
                                                <a href="#" class="team-contact_btn color-mail"><i class="fal fa-envelope colorlogomail"></i></a>
                                            </div>
                                            <div class="team-info">
                                                <h3>David Gray</h3>
                                                <h4>CEO / Architect</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                            </div>
                                        </div> -->
                                        <!-- team-box end  No descomentar--> 
                                        <!-- team-box   No descomentar--> 
                                        <!-- <div class="team-box">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="team-photo">
                                                <div class="overlay"></div>
                                                <img src="images/team/1.jpg" alt="" class="respimg"> 	
                                                <ul class="team-social">
                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f rojo"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram rojo"></i></a></li>
                                                </ul>
                                                <a href="#" class="team-contact_btn color-mail"><i class="fal fa-envelope colorlogomail"></i></a>									
                                            </div>
                                            <div class="team-info">
                                                <h3>Alica Limishko</h3>
                                                <h4>Architect / Designer</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                            </div>
                                        </div> -->
                                        <!-- team-box end No descomentar --> 
                                        <!-- team-box  No descomentar --> 
                                        <!-- <div class="team-box">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="team-photo">
                                                <div class="overlay"></div>
                                                <img src="images/team/1.jpg" alt="" class="respimg"> 	
                                                <ul class="team-social">
                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f rojo"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram rojo"></i></a></li>
                                                </ul>
                                                <a href="#" class="team-contact_btn color-mail"><i class="fal fa-envelope colorlogomail"></i></a>										
                                            </div>
                                            <div class="team-info">
                                                <h3>Kevin Brunt</h3>
                                                <h4>Architect / Designer</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                            </div>
                                        </div> -->
                                        <!-- team-box end No descomentar -->                                      
                                        <!-- team-box  No descomentar --> 
                                        <!-- <div class="team-box">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="team-photo">
                                                <div class="overlay"></div>
                                                <img src="images/team/1.jpg" alt="" class="respimg"> 	
                                                <ul class="team-social">
                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f rojo"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram rojo"></i></a></li>
                                                </ul>
                                                <a href="#" class="team-contact_btn color-mail"><i class="fal fa-envelope colorlogomail"></i></a>										
                                            </div>
                                            <div class="team-info">
                                                <h3>Olivia Edminton</h3>
                                                <h4>Photographer / Designer</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
                                            </div>
                                        </div> -->
                                        <!-- team-box end No descomentar --> 

                                    <!-- </div>
     
                                </section> -->
                                <!--section end NO DESCOMENTAR-->    
                                <div class="section-separator"></div>
                                <!--section--> 
                                
                                <!--section end-->         
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
                                        <a href="contacts.php" class=" fc_button">Escribinos<i class="fal fa-envelope"></i></a>
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