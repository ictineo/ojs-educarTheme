$(document).ready(function() {
    $('body').css('display', 'none');
    $('body').fadeIn(400);

    $('a').click(function(event) {
      event.preventDefault();
      newLocation = this.href;
      //$('body:visible').fadeOut(800, newpage(newLocation));
      $('body:visible').animate({
        opacity: 0},
        {complete: newpage(newLocation)});
      });

    function newpage(newLocation) {
      window.location = newLocation;
    }
    });
