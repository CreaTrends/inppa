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
              <div class="txt"><?php echo $value->name;?></div>
            </div>
          </div>

          <div class="w-100 items-list-fluid span12 border-left">
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
                'post_type'   =>  'product',
                'posts_per_page' => '-1',
                'meta_key' => 'prefix-product_type',
                'meta_value' => 'Servicio',
                'orderby' => 'menu_order',
                'order'   => 'ASC',

              );
              $args['tax_query'] = array(
              array( 'taxonomy' => 'product-cat', 'field' => 'slug', 'terms' => 'tecnologia-inppa' )
              );
              $rows = get_posts($args);
              $chunks = array_chunk($rows, $i);
              $start = 0;
              foreach ($rows as $post) : setup_postdata($post);
              $active = ($i == 0) ? $active = "active" : $active = "";
              ?>
              <article class="thumbnail item px-1 card card rounded-0 border-0 p-0" itemscope="" itemtype="http://schema.org/CreativeWork">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'available-homes');?>" class="img-fluid" />
                <div class="card-body">
                  <h4 itemprop="headline">
                    <a href="#" rel="bookmark"><?php the_title(); ?></a>
                  </h4>
                  <p itemprop="text" class="flex-text text-muted"><?php the_content();?></p>
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
      <div class="col-12 col-lg-6 offset-md-3">
        <p class="text-muted text-center">Inppa Radiadores presente en el mercado desde 1959 desarrollando tecnología e innovación para la industria y transporte. Contamos con una amplia gama de productos
          estándar y productos especiales. Nuestras actividades productivas y materias primas están certificadas y
mantienen un cuidado respeto por el medio ambiente.</p>
      </div>
      
    </div>
  </div>
</section>


<?php

get_footer();
