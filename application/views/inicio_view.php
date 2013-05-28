<?php echo $this->load->view('master/slider_view') ?>            

<!-- #content-wrapper start -->
<div id="content-wrapper">

    <section class="container_12">

        <?php echo $this->load->view('master/opciones_view') ?>   

        <article class="grid_7 note with-btn">
            <section class="title">
                <h6>Reservas ne línea</h6>
                <p>
                    Pasos para Reservar un Libro a través de la Oficina Virtual de la MPT.
                </p>
            </section>
            <section class="title-btn">
                <a class="btn-medium">
                    <span>Click aquí !!!</span>
                </a>
            </section>
        </article>

        <article class="grid_5 note with-btn">
            <section class="title">
                <h6>Siguenos en:</h6>            
                <span><img src="<?php echo URL_IMG ?>redes/facebook.png" /></span>
                <span><img src="<?php echo URL_IMG ?>redes/twitter.png" /></span>
                <span><img src="<?php echo URL_IMG ?>redes/google.png" /></span>
            </section>        
        </article>

        <article class="grid_12 " >

            <section class="section-title">
                <h4 style="background-color: #ffcc33;padding: 5px;color: white;" >ULTIMAS NOTICIAS</h4>
            </section>
            <div class="grid_2" >
                <p>
                    Entérate de los últimos acontecimientos que se dan en tu ciudad. 
                </p>
                <br >
                <section class="title-btn">
                    <a class="btn-medium">
                        <span>Infórmate !!!</span>
                    </a>
                </section>

            </div>

            <?php
            $contador = 0;
            foreach ($noticias_ultimas as $key => $valor) {
                $contador = $contador + 1;
                ?> 
                <?php if ($contador < 4) { ?>

                    <div class="grid_3 note" >     

                        <p>
                            <a href="http://172.20.1.50/imagenmpt/<?php echo $valor['cMinNroDocumento'] ?>" target="_blank"><img src="../../oficinavirtual/<?php echo $valor['cDioArchivo'] ?>" width="100px" class="float-left" alt="quote author" /></a>
                            <a href="http://172.20.1.50/imagenmpt/<?php echo $valor['cMinNroDocumento'] ?>" target="_blank"><?php echo $valor['cDioAsunto'] ?></a>
                        </p>
                    </div>

                    <?php
                }
            }
            ?>

        </article><!-- grid_6 end -->  
        <section class="container_12">
            <article class="grid_4">

                <section class="section-title">
                    <h4 style="background-color: #ffcc33;padding: 5px;color: white;" >ULTIMAS RESERVAS REALIZADAS</h4>
                </section>

                <ul class="grid_4 tabs vertical blog alpha">

                    <?php
                    foreach ($reservas_ultimas as $key => $valor2) {
                        ?> 


                        <li class="active">
                            <a href="#tab1">
                                <div class="post-date">
                                    <span class="date-big"><img src="<?php echo URL_IMG ?>libroreserva.png" width="30px" /></span>
                                    <span style="font-size: 8px;" ><?php echo $valor2['fecha'] ?></span>

                                </div><!-- post-date end -->

                                <!-- .title-meta start -->
                                <div class="title-meta">
                                    <h4><?php echo $valor2['cCTitulo'] ?></h4>

                                    <span><strong>Reservado por :</strong></span>
                                    <span><?php echo $valor2['cPerNombres'] . ' ' . $valor2['cPerApellidoPaterno'] . ' ' . $valor2['cPerApellidoMaterno'] ?></span>
                                </div><!-- .title-meta end -->
                            </a>
                        </li>

                        <?php
                    }
                    ?>

                </ul>

            </article>
            <article class="grid_4">

                <section class="section-title">
                    <h4 style="background-color: #be0d0d;padding: 5px;color: white;" >ULTIMOS LIBROS REGISTRADOS</h4>
                </section>       

                <ul class="grid_4 tabs vertical blog alpha">
                    <li class="active">
                        <a href="#tab1">
                            <div class="post-date">
                                <span class="date-big"><img src="<?php echo URL_IMG ?>librosreg.png" width="30px" /></span>
                                <span style="font-size: 8px;" ><?php echo $librosreg_ultimas[0]['fecha'] ?></span>
                            </div><!-- post-date end -->

                            <!-- .title-meta start -->
                            <div class="title-meta">
                                <h4><?php echo $librosreg_ultimas[0]['cCTitulo'] ?></h4>

                                <span>Autor: <?php echo $librosautor_ultimas[0]['cPerNombres'] . ' ' . $librosautor_ultimas[0]['cPerApellidoPaterno'] . ' ' . $librosautor_ultimas[0]['cPerApellidoPaterno'] ?></span>

                            </div><!-- .title-meta end -->
                        </a>
                    </li>

                    <li class="active">
                        <a href="#tab1">
                            <div class="post-date">
                                <span class="date-big"><img src="<?php echo URL_IMG ?>librosreg.png" width="30px" /></span>
                                <span style="font-size: 8px;" ><?php echo $librosreg_ultimas[1]['fecha'] ?></span>
                            </div><!-- post-date end -->

                            <!-- .title-meta start -->
                            <div class="title-meta">
                                <h4><?php echo $librosreg_ultimas[1]['cCTitulo'] ?></h4>

                                <span>Autor: <?php echo $librosautor_ultimas[1]['cPerNombres'] . ' ' . $librosautor_ultimas[1]['cPerApellidoPaterno'] . ' ' . $librosautor_ultimas[1]['cPerApellidoPaterno'] ?></span>

                            </div><!-- .title-meta end -->
                        </a>
                    </li>

                    <li class="active">
                        <a href="#tab1">
                            <div class="post-date">
                                <span class="date-big"><img src="<?php echo URL_IMG ?>librosreg.png" width="30px" /></span>
                                <span style="font-size: 8px;" ><?php echo $librosreg_ultimas[2]['fecha'] ?></span>
                            </div><!-- post-date end -->

                            <!-- .title-meta start -->
                            <div class="title-meta">
                                <h4><?php echo $librosreg_ultimas[2]['cCTitulo'] ?></h4>

                                <span>Autor: <?php echo $librosautor_ultimas[2]['cPerNombres'] . ' ' . $librosautor_ultimas[2]['cPerApellidoPaterno'] . ' ' . $librosautor_ultimas[2]['cPerApellidoPaterno'] ?></span>

                            </div><!-- .title-meta end -->
                        </a>
                    </li>

                    <li class="active">
                        <a href="#tab1">
                            <div class="post-date">
                                <span class="date-big"><img src="<?php echo URL_IMG ?>librosreg.png" width="30px" /></span>
                                <span style="font-size: 8px;" ><?php echo $librosreg_ultimas[3]['fecha'] ?></span>
                            </div><!-- post-date end -->

                            <!-- .title-meta start -->
                            <div class="title-meta">
                                <h4><?php echo $librosreg_ultimas[3]['cCTitulo'] ?></h4>

                                <span>Autor: <?php echo $librosautor_ultimas[3]['cPerNombres'] . ' ' . $librosautor_ultimas[3]['cPerApellidoPaterno'] . ' ' . $librosautor_ultimas[3]['cPerApellidoPaterno'] ?></span>

                            </div><!-- .title-meta end -->
                        </a>
                    </li>
                </ul>

            </article>
            <article class="grid_4">

                <section class="section-title">
                    <h4 style="background-color: #5e971f;padding: 5px;color: white;" >ULTIMOS LECTORES REGISTRADOS</h4>
                </section>       

                <ul class="grid_4 tabs vertical blog alpha">
                    <?php foreach ($usuariosreg_ultimas as $key => $valor3) { ?>
                        <li class="active">
                            <a href="#tab1">
                                <div class="post-date">
                                    <span class="date-big"><img src="<?php echo URL_IMG ?>usuarioreg.png" width="30px" /></span>
                                    <span>Usuario</span>
                                </div><!-- post-date end -->

                                <!-- .title-meta start -->
                                <div class="title-meta">
                                    <h4><?php echo $valor3['Nombres'] ?></h4>

                                </div><!-- .title-meta end -->
                            </a>
                        </li>
                    <?php } ?>
                </ul>

            </article>
        </section>

        <section class="container_12">
            <article class="grid_4">

                <section class="section-title">
                    <h4 style="background-color: #3B5998;padding: 5px;color: white;" >FACEBOOK</h4>
                </section>

                <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FBiblioteca-Municipal-de-Trujillo/123727714398328&amp;width=272&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=395" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:272px; height:395px;" allowTransparency="true"></iframe>


            </article>
            <article class="grid_4">

                <section class="section-title">
                    <h4 style="background-color: #019AD2;padding: 5px;color: white;" >TWITTER</h4>
                </section>       

                <script src="http://widgets.twimg.com/j/2/widget.js"></script>
                <script>
                    new TWTR.Widget({
                        version: 2,
                        type: 'profile',
                        rpp: 4,
                        interval: 30000,
                        width: 280,
                        height: 395,
                        theme: {
                            shell: {
                                background: '#8ec1da',
                                color: '#ffffff'
                            },
                            tweets: {
                                background: '#ffffff',
                                color: '#444444',
                                links: '#1986b5'
                            }
                        },
                        features: {
                            scrollbar: false,
                            loop: false,
                            live: false,
                            hashtags: true,
                            timestamp: true,
                            avatars: false,
                            behavior: 'all'
                        }
                    }).render().setUser('BibliotecaMPT').start();
                </script>


            </article>
            <article class="grid_4">

                <section class="section-title">
                    <h4 style="background-color: #be0d0d;padding: 5px;color: white;" >CANAL YOUTUBE</h4>
                </section>       

                <script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel=MPTperu&synd=open&w=280&h=395&title=&border=%23ffffff%7C3px%2C1px+solid+%23999999&output=js"></script>          

            </article>
        </section>
        <!-- .grid_12 .jcarousellite start -->
        <article class="grid_12 clients clearfix">
            <section class="section-title">
                <h4 style="background-color: #66cc00;padding: 5px;color: white;" >Paginas relacionadas</h4>

            </section>

            <ul id="client-carousel" class="carousel-li">
                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli1.jpg" width="188px" alt="client logo" />
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli2.jpg" width="188px" alt="client logo" />
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli3.jpg" width="188px" alt="client logo" />
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli4.jpg" width="188px" alt="client logo" />
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli5.jpg" width="188px" alt="client logo" />
                    </a>
                </li>

            </ul>
            <ul id="client-carousel" class="carousel-li">

                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli9.jpg" width="188px" alt="client logo" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli6.jpg" width="188px" alt="client logo" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli7.jpg" width="188px" alt="client logo" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli8.jpg" width="188px" alt="client logo" />
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="greyScale" src="<?php echo URL_IMG ?>clients/cli10.jpg" width="188px" alt="client logo" />
                    </a>
                </li>

            </ul>

        </article><!-- .grid_12 .jcarousellite end -->

    </section>                <!-- .container_12 end -->

</div><!-- #content-wrapper end -->

<!-- #footer-wrapper start -->