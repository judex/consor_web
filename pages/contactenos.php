<div id="main-contac">
<b>LIMA:</b>
<p>Av. Tomas Valle 354 / San Martin</br>
Telf:586 8545   Next:158*958
</p>
<img src="" alt="">

<article>
 <div>
 	<b>CAÑETE</b>
	<p>Av. Tomas Valle 354 / San Martin</br>
	Telf:586 8545   Next:158*958
	</p>
 	<b>PISCO</b>
 	<p>Av. Tomas Valle 354 / San Martin</br>
	Telf:586 8545   Next:158*958
	</p>
 	<b>CHINCHA</b>
 	<p>Av. Tomas Valle 354 / San Martin</br>
	Telf:586 8545   Next:158*958
	</p>
 </div>
 <div>
 	<form  action="pages/proceso.php" method="post" id="form-tcn"
        >
          <fieldset>
				<select id="cbo" name="thelist" onChange="combo(this, 'theinput')">
				  <option>Provincia</option>
				  <option>Cañete</option>
				  <option>Chincha</option>
				  <option>Pisco</option>
				</select>
                <label for="nombre">Nombre :</label></br>
                <input type="text" name="nombre" id="nombre" title="Nombre completo" maxlength="50" placeholder="Nombre completo" autocomplete="off" required/></br></br>
                <label for="email">Email :</label></br>
                <input type="email" name="email" id="email" title="Correo electrónico" maxlength="40" placeholder="@" autocomplete="off" required/></br></br>
                <label for="mensaje">Mensaje :</label></br>
                <textarea name="comentario" id="comentario" title="Comentario" cols="30" rows="5" maxlength="500" placeholder="mensaje..." required/>
              </textarea>
                </br></br>

              <input type="reset" value="Borrar" class="submit-ct borrar"/>
              <input type="submit" value="Enviar" class="submit-ct"/>
          </fieldset>
        </form>
 </div>
</article>
</div>
<style>
#main-contac b, p{
margin: 0px 20px;
display:block
}
#main-contac b{margin-top:20px;color:#F57F25;}
#main-contac img{
background:#ffc;
height:200px;
width:100%;
margin-bottom: 15px;
}
#nombre{
border-radius:14px 14px 0 0;
}
#comentario{
border-radius:0 0 14px 14px;
}
#main-contac article div{
width:49%;
display:inline-block;
vertical-align: middle;
}
#cbo{display: block;
margin-left: 160px;
background: #272425;
border-radius: 10px 10px 0 0;
color: #F57F25;
padding: 5px 25px;
border: 1px solid #1B1B1B;
text-align: center}

#main-contac select:focus,textarea:focus,input:focus{
  outline:0px;
}
#main-contac  input,#main-contac textarea{width: 79%;
border: 1px solid #E7E5E6;
box-shadow: -4px -2px 18px #CCC;
padding: 5px;
vertical-align: middle;
}
#main-contac  input:hover{
border: 1px solid #DFDFDF;
}
#main-contac .borrar{
background:#272425!important;
margin-left: 114px;
}
#main-contac .submit-ct{
border: 1px solid #DFDFDF;
border-radius: 25px;
box-shadow: none;
width: 25%;
background:#F57F25;
color:#fff;
}
#main-contac .submit-ct:hover{
opacity:.8
}

</style>