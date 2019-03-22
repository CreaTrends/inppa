<?php
/**
 Template Name: Full-width Page Contacto Mineria layout
Template Post Type: post, page, product
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Radiadores_Innpa
 */

get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

$page_categories = get_the_terms( get_the_ID(), 'category' );

$fields = rwmb_get_object_fields(get_the_ID()); // Get by post ID, or
$fields = rwmb_get_object_fields( 'product' ); // By post type

$value = rwmb_get_value('page_taxonomy');

$termchildren = get_term_children( $value->term_taxonomy_id, $value->taxonomy );

?>

<section class="page-section p-0" id="masthead-page">
    <span class="page-caption" style="background-image: url(<?php echo $featured_img_url;?>)">
      <span class="caption-content caption-welcome is-yellow d-flex">
        <?php the_title( '<h2 class="caption-title mb-0 align-self-center">', '</h2>' );?>
        
      </span>

    </span>
</section>
<section class="page-section-menu  mb-3 py-3 row-products" id="product-type">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-4">
        <div class="products-list-inner w-100 border-0 mt-3">
          <h4>Antofagasta</h4>
          <ul class="list-unstyled">
            <li class="my-2">
              <div class="d-flex justify-content-start align-items-center footer-col-info">
                <span class="span icon-list text-center">
                  <i class="fas fa-map-marker-alt fa-lg self-align-center"></i> 
                </span>
                <span class="ml-2"><a href="https://www.google.com/maps/place/Chuquicamata,+Codelco+Ne/@-22.3090195,-68.9210203,17z/data=!3m1!4b1!4m5!3m4!1s0x96ac7568707457b9:0x496c5511ebed67ad!8m2!3d-22.3090245!4d-68.9188316" target="_blank">Calle Cía. Radomiro Tomic 375, Barrio Industrial La Negra</a></span>
              </div>
            </li>
            <li class="my-2">
              <div class="d-flex justify-content-start align-items-center footer-col-info">
                <span class="span icon-list text-center">
                <i class="fas fa-phone fa-lg"></i>
              </span>
                <span class="ml-2">
                    <a href="tel:+56552895664" class="d-block">+56552895664</a>
                    <a href="tel:+56552895663" class="d-block">+56552895663</a>
                    
                  </span>
              </div>
            </li>
            <li class="my-2">
              <div class="d-flex justify-content-start align-items-center footer-col-info">
                <span class="span icon-list text-center">
                <i class="fas fa-envelope fa-lg"></i>
              </span>
                <span class="ml-2"><a href="mailto:contacto@inpparadiadores.cl">contacto@inpparadiadores.cl</a></span>
              </div>
            </li>
          </ul>
        </div>
        <div class="products-list-inner w-100 border-0 mt-0">
          <h4>Santiago</h4>
          <ul class="list-unstyled">
            <li class="my-2">
              <div class="d-flex justify-content-start align-items-center footer-col-info">
                <span class="span icon-list text-center align-self-center">
                  <i class="fas fa-map-marker-alt fa-lg "></i> 
                </span>
                <span class="ml-2"><a href="https://www.google.com/maps/place/Jotabeche+1280,+Santiago,+Estaci%C3%B3n+Central,+Regi%C3%B3n+Metropolitana/@-33.4649173,-70.6879002,17z/data=!3m1!4b1!4m5!3m4!1s0x9662c4ee606a1af7:0x78bec10594d4cdb!8m2!3d-33.4649218!4d-70.6857115" target="_blank">Jotabeche 1280, Estacion Central-Santiago</a></span>
              </div>
            </li>
            <li class="my-2">
              <div class="d-flex justify-content-start align-items-center footer-col-info">
                <span class="span icon-list text-center align-self-center">
                <i class="fas fa-phone fa-lg"></i>
              </span>
                <span class="ml-2">
                  <a href="tel:+56228941123">+56228941123</a>
                </span>
              </div>
            </li>
            <li class="my-2">
              <div class="d-flex justify-content-start align-items-center footer-col-info">
                <span class="span icon-list text-center">
                <i class="fas fa-envelope fa-lg"></i>
              </span>
                <span class="ml-2"><a href="mailto:contactosantiago@inpparadiadores.cl">contactosantiago@inpparadiadores.cl</a></span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-md-8">
        <div class="product-list-container d-flex">
          <div class="products-list-inner w-100 border-0">
            <?php the_title( '<h2 class="caption-title mb-0 align-self-center">', '</h2>' );?>
            <p><?php echo the_content(); ?></p>
            <p><?php echo get_post_field('post_content', $post->ID); ?></p>
            <?php
            while ( have_posts() ) :
              the_post();

              the_content();

            

            endwhile; // End of the loop.
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php

get_footer();
