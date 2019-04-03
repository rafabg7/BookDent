
jQuery(document).on('submit','#formLg',function(event){
    event.preventDefault();
    jQuery.ajax({
        url:'main_app/login.php',
        type:'POST',
        dataType:'json',
        data:$(this).serialize(),
        beforeSend:function(){
          $('.botonlg').val('Validando....');
        }
      })