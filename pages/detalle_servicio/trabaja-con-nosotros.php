<div id="cont-tcn">
  <h2>FORMA PARTE DE NUESTRO EQUIPO</h2>
  <P>Para enviar tu curriculum a atento complementa el siguiente formulario y haz clic en enviar</P>
          <form  action="pages/proceso.php" method="post" id="form-tcn"
        >
          <fieldset>
            <span id="ord-form">
                <label for="nombre">Nombre :</label>
                <input type="text" name="nombre" id="nombre" title="Nombre completo" maxlength="50" placeholder="Nombre completo" autocomplete="off" required/></br></br>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" title="Correo electrónico" maxlength="40" placeholder="@" autocomplete="off" required/></br></br>
                <label for="email">Curriculum Vitae :</label>
                <input type="file" name="email" id="email" title="Correo electrónico" maxlength="40" placeholder="@" autocomplete="off" required/></br></br>
                <label for="asunto">Codigo de Seguridad:</label>
                <input type="file" name="email" id="email" title="Correo electrónico" maxlength="40" placeholder="@" autocomplete="off" required/></br></br>

              <input type="submit" value="Enviar Curriculum Vitae" class="submit"/>
          </fieldset>
        </form>
        <div id="respuesta"></div>
      </div>
</section>

<script>
     $(document).ready(function(){

        $('#form-tcn').html5form({
            allBrowsers : true,
            messages: 'es',
            async : true,
            method : 'GET',
            responseDiv : '#respuesta'
            /*labels: 'hide'*/
        });

    });
   /* $(document).ready(function(){

        $('#form_test').html5form({
            allBrowsers : true,
            responseDiv : '#response',
            async : true,
            messages: 'es',
            method : 'GET',
            colorOn :'#6b6764',
            colorOff :'#818181',


        });

    });*/

</script>
<script src="site_media/js/jquery.html5form-1.5-min.js"></script>
<style>
  #cont-tcn{
    padding: 50px 85px;
  }
   #cont-tcn fieldset{
    border: 1px solid #A56B69;
    padding: 48px;
    border-radius: 20px;
  }
#cont-tcn>h2{
   color:#346480;
  }
 #cont-tcn input{width: 79%;
background: #E7E5E6;
border: 1px solid #E7E5E6;
padding: 5px 0;
vertical-align: middle;
}
#cont-tcn input:hover{
border: 1px solid #DFDFDF;
}
#cont-tcn input:focus{
  outline:0px;
}
   #cont-tcn label{
    width: 90px;
    display: inline-block;
  }
#cont-tcn .submit{
  background: rgb(0,78,127);
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwNGU3ZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUwJSIgc3RvcC1jb2xvcj0iIzA5NTM4MiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjUxJSIgc3RvcC1jb2xvcj0iIzAyMzk2MSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDMzNjYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  rgba(0,78,127,1) 0%, rgba(9,83,130,1) 50%, rgba(2,57,97,1) 51%, rgba(0,51,102,1) 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,78,127,1)), color-stop(50%,rgba(9,83,130,1)), color-stop(51%,rgba(2,57,97,1)), color-stop(100%,rgba(0,51,102,1)));
background: -webkit-linear-gradient(top,  rgba(0,78,127,1) 0%,rgba(9,83,130,1) 50%,rgba(2,57,97,1) 51%,rgba(0,51,102,1) 100%);
background: -o-linear-gradient(top,  rgba(0,78,127,1) 0%,rgba(9,83,130,1) 50%,rgba(2,57,97,1) 51%,rgba(0,51,102,1) 100%);
background: -ms-linear-gradient(top,  rgba(0,78,127,1) 0%,rgba(9,83,130,1) 50%,rgba(2,57,97,1) 51%,rgba(0,51,102,1) 100%);
background: linear-gradient(to bottom,  rgba(0,78,127,1) 0%,rgba(9,83,130,1) 50%,rgba(2,57,97,1) 51%,rgba(0,51,102,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#004e7f', endColorstr='#003366',GradientType=0 );
border-radius: 5px;
border: 1px solid #0C2B44;
color: white;
width: 250px;
float: right;

}
#cont-tcn .submit:hover{
border:1px solid #0C2B44;
}
</style>