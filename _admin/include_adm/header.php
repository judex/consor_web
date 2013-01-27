
<div id="header-container">
    <div id="nav-container">
        <nav class="wrapper clearfix ">
            <h1 id="logo-3c">
                <a href=""></a>
            </h1>
            <ul id="list-menu">
<?php
    require_once '../bdconexion/cnxBD.php';
    $sql="select * from Menu WHERE tipo ='NAVMAINS' and estado='1'";
    $res= mysql_db_query($bd ,$sql , $con );
    while ($reg=  mysql_fetch_array($res)){
    ?>
               
                <li><a id="activars" href="index_Adm.php<?php $reg["id_menu"] ?>"><?=$reg["nombre"] ;?></a></li>
  <?php }?>
                <!--<li><a href="#">NOSOTROS</a></li>
                <li><a href="#">SERVICIO</a></li>
                <li><a href="#">MULTIMEDIA</a></li>
                <li><a href="#">CONTACTENOS</a></li>-->
            </ul>
        </nav>
    </div>
</div>
