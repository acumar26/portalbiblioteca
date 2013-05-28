<!-- .page-title start -->
<article class="page-title">

    <section class="title">
        <h1>Contacto </h1>
    </section>

    <!-- .breadcrumbs start -->
    <ul class="breadcrumbs">
        <li>
            Estas aquí:
        </li>
        <li class="home-icon">
            <a href="<?php echo URL_MAIN ?>">/</a>
        </li>
        <li class="active">
            <a href="<?php echo URL_MAIN ?>contacto">Contacto</a>
        </li>
    </ul><!-- .breadcrumbs end -->

</article> <!-- .page-title end -->

<!-- #content-wrapper start -->
<div id="content-wrapper">

    <div class="container_12">

        <!-- .aside-left start -->
        <div class="grid_4 aside aside-left">

            <!-- .widget start -->
            <ul class="aside_widgets">
                <!-- .widget_text start -->
                <li class="widget widget_text">
                    <div class="title">
                        <h5>Información de contacto</h5>
                    </div>

                    <ul class="quick-contact-info">
                        <li>Dirección: 1600 Some Street, Some Avenue,
                            <br />
                            Mountain View, CA 90210
                        </li>

                        <li>Teléfono:  (044) 29044)1776</li>
                        <li>Email: <a href="mailto:dbiblioteca@munitrujillo.gob.pe">dbiblioteca@munitrujillo.gob.pe</a></li>
                    </ul>
                </li><!-- widget_text end -->

                <!-- .widget_text start -->
                <li class="widget widget_text">

                    <div class="info">
                        <p>
                            Saludamos a todos nuestros lectores y ciudadania en general, les damos la bienvenida a nuestro portal. 
                        </p>
                    </div>
                </li><!-- .widget_text end -->
            </ul><!-- widget end -->
        </div><!-- .aside-left end -->

        <!-- .grid_8 start -->
        <div class="grid_8">            

            <form class="wpcf7">
                <fieldset>
                    <label><span class="text-color">*</span> Nombres:</label>
                    <input type="text" class="wpcf7-text" id="contact-name"/>
                </fieldset>

                <fieldset>
                    <label><span class="text-color">*</span> Apellidos:</label>
                    <input type="text" class="wpcf7-text" id="contact-lastname"/>
                </fieldset>

                <fieldset>
                    <label><span class="text-color">*</span> Email:</label>
                    <input type="email" name="email" id="contact-email" class="wpcf7-text" />
                </fieldset>

                <fieldset>
                    <label><span class="text-color">*</span> Mensaje:</label>
                    <textarea rows="10" class="wpcf7-textarea" id="contact-message"></textarea>
                </fieldset>

                <input type="submit" class="wpcf7-submit" value="Enviar" />
            </form>
            
        </div><!-- .grid_8 end -->

    </div><!-- .container_12 end -->

</div><!-- 3content-wrapper end -->