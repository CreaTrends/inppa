<?php
/**
 * Template Name: Front Page 
 * The template used for displaying fullwidth page content in fullwidth.php
 *
 * @package creatrends
 */
get_header(); ?>

<?php if ( !is_front_page() ) : ?>
<?php endif;?>
<section class="welcome-section p-0" id="welcome">
  <div class="container-fluid p-0 ">
    
    <div class="row no-gutters">
      <div class="col-lg-6">
        <a class="portfolio-item" href="./radiadores-para-mineria/">
          <span class="caption" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/home1.jpg');">
            <span class="caption-content caption-welcome is-yellow d-flex justify-content-between">
              <h2 class="caption-title mb-0 align-self-center">Mineria</h2>
              
              <div class="d-flex justify-content-start align-items-center ml-4 home-banner-iconbox">
                <span class="span icon-list text-center icon">
                  <i class="fas fa-phone"></i>
                </span>
                <span class="ml-2 phone-number">+56 2 3244 8000</span>
              </div>
              
            </span>
          </span>
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="./radiadores-flota/">
          <span class="caption" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/home2.JPG');">
            <span class="caption-content caption-welcome is-darkblue d-flex justify-content-between">
              <h2 class="caption-title mb-0 align-self-center">Radiadores flota </h2>
              <div class="d-flex justify-content-start align-items-center ml-4 home-banner-iconbox">
                <span class="span icon-list text-center icon">
                  <i class="fas fa-phone"></i>
                </span>
                <span class="ml-2 phone-number">+56 2 3244 8000</span>
              </div>
            </span>
          </span>
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="./servicios/">
          <span class="caption" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/home3.jpg');">
            <span class="caption-content caption-welcome is-orange d-flex justify-content-between">
              <h2 class="caption-title mb-0 align-self-center">Servicios</h2>
              <div class="d-flex justify-content-start align-items-center ml-4 home-banner-iconbox">
                <span class="span icon-list text-center icon">
                  <i class="fas fa-phone"></i>
                </span>
                <span class="ml-2 phone-number">+56 2 3244 8000</span>
              </div>
            </span>
          </span>
        </a>
      </div>
      <div class="col-lg-6">
        <a class="portfolio-item" href="./intercambiadores-de-calor">
          <span class="caption" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/images/home4.jpg');">
            <span class="caption-content caption-welcome is-blue d-flex justify-content-between">
              <h2 class="caption-title mb-0 align-self-center">Intercambiadores de Calor</h2>
              
            </span>
          </span>
        </a>
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
                <i class="fas fa-phone-square"></i>
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