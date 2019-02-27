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
                <div class="numbers-box">
                  <span class="ml-2 phone-number w-100 d-block">+5624243300</span>
                  <span class="ml-2 phone-number d-block">+56228941123 ( Stgo )</span>
                </div>
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
                <span class="ml-2 phone-number">+56228948553</span>
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
                <span class="ml-2 phone-number">+56228940846</span>
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
              <div class="d-flex justify-content-start align-items-center ml-4 home-banner-iconbox">
                <span class="span icon-list text-center icon">
                  <i class="fas fa-phone"></i>
                </span>
                <div class="numbers-box">
                  <span class="ml-2 phone-number w-100 d-block">+56227931123</span>
                  <span class="ml-2 phone-number d-block">+56228944770</span>
                </div>
                
              </div>
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
      <div class="col-12 col-lg-6 offset-md-3">
        <p class="text-muted text-center">Radiadores inppa presente en el mercado desde 1959 desarrollando tecnología e innovación para la industria y transporte. Contamos con una amplia gama de productos
          estándar y productos especiales. Nuestros procedimientos y materias primas están
        certificados y nuestros procedimientos mantienen el cuidado del medio ambiente.</p>
      </div>
      
    </div>
  </div>
</section>
<?php

get_footer();