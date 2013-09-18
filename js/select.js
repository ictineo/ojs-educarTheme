$(document).ready(function () {
  $('#sidebarNavigation .selectMenu').chosen({disable_search_threshold: 10,width: '140px'});
  $('#advancedSearch .selectMenu').chosen({disable_search_threshold: 10});

  /** active del menu **/
  var url = $(location).attr('href');
  $('#navbar .menu li a').each(function () {
    if($(this).attr('href') == url) {
      $(this).parent().addClass('activeItem');
    }
  });
  $('ul.menu a').each(function () {
    if($(this).attr('href') == url) {
      $(this).parent().addClass('activeItem');
      $(this).addClass('activeItem');
    }
  });
});
