<?php
/**
 Template Name: Full-width Page FLOTA layout
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
      <span class="caption-content caption-welcome is-darkblue d-flex">
        <?php the_title( '<h2 class="caption-title mb-0 align-self-center text-white">', '</h2>' );?>
        <div class="d-none d-sm-flex justify-content-start align-items-center ml-4 home-banner-iconbox">
          <span class="span icon-list text-center icon">
            <i class="fas fa-phone"></i>
          </span>
          <span class="ml-2 phone-number text-white">Santiago : +56228948553</span>
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

<!-- Set up your HTML -->

<section class="latest-blog-posts bg-white pt60 pb60 p-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-md-right lead">
        
      </div>
      <div class="col-12 col-md-12">
        
        <div class="items-listed d-flex">
          <div id="box" class="d-none d-lg-block ">
            <div class="bg">
              <div class="triangle-3"></div>
              <div class="txt">Fabricación de radiadores</div>
            </div>
          </div>

          <div class="w-100 items-list-fluid span12 border-left" >
            <div class="customNavigation w-75 d-flex justify-content-end position-relative ml-0" style="margin-left:5rem; width: 90% !important;">
              <div class="p-0 ml-auto">
                <a class="btn prev">
                  <i class="fa fa-lg fa-chevron-left"></i>
                </a>
                <a class="btn next">
                  <i class="fa fa-lg fa-chevron-right"></i>
                </a>
              </div>
            </div>
            <div id="owl-demo-3" class="owl-carousel owl-theme" >

              <!-- start item -->
              <?php
              $i=4;
              $args = array(
              'post_type' => 'product',
              'posts_per_page' => '-1',
              'orderby' => 'menu_order',
              'order' => 'ASC'
              );
              $args['tax_query'] = array(
              array( 'taxonomy' => 'product-cat', 'field' => 'slug', 'terms' => 'radiadores-flota')
              );
              $query = get_posts($args);
              $chunks = array_chunk($query, $i);
              $start = 0;
              foreach ($query as $post) : setup_postdata($post);
              $active = ($i == 0) ? $active = "active" : $active = "";
              ?>
              <article class="thumbnail item px-1 card card rounded-0 border-0 p-0" itemscope="" itemtype="http://schema.org/CreativeWork">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'available-homes');?>" class="img-fluid" />
                <div class="card-body">
                  <h4 itemprop="headline">
                    <a href="#" rel="bookmark"><?php the_title(); ?></a>
                  </h4>
                  <p itemprop="text" class="flex-text text-muted"><?php echo the_content();?></p>
                </div>
              </article>
              <?php
              $i++;
              endforeach;
              wp_reset_query();
              ?>
            </div><!-- #owl-demo-2 -->  
          </div>
        </div>
      </div>
      
    </div>
  </div><!-- .container -->

</section>


<!-- if downloads -->
<?php
              $files = rwmb_meta( 'prefix-attace_files' );
              if($files){
              ?>
<section class="page-section-menu  mb-3 py-3 row-products" id="product-type">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12">
        <div class="product-list-container ">
          <div class="products-list-inner border-left">
            <h2>Descargas</h2>
            <?php
            //Columns must be a factor of 12 (1,2,3,4,6,12)
            $numOfCols = 4;
            $rowCount = 0;
            $bootstrapColWidth = 12 / $numOfCols;
            ?>
            <div class="row w-100">
              <div class="col-md-<?php echo $bootstrapColWidth; ?>">
                <ul class="list-group">
                  
                  
                  <?php
                  
                  foreach ($files as $row){
                  ?>
                  
                  <li class="list-group-item">
                    <div class="download-item d-flex bg-faded ">
                      <span class="span icon-list text-center icon">
                        <i class="fas fa-file"></i>
                      </span>
                      <a href="<?php echo $row['url']; ?>" class="align-self-center attached-file-text"><?php echo $row['title']; ?></a>
                    </div>
                  </li>
                  
                  
                  <?php
                  $rowCount++;
                if($rowCount % $numOfCols == 0) echo '</ul></div><div class="col-md-'.$bootstrapColWidth.'"><ul class="list-group">';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}
              ?>
              
<section class="about px-0">
  <div class="container-fluid justify-content-center p-60">
    <div class="row">
      <div class="col-lg-6">
        <p class="text-muted">Inppa Radiadores presente en el mercado desde 1949 desarrollando tecnología e
innovación para la fabricación y mantención de intercambiadores de calor para minería, industria y transporte. </p>
      </div>
      <div class="col-lg-3">
        <h2 class="text-center">Santiago</h2>
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
                <a href="tel:+56228940846">+56228940846</a>
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
  </div>
</section>


<?php

get_footer();
