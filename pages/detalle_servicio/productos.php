<ul id="myTab" class="nav nav-tabs">
              <li class="active"><a href="#imagen" data-toggle="tab">Inpulsitivos</a></li>
              <li><a href="#postres" data-toggle="tab">Postres</a></li>
              <li><a href="#granel" data-toggle="tab">Granel</a></li>

            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="imagen" style="height:625px;padding: 0 35px;">
              	<?php
              		for ($i=0; $i <12 ; $i++) { ?>
              			<div class="container-fotos">
              			<a href="#"><img class="img-fotos" src="#" alt="" title="" />
              			<span class="titulo-img"><?php echo"imagen-0".$i; ?></span></a>
              			</div>

              		<?php }?>


              </div>

              <div class="tab-pane fade" id="postres">
                <div class="cont-prod clearfix">
                  <style>
                    .cont-prod{
                      display: block;
                      padding: 0 35px;
                      margin-top: 60px;
                    }
                    .cont-prod blockquote{
                      margin:0;
                    }
                    .cont-prod article{
                      display: inline-block;
                      width: 49%;
                      vertical-align: bottom;
                      color: #555;
                    }
                    .cont-prod img{
                      height: 294px;
                      width: 270px;
                      margin: 0 auto;
                      display: block;
                      border: 10px solid #FBEE00;
                    }
                    .cont-prod article h2{
                      text-align: center;
                      color:#F57F25;
                      margin: 0 0;
                    }
                     .cont-prod article blockquote>#p-t{
                      width: 27%;
                      float: left;
                      padding-left: 5px;
                      display: inline-block;
                      background: white;
                      color:#3D3D3D;
                    }
                    .cont-prod article blockquote>p{
                      width: 69.95%;
                      float: left;
                      margin: 0;
                      background: #ECECEC;
                      padding-left: 5px;
                    }
                    .cont-prod article>b{
                      display: block;
                      padding: .2em 0;
                      margin: 2em 0 0;
                      background: #F57F25;
                      padding-left: 5px;
                      color:#FFF;
                      }

                      .cont-prod article>p{
                      background: #E4E5E7;
                      margin: .2em 0;
                      padding: 5px 5px;
                      font-size: .9em;
                      }
                      #cont-desc{
                      margin:5px 0 0;
                      }
                      #desc-title{
                      width: 36%;
                      float: left;
                      color:#3D3D3D
                      }
                      #desc-title>p,#desc-resp>p{
                     margin: .2em 0;
                     background: #E4E5E7;
                     padding: .1em 5px;
                     font-size: .9em;
                      }
                      #desc-resp{
                      width: 63%;
                      float: right;
                      }
                      #precio-pro{
                      background: #F57F25!important;
                      color: white;
                      }
                      #produ-relacionados{
                        height: 172px;
                        margin-top: 85px;
                        background: #E4E5E7;
                        border-radius: 0 0 14px 14px;
                        padding: 0 35px;
                      }
                       #produ-relacionados div> b{
                        font-size: .9em;
                        background: rgb(203,203,205);
                        background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2NiY2JjZCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNiOWI5YmIiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
                        background: -moz-linear-gradient(top,  rgba(203,203,205,1) 0%, rgba(185,185,187,1) 100%);
                        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(203,203,205,1)), color-stop(100%,rgba(185,185,187,1)));
                        background: -webkit-linear-gradient(top,  rgba(203,203,205,1) 0%,rgba(185,185,187,1) 100%);
                        background: -o-linear-gradient(top,  rgba(203,203,205,1) 0%,rgba(185,185,187,1) 100%);
                        background: -ms-linear-gradient(top,  rgba(203,203,205,1) 0%,rgba(185,185,187,1) 100%);
                        background: linear-gradient(to bottom,  rgba(203,203,205,1) 0%,rgba(185,185,187,1) 100%);
                        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr ='#cbcbcd', endColorstr='#b9b9bb',GradientType=0 );
                        padding: 5px;
                        border-radius: 5px;
                        color:#3F3F41;

                      }
                      #produ-relacionados a{
                        text-decoration: none;
                      }
                      .img-relacionados{
                        height: 80px;
                        width: 80px;
                        margin: 0 14px;
                        background: white;

                      }
                  </style>
                  <article>
                    <img src="" alt="">
                  </article>
                  <article>
                    <h2>NESQUIK</h2>
                    <blockquote>
                      <p id="p-t">CODIGO :</p>
                      <p>1452472</p>
                    </blockquote>
                    <div class="clearfix"></div>
                    <b>DESCRIPCIÓN:</b>
                    <p>Helado cremoso de chocolate.Bañado desde lamitad con chocolate crocante.</p>
                    <blockquote id="cont-desc">
                      <div id="desc-title">
                        <p>PRESENTACIÓN</p>
                        <p>SABORES</p>
                        <p>PIEZAS X U.M</p>
                        <p>PRECIO</p>
                      </div>
                      <div id="desc-resp">
                        <p>PALITO DE CREMA</p>
                        <p>CHOCOLATE</p>
                        <p>24</p>
                        <p id="precio-pro">23.20</p>
                      </div>
                    </blockquote>
                  </article>
                </div>
                <div id="produ-relacionados">
                  <div class="clearfix"></div>
                    <div style="margin: 15px 0;">
                      <b>PRODUCTOS RELACIONADOS</b>
                    </div>
                    <div>
                    <a href="#"><img class="img-relacionados" src="" alt="" title="">
                    </a>
                    <a href="#"><img class="img-relacionados" src="" alt="" title=""/>
                    </a>
                    <a href="#"><img class="img-relacionados" src="" alt="" title=""/>
                    </a>
                    <a href="#"><img class="img-relacionados" src="" alt="" title=""/>
                    </a>
                    <a href="#"><img class="img-relacionados" src="" alt="" title=""/>
                    </a>
                    <a href="#"><img class="img-relacionados" src="" alt="" title=""/>
                    </a>
                    </div>
                </div>
              </div>
              <div class="tab-pane fade" id="granel"  style="height:625px">
                <?php
                  for ($i=0; $i <6 ; $i++) { ?>
                    <div class="container-fotos">
                    <a href="#"><img class="img-fotos" src="#" alt="" title="" />
                    </a>
                    </div>

                  <?php }?>
              </div>

            </div>


<script src="site_media/js/bootstrap-tab.js"></script>
<script>
$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
</script>
<style>
.titulo-img{
  border-radius: 10px;
  background:#E6E6E6;
  padding:5px 10px;
  color: #585858;
}
.container-fotos {
display: inline-block;
}
.container-fotos >a{
display: block;
width: 135px;
text-align: center;
margin: 0 10px;
text-transform: uppercase;
text-decoration: none;
color: #9B9B9B;
line-height: 48px;
}
.img-fotos{
margin: 15px 15px 0px 0;
height: 125px;
width: 120px;
border: 6px solid #E6E6E6;
display: inline-block;
-webkit-transition: all .3s ease-out;
-moz-transition: all .3s ease-out;
-o-transition: all .3s ease-out;
transition: all .3s ease-out;
}
.container-fotos a:hover .img-fotos , .container-fotos a:hover .titulo-img{
border-color:#FBAB0B;
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
/*padding: 0 35px;*/
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
<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->