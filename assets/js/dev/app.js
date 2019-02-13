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

jQuery(document).ready(function($) {

  $(".owl-carousel").each(function() {
          $(this).owlCarousel({
            items:3,
            loop:false,
                responsive:{
                    0:{
                        items:1
                    },
                    768:{
                        items:1
                    },
                    1000:{
                        items:3
                    }
                }
          });
        });
        // Custom Navigation Events
        $(".next").click(function(){$(this).closest('.span12').find('.owl-carousel').trigger('next.owl.carousel');})
        $(".prev").click(function(){$(this).closest('.span12').find('.owl-carousel').trigger('prev.owl.carousel');})
  
});


