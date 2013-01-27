
<nav id="nav-servicio">
  <?php
 require_once '';
  $sql="select * from Menu where tipo='NAVDETAL' " ;
  $res= mysql_db_query($bd ,$sql , $con );
    ?>

    <ul>
         <li id="logo-servicio"><a href=""><img src="" alt=""></a></li><?php   while ($reg=  mysql_fetch_array($res)){ ?>
         <li><a id="activadosa" class="btn-servicio" href=""><span id="ico-btn-servicio-act"></span><?=$reg["nombre"] ;?></a></li>
         <?php } ?>
         <!--<li><a class="btn-servicio" href=""><span class="ico-btn-servicio"></span>productos</a></li>
         <li><a class="btn-servicio" href=""><span class="ico-btn-servicio"></span>Multimedia</a></li>
         <li><a class="btn-servicio" href=""><span class="ico-btn-servicio"></span>trabaja con <span style="width: 22%;display:inline-block;"></span>  nosotros</a></li>-->
     </ul>
</nav>