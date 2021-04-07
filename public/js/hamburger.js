$h = jQuery.noConflict(); 
  $h(document).ready(function () {
  var trigger = $h('.hamburger'),
      overlay = $h('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $h('[data-toggle="offcanvas"]').click(function () {
        $h('#wrapper').toggleClass('toggled');
  });  
});
