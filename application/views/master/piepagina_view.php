<div id="footer-wrapper" class="clearfix">

    <!-- #tweet-scroll-wrapper start -->
    <article id="tweet-sroll-wrapper" class="clearfix">
        <div class="tweet-icon"></div>

        <div class="tweets-list-container"></div>
    </article><!-- #tweet-scroll-wrapper end -->

    <!-- #footer start -->
    <footer id="footer" class="container_12">

        <!-- .footer-widget-container start -->
        <ul class="footer-widget-container grid_4">
            <li class="widget widget_text">
                <a href="<?php echo URL_MAIN ?>">
                    <img src="<?php echo URL_IMG ?>logopie.png" width="200px" alt="logo" />
                </a>

                <p>
                    Trabajando por el gran cambio
                </p>
            </li>
        </ul><!-- .footer-widget-container end -->

        <!-- .footer_widget_container start -->
<!--        <ul class="footer-widget-container grid_3">
            <li class="widget widget_recent_entries">
                <div class="title">
                    <h5>LATEST POSTS</h5>
                </div>
                <ul>
                    <li>
                        <a href="blog-single.html">Claritas est etiam processus dynamicus</a>
                    </li>

                    <li>
                        <a href="blog-single.html">Mirum est notare quam littera gothica</a>
                    </li>

                    <li>
                        <a href="blog-single.html"> Eodem modo typi lorem elit</a>
                    </li>

                    <li>
                        <a href="blog-single.html">Nam liber tempor cum soluta</a>
                    </li>
                </ul>

            </li>
        </ul> .footer_widget_container end -->

        <!-- .footer_widget_container start -->
<!--        <ul class="footer-widget-container grid_3">
            <li class="widget social-feed picasa-feed">
                <div class="title">
                    <h5>picasa stream</h5>
                </div>
            </li>
        </ul> .footer_widget_container end -->

        <!-- .footer_widget_container start -->
        <ul class="footer-widget-container grid_8">
            <!-- .widget_text start -->
            <li class="widget widget_text">
                <div class="title">
                    <h5>contact info</h5>
                </div>

                <ul class="quick-contact-info">
                    <li>Adress: 1600 Some Street, Some Avenue,
                        <br />
                        Mountain View, CA 90210
                    </li>

                    <li>Phone: +00 123 4567</li>
                    <li>Email: <a href="mailto:support@pixel-industry.com">pixel-industry.com</a></li>
                </ul>
            </li><!-- widget_text end -->
        </ul><!-- .footer_widget_container end -->


    </footer><!-- #footer end -->

    <!-- .copyright-container start -->
    <section class="copyright-container">

        <div class="copyright container_12">
            <p>
                Copyright CleanBIZ 2013, All rights reserved.
            </p>

            <ul class="social-links">
                <li>
                    <a href="#" class="pixons-twitter-1"></a>
                </li>

                <li>
                    <a href="#" class="pixons-dribbble"></a>
                </li>

                <li>
                    <a href="#" class="pixons-facebook-1"></a>
                </li>

                <li>
                    <a href="#" class="pixons-behance"></a>
                </li>

                <li>
                    <a href="#" class="pixons-skype"></a>
                </li>
            </ul>
        </div>
    </section><!-- .copyright container end -->

</div><!-- #footer-wrapper end -->
</div><!-- #page-wrap end -->

<!-- scripts -->
<script  src="<?php echo URL_JS ?>jquery-1.8.3.js"></script> <!-- jQuery library -->   
<script  src="<?php echo URL_JS ?>jquery.placeholder.min.js"></script><!-- jQuery placeholder fix for old browsers -->
<script  src="<?php echo URL_JS ?>socialstream.jquery.js"></script> <!-- Social Networks Feeds -->
<script  src="<?php echo URL_JS ?>jquery.tweetscroll.js"></script> <!-- jQuery tweetscroll plugin -->
<script  src="<?php echo URL_JS ?>jquery.carouFredSel-6.0.0-packed.js"></script><!-- CarouFredSel carousel plugin -->
<script  src="<?php echo URL_JS ?>grayScale.js"></script><!-- image grayscale to color effect -->
<script  src="<?php echo URL_JS ?>portfolio.js"></script> <!-- portfolio custom options -->
<script  src="<?php echo URL_JS ?>jquery.prettyPhoto.js"></script> <!-- prettyPhoto lightbox -->
<script  src="<?php echo URL_JS ?>jquery.nivo.slider.js"></script><!-- nivo slider -->
<script  src="<?php echo URL_JS ?>jquery.touchSwipe-1.2.5.js"></script><!-- support for touch swipe on mobile devices -->
<script  src="<?php echo URL_STYLESWIT ?>styleSwitcher.js"></script><!-- Style Switcher plugin -->
<script  src="<?php echo URL_JS ?>include.js"></script> <!-- jQuery custom options -->

<script>
    /* <![CDATA[ */
    /* main nivo slider */
    $(window).load(function() {
        $('#slider').nivoSlider({
            controlNav: false
        });
    });
            
    /* portfolio SCROLL */
    $("#portfolio-carousel").carouFredSel({
        items: 4,
        prev: '.portfolio-carousel-nav.prev',
        next: '.portfolio-carousel-nav.next',
        auto: false,
        scroll:1,
                
        swipe: {
            ontouch : true,
            onMouse: true
        }
    });
            
    /* GRAYSCALE FUNCTION FOR CLIENT'S LOGO*/
    $(function() {
        // fade in the grayscaled images to avoid visual jump
        $('.greyScale').hide().fadeIn(200);
    });
    // user window.load to ensure images have been loaded
    $(window).load(function () {
        $('.greyScale').greyScale({
            // call the plugin with non-defult fadeTime (default: 400ms)
            fadeTime: 300,
            reverse: false
        });
    });
            
            
    /* CLIENTS SCROLL */
    $('#client-carousel').carouFredSel({
        items: 5,
        prev: '.clients-nav.prev',
        next: '.clients-nav.next',
        auto: false,
        scroll: 1,
        swipe: {
            ontouch : true,
            onMouse: true
        }
    })
            
    /* TWEETSCROLL */
    $('.tweets-list-container').tweetscroll({
        username: 'pixel_industry', 
        time: true, 
        limit: 11, 
        replies: true, 
        position: 'append',
        date_format: 'style2',
        animation: 'fade',
        visible_tweets: 1
    });
    /* ]]> */
</script>
</body>

</html>
