<nav id="nav-servicio">
    <ul id="bt-empresa">
    <?php
    require_once '../bdconexion/cnxBD.php';
    $sql="select * from Productos WHERE estado='1'";
    $res= mysql_db_query($bd ,$sql , $con );
    while ($reg=  mysql_fetch_array($res)){
    ?>
 <li class="logo-servicio"><a href="detalle_Adm.php?id_producto=<?=$reg["id_producto"] ?>"><span id="logo-servicio0<?=$reg["id_producto"] ?>"></span></a></li>
  <?php }?>

<!--          <li class="logo-servicio"><a href="promociones.php"><span id="logo-servicio01"></span></a></li>
         <li class="logo-servicio"><a href="promociones.php"><span id="logo-servicio02"></span></a></li>
         <li class="logo-servicio"><a href="promociones.php"><span id="logo-servicio03"></span></a></li>
         <li class="logo-servicio"><a href="promociones.php"><span id="logo-servicio04"></span></a></li> -->
     </ul>
</nav>

