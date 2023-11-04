<?php 
require_once __DIR__ . "/php/repositories/SliderRepository.php";
require_once __DIR__ . "/php/services/FileUploader.php";

$fileUploader = new FileUploader();
$sliderRepository = new SliderRepository();
$sliders = $sliderRepository->findAll();
$sliders = $sliderRepository->ordenarArray($sliders);
?>
<!DOCTYPE HTML>
<html lang="en">
    <head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Ruta 12</title>
        <meta name="viewport" content="width=device-widtsh, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="css/reset.css">
        <link type="text/css" rel="stylesheet" href="css/plugins.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/color.css">
        <link type="text/css" rel="stylesheet" href="css/personal.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!--Loader -->
        <div class="loader2">
            <div class="loader loader_each"><span></span></div>
        </div>
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
                                        <a href="index.php" class="act-link">Home</a>
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
                    <!--Content -->
                    <div class="content full-height hidden-item home-half-slider">
                    <div class="closeonclick" id="clickout"></div>
                    <div class="apiclima" id="api1">
                        <div class="climabox">
                        <!-- <div style="border: 2px solid #D5CC5A; overflow: hidden; margin: 15px auto; max-width: 405px;">
                        <iframe scrolling="no" src="https://www.bolsadecereales.com/mercados" style="border: 0px none; margin-left: -800px; height: 1060px; margin-top: -446px; width: 1200px;" frameborder="0">
                        </iframe>
                        </div> -->
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
                        <div class="hero-canvas-wrap">
                            <div class="dots gallery__dots" data-dots=""></div>
                        </div>
                        <!-- option-panel-->  
                        <div class="option-panel bot-element">
                            <a href="services.php" class=" start-btn color-bg"> Servicios <i class="fal fa-long-arrow"></i></a>
                            <div class="swiper-counter">
                                <div id="current">01</div>
                                <div id="total"></div>
                            </div>
                            <div class="slide-progress-container">
                                <div class="slide-progress-warp">
                                    <div class="slide-progress color-barra"></div>
                                </div>
                            </div>
                        </div>
                        <!--option-panel end -->                
                        <!-- hero-slider-wrap --> 
                        <div class="hero-slider-wrap fl-wrap full-height">
                            <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper" >
                                        <?php
                                        foreach ($sliders as $slider) {
                                        ?>
                                        <!-- swiper-slide-->
                                        <div class="swiper-slide">
                                            <div class="half-hero-wrap">
                                                <div class="rotate_text"><?=$slider->getIntroduction();?></div>
                                                <h1 style="color: #FFFFFF"><?=$slider->getTitle();?></h1>
                                                <h4 style="font-size: 19px;"><?=$slider->getSubtitle();?></h4>
                                                <div class="clearfix"></div>
                                                <a href="<?=$slider->getLink();?>" class="half-hero-wrap_link buttom_link" style="font-size:19px">VER MAS<i class="fal fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- swiper-slide end-->
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="hero-slider_control-wrap bot-element">
                                <div class="hero-slider_control hero-slider-button-next"><span>Next<i class="fal fa-angle-right"></i></span> </div>
                                <div class="hero-slider_control hero-slider-button-prev"><span><i class="fal fa-angle-left"></i>Prev </span></div>
                            </div>
                            <div class="hero-slider-wrap_pagination hlaf-slider-pag">
                            </div>
                        </div>
                        <!-- hero-slider-wrap  end--> 
                        <!-- hero-slider-img--> 
                        <div class="hero-slider-img hero-slider-wrap_halftwo">
                         <div class="sec-lines"></div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper" >
                                    <?php
                                    foreach ($sliders as $slider) {
                                    ?>
                                    <!-- swiper-slide-->
                                    <div class="swiper-slide">
                                        <?php
                                        $path = $slider->getFilePath();
                                        if($fileUploader->isImage($path)){
                                        ?>
                                        <div class="bg"  data-bg="<?=$path;?>"></div>
                                        <div class="overlay"></div>
                                        <?php
                                        }
                                        else {
                                        ?>
                                        <video class="bg" autoplay loop muted style="width:100%; ">
                                        <source src="<?=$path;?>" autoplay>
                                        </video>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                    <!-- swiper-slide end-->
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- hero-slider-img  end--> 
                    </div>
                    <!-- content  end -->  
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