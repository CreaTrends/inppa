<?php
/**
 Template Name: Full-width Page Contacto layout
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
  <div class="container-fluid">
    <div class="row justify-content-center">
      
      <div class="col-12 col-md-6">
        <div class="product-list-container d-flex">
          <div class="products-list-inner w-100 border-0">
            <h2>Contacto</h2>
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
