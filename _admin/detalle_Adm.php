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

        <link rel="stylesheet" href="../site_media/css/normalize.css">
        <link rel="stylesheet" href="../site_media/css/main.css">
        <script src="site_media/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="site_media/js/vendor/jquery-1.8.2.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <?php  include_once 'include_adm/header.php';?>
        <div id="main-container">
            <div id="main" class="wrapper clearfix">
                <?php ; require_once 'include_adm/nav-main-detalle.php'; ?>
                    <?php
                        if ($_POST["id_producto"]=='4') {
                        ?> <section id="adm-all" style="border-color:#FCC410">
                       <?php include_once 'include_adm/multimedia-adm.php';?>
                       </section> <?php }
                    ?>

                    <?php
                        if ($_GET["id_producto"]=='1')  {
                        ?> <section id="adm-all" style="border-color:#FCC410">
                       <?php include_once 'include_adm/detalle_servicio/promociones.php';?>
                       </section> <?php }
                    ?>
                    <?php
                        if ($_GET["id_producto"]=='2')  {
                        ?> <section id="adm-all" style="border-color:#FCC410">
                       <?php include_once 'include_adm/detalle_servicio/promociones.php';?>
                       </section> <?php }
                    ?>
                    <?php
                        if ($_GET["id_producto"]=='3')  {
                        ?> <section id="adm-all" style="border-color:#FCC410">
                       <?php include_once 'include_adm/detalle_servicio/promociones.php';?>
                       </section> <?php }
                    ?>
                    <?php
                        if ($_GET["id_producto"]=='4')  {
                        ?> <section id="adm-all" style="border-color:#FCC410">
                       <?php include_once 'include_adm/detalle_servicio/promociones.php';?>
                       </section> <?php }
                    ?>



            </div>
        </div>
        <?php require_once 'include_adm/footer.php'; ?>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
