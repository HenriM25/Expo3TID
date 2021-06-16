$(function(){
  var atual_fs, next_fs, prev_fs;
    var formulario = $('form[name=formulario]');
  
  function next(elem){
      atual_fs = $(elem).parent();
      next_fs = $(elem).parent().next();   
    
    $('#progress li').eq($('fieldset').index(next_fs)).addClass('ativo');
    atual_fs.hide(800);
    next_fs.show(800);
}
    $('.prev').click(function(){
   atual_fs = $(this).parent();
   prev_fs = $(this).parent().prev();
    
    $('#progress li').eq($('fieldset').index(atual_fs)).removeClass('ativo');
    atual_fs.hide(800);
    prev_fs.show(800);
  });
$('input[name=next]').click(function(){
    var array = formulario.serializeArray();
     if(array[0].value == ''  || array[1].value == ''  || array[2].value == ''){
      $('.resp').html('<p>Preencha todos os campos corretamente</p>');
     }else{
         $('.resp').html('');
         next($(this));
     }
    });
});



