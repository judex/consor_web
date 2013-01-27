<ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#imagen" data-toggle="tab">Fotos</a></li>
              <li><a href="#profile" data-toggle="tab">Videos</a></li>

            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="imagen" style="height:625px">
                  <form name="form" enctype="multipart/form-data" method="post" action="include_adm/guardar.php">
  <label>
  nombre
  <input name="nombre" type="text" id="nombre">
  </label>
  <br>
  <label>
  subir foto
  <input name="foto" type="file" id="foto">
  </label>
  <br>
  <label>
  <input type="submit" name="Submit" value="Subir">
  </label>
</form>
              	<?php  require_once '../bdconexion/cnxBD.php';
                      $sql="select * from Imagen ";
                      $res= mysql_db_query($bd ,$sql , $con );
                      while ($reg=  mysql_fetch_array($res))  { ?>
              		<div class="container-fotos">
                                     <a href="#">
                                        <img class="img-fotos" src="<?=$reg["imagen"] ?>" alt="<?=$reg["nombre"] ?>" title="<?=$reg["nombre"] ?>" /><?=$reg["nombre"] ?></a>
              	 </div>

              		<?php }?>
              </div>
              <div class="tab-pane fade" id="profile"  style="height:625px">
                <?php
              		for ($i=0; $i <9 ; $i++) { ?>
              			<div class="container-fotos">
              			<a href="#"><img class="img-fotos" src="#" alt="" title="" />
              			</a>
              			</div>

              		<?php }?>
              </div>
            </div>


<script src="../site_media/js/bootstrap-tab.js"></script>
<script>
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
</script>
<style>
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
overflow: auto;
padding: 0 35px;
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