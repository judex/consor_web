
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
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
        <?php require_once 'includes/header.php';?>
        <div id="main-container">
            <div id="main" class="wrapper clearfix">
                <nav id="nav-servicio">
                    <ul>
                         <li id="logo-servicio"><a href=""><div class="imagen" style="width: 200px;height: 200px;"></div></a></li>
                         <li><a id="activado" class="btn-servicio" href=""><span id="ico-btn-servicio-act"></span>Promociones</a></li>
                         <li><a class="btn-servicio" href=""><span class="ico-btn-servicio"></span>productos</a></li>
                         <li><a class="btn-servicio" href=""><span class="ico-btn-servicio"></span>Multimedia</a></li>
                         <li><a class="btn-servicio" href=""><span class="ico-btn-servicio"></span>trabaja con <span style="width: 22%;display:inline-block;"></span>  nosotros</a></li>
                     </ul>
                </nav>
                <section style="border-color:#FCC410">
                    <?php require_once'pages/detalle_servicio/trabaja-con-nosotros.php'; ?>

                </section>
            </div>
        </div>
         <?php require_once 'includes/footer.php'; ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="site_media/js/plugins.js"></script>
        <script src="site_media/js/main.js"></script>


    <style type="text/css">
        .imagen{
            background: url(site_media/img/sprint-servicios2.png) no-repeat;
            background-position: 26px -107px
        }
        #respuesta>p{color: #A2433D;}
    </style>

    </body>
</html>
