<!DOCTYPE html>
<html>


    <head>
        <meta charset="UTF-8">
        <title>.:: Biblioteca Municipal - Municipalidad Provincial de Trujillo ::..</title>
        <meta name="description" content="Creative Multipurpose HTML5 Theme">
        <meta name="author" content="pixel-industry">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, width=device-width">


        <!-- stylesheets -->
        <link rel="stylesheet" href="<?php echo URL_CSS ?>style.css" /> 
        <link rel="stylesheet" title="activestyle" href="<?php echo URL_CSS ?>blue.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo URL_PIXONS ?>style.css" />     
        <link rel="stylesheet" href="<?php echo URL_SERICONS ?>style.css" />
        <link rel="stylesheet" href="<?php echo URL_CSS ?>nivo-slider.css" />
        <link rel="stylesheet" href="<?php echo URL_CSS ?>prettyPhoto.css" media="screen" />
        <link rel="stylesheet" href="<?php echo URL_STYLESWIT ?>styleSwitcher.css" media="screen" />

        <!--[if (gte IE 9)]>
            <link rel="stylesheet" href="css/ie.css" media="screen" />
        <![endif]-->

        <!--[if IE 8]>
            <link rel="stylesheet" href="css/ie8.css" media="screen" />
        <![endif]-->

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

    </head>

    <body class="patt1">
        <!-- style switcher start -->
<!--        <section id="style-switcher">
            <section id="styles-container">
                <section class="first">
                    <h6>Color Style</h6>
                    <p>Which theme color you want to use? Here are some predefined colors.</p>
                    <ul class="styles-list">
                        <li class="blue">1</li>
                        <li class="green">2</li>
                        <li class="orange">3</li>                        
                        <li class="red">9</li>
                        <li class="yellow">4</li>
                    </ul>
                </section>
                <section>
                    <h6>Pattern</h6>
                    <p>You can choose between four patterns and image backgrounds</p>
                    <ul class="pattern-list">
                        <li class="patt1">1</li>
                        <li class="patt2">2</li>
                        <li class="patt3">3</li>                        
                        <li class="patt4">4</li>
                        <li class="bkg-image">5</li>
                    </ul>
                </section>
            </section>
            <a href="#" id="styles-button"><div id="switcher-logo"></div></a>
        </section> style switcher end -->

        <!-- #page-wrap start -->
        <div id="page-wrap">

            <!-- header start -->
            <header id="header" class="clearfix">

                <!-- logo start -->
                <section id="logo">
                    <a href="<?php echo URL_MAIN ?>">
                        <img src="<?php echo URL_IMG ?>logocabe.png" width="250px" alt="logo"/>
                    </a>
                </section><!-- #logo end -->

                <!-- #nav-ontainer start -->
                <section id="nav-container">

                    <!-- main navigation start  -->
                    <nav id="nav">
                        <ul>
                            <li class="home active">
                                <a href="<?php echo URL_MAIN ?>">Inicio</a>
                            <li>
                                <a href="#">Noticias</a>                                
                            </li>
                            <!--                            <li>
                                                            <a href="#">Galeria</a>
                                                        </li>
                            <li>
                                <a href="#">Actividades</a>                                
                            </li>-->
                            <li>
                                <a href="<?php echo URL_MAIN ?>servicio">Servicios</a>
                            </li>
                            <li>
                                <a href="<?php echo URL_MAIN ?>contacto">Contacto</a>
                            </li>
                        </ul> 
                    </nav><!-- main navigation end -->

                    <!-- responsive navigation start -->
                    <select id="nav-responsive">
                        <option selected="" value="">Ir a...</option>

                        <option value="index-2.html">Inicio</option>                        
                        <option value="blog2.html">Noticias</option>
<!--                        <option value="blog-single.html">Galeria</option>
                        <option value="elements.html">Actividades</option>-->
                        <option value="media.html">Servicios</option>
                        <option value="contact.html">Contacto</option>
                    </select> <!-- responsive navigation end -->

                    <!-- search start -->
                    <section id="search">
                        <!--                                                <form action="#" method="get">
                                                                            <input class="search-submit" type="submit" />
                                                                            <input id="s" class="search-bkg" name="s" type="text" placeholder="Type and hit enter..." />
                                                                        </form>-->
                    </section><!-- search end -->
                </section><!-- nav container end -->
            </header>