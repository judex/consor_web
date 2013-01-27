
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>:: Consorcio 3c ::</title>
        <meta name="description" content="{descripción}">
        <meta name="keywords" content="{keywords}">
        <meta name="viewport" content="width=device-width">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="site_media/css/normalize.css">
        <link rel="stylesheet" href="site_media/css/main.css">
        <script src="site_media/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="site_media/js/vendor/jquery-1.8.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="header-container-intro">
            <header class="wrapper clearfix">
                <div id="logo-big"><h1 alt="Consorcio 3c" title="Consorcio 3c"><a href=""><span alt="" title="Comsorcio 3C"></span></a></h1></div>
                <nav id="nav-intro">
                    <ul id="list-intro">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="nosotros.php">Nosotros</a></li>
                         <li><a href="servicios.php">Servicios</a></li>
                         <li><a href="multimedia.php">Multimedia</a></li>
                         <li><a href="contactenos.php">Contactenos</a></li>
                     </ul>
                </nav>
            </header><!-- /header -->
        </div>
        <div id="slider-container">
            <section class="wrapper clearfix">
                <div class="image_carousel">
    <div id="foo2">
        <a href="">
        <img src="site_media/img/slider-intro/btn_Donofrio.png" alt="basketball" width="160" height="160" /></a>
        <a href="">
        <img src="site_media/img/slider-intro/btn_Backus.png" alt="basketball" width="160" height="160" /></a>
        <a href="">
        <img src="site_media/img/slider-intro/btn_SanFernando.png" alt="basketball" width="160" height="160" /></a>
        <a href="">
        <img src="site_media/img/slider-intro/btn_Andina.png" alt="basketball" width="160" height="160" /></a>
        <a href="">
        <img src="site_media/img/slider-intro/btn_Donofrio.png" alt="basketball" width="160" height="160" /></a>
        <a href="">
        <img src="site_media/img/slider-intro/btn_Backus.png" alt="basketball" width="160" height="160" /></a>
        <a href="">
        <img src="site_media/img/slider-intro/btn_SanFernando.png" alt="basketball" width="160" height="160" /></a>
        <a href="">
        <img src="site_media/img/slider-intro/btn_Andina.png" alt="basketball" width="160" height="160" /></a>


    </div>
    <div class="clearfix"></div>
    <a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
    <a class="next" id="foo2_next" href="#"><span>next</span></a>

</div>
            </section>
        </div>
        <div id="footer-container-intro">
            <footer class="wrapper clearfix">
            <ul>
                <li>
                    <address>[ Diseñado y Desarrollado por <a href="" style="color:silver">CRIZU DESING</a> ] </address>
                </li>
                <li>
                    <ol id="red-social">
                        <li><a href=""><div id="ico-facebook" alt="" title="Siguenos Facebook"></div></a></li>
                        <li><a href=""><div id="ico-twiter" alt="" title="Siguenos Twiter"></div></a></li>
                        <li><a href=""><div id="ico-youtube"  alt="" title="Siguenos-Youtube"></div></a></li>
                    </ol>
                </li>
                <li></li>

            </ul>
            </footer>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="site_media/js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="site_media/js/plugins.js"></script>
        <script src="site_media/js/main.js"></script>
        <script src="site_media/js/jquery.carouFredSel-6.1.0-packed.js"></script>
        <script>
            $("#foo2").carouFredSel({
                circular: true,
                infinite: true,
                auto    : true,
                items     : 5,
                auto: {
                                    TimeoutDuration: 3000,
                                    pauseOnHover: 'resume'
                                },
                prev   : {
                    button  : "#foo2_prev",
                    key     : "left"
                },
                next   : {
                    button  : "#foo2_next",
                    key     : "right"
                },
            });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
<style>
.image_carousel {
    padding: 15px 0 15px 88px;
    position: relative;
}
.image_carousel img {
    background-color: transparent;
    padding: 9px;
    margin: 7px;
    display: block;
    float: left;
    opacity: 0.8;
    -webkit-transform: scale(1);  /* Safari 3.1+, Chrome */
     -moz-transform: scale(1);  /* Firefox 3.5+ */
      -ms-transform: scale(1);  /* IE9+ */
       -o-transform: scale(1);  /* Opera 10.50+ */
          transform: scale(1);
-webkit-transition: all .2s ease-out;
-moz-transition   : all .2s ease-out;
-o-transition     : all .2s ease-out;
transition        : all .2s ease-out;
}
.image_carousel img:hover {
    opacity: 1;
-webkit-transform: scale(1.2);  /* Safari 3.1+, Chrome */
     -moz-transform: scale(1.2);  /* Firefox 3.5+ */
      -ms-transform: scale(1.2);  /* IE9+ */
       -o-transform: scale(1.2);  /* Opera 10.50+ */
          transform: scale(1.2);
          -webkit-transition: all .2s ease-out;
-moz-transition   : all .2s ease-out;
-o-transition     : all .2s ease-out;
transition        : all .2s ease-out;
}
a.prev, a.next {
background: url(site_media/img/slider-intro/btn_carrucel.jpg) no-repeat transparent;
width: 57px;
height: 160px;
display: block;
position: absolute;
top: 31px;
}
a.prev {            left: -2px;
                    background-position: 0 0; }
a.prev:hover {      background-position: 0 -160px; }
a.prev.disabled {   background-position: 0 -160px !important;  }
a.next {            right: -3px;
                    background-position: -55px 0; }
a.next:hover {      background-position: -55px -160px; }
a.next.disabled {   background-position: -50px -160px !important;  }
a.prev.disabled, a.next.disabled {
    cursor: default;
}

a.prev span, a.next span {
    display: none;
}
.pagination {
    text-align: center;
}
.pagination a {
    background: url(../images/miscellaneous_sprite.png) 0 -300px no-repeat transparent;
    width: 15px;
    height: 15px;
    margin: 0 5px 0 0;
    display: inline-block;
}
.pagination a.selected {
    background-position: -25px -300px;
    cursor: default;
}
.pagination a span {
    display: none;
}
.clearfix {
    float: none;
    clear: both;
}
.caroufredsel_wrapper{
    height:195px !important;
    width:780px !important;
}
</style>
</html>
