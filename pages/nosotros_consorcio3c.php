                    <article id="nosotros">
                        <h2>NOSOTROS</h2>
                        <p>Somos una empresa dedicada a la comercialización de Productos de consumo masivo, iniciamos operaciones en los años 90's y seguimos trabajando para servir mejor a todos nuestros clientes de la zona sur.</br>
                        Nuestro compromiso es con todos los comsumidores ofreciendoles productos de primera calidad, y assegurar su disponibilidad, en cada punto de venta
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div id="img-nosotros"></div>
                    </article>
                    <article id="galeria-fotos">
                        <h3 class="margen-gal clearfix">Galeria de Fotos:</h3>
                        <div class="image_carousel">
                            <div id="foo3">
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
                                <img src="site_media/img/slider-intro/btn_Andina.png" alt="basketball" width="160" height="160" /></a>
                                <a href="">
                                <img src="site_media/img/slider-intro/btn_Andina.png" alt="basketball" width="160" height="160" /></a>

                            </div>
                            <div class="clearfix"></div>
                            <a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
                            <a class="next" id="foo2_next" href="#"><span>next</span></a>

                            </div>
                    </article>

<script src="site_media/js/jquery.carouFredSel-6.1.0-packed.js"></script>
         <script>
            $("#foo3").carouFredSel({
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
<style>
.image_carousel {
position: relative;
background: #DFDFDF;
padding: 0 0 28px 0;
border-radius: 0 0 14px 14px;
}
.image_carousel img {
    background-color: transparent;
    margin: 7px;
    display: block;
    float: left;
    opacity: 0.8;
-webkit-transition: all .2s ease-out;
-moz-transition   : all .2s ease-out;
-o-transition     : all .2s ease-out;
transition        : all .2s ease-out;
}
.image_carousel img:hover {
    opacity: 1;
-webkit-transition: all .2s ease-out;
-moz-transition   : all .2s ease-out;
-o-transition     : all .2s ease-out;
transition        : all .2s ease-out;
}
a.prev, a.next {
background: url(site_media/img/btn_slider_nosotros.png) no-repeat transparent;
width: 21px;
height: 43px;
display: block;
position: absolute;
top: 65px;
opacity:0.5;
-webkit-transition: all .2s ease-out;
-moz-transition   : all .2s ease-out;
-o-transition     : all .2s ease-out;
transition        : all .2s ease-out;
}
a.prev { left: 25px;
background-position: 0 0;}
a.prev:hover { opacity:1;}
a.prev.disabled {   background-position: 0 -160px !important;  }
a.next {            right: 25px;
background-position: 0px -44px; }
a.next:hover {      opacity:1; }
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
height: 170px !important;
width: 521px !important;
margin: 0 auto !important;
}
    </style>