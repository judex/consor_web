<ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#imagen" data-toggle="tab">Promociones</a></li>
              <li><a href="#profile" data-toggle="tab">Solicita tu Congeladora</a></li>

            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="imagen">
              <div id="games">

                <a href="" target="_blank">
                  <img src="site_media/img/promociones/Slider-1.jpg" alt="Mini Ninjas" width="270" height="190" />
                 <!-- <span>
                    <b>Mini Ninjas</b><br />
                    Your quest to defeat the Evil Samurai Warlord has begun. Control the powers of nature, possess creatures, use your
                    furious Ninja skills to free your Ninja friends.
                  </span>-->
                </a>

                  <a href="" target="_blank">
                    <img src="site_media/img/promociones/Slider-2.jpg" alt="Price of Persia" />
                  </a>
<!--
                  <a href="http://spidermandimensions.marvel.com/" target="_blank">
                    <img src="site_media/img/promociones/spiderman_shattered_dimensions.jpg" alt="Spiderman: Shattered Dimensions" />
                  </a>

                  <a href="http://brinkthegame.com/" target="_blank">
                    <img src="site_media/img/promociones/brink.jpg" alt="Brink" />
                  </a>

                  <a href="http://www.godofwar.com/" target="_blank" >
                    <img src="http://workshop.rs/projects/coin-slider/games/god_of_war_3.jpg" alt="God of War III" />
                  </a>

                  <a href="http://www.borderlandsthegame.com/" target="_blank">
                    <img src="http://workshop.rs/projects/coin-slider/games/borderlands.jpg" alt="Borderlands" />
                    <span>
                      <b>Borderlands</b><br />
                      Fun combat and a steady flow of rewards make this journey a massively enjoyable one, especially with some fellow mercenaries along for the ride.
                    </span>
                  </a>

                  <a href="http://www.swtor.com/" target="_blank">
                    <img src="http://workshop.rs/projects/coin-slider/games/star_wars_the_old_republic.jpg" alt="Star Wars: The Old Republic" />
                  </a>

                  <a href="http://www.batmanarkhamasylum.com/" target="_blank">
                    <img src="http://workshop.rs/projects/coin-slider/games/batman_arkham_asylum.jpg" alt="Batman: Arkham Asylum" />
                  </a>
                  -->
    </div>
                  <article id="galeria-fotos-promo">

                        <div class="image_carousel">
                            <div id="foo4">
                                <a href="">
                                <img src="site_media/img/promociones/Image-ABAJO3.jpg" alt="basketball" title="Donofrio" width="190" height="220" /></a>
                                <a href="">
                                <img src="site_media/img/promociones/Image-ABAJO1.jpg" alt="basketball" title="Donofrio" width="190" height="220" /></a>
                                <a href="">
                                <img src="site_media/img/promociones/Image-ABAJO2.jpg" alt="basketball" title="Donofrio" width="190" height="220" /></a>
                                <a href="">
                                <img src="site_media/img/promociones/Image-ABAJO2.jpg" alt="basketball" title="Donofrio" width="190" height="220" /></a>
                                <!--
                                <a href="">
                                <img src="site_media/img/promociones/btn_Andina.png" alt="basketball" width="160" height="160" /></a>
                                <a href="">
                                <img src="site_media/img/promociones/btn_Donofrio.png" alt="basketball" width="160" height="160" /></a>
                                <a href="">
                                <img src="site_media/img/promociones/btn_Backus.png" alt="basketball" width="160" height="160" /></a>
                                <a href="">
                                <img src="site_media/img/promocioneso/btn_Andina.png" alt="basketball" width="160" height="160" /></a>
                                <a href="">
                                <img src="site_media/img/promociones/btn_Andina.png" alt="basketball" width="160" height="160" /></a>
                                -->

                            </div>
                            <div class="clearfix"></div>
                            <a class="prev" id="foo2_prev" href="#"><span>prev</span></a>
                            <a class="next" id="foo2_next" href="#"><span>next</span></a>

                            </div>
                    </article>
              </div>
              <div class="tab-pane fade" id="profile"  style="height:625px">
              </div>

            </div>

<script src="site_media/js/coin-slider.min.js"></script>
<script src="site_media/js/bootstrap-tab.js"></script>
<script>
      $('#games').coinslider();
    </script>
<script>
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
</script>
<style>
#games{width:100% !important}

.coin-slider { overflow: hidden; zoom: 1; position: relative;margin: 0 35px; }
.coin-slider a{ text-decoration: none; outline: none; border: none; }
#cs-buttons-games {left:81%!important;}
.cs-buttons { font-size: 12px;text-align: center;padding: 10px;float: left;}
.cs-buttons a { margin-left: 5px; height: 16px; width: 16px; float: left; border: 1px solid #FDC013; color: #B8C4CF;border-radius:50%  }
.cs-active { background-color:#FDC013;color:#FFFFFF!important; }

.cs-title { width:100%; padding: 10px; background-color: #000000; color: #FFFFFF; }

.cs-prev,
.cs-next { background-color: #000000; color: #FFFFFF; padding: 0px 10px; }

/**/
.container-fotos {
display: inline-block;
}
.container-fotos >a{
display: block;
width: 196px;
text-align: center;
margin: 0 10px;
text-transform: uppercase;
text-decoration: none;
color:#9B9B9B;
}
.img-fotos{
margin: 15px 15px 0px 0;
height: 185px;
width: 180px;
border: 8px solid #E6E6E6;
display:inline-block;
-webkit-transition: all .3s ease-out;
-moz-transition   : all .3s ease-out;
-o-transition     : all .3s ease-out;
transition        : all .3s ease-out;
}
.container-fotos a:hover .img-fotos{
border-color:#E81F30;
color:#686868 !important;
-webkit-transition: all .3s ease-out;
-moz-transition   : all .3s ease-out;
-o-transition     : all .3s ease-out;
transition        : all .3s ease-out;
}
.nav-tabs {
list-style: none;
}
.nav{
margin: 35px 0 0;
height: 34px;
}
.nav-tabs::before, .nav-tabs::after {
display: table;
line-height: 0;
content: "";
}
.nav-tabs > li {
margin-bottom: -1px;
}
.nav-tabs > li {
float: left;
}
.nav-tabs > .active > a, .nav-tabs > .active > a:hover {
color: white;
cursor: default;
background-color: white;
border: 1px solid #FFA200;
border-bottom-color: transparent;
background: #FFA810;
text-decoration: none;
font-weight: bold;
}
.nav-tabs > li > a {
padding-top: 8px;
padding-bottom: 8px;
line-height: 20px;
border: 1px solid #828283;
-webkit-border-radius: 4px 4px 0 0;
-moz-border-radius: 4px 4px 0 0;
border-radius: 4px 4px 0 0;
background: #919296;
color: white;
text-decoration: none;
}
.nav-tabs > li > a{
padding-right: 30px;
padding-left: 30px;
margin-right: 10px;
line-height: 14px;
}
.nav > li > a {
display: block;
}
.tab-content {
/*overflow: auto;*/
padding: 0;
}
.tab-content >.active{
display: block !important;
}
.tab-content > .tab-pane{
display: none;
}

.fade {
opacity: 0;
-webkit-transition: opacity 0.15s linear;
-moz-transition: opacity 0.15s linear;
-o-transition: opacity 0.15s linear;
transition: opacity 0.15s linear;
}
.fade.in {
opacity: 1;
}

.nav-tabs::before, .nav-pills::before, .nav-tabs::after, .nav-pills::after {
display: table;
line-height: 0;
content: "";
}
.nav-tabs::after, .nav-pills::after {
clear: both;
}

</style>

<script src="site_media/js/jquery.carouFredSel-6.1.0-packed.js"></script>
         <script>
            $("#foo4").carouFredSel({
                circular: true,
                infinite: true,
                auto    : true,
                items     : 3,
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
                }
            });
        </script>
<style>
.image_carousel {
    position: relative;
    background: #DFDFDF;
    padding: 20px 0;
    border-radius: 0 0 14px 14px;
    border-top: 1px solid #D8D8D8;
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
top: 116px;
opacity:0.5;
-webkit-transition: all .2s ease-out;
-moz-transition   : all .2s ease-out;
-o-transition     : all .2s ease-out;
transition        : all .2s ease-out;
}
a.prev { left: 30px;
background-position: 0 0;}
a.prev:hover { opacity:1;}
a.prev.disabled {   background-position: 0 -160px !important;  }
a.next {            right: 30px;
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
height: 236px !important;
width: 603px !important;
margin: 0 auto !important;
}
    </style>