(function($) {
  "use strict"; // Start of use strict

  

  // Collapse Navbar
  $('.navbar .dropdown').hover(function() {
       $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
     }, function() {
       $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
     });

  // Hide navbar when modals trigger
  $('.portfolio-modal').on('show.bs.modal', function(e) {
    $('.navbar').addClass('d-none');
  })
  $('.portfolio-modal').on('hidden.bs.modal', function(e) {
    $('.navbar').removeClass('d-none');
  })

})(jQuery); // End of use strict




console.log('hola');