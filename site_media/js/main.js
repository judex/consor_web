<script type="text/javascript">
    $(document).ready(function(){
 
        var button = $('#upload'), interval;
        new AjaxUpload(button,{
            action: 'procesa.php',
            name: 'image',
            onSubmit : function(file, ext){
                // cambiar el texto del boton cuando se selecicione la imagen
                button.text('Subiendo');
                // desabilitar el boton
                this.disable();
 
                interval = window.setInterval(function(){
                    var text = button.text();
                    if (text.length < 11){
                        button.text(text + '.');
                    } else {
                        button.text('Subiendo');
                    }
                }, 200);
            },
            onComplete: function(file, response){
                button.text('Subir Foto');
 
                window.clearInterval(interval);
 
                // Habilitar boton otra vez
                this.enable();
 
                // Añadiendo las imagenes a mi lista
 
                if($('#gallery li').length == 0){
                    $('#gallery').html(response).fadeIn("fast");
                    $('#gallery li').eq(0).hide().show("slow");
                }else{
                    $('#gallery').prepend(response);
                    $('#gallery li').eq(0).hide().show("slow");
                }
            }
        });
 
        // Listar  fotos que hay en mi tabla
        $("#gallery").load("procesa.php?action=listFotos");
    });
 
</script>
