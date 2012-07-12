<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex" />
    <title>.:CBI Consultora Informática:.</title>
    <link rel="stylesheet" type="text/css" href="global.css" />
    <link rel="stylesheet" type="text/css" href="css/inner-pages.css" />
    <link rel="stylesheet" type="text/css" href="css/proyectos.css" />
    <link rel="stylesheet" type="text/css" href="css/galleriffic-2.css" />
    <link rel="stylesheet" type="text/css" href="css/flexcrollstyles.css" />
    <style type="text/css" id="page-css">
        #main-section img.b3 {
            height: auto !important;
        }
    </style>        
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/innerpage-scripts.js"></script>
    <script type="text/javascript" src="js/jquery.galleriffic.js"></script>
    <script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
    <script type='text/javascript' src="js/flexcroll.js"></script>
    <script type="text/javascript" id="sourcecode">
        $(function()
        {
            $currentpageclass = 'b3';
        });
    </script>
    <noscript>
    
    </noscript>
</head>
    <body>
    <div id="upper_bar"></div>
    <div id="wrap">
        <div id="content">
            <div id="logo"><a class="transition-out" href="index.php"><img src="images/logo.png" width="160" height="80"/></a>
            </div>
            <div id="main-section"><a class="transition b1" href="empresa.php"><img class="claro b1" src="images/boton-claro.png" width="196" height="143"/></a>
            	<a class="transition b2" href="servicios.php"><img class="oscuro b2" src="images/boton-oscuro.png" width="170" height="115"/></a>
                <a class="transition b3" href="proyectos.php"><img class="claro b3" src="images/boton-proyectos.png" width="198" height="145"/></a>
                <a class="transition b4" href="clientes.php"><img class="oscuro b4" src="images/boton-oscuro.png" width="198" height="145"/></a>
                <a class="transition b5" href="contacto.php"><img class="claro b5" src="images/boton-claro.png" width="198" height="145"/></a>
			</div>
            
			<!-- Start Advanced Gallery Html Containers -->
			<div id="gallery" class="content">
				<div id="controls" class="controls"></div>				
			</div>
                
			<div style="clear: both;"></div> 
            
			<div id="thumbs" class="navigation">
                <ul class="thumbs noscript">

                    <li>
                        <a class="thumb" name="leaf" href="images/th1.jpg" title="Title #0">
                            <img src="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_s.jpg" alt="Title #0" />
                        </a>
                        <div class="caption">
                            <div class="image-title">Title #0</div>
                            <div class="image-desc">Description #0</div>
                        </div>
                    </li>
                    
                    <li>
                        <a class="thumb" name="leaf" href="images/th2.jpg" title="Title #0">
                            <img src="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_s.jpg" alt="Title #1" />
                        </a>
                        <div class="caption">
                            <div class="image-title">Title #1</div>
                            <div class="image-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                        </div>
                    </li>
                    
                    <li>
                        <a class="thumb" name="leaf" href="images/th2.jpg" title="Title #0">
                            <img src="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_s.jpg" alt="Title #2" />
                        </a>
                        <div class="caption">
                            <div class="image-title">Title #2</div>
                            <div class="image-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                        </div>
                    </li>
                    
                    <li>
                        <a class="thumb" name="leaf" href="images/th2.jpg" title="Title #0">
                            <img src="http://farm4.static.flickr.com/3261/2538183196_8baf9a8015_s.jpg" alt="Title #3" />
                        </a>
                        <div class="caption">
                            <div class="image-title">Title #3</div>
                            <div class="image-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                        </div>
                    </li>                                        
                    
                </ul>
            </div>                      
            
            <div id="text-area" class="flexcroll">  
				<div class="slideshow-container">
					<div id="loading" class="loader"></div>
					<div id="slideshow" class="slideshow"></div>
				</div>
                <div id="caption" class="caption-container"><div style="clear:both"></div></div>
                        
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        // We only want these styles applied when javascript is enabled
                        $('div.navigation').css({'width' : '60%', 'float' : 'left'});
                        $('div.content').css('display', 'block');
                
                        // Initially set opacity on thumbs and add
                        // additional styling for hover effect on thumbs
                        var onMouseOutOpacity = 0.67;
                        $('#thumbs ul.thumbs li').opacityrollover({
                            mouseOutOpacity:   onMouseOutOpacity,
                            mouseOverOpacity:  1.0,
                            fadeSpeed:         'fast',
                            exemptionSelector: '.selected'
                        });
                        
                        // Initialize Advanced Galleriffic Gallery
                        var gallery = $('#thumbs').galleriffic({
                            delay:                     2500,
                            numThumbs:                 15,
                            preloadAhead:              10,
                            enableTopPager:            true,
                            enableBottomPager:         true,
                            maxPagesToShow:            7,
                            imageContainerSel:         '#slideshow',
                            controlsContainerSel:      '#controls',
                            captionContainerSel:       '#caption',
                            loadingContainerSel:       '#loading',
                            renderSSControls:          true,
                            renderNavControls:         true,
                            playLinkText:              'Recorrido automatico',
                            pauseLinkText:             'Pausar recorrido automatico',
                            prevLinkText:              '&lsaquo; Anterior',
                            nextLinkText:              'Siguiente &rsaquo;',
                            nextPageLinkText:          'Siguiente &rsaquo;',
                            prevPageLinkText:          '&lsaquo; Ant',
                            enableHistory:             false,
                            autoStart:                 false,
                            syncTransitions:           true,
                            defaultTransitionDuration: 900,
                            onSlideChange:             function(prevIndex, nextIndex) {
                                // 'this' refers to the gallery, which is an extension of $('#thumbs')
                                this.find('ul.thumbs').children()
                                    .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
                                    .eq(nextIndex).fadeTo('fast', 1.0);
                            },
                            onPageTransitionOut:       function(callback) {
                                this.fadeTo('fast', 0.0, callback);
                            },
                            onPageTransitionIn:        function() {
                                this.fadeTo('fast', 1.0);
                            }
                        });
                    });
                </script>                
                
                <div style="clear:both"></div>
            </div>
            <div id="social-icons">
                <img class="twitter" src="images/icon_tw-black.png" width="32" height="32"/><img class="facebook" src="images/icon_fb-black.png" width="32" height="32"/>
            </div>
            <div id="footer">
                <div id="footer_text">
                    <p>C.B. Solutions S.R.L - Todos los derechos reservados
                    <br />
                    <a href="contacto.php" >Contacto</a>
                    </p>    
                </div>            
            </div>
        </div>
    </div>
    <div id="lower_bar"></div>
</body>
</html>
