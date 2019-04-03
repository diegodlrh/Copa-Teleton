<!DOCTYPE html>
<html >
    <head>
        <!-- Site made with Mobirise Website Builder v4.6.7, https://mobirise.com -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.6.7, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="shortcut icon" href="teleton.ico" type="image/x-icon">
        <meta name="description" content="Recorrido oficial de la 5k Teletón">
        <title>Galería</title>
        <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
        <link rel="stylesheet" href="assets/tether/tether.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe-ui-default.min.js"></script>





    </head>
    <body>
        <section class="menu cid-qP0Iw1DS1a" once="menu" id="menu1-e">
            <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="menu-logo________">
                    <div class="navbar-brand">


                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right navbar-nav-top-padding" data-app-modern-menu="true">
                        <li class="nav-item">
                            <a class="nav-link link text-danger display-4" href="index.html">
                                <span class="mbr-iconfont mbr-iconfont-btn" style="color: rgb(255, 51, 102);">
                                    <img src="img/soccer-ball-variant.svg" style="height: 30px; width: 30px;"/>
                                </span>Copa Teletón
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-danger display-4" href="fixture.php"><span class="mbri-calendar mbr-iconfont mbr-iconfont-btn"></span>
                                Fixture</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-danger display-4" href="galeria.php"><span class="mbri-touch mbr-iconfont mbr-iconfont-btn"></span>
                                Fotos</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-danger display-4" href="recorrido.html"><span class="mbri-map-pin mbr-iconfont mbr-iconfont-btn"></span>
                                Ubicación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link text-danger display-4" href="bases.html"><span class="mbri-file mbr-iconfont mbr-iconfont-btn"></span>

                                Reglamento</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-danger display-4" href="contacto.html"><span class="mbri-letter mbr-iconfont mbr-iconfont-btn"></span>
                                Contacto</a>
                        </li>
                        <li class="nav-item"><a class="nav-link link text-danger display-4" href="https://teleton.org.uy" target="_blank"><span class="mbri-redo mbr-iconfont mbr-iconfont-btn"></span>
                                Ir a web institucional</a>
                        </li></ul>

                </div>
            </nav>
        </section>

        <section class="engine"><a href="https://mobirise.ws/a">best website builder</a></section><section class="mbr-section content5 cid-qP0Iw2oMxu" id="content5-f">





            <div class="container">
                <div class="media-container-row">
                    <div class="title col-12 col-md-8">
                        <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-5">GALERÍA</h2>



                    </div>
                </div>
            </div>
        </section>

        <section class="fondoGal">

            <div class="div_botones">
                <div class="hombre_mujer">
                    <span>
                        <a href="" class="hombre_mujer_boton btncopa">COPA MUJERES</a>
                    </span>
                    <div class="fechas_mujer">
                        <div class="fecha_mujer_botones">
                            <?php obtener_partidos("img/fotos/mujeres"); ?>
                        </div>
                    </div>
                    <span>
                        <a href="" class="hombre_mujer_boton btncopa">COPA HOMBRES</a>
                    </span>
                    <div class="fechas_hombre">
                        <div class="fecha_hombre_botones">
                            <?php obtener_partidos("img/fotos/hombres"); ?>
                        </div>
                    </div>
                    <span>
                        <a href="" class="hombre_mujer_boton btncopa">FINALES</a>
                    </span>
                    <div class="fechas_hombre">
                        <div class="fecha_hombre_botones">
                            <?php obtener_partidos("img/fotos/finales"); ?>
                        </div>
                    </div>
                </div>



            </div>

            <div class="fotos_galeria">
                <a class="volver"><span id="cruz">X</span></a>
                <h4 id="titpartido"></h4>
                <div id="gal" class="my-gallery" itemscope itemtype="http://schema.org/ImageGallery">



                </div>

                <!-- Root element of PhotoSwipe. Must have class pswp. -->
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                    <!-- Background of PhotoSwipe. 
                           It's a separate element, as animating opacity is faster than rgba(). -->
                    <div class="pswp__bg"></div>

                    <!-- Slides wrapper with overflow:hidden. -->
                    <div class="pswp__scroll-wrap">

                        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>

                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                        <div class="pswp__ui pswp__ui--hidden">

                            <div class="pswp__top-bar">

                                <!--  Controls are self-explanatory. Order can be changed. -->

                                <div class="pswp__counter"></div>
                                <!--
                                                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                                
                                                            <button class="pswp__button pswp__button--share" title="Share"></button>
                                
                                                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                                
                                                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>-->

                                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                        <div class="pswp__preloader__cut">
                                            <div class="pswp__preloader__donut"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div>
                            </div>

                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                            </button>

                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                            </button>

                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>

                        </div>

                    </div>

                </div>
                <br><br><br>
                <a class="volver volvertext">VOLVER</a>
            </div>
        </section>


        <script src="assets/web/assets/jquery/jquery.min.js"></script>
        <script src="assets/popper/popper.min.js"></script>
        <script src="assets/tether/tether.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/smoothscroll/smooth-scroll.js"></script>
        <script src="assets/dropdown/js/script.min.js"></script>
        <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
        <script src="assets/theme/js/script.js"></script>
        <link rel="stylesheet" href="css/galeria.css" type="text/css">
        <script src="js/galeria.js"></script>

    </body>
</html>
<?php

function mostrar_imagenes($ruta) {
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)) {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);

        // Recorre todos los archivos del directorio
        while (($archivo = readdir($gestor)) !== false) {
            // Solo buscamos archivos sin entrar en subdirectorios
            if (is_file($ruta . "/" . $archivo)) {
                echo "<img src='" . $ruta . "/" . $archivo . "' width='200px' alt='" . $archivo . "' title='" . $archivo . "'>";
            }
        }

        // Cierra el gestor de directorios
        closedir($gestor);
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}

function obtener_estructura_directorios($ruta) {
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)) {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        echo "<ul>";

        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false) {

            $ruta_completa = $ruta . "/" . $archivo;

            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != ".." && $archivo != "miniatura") {
                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    echo "<li>" . $archivo . "</li>";
                    obtener_estructura_directorios($ruta_completa);
                } else {
                    echo "<li>" . $archivo . "</li>";
                }
            }
        }

        // Cierra el gestor de directorios
        closedir($gestor);
        echo "</ul>";
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}

function obtener_partidos($ruta) {
    // Se comprueba que realmente sea la ruta de un directorio
    if (is_dir($ruta)) {
        // Abre un gestor de directorios para la ruta indicada
        $gestor = opendir($ruta);
        //arreglo para luego ordenar
        $dir_files = array();
        //Variable para saber si cierro o no
        $cierro = FALSE;

        // Recorre todos los elementos del directorio
        while (($archivo = readdir($gestor)) !== false) {

            $ruta_completa = $ruta . "/" . $archivo;

            // Se muestran todos los archivos y carpetas excepto "." y ".."
            if ($archivo != "." && $archivo != ".." && $archivo != "miniatura") {


                // Si es un directorio se recorre recursivamente
                if (is_dir($ruta_completa)) {
                    //Si es una carpeta FECHA agrego div
                    if (substr($archivo, 0, 5) == 'FECHA') {
                        echo '<span><a href = "" class = "hombre_mujer_boton btncopa">' . strtoupper($archivo) . '</a></span>';
                        echo '<div class="fecha_mujer_partidos fechabtn">';
                        obtener_partidos($ruta_completa);
                    } else {
//                        $dir_files[$archivo] = $ruta_completa;

                        echo '<div class="divPartidos"><span><a href="" id="' . $ruta_completa . '">' . strtoupper($archivo) . '</a></span></div>';
                        $cierro = TRUE;
                    }
                }
            }
        }

        // Cierra el gestor de directorios
        closedir($gestor);
        if ($cierro) {
//            sort($dir_files);
////            array_multisort($dir_files[0], SORT_ASC, SORT_STRING);
//            print_r($dir_files);
//            foreach ($dir_files as $archivo => $ruta) {
//                foreach ($ruta as $archivo_nombre) {
//                    echo '<div class="divPartidos"><span><a href="" id="' . $ruta . '">' . strtoupper($archivo_nombre) . '</a></span></div>';
//                }
//            }
            echo "</div>";
        }
    } else {
        echo "No es una ruta de directorio valida<br/>";
    }
}

//mostrar_imagenes("img/fotos/mujeres/FECHA 18-08/10hs- teleton1-s.patron");
//obtener_estructura_directorios("img/fotos/hombres");
?>