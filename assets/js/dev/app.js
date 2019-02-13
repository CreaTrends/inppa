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

/*$('.next').on('click',function(){ 
      var refer = $(this).attr('id');
      console.log(refer);
      $('.products-list-inner').carousel('next');return false; 
      
    });*/
/*    $('.prev').click(function(){ $('.carousel-01').carousel('prev');return false; });


$('.next').click(function(e) {
  var refer = $(this).data('refer'),
  link = '.'+refer;
  console.log(link);
  $(link).carousel('next');
  return false;
});*/