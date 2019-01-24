<?php
/**
 Template Name: Full-width Product layout
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
$page_categories = get_the_terms( get_the_ID(), 'category' );
$categories = get_the_category($post->ID);

?>
<section class="page-section-detail p-0" id="masthead-page">
    <span class="page-caption" style="background-image: url(<?php echo $featured_img_url;?>)">
      <span class="caption-content caption-welcome is-yellow">
        <?php echo esc_html( $categories[0]->name );?>
      </span>
    </span>
</section>
<section class="page-section-detail py-5" id="product-type">
    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-lg-block  col-lg-1 border-right">
                
                <div id="box">
                    <div class="bg">
                    <div class="triangle-3"></div>       
                        <div class="txt">RADIADORES MAQUINARIA PESADA</div>
                    </div>
                </div>
                <div id="box">
                    <div class="bg"> 
                    <div class="triangle-3"></div>        
                        <div class="txt">RADIADORES MAQUINARIA PESADA</div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-11">
                <div class="ml-3">
                    <div class="row ">
                    <div class="col-md-12">
                        <h2><?php the_title();?></h2>
                        <h4><?php the_excerpt();?></h4>
                    </div>
                </div>
                <?php echo the_content();?>
                        <?php if ( is_singular() ) :?>
                        
                        <?php endif;?>
                        <?php
                        while ( have_posts() ) :
                        the_post();
                        
                        get_template_part( 'template-parts/content', get_post_type() );
                        
                        endwhile; // End of the loop.
                        ?>
                </div>
                
            </div>
        </div>
        
    </div>
</section>


<section class="page-section-cta " id="banner-cta">
    <div class="container-fluid p-60">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2 class="mb-5">SERVICIOS</h2>
            </div>
            <div class="col-12 col-lg-6 text-center justify-content-center">
                <h3>DIAGNÓSTICO</h3>
                <p class="text-center">
                    Conozca la tecnología Inppa para
                    el diagnóstico de transferencia
                    de sus equipos
                </p>
            </div>
            <div class="col-12 col-lg-6 text-center justify-content-center">
                <h3>MANTENCIÓN</h3>
                <p class="text-center">
                    Procedimientos Inppa para
                    reparaciones con tecnología de
                    ultima generación
                </p>
            </div>
        </div>
    </div>
</section>
<section class="about px-0">
  <div class="container-fluid justify-content-center p-60">
    <div class="row">
      <div class="col-lg-6">
        <p class="text-muted">Radiadores inppa presente en el mercado desde 1959 desarrollando tecnología e innovación para la industria y transporte. Contamos con una amplia gama de productos
          estándar y productos especiales. Nuestros procedimientos y materias primas están
        certificados y nuestros procedimientos mantienen el cuidado del medio ambiente.</p>
      </div>
      <div class="col-lg-3">
        <h2>Contacto</h2>
        <ul class="list-unstyled">
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
                <i class="fas fa-map-marker-alt fa-lg self-align-center"></i> 
              </span>
              <span class="ml-2">Camino Melipilla 13460, Maipú</span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-phone fa-lg"></i>
            </span>
              <span class="ml-2">+56 2 3244 8000</span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-envelope fa-lg"></i>
            </span>
              <span class="ml-2">contacto@inppa.cl</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-3">
        <h2>Contamos con una a</h2>
        <ul class="list-unstyled">
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
                <i class="fas fa-map-marker-alt fa-lg self-align-center"></i> 
              </span>
              <span class="ml-2">Camino Melipilla 13460, Maipú</span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-phone fa-lg"></i>
            </span>
              <span class="ml-2">+56 2 3244 8000</span>
            </div>
          </li>
          <li class="my-2">
            <div class="d-flex justify-content-start align-items-center">
              <span class="span icon-list text-center">
              <i class="fas fa-envelope fa-lg"></i>
            </span>
              <span class="ml-2">contacto@inppa.cl</span>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php

get_footer();
