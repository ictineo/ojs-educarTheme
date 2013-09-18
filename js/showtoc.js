$(document).ready(function() {
  var l = $('#content ul.menu a');
  l.click(function(e) {
    e.preventDefault();
  });
  var urlToc = l.attr('href');
  var content = $.post(urlToc, function (data) {
    var toc = $(data).find('#main #content').html();
    $('#content ul.menu').before('<div id="inlineToc" style="display:none">' + toc + '</div>');
    l.addClass('tocProcessed');
    l.click(function(e) {
      if(l.hasClass('tocProcessed')) {
        $('#inlineToc').slideToggle('slow');
        //l.hide('fade');
      }
    });
  });
});
