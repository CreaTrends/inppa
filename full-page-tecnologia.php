<?php
/**
 Template Name: Full-width Page Tecnologia layout
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
        <div class="d-flex justify-content-start align-items-center ml-4 home-banner-iconbox">
          
        </div>
      </span>

    </span>
</section>
<section class="page-section-menu  mb-3 py-3 row-products" id="product-type">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-12 col-md-12">
        <div class="product-list-container d-flex">
          <div class="products-list-inner border-left">
            <h2><?php echo get_post_field('post_title', $post->ID); ?></h2>
            <p><?php echo get_post_field('post_content', $post->ID); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="page-section-menu  mb-3 py-3 row-products" id="product-type">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-12 col-md-12">
        <div class="product-list-container d-flex">
          <div id="box" class="d-none d-lg-block">
            <div class="bg">
              <div class="triangle-3"></div>
              <div class="txt"><?php echo $value->name;?></div>
            </div>
          </div>
          <div class="products-list-inner border-left">
            <div class="card-deck">
              <?php 
              $args = array(
                'post_type'   =>  'product',
                'posts_per_page' => '-1',
                'meta_key' => 'prefix-product_type',
                'meta_value' => 'Servicio',

              );
              $args['tax_query'] = array(
              array( 'taxonomy' => 'product-cat', 'field' => 'slug', 'terms' => 'tecnologia-inppa' )
              );
              $rows = get_posts($args);
              
              foreach ($rows as $post) : setup_postdata($post);
              ?>
              <div class="card rounded-0 border-0 col-md-4 p-0">
                <div class="card-img-top card-img-top-250">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'post-thumbnail');?>" class="card-img-top img-fluid" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">
                  <a href="#"><?php the_title(); ?></a>
                  </h5>
                  <p class="card-text"><?php the_content();?></p>
                </div>
              </div>
              <?php
              
              endforeach; 
              wp_reset_query();?>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>

<section class="page-section-menu  mb-3 py-3 row-products" id="product-type">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-12 col-md-12">
        <div class="product-list-container d-flex">
          <div id="box" class="d-none">
            <div class="bg">
              <div class="triangle-3"></div>
              <div class="txt"><?php echo $value->name;?></div>
            </div>
          </div>
          <div class="products-list-inner border-left">
            <h2><?php echo rwmb_meta( 'service_blockservice_block_title' ); ?></h2>
            <p><?php echo rwmb_meta( 'service_blockservice_block_content' ); ?></p>
          
              <?php
              $images = rwmb_meta( 'prefix-image_advanced_1', array( 'size' => 'full' ) );
              foreach ( $images as $image ) { ?>
                  
                  <img src="<?php echo $image['url'];?> " alt="" class="img-fluid">
              <?php } 
              ?>
            
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>


<section class="about px-0">
  <div class="container-fluid justify-content-center p-60">
    <div class="row">
      <div class="col-lg-6">
        <p class="text-muted">Radiadores inppa presente en el mercado desde 1949 desarrollando tecnología e
innovación para la fabricación y mantención de intercambiadores de calor para minería, industria y transporte. </p>
      </div>
      <div class="col-lg-3">
        <h2>Antofagasta</h2>
        <ul class="list-unstyled">
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
                <i class="fas fa-map-marker-alt fa-lg self-align-center"></i> 
              </span>
              <span class="ml-2"><a href="https://www.google.com/maps/place/Chuquicamata,+Codelco+Ne/@-22.3090195,-68.9210203,17z/data=!3m1!4b1!4m5!3m4!1s0x96ac7568707457b9:0x496c5511ebed67ad!8m2!3d-22.3090245!4d-68.9188316" target="_blank">Calle Cía. Radomiro Tomic 375, Barrio Industrial La Negra</a></span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-phone fa-lg"></i>
            </span>
              <div>
                <span class="ml-2"><a href="tel:+55 24224 3300">+55 24224 3300</a></span>
              </div>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-envelope fa-lg"></i>
            </span>
              <span class="ml-2"><a href="mailto:contacto@inpparadiadores.cl">contacto@inpparadiadores.cl</a></span>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h2>Santiago</h2>
        <ul class="list-unstyled">
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
                <i class="fas fa-map-marker-alt fa-lg self-align-center"></i> 
              </span>
              <span class="ml-2"><a href="https://www.google.com/maps/place/Jotabeche+1280,+Santiago,+Estaci%C3%B3n+Central,+Regi%C3%B3n+Metropolitana/@-33.4649173,-70.6879002,17z/data=!3m1!4b1!4m5!3m4!1s0x9662c4ee606a1af7:0x78bec10594d4cdb!8m2!3d-33.4649218!4d-70.6857115" target="_blank">Jotabeche 1280, Estacion Central-Santiago</a></span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-phone fa-lg"></i>
            </span>
              <span class="ml-2">
                <a href="tel:+56 2 2894 1123">+56 2 2894 1123 </a><br>
                <a href="tel:+56 2 2894 4770">+56 2 2894 4770</a>
              </span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-envelope fa-lg"></i>
            </span>
              <span class="ml-2"><a href="mailto:contactosantiago@inpparadiadores.cl">contactosantiago@inpparadiadores.cl</a></span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<?php

get_footer();
