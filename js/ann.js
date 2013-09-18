$(document).ready(function () {
  var h = 0;
  //$('#content').children().each(function() {
    //if($(this).attr('id') != "announcementsHome" && $(this).is(':visible')) {
      //h = h + $(this).height();
    //}
  //console.log(h);
      //console.log($(this).attr('id') + ' ' + $(this).height());
  //});
  //h = h + $('#titleWrapper').height();
  //h = h - 45;
  var h = $('#main').height() - $('#announcementsHome').height();
  var sideh = $('#sidebar').height();
  if(h > sideh) {
    $('#announcementsHome').css('width', '100%');
  }
  var h = $('#container').height() - $('#header').height();// - 46;
  $('#body').css('height', h + 'px');
});
