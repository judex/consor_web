<?php
    require_once '../../bdconexion/cnxBD.php';
    $nombre=$_POST['nombre'];
    $nombrefoto=$_FILES['foto']['name'];
    $ruta=$_FILES['multimedia']['tmp_name'];
    $destino= "../../site_media/img/multimedia/".$nombrefoto;
     copy($ruta, $destino);
     mysql_query("insert into Imagen(nombre,imagen) values('$nombre','$destino')");
     header("location:../index_Adm.php");

/*     session_start();
     $foto=$_FILES['foto']['nombre'];
     $tmpfoto=$FILES['foto']['tmp_nombre'];
     $extimagen=pathinfo($foto);
	 $ext=array("png","jpg","jpeg","gif");
	 $urlnueva="".;
     if(is_uploaded_file($tmpfoto)){
     	if(array_search($extimagen,['extension'],$ext)){
     		copy($tmpfoto,$urlnueva);
     		echo "se ha guardado";
     	}
     	else{
     		echo "No se guardo";
     	}
     }*/
?>
