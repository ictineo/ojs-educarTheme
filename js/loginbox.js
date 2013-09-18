$(document).ready(function() {
 $('input[title]').each(function() {
  if($(this).val() === '') {
   $(this).val($(this).attr('title')); 
  }
  
  $(this).focus(function() {
   if($(this).val() === $(this).attr('title')) {
    $(this).val('').addClass('focused'); 
    if($(this).attr('type') == 'password'){
      $(this).attr('type', 'textfield');
    }
   }
  });
  
  $(this).blur(function() {
   if($(this).val() === '') {
    $(this).val($(this).attr('title')).removeClass('focused'); 
    if($(this).attr('type') == 'password'){
      $(this).attr('type', 'textfield');
    }
   }
  });
 });
});

