
<div id="header-container">
    <div id="nav-container">
        <nav class="wrapper clearfix ">
            <h1 id="logo-3c">
                <a href="index.php"></a>
            </h1>
            <ul id="list-menu">
<?php
    require_once 'bdconexion/cnxBD.php';
    $sql="select * from  Menu WHERE  tipo ='NAVMAINS' ";
    $res= mysql_db_query($bd ,$sql , $con );
    while ($reg=  mysql_fetch_array($res)){
    ?>

               <!-- <li><a id="activars" href="index.php?id=<?=$reg["id_menu"] ?>"><?=$reg["nombre"] ;?></a></li>-->
  <?php }?>

                <?php
//Obtener URL
function ObtenerURL(){

$nomDom = $_SERVER['HTTP_HOST'];
$puerto = $_SERVER['SERVER_PORT'];
$nomPag = $_SERVER['REQUEST_URI'];

$url = 'http://'.$nomDom.$nomPag;

return $nomPag;
}
/*echo ObtenerURL();*/

?>
                <!-- Nosotros -->
                <?php $url = ObtenerURL();
		if($url == "/junior_02/nosotros.php") { ?>
			<li><a href="nosotros.php" class="activate">NOSOTROS</a></li>
		<?php }else { ?>
			<li><a href="nosotros.php">NOSOTROS</a></li>
		<?php }?>


                <!-- servicio -->
                <?php $url = ObtenerURL();
		if($url == "/junior_02/servicios.php") { ?>
			<li><a href="servicios.php" class="activate">SERVICIO</a></li>
		<?php }else { ?>
			<li><a href="servicios.php">SERVICIO</a></li>
		<?php }?>


                <!-- Multimedia -->
                <?php $url = ObtenerURL();
		if($url == "/junior_02/multimedia.php") { ?>
			<li><a href="multimedia.php" class="activate">MULTIMEDIA</a></li>
		<?php }else { ?>
			<li><a href="multimedia.php">MULTIMEDIA</a></li>
		<?php }?>

                <!-- Contactenos -->
                <?php $url = ObtenerURL();
		if($url == "/junior_02/contactenos.php") { ?>
			<li><a href="contactenos.php" class="activate">CONTACTENOS</a></li>
		<?php }else { ?>
			<li><a href="contactenos.php">CONTACTENOS</a></li>
		<?php }?>

            </ul>
        </nav>
    </div>
</div>

